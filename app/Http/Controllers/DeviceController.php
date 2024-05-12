<?php

namespace App\Http\Controllers;

use App\Models\Device;
use Carbon\Carbon;
use Illuminate\Support\Facades\Response;

class DeviceController extends Controller
{
    public function devices(Device $device)
    {
        $devices = $device->query()->where("user_id", auth()->user()->id)->get();
        return view("device", compact("devices"));
    }
    public function getDevices(Device $device)
    {
        $devices = $device->latest()->where("user_id", auth()->user()->id)->get();
        return Response::json([ 
            "devices" => $devices,
        ]);
    }
    protected function goToDiagnostic($id)
    {
        return route('diagnostic', $id);
    }

    protected function map($arrayIssues)
    {
        $issues = "";
        foreach ($arrayIssues as $issue) {
            if ($issue == null) {
                break;
            }
            $issues .=  "-" . ucwords($issue) . " </br>";
        }
        return $issues;
    }

    protected function dateFormat($date)
    {
        if (!$date) {
            return;
        }
        return Carbon::createFromFormat('Y-m-d', $date)->format('F j, Y');
    }
}
