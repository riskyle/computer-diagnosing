@extends('layouts.main')
@section('content')
    @include('profile.partials.header')

    <center>
        <h1 class="head"><b>Computer DiagnosTech System </b> </h1>
    </center>
    <section class="vh-200 bg-img" style="background-color: #868585;">
        <div class="container h-500">
            <div class="row d-flex justify-content-center align-items-center h-500">
                <div class="col-lg-12 col-xl-8 mt-5 mb-10">
                    <div class="card text-black" style="border-radius: 9px; backdrop-filter: blur(6px)">

                        <div class="card-body p-md-6">
                            <div class="row justify-content-center">
                                <div class="col-md-10  ">
                                    <form id="issue-form" action="" method="POST">
                                        @csrf
                                        <div class=" col-12 d-flex flex-row align-items-center mb-3">
                                            <div class="form-outline flex-fill mb-0">
                                                {{-- label --}}
                                                <label for="q2" class="txt">Brand of the device?</label>
                                                <div class=" clr-line">
                                                    {{-- sellect/input --}}
                                                    <select id="q2" name="q2" class="box">
                                                        <option value="Acer">Acer</option>
                                                        <option value="Asus">Asus</option>
                                                        <option value="Dell">Dell</option>
                                                        <option value="Hp">Hp</option>
                                                        <option value="Razer">Razer</option>
                                                        <option value="Fujitsu">Fujitsu</option>
                                                        <option value="lLenovo">Lenovo</option>
                                                        <option value="Toshiba">Toshiba</option>
                                                        <option value="LG">LG</option>
                                                        <option value="Sony">Sony</option>
                                                        <option value="Samsung">Samsung</option>
                                                    </select>

                                                </div>
                                            </div>
                                        </div>

                                        <div class=" col-12 d-flex flex-row align-items-center mb-3">
                                            <div class="form-outline flex-fill mb-0">
                                                {{-- label --}}
                                                <label for="issue1" class="txt">Hardware Issues:</label>
                                                <div class=" clr-line">
                                                    {{-- sellect/input --}}
                                                    <select id="issue1" name="issue1" class="box">
                                                        <option value="" selected disabled>
                                                            Select
                                                        </option>
                                                        <option value="">
                                                            None
                                                        </option>
                                                        <option value="turn off">
                                                            Turn Off
                                                        </option>
                                                        <option value="bluescreen">
                                                            Blue Screen
                                                        </option>
                                                        <option value="overheating">
                                                            Overheating
                                                        </option>
                                                        <option value="unusual noise">
                                                            Unusual Noise
                                                        </option>
                                                        <option value="performance degradation">
                                                            Performance Degradation
                                                        </option>
                                                        <option value="system crashes">
                                                            System Crashes
                                                        </option>
                                                        <option value="data corruption">
                                                            Data Corruption
                                                        </option>
                                                        <option value="slow performance">
                                                            Slow Performance
                                                        </option>
                                                        <option value="pointer drift or inaccuracy">
                                                            Pointer Drift or Inaccuracy
                                                        </option>
                                                        <option value="physical damage">
                                                            Physical Damage
                                                        </option>
                                                        <option value="failure to power on">
                                                            Failure to Power On
                                                        </option>
                                                        <option value="intermittent boot failures">
                                                            Intermittent Boot Failures
                                                        </option>
                                                        <option value="overheating or excessive noise">Overheating or
                                                            Excessive Noise
                                                        </option>
                                                        <option value="burning smell or smoke">
                                                            Burning Smell or Smoke
                                                        </option>
                                                        <option value="intermittent power supply">
                                                            Intermittent Power Supply
                                                        </option>
                                                        <option value="peripheral malfunctions">
                                                            Peripheral Malfunctions
                                                        </option>
                                                        <option value="random crashes or freezes">
                                                            Random Crashes or Freezes
                                                        </option>
                                                        <option value="application errors and instability">
                                                            Application Errors and Instability
                                                        </option>
                                                        <option value="system boot failure">
                                                            System Boot Failure
                                                        </option>
                                                        <option value="instruction execution errors">
                                                            Instruction Execution Errors
                                                        </option>
                                                        <option value="system instability">
                                                            System Instability
                                                        </option>
                                                        <option value="artifacts and visual glitches">
                                                            Artifacts and Visual Glitches
                                                        </option>
                                                        <option value="reduced graphics performance">
                                                            Reduced Graphics Performance
                                                        </option>
                                                        <option value="dead pixels">
                                                            Dead Pixels
                                                        </option>
                                                        <option value="screen flickering">
                                                            Screen Flickering
                                                        </option>
                                                        <option value="blurry or distorted images">
                                                            Blurry or Distorted Images
                                                        </option>
                                                        <option value="no display or blank screen">
                                                            No Display or Blank Screen
                                                        </option>
                                                        <option value="cracked or damaged screen">
                                                            Cracked or Damaged Screen
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                        {{-- end --}}

                        <div class="row justify-content-center">
                            <div class="col-md-10 col-lg-6  ">
                                {{-- button  --}}
                                <div id="button">
                                    <button class="animated-button" id="next-button1">
                                        <svg viewBox="0 0 24 24" class="arr-2" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z">
                                            </path>
                                        </svg>
                                        <span class="text">Next</span>
                                        <span class="circle"></span>
                                        <svg viewBox="0 0 24 24" class="arr-1" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z">
                                            </path>
                                        </svg>
                                    </button>
                                </div>
                                {{-- end of button --}}
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        const issueForm = document.getElementById("issue-form")
        const _token = document.querySelector("meta[name='csrf-token']")

        $("#next-button1").on("click", (e) => {
            e.preventDefault()
            let html1 = `<div class=" col-12 d-flex flex-row align-items-center mb-3">
                                            <div class="form-outline flex-fill mb-0">
                                                {{-- label --}}
                                                <label for="issue1" class="txt">Hardware Issues:</label>
                                                <div class=" clr-line">
                                                    {{-- sellect/input --}}
                                                    <select id="issue1" name="issue1" class="box">
                                                        <option value="" selected disabled>
                                                            Select
                                                        </option>
                                                        <option value="">
                                                            None
                                                        </option>
                                                        <option value="turn off">
                                                            Turn Off
                                                        </option>
                                                        <option value="bluescreen">
                                                            Blue Screen
                                                        </option>
                                                        <option value="overheating">
                                                            Overheating
                                                        </option>
                                                        <option value="unusual noise">
                                                            Unusual Noise
                                                        </option>
                                                        <option value="performance degradation">
                                                            Performance Degradation
                                                        </option>
                                                        <option value="system crashes">
                                                            System Crashes
                                                        </option>
                                                        <option value="data corruption">
                                                            Data Corruption
                                                        </option>
                                                        <option value="slow performance">
                                                            Slow Performance
                                                        </option>
                                                        <option value="pointer drift or inaccuracy">
                                                            Pointer Drift or Inaccuracy
                                                        </option>
                                                        <option value="physical damage">
                                                            Physical Damage
                                                        </option>
                                                        <option value="failure to power on">
                                                            Failure to Power On
                                                        </option>
                                                        <option value="intermittent boot failures">
                                                            Intermittent Boot Failures
                                                        </option>
                                                        <option value="overheating or excessive noise">Overheating or
                                                            Excessive Noise
                                                        </option>
                                                        <option value="burning smell or smoke">
                                                            Burning Smell or Smoke
                                                        </option>
                                                        <option value="intermittent power supply">
                                                            Intermittent Power Supply
                                                        </option>
                                                        <option value="peripheral malfunctions">
                                                            Peripheral Malfunctions
                                                        </option>
                                                        <option value="random crashes or freezes">
                                                            Random Crashes or Freezes
                                                        </option>
                                                        <option value="application errors and instability">
                                                            Application Errors and Instability
                                                        </option>
                                                        <option value="system boot failure">
                                                            System Boot Failure
                                                        </option>
                                                        <option value="instruction execution errors">
                                                            Instruction Execution Errors
                                                        </option>
                                                        <option value="system instability">
                                                            System Instability
                                                        </option>
                                                        <option value="artifacts and visual glitches">
                                                            Artifacts and Visual Glitches
                                                        </option>
                                                        <option value="reduced graphics performance">
                                                            Reduced Graphics Performance
                                                        </option>
                                                        <option value="dead pixels">
                                                            Dead Pixels
                                                        </option>
                                                        <option value="screen flickering">
                                                            Screen Flickering
                                                        </option>
                                                        <option value="blurry or distorted images">
                                                            Blurry or Distorted Images
                                                        </option>
                                                        <option value="no display or blank screen">
                                                            No Display or Blank Screen
                                                        </option>
                                                        <option value="cracked or damaged screen">
                                                            Cracked or Damaged Screen
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>`
            $("#issue-form").html(html1)

            let button = `
                                    <button class="animated-button" id="next-button2">
                                        <svg viewBox="0 0 24 24" class="arr-2" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z">
                                            </path>
                                        </svg>
                                        <span class="text">Next</span>
                                        <span class="circle"></span>
                                        <svg viewBox="0 0 24 24" class="arr-1" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z">
                                            </path>
                                        </svg>
                                    </button>
                        `
            $("#button").html(button)
        })

        $("button#next-button2").on("click", async (e) => {
            console.log(e.target)
        })

        // $("#").on("submit", async (e) => {
        //     e.preventDefault()
        //     if (issueForm[3].value != "" || issueForm[4].value != "" || issueForm[5]
        //         .value != "" || issueForm[6].value != "") {
        //         let timeInterval;
        //         let issue_id;
        //         let results;
        //         Swal.fire({
        //             title: 'Analysing the issues',
        //             html: 'Please wait...',
        //             timer: 2000,
        //             allowEscapeKey: false,
        //             allowOutsideClick: false,
        //             didOpen: () => {
        //                 Swal.showLoading()
        //                 timerInterval = setInterval(100);
        //             },
        //             willClose: () => {
        //                 clearInterval(timerInterval);
        //                 Swal.fire({
        //                     icon: "success",
        //                     title: "Here is the result",
        //                     html: `${results}`,
        //                     showDenyButton: true,
        //                     confirmButtonText: 'Go to issues details',
        //                     denyButtonText: `Return to dashboard`
        //                 }).then((okay) => {
        //                     if (okay.isConfirmed) {
        //                         location.href = `/diagnosing-result/${issue_id}`
        //                     }
        //                 });
        //             }
        //         });
        //         const issues = {
        //             // q1: issueForm[1].value,
        //             q1: "Laptop",
        //             q2: issueForm[1].value,
        //             q3: issueForm[2].value,
        //             issue1: issueForm[3].value,
        //             issue2: issueForm[4].value,
        //             issue3: issueForm[5].value,
        //             issue4: issueForm[6].value,
        //             issue5: issueForm[7].value,
        //         }
        //         try {
        //             const res = await axios.post("/diagnosing", issues)
        //             console.log(res)
        //             hints = res.data.hints
        //             var list = ""
        //             hints.map((data) => {
        //                 list += `<li>${data}</li>`
        //             })
        //             results = list
        //             issue_id = res.data.issue_id
        //         } catch (error) {
        //             console.error(error)
        //         }
        //     } else {
        //         Swal.fire({
        //             icon: "error",
        //             title: "You forgot to select",
        //             text: "Select atleast one issue",
        //             // showDenyButton: true,
        //             confirmButtonText: 'OK',
        //             // denyButtonText: `Don 't save`
        //         }).then((okay) => {
        //             console.log(okay)
        //             // location.href = "/"
        //         });
        //     }
        // })
    </script>
@endsection
