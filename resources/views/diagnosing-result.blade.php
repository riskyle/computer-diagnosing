@extends('layouts.main')
@section('content')
    @include('profile.partials.header')
    <center>
        <h1 class="head"><b>Computer DiagnosTech System </b> </h1>
    </center>

    <section class="vh-200 bg-img" style="background-color: #868585;">
        <div class="container h-500">
            <div class="row d-flex justify-content-center align-items-center h-500">
                <div class="col-lg-8 col-xl-6 mt-5 mb-10">
                    <div class="card text-black" style="border-radius: 9px; backdrop-filter: blur(6px)">
                        
                        <div class="card-body p-md-6">
                            <div class="row justify-content-center">
                                <div class="col-md-10  ">

                                    <form method="POST" action="">
                                        @csrf
                                        <input id="device-id" type="hidden" value="{{ $device->device_id }}" />
                                        @if ($device->resolved_at)
                                            <label for="q2" class="txt">This issue was solved on</label>
                                            <div class="txt">
                                                <input class="form-control" type="text"
                                                    value="{{ Carbon\Carbon::createFromFormat('Y-m-d', $device->resolved_at)->format('F j, Y') }}"
                                                    disabled readonly>
                                            </div>
                                        @endif
                                        <label for="q2" class="txt">What is the current brand you use?</label>
                                        <div class="txt">
                                            <input class="form-control" type="text" value="{{ $device->brand }}" disabled
                                                readonly>
                                        </div>

                                        <label for="q2" class="txt">Diagnosed on?</label>
                                        <div class="txt">
                                            <input class="form-control" type="text"
                                                value="{{ $device->created_at->format('F j, Y') }}" disabled readonly>
                                        </div>
                                        <label for="issue5" class="txt ">Issues</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" disabled readonly>
@foreach (json_decode($device->symptoms) as $issue)
@if ($issue == null)
@break
@endif
-{{ ucwords($issue) }}
@endforeach
                                        </textarea>

                                        <label for="issue5" class="txt ">Hardware Problems</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" disabled readonly>
@foreach (json_decode($device->hardware_issues) as $hardware)
-{{ ucwords($hardware) }}
@endforeach
                                        </textarea>
                                        @if (!$device->resolved_at)
                                            <div id="change-if-resolved">

                                                <button id="is-resolve" class="animated-button mt-5 ">
                                                    <svg viewBox="0 0 24 24" class="arr-2"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z">
                                                        </path>
                                                    </svg>
                                                    <span class="text">Press this button if the issue is resolved</span>
                                                    <span class="circle"></span>
                                                    <svg viewBox="0 0 24 24" class="arr-1"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z">
                                                        </path>
                                                    </svg>
                                                </button>
                                            </div>
                                        @endif

                                    </form>

                                </div>



                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        $("#back-2").on("click", () => history.back())
        $("#is-resolve").on("click", async (e) => {
            e.preventDefault()
            let id = $("#device-id").val()
            try {
                const response = await axios.get(`/resolved/${id}`)
                console.log(response)
                if (response.status === 200) {
                    $("#change-if-resolved").html("<p class='result'>This issue was solved</p>")
                }
            } catch (error) {
                console.error(error)
            }
        })
    </script>
@endsection
