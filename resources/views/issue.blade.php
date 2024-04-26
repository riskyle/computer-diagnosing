@extends('layouts.main')
@section('content')
    @include('profile.partials.header')
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add-problems">
        Add Problems
    </button>

    <!-- Modal -->
    <div class="modal fade" id="add-problems" tabindex="-1" aria-labelledby="addProblemsLabel" aria-hidden="true">
        <div class="modal-dialog d-flex justify-content-center align-items-center" style="max-width: 700px;">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="  modal-title fs-5" id="addProblemsLabel" style="font-size: 30px"> Diagnose</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <form id="issue-form2" action="" method="POST">
                        @csrf

                        {{-- <label for="">What is the computer do you use ?</label>
                        <div>
                            <input class="boxs" type="text" value="Selected: {{ $device->device_type }}" disabled
                                readonly>
                        </div> --}}


                        <label for="">What is the current brand you use?</label>
                        <div class="txt">
                            <input class="boxs" type="text" value="Selected: {{ $device->brand }}" disabled readonly>
                        </div>



                        <label for="">Serial Number</label>
                        <div class="txt">
                            <input class="boxs" type="text" value="Inputed: {{ $device->serial_number }}" disabled
                                readonly>
                            <input class="boxs" type="hidden" id="serial-number" value="{{ $device->serial_number }}"
                                disabled readonly>
                        </div>

                        {{-- label --}}
                        <label for="issue1">Hardware Issue:</label>
                        <div class="clr-line">
                            {{-- sellect/input --}}
                            <select id="issue1" name="issue1" class="boxs">
                                <option value="" selected disabled>Select</option>
                                <option value="">None</option>
                                <option value="turn off">Turn Off</option>
                                <option value="bluescreen">Blue Screen</option>
                                <option value="overheating">Overheating</option>
                                <option value="unusual noise">Unusual Noise</option>
                                <option value="performance degradation">Performance Degradation
                                </option>
                                <option value="system crashes">System Crashes</option>
                                <option value="data corruption">Data Corruption</option>
                                <option value="slow performance">Slow Performance</option>
                                <option value="pointer drift or inaccuracy">Pointer Drift or
                                    Inaccuracy</option>
                                <option value="physical damage">Physical Damage</option>
                                <option value="failure to power on">Failure to Power On</option>
                                <option value="intermittent boot failures">Intermittent Boot
                                    Failures</option>
                                <option value="overheating or excessive noise">Overheating or
                                    Excessive Noise</option>
                                <option value="burning smell or smoke">Burning Smell or Smoke
                                </option>
                                <option value="intermittent power supply">Intermittent Power Supply
                                </option>
                                <option value="peripheral malfunctions">Peripheral Malfunctions
                                </option>
                                <option value="random crashes or freezes">Random Crashes or Freezes
                                </option>
                                <option value="application errors and instability">Application
                                    Errors and Instability</option>
                                <option value="system boot failure">System Boot Failure</option>
                                <option value="instruction execution errors">Instruction Execution
                                    Errors</option>
                                <option value="system instability">System Instability</option>
                                <option value="artifacts and visual glitches">Artifacts and Visual
                                    Glitches</option>
                                <option value="reduced graphics performance">Reduced Graphics
                                    Performance</option>
                            </select>
                        </div>

                        {{-- label --}}
                        <label for="issue2">Keyboard Issues:</label>
                        <div class=" clr-line">
                            {{-- sellect/input --}}
                            <select id="issue2" name="issue2" class="boxs">
                                <option value="" selected disabled>Select</option>
                                <option value="">None</option>
                                <option value="unresponsive buttons">Unresponsive Buttons</option>
                                <option value="sticky or stuck keys">Sticky or Stuck Keys</option>
                                <option value="non-responsive keys">Non-Responsive Keys</option>
                            </select>
                        </div>

                        {{-- label --}}
                        <label for="issue3">Mouse/Pointer Issues:</label>
                        <div class=" clr-line">
                            {{-- sellect/input --}}
                            <select id="issue3" name="issue3" class="boxs">
                                <option value="" selected disabled>Select</option>
                                <option value="">None</option>
                                <option value="stuttering movement">Stuttering Movement</option>
                                <option value="pointer drift or inaccuracy">Pointer Drift or
                                    Inaccuracy</option>
                                <option value="intermittent operation">Intermittent Operation
                                </option>
                            </select>
                        </div>



                        {{-- label --}}
                        <label for="issue4">Display Issues:</label>
                        <div class=" clr-line">
                            {{-- sellect/input --}}
                            <select id="issue4" name="issue4" class="boxs">
                                <option value="" selected disabled>Select</option>
                                <option value="">None</option>
                                <option value="dead pixels">Dead Pixels</option>
                                <option value="screen flickering">Screen Flickering</option>
                                <option value="blurry or distorted images">Blurry or Distorted
                                    Images</option>
                                <option value="no display or blank screen">No Display or Blank
                                    Screen</option>
                                <option value="cracked or damaged screen">Cracked or Damaged Screen
                                </option>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" id="diagnose-btn" class="btn btn-primary">Diagnose</button>
                </div>
            </div>
        </div>
    </div>

    <div class="card card-outline rounded-0 card-navy mt-3 bg-light ">
        <div class="wrapper rounded">
            <span class="border-top border-black "></span>

            <main class="cd__main">
                <table id="issues" class=" display table table-hover table-striped table-bordered ">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Hardware Issue</th>
                            <th scope="col">Keyboard Issue</th>
                            <th scope="col">Mouse/Pointer Issue</th>
                            <th scope="col">Display Issue</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody id="issues-tbody">
                    </tbody>
                </table>
            </main>
        </div>
    </div>
    <script>
        const issueForm2 = $("form#issue-form2")[0]
        const _token = $("meta[name='csrf-token']")[0].content
        const serialNum = $("#serial-number").val()
        var issuesTbl = $('#issues').DataTable({
            processing: true,
            serverSide: true,
            ajax: `/get-issues/?d_id={{ request('d_id') }}`,
            columns: [{
                    data: null,
                    render: function(data, type, full, meta) {
                        // Use meta.row to get the row index, and add 1 to start from 1
                        return meta.row + 1;
                    },
                    name: 'issue_id',
                },
                {
                    data: "ans_one",
                },
                {
                    data: "ans_two",
                },
                {
                    data: "ans_three",
                },
                {
                    data: "ans_four",
                },
                {
                    data: "status",
                },
                {
                    data: "action",
                },
            ],
            rowCallback: function(row, data) {
                $(row).on('click', function() {
                    const issue_id = data.issue_id;
                    location.href = `/diagnosing-result/${issue_id}`
                })
            }
        })

        $("button#diagnose-btn").on("click", async (e) => {
            if (issueForm2[1].value != "" || issueForm2[2].value != "" || issueForm2[3].value != "" ||
                issueForm2[4].value != "" || issueForm2[5].value != "") {
                let timeInterval
                let issue_id
                let results = "";
                Swal.fire({
                    title: 'Analysing the issues',
                    html: 'Please wait...',
                    timer: 2000,
                    allowEscapeKey: false,
                    allowOutsideClick: false,
                    didOpen: () => {
                        Swal.showLoading()
                        timerInterval = setInterval(100);
                    },
                    willClose: () => {
                        clearInterval(timerInterval);

                        issuesTbl.draw()

                        Swal.fire({
                            icon: "success",
                            title: "Here is the result",
                            html: `${results}`,
                            showDenyButton: true,
                            confirmButtonText: 'Go to issues details',
                            denyButtonText: `List of Issues`
                        }).then((okay) => {
                            if (okay.isConfirmed) {
                                location.href = `/diagnosing-result/${issue_id}`
                            }
                        });
                    }
                });

                const issues = {
                    issue1: issueForm2[4].value,
                    issue2: issueForm2[5].value,
                    issue3: issueForm2[6].value,
                    issue4: issueForm2[7].value,
                    issue5: "",
                }

                try {
                    const res = await axios.post(`/diagnosing/?s_num=${serialNum}`, issues)

                    var hints = res.data.hints

                    var list = ""

                    hints.map((data) => {
                        list += `<li>${data}</li>`
                    })

                    issue_id = res.data.issue_id

                    results = list

                } catch (error) {
                    console.error(error)
                }
            } else {
                Swal.fire({
                    icon: "error",
                    title: "You forgot to select",
                    text: "Select atleast one issue",
                    // showDenyButton: true,
                    confirmButtonText: 'OK',
                    // denyButtonText: `Don't save`
                }).then((okay) => {
                    console.log(okay)
                    // location.href = "/"
                });
            }
        })
    </script>
@endsection
