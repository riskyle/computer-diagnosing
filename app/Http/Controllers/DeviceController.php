<?php

namespace App\Http\Controllers;

use App\Models\Device;
use Carbon\Carbon;
use Yajra\DataTables\DataTables;

class DeviceController extends Controller
{
    public function devices(Device $device)
    {
        $devices = $device->query()->where("user_id", auth()->user()->id)->get();
        return view("device", compact("devices"));
    }
    public function getDevices(Device $device, DataTables $dataTables)
    {
        $devices = $device->query()->where("user_id", auth()->user()->id);
        return $dataTables->eloquent($devices)
            ->addColumn("brand", fn ($row) => $row->brand)
            ->addColumn("issues", fn ($row) => $this->map(json_decode($row->symptoms)))
            ->addColumn("dateOfDiagnosed", fn ($row) => $row->created_at->format("F d, Y"))
            ->addColumn("dateOfResolved", fn ($row) => $this->dateFormat($row->resolved_at) ?? "Unresolved")
            ->addColumn("action", fn ($row) => "<button class='btn btn-outline-primary'><a class='text-decoration-none' href='{$this->goToDiagnostic($row->device_id)}'>Go to details</a></button>")
            ->rawColumns(["brand", "issues", "dateOfDiagnosed", "dateOfResolved", "action"])
            ->toJson();
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
            $issues .=  "-".ucwords($issue) . " </br>";
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
