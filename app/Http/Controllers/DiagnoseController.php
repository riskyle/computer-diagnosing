<?php

namespace App\Http\Controllers;

use App\Models\Device;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Json;

class DiagnoseController extends Controller
{
    public function diagnosing(Request $request, Device $device, User $user)
    {
        $symptoms = $request->issues;

        $hardware_issues = config('components.hardwares');

        $hints = [];
        foreach ($hardware_issues as $component => $data) {
            if (array_intersect($symptoms, $data['issues'])) {
                $hints[] = [$component, $data['link'], $data['steps']];
            }
        }

        $user = $user->where("id", auth()->user()->id)->first();

        $user->device()->create([
            "brand" => $request->brandType,
            "symptoms" =>  json_encode($request->issues),
            "hardware_issues" =>  json_encode($hints),
            "resolved_at" => null,
        ]);

        return Response::json(["hints" =>  $hints]);
    }
    public function diagnosticViewResult($id, Device $devices)
    {
        $device = $devices->where("device_id", $id)->first();
        $hardwareIssues = Json::decode($device->hardware_issues);
        return view("diagnosing-result", compact("device", "hardwareIssues"));
    }
    public function resolved($id, Device $device,  Carbon $carbon)
    {
        $device->where("device_id", $id)->update(['resolved_at' => $carbon->now()]);
        return Response::json(['satus' => "updated"]);
    }
}
