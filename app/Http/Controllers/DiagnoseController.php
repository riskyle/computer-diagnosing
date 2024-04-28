<?php

namespace App\Http\Controllers;

use App\Models\Device;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Carbon\Carbon;

class DiagnoseController extends Controller
{
    public function diagnosing(Request $request, Device $device, User $user)
    {
        $symptoms = $request->issues;

        $hardware_issues = [
            'CPU' => ['turn off', 'bluescreen', 'overheating', 'unusual noise', 'performance degradation'],
            'HDD/SSD' => ['unusual noise', 'bluescreen', 'system crashes', 'data corruption', 'slow performance'],
            'MOUSE' => ['pointer drift or inaccuracy', 'unresponsive buttons', 'stuttering movement'],
            'KEYBOARD' => ['non-responsive keys', 'sticky or stuck keys', 'intermittent connectivity', 'missing or worn keycaps', 'physical damage'],
            'MOTHERBOARD' => ['failure to power on', 'intermittent boot failures', 'peripheral malfunction', 'system instability or crashes', 'visual or audible signs of damage'],
            'POWERSUPPLY' => ['failure to power on', 'intermittent power supply', 'overheating or excessive noise', 'burning smell or smoke', 'peripheral malfunctions'],
            'MONITOR' => ['dead pixels', 'screen flickering', 'blurry or distorted images', 'no display or blank screen', 'cracked or damaged screen'],
            'RAM' => ['random crashes or freezes', 'blue screen of death (bsod) errors', 'application errors and instability', 'system boot failure', 'data corruption or loss'],
            'CONTROL UNIT' => ['instruction execution errors', 'performance degradation', 'system instability', 'data corruption', 'boot failures'],
            'GPU' => ['artifacts and visual glitches', 'texture and rendering errors', 'screen freezing or blackouts', 'reduced graphics performance', 'data corruption or loss'],
            'VGA' => ['no display output', 'flickering or intermittent display', 'visual artifacts or distortion', 'poor image quality', 'interference or signal loss'],
            'COOLING FAN' => ['overheating', 'loud noise or grinding sounds', 'intermittent operation', 'decreased airflow', 'system shutdowns or errors'],
        ];

        $hints = [];
        foreach ($hardware_issues as $component => $issues) {
            if (array_intersect($symptoms, $issues)) {
                $hints[] = $component;
            }
        }

        $user = $user->where("id", auth()->user()->id)->first();
        $device = $user->device()->create([
            "brand" => $request->brandType,
            "symptoms" =>  json_encode($request->issues),
            "hardware_issues" =>  json_encode($hints),
            "resolved_at" => null,
        ]);

        return Response::json(["hints" =>  $hints, "device" => $device]);
    }
    public function diagnosticViewResult($id, Device $devices)
    {
        $device = $devices->where("device_id", $id)->first();
        return view("diagnosing-result", compact("device"));
    }
    public function resolved($id, Device $device,  Carbon $carbon)
    {
        $device->where("device_id", $id)->update(['resolved_at' => $carbon->now()]);
        return Response::json(['satus' => "updated"]);
    }
}
