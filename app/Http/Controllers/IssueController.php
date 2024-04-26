<?php

namespace App\Http\Controllers;

use App\Models\Device;
use App\Models\Issue;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Response;

class IssueController extends Controller
{
    public function __construct(private Issue $issue)
    {
        $this->issue = $issue;
    }
    public function viewIssues(string $serial_number, Device $d): View
    {
        $d_id = request("d_id");
        $device = $d->where("device_id", $d_id)->where("serial_number", $serial_number)->first();
        return view("issue", compact(["device"]));
    }
    public function getIssues(DataTables $dataTables): JsonResponse
    {
        $d_id = request("d_id");
        $issues = $this->issue->query()->where("device_id", $d_id)->with(["device"]);
        return $dataTables->eloquent($issues)
            ->addColumn("ans_one", fn ($row) => $this->checkVal($row->ans_one))
            ->addColumn("ans_two", fn ($row) => $this->checkVal($row->ans_two))
            ->addColumn("ans_three", fn ($row) => $this->checkVal($row->ans_three))
            ->addColumn("ans_four", fn ($row) => $this->checkVal($row->ans_four))
            ->addColumn("ans_five", fn ($row) => $this->checkVal($row->ans_five))
            ->addColumn("status", fn ($row) => !$row->status ? "Unresolved" : "Resolved")
            ->addColumn("action", fn ($row) => "<button class='btn btn-outline-primary'><a class='text-decoration-none' href='{$this->goToDetails($row)}'>Go to details</a></button>")
            ->toJson();
    }
    public function issues(): JsonResponse
    {
        $d_id = request("d_id");
        $issues = $this->issue->latest()->where("device_id", $d_id)->with(["device"])->get();
        return Response::json(["issues" => $issues]);
    }
    public function checkVal(string $value)
    {
        return $value != "" ? $value : "None";
    }
    protected function goToDetails(object $issue)
    {
        return route('diagnostic', $issue->issue_id);
    }
}
