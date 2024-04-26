<?php

namespace App\Http\Controllers;

use App\Models\Device;
use App\Models\DiagnosticResult;
use App\Models\Issue;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;
use Carbon\Carbon;

class DiagnoseController extends Controller
{
    public function diagnosing(Request $request, Device $device, Issue $issue, DiagnosticResult $diagnosticResult, User $user)
    {
        $symptoms = [
            strtolower($request->issue1),
            strtolower($request->issue2),
            strtolower($request->issue3),
            strtolower($request->issue4),
            strtolower($request->issue5)
        ];

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

        $hint = [];
        foreach ($hardware_issues as $component => $issues) {
            if (array_intersect($symptoms, $issues)) {
                $hint[] = $component;
            }
        }

        // $user = $user->where("id", auth()->user()->id)->first();
        $user = $user->find(auth()->user()->id);

        if (!request("s_num")) {
            $user->device()->create([
                "serial_number" => $request->q3,
                "device_type" => $request->q1,
                "brand" => $request->q2,
            ]);
        }

        $device = $device->where("user_id", auth()->user()->id)->where("serial_number", $request->q3 ?? request("s_num"))->first();
        $get = $device->issue()->create([
            "ans_one" => ucwords($request->issue1),
            "ans_two" => ucwords($request->issue2),
            "ans_three" => ucwords($request->issue3),
            "ans_four" => ucwords($request->issue4),
            "ans_five" => ucwords($request->issue5),
            "status" => 0,
        ]);

        $issue = $issue->where("device_id", $device->device_id)->first();
        $user->diagnosticResult()->create([
            "issue_id" => $get->id,
            "device_id" => $device->device_id,
            "diagnosis_details" => json_encode($hint),
        ]);

        return Response::json(["hints" => $hint, "issue_id" => $get->id]);
    }
    public function diagnosingResult($id, DiagnosticResult $diagnosticResult, Carbon $carbon)
    {
        $dr = $diagnosticResult->where("issue_id", $id)->where("user_id", auth()->user()->id)->first();
        return view("diagnosing-result", compact("dr"));
    }
    public function resolveTheIssue($issueId, Issue $issue, Request $request, Carbon $carbon)
    {
        if ($request->resolved !== 1) {
            return Response::json(["Error!"]);
        }
        $issue->where("issue_id", $issueId)->update(["status" => $request->resolved, "resolved_at" => $carbon->now()]);
        return Response::json(["resolved" => "The issue was resolved"]);
    }
}
