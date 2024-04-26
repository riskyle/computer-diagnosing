<?php

namespace App\Http\Controllers;

use App\Models\Device;
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
            ->addColumn("serial_number", fn ($row) => $row->serial_number)
            ->addColumn("device_type", fn ($row) => $row->device_type)
            ->addColumn("brand", fn ($row) => $row->brand)
            ->addColumn("action", fn ($row) => "<button class='btn btn-outline-primary'><a class='text-decoration-none' href='{$this->goToIssues($row)}'>Go to details</a></button>")
            ->rawColumns(["serial_number", "device_type", "brand", 'action'])
            ->toJson();
    }
    protected function goToIssues(object $device)
    {
        return route('issue', $device->serial_number) . "/?d_id={$device->device_id}";
    }
}
