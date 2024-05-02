@extends('layouts.main')
@section('content')
    @include('profile.partials.header')

    <center>
        <h1 class="head"><b>Computer DiagnosTech System </b> </h1>
    </center>
    <section class="vh-200 bg-img" style="background-color: #868585;">
        <div class="container h-500">
            <div class="row d-flex justify-content-center align-items-center h-500">
                <div class="col-lg-12 col-xl-8  mb-10" style="margin-top: 70px">
                    {{-- card1 --}}
                    <div class="card1 card text-black" style="border-radius: 9px; backdrop-filter: blur(6px)">
                        <div class="card-body p-md-6">
                            <div class="row justify-content-center">
                                <div class="col-md-10  ">
                                    <form id="issue-form" action="" method="POST">
                                        @csrf
                                        <div class="select-brand col-12 d-flex flex-row align-items-center mb-3">
                                            <div class="form-outline flex-fill mb-0">
                                                {{-- label --}}
                                                <label for="q2" class="txt">Brand of the device?</label>
                                                <div class="clr-line">
                                                    {{-- sellect/input --}}
                                                    <select id="q2" name="q2" class="box">
                                                        <option value="" selected disabled>Select</option>
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
                                                        <option value="BenQ">BenQ</option>
                                                        <option value="ViewSonic">ViewSonic</option>
                                                        <option value="Philips">Philips</option>
                                                        <option value="NEC">NEC</option>
                                                        <option value="EIZO">EIZO</option>
                                                        <option value="AOC">AOC</option>
                                                        <option value="MSI">MSI</option>
                                                        <option value="Gigabyte">Gigabyte</option>
                                                        <option value="Alienware">Alienware</option>
                                                        <option value="Razer">Razer</option>
                                                        <option value="HP Omen">HP Omen</option>
                                                        <option value="Sceptre">Sceptre</option>
                                                        <option value="TCL">TCL</option>
                                                        <option value="Viotek">Viotek</option>
                                                        <option value="Westinghouse">Westinghouse</option>
                                                        <option value="Pixio">Pixio</option>
                                                        <option value="Planar">Planar</option>
                                                        <option value="Hannspree">Hannspree</option>
                                                        <option value="Zotac">Zotac</option>
                                                        <option value="Hisense">Hisense</option>
                                                        <option value="Iiyama">Iiyama</option>
                                                        <option value="GeChic">GeChic</option>
                                                        <option value="Panasonic">Panasonic</option>
                                                        <option value="Sharp">Sharp</option>
                                                        <option value="Insignia">Insignia</option>
                                                        <option value="Toshiba">Toshiba</option>
                                                        <option value="Hitachi">Hitachi</option>
                                                        <option value="Gateway">Gateway</option>
                                                        <option value="XFX">XFX</option>
                                                        <option value="Overlord">Overlord</option>
                                                        <option value="Nixeus">Nixeus</option>
                                                        <option value="SpectrePro">SpectrePro</option>
                                                        <option value="QNIX">QNIX</option>
                                                        <option value="CrossOver">CrossOver</option>
                                                        <option value="Wasabi Mango">Wasabi Mango</option>
                                                        <option value="Monoprice">Monoprice</option>
                                                        <option value="Vizio">Vizio</option>
                                                        <option value="Seiki">Seiki</option>
                                                        <option value="Kogan">Kogan</option>
                                                        <option value="Element">Element</option>
                                                        <option value="Changhong">Changhong</option>
                                                        <option value="Apple">Apple</option>
                                                        <option value="Microsoft">Microsoft</option>
                                                        <option value="Intel">Intel</option>
                                                        <option value="AMD">AMD</option>
                                                        <option value="NVIDIA">NVIDIA</option>
                                                        <option value="Corsair">Corsair</option>
                                                        <option value="Kingston">Kingston</option>
                                                        <option value="Western Digital">Western Digital</option>
                                                        <option value="Seagate">Seagate</option>
                                                        <option value="SanDisk">SanDisk</option>
                                                        <option value="Crucial">Crucial</option>
                                                        <option value="MSI">MSI</option>
                                                        <option value="EVGA">EVGA</option>
                                                        <option value="Sapphire">Sapphire</option>
                                                        <option value="PowerColor">PowerColor</option>
                                                        <option value="G.Skill">G.Skill</option>
                                                        <option value="Team Group">Team Group</option>
                                                        <option value="Patriot">Patriot</option>
                                                        <option value="HyperX">HyperX</option>
                                                        <option value="NZXT">NZXT</option>
                                                        <option value="Fractal Design">Fractal Design</option>
                                                        <option value="Cooler Master">Cooler Master</option>
                                                        <option value="Thermaltake">Thermaltake</option>
                                                        <option value="Antec">Antec</option>
                                                        <option value="EVGA">EVGA</option>
                                                        <option value="SilverStone">SilverStone</option>
                                                        <option value="Phanteks">Phanteks</option>
                                                        <option value="BitFenix">BitFenix</option>
                                                        <option value="be quiet!">be quiet!</option>
                                                        <option value="Noctua">Noctua</option>
                                                        <option value="Deepcool">Deepcool</option>
                                                        <option value="ASUS ROG">ASUS ROG (Republic of Gamers)</option>
                                                        <option value="ASRock">ASRock</option>
                                                        <option value="Gigabyte Aorus">Gigabyte Aorus</option>
                                                        <option value="MSI Gaming">MSI Gaming</option>
                                                        <option value="SteelSeries">SteelSeries</option>
                                                        <option value="Logitech">Logitech</option>
                                                        <option value="Corsair">Corsair</option>
                                                        <option value="HyperX">HyperX</option>
                                                        <option value="Roccat">Roccat</option>
                                                        <option value="Turtle Beach">Turtle Beach</option>
                                                        <option value="Sennheiser">Sennheiser</option>
                                                        <option value="Audio-Technica">Audio-Technica</option>
                                                        <option value="Beyerdynamic">Beyerdynamic</option>
                                                        <option value="SteelSeries">SteelSeries</option>
                                                        <option value="Kingston HyperX">Kingston HyperX</option>
                                                        <option value="Corsair">Corsair</option>
                                                        <option value="Logitech G">Logitech G</option>
                                                        <option value="N-vision">N-vision</option>
                                                    </select>

                                                </div>
                                            </div>
                                        </div>

                                        {{-- select 1   --}}
                                        <div class="select1 col-12 d-flex flex-row align-items-center mb-3">
                                            <div class="form-outline flex-fill mb-0">
                                                {{-- label --}}
                                                <label for="issue1" class="txt">Hardware Issues:</label>
                                                <div class=" clr-line">
                                                    {{-- sellect/input --}}
                                                    <select id="issue1" name="issue1" class="box">
                                                        <option value="" selected disabled>
                                                            Select
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

                                        {{-- select 2 --}}
                                        <div class="select2 col-12 d-flex flex-row align-items-center mb-3 d-none">
                                            <div class="form-outline flex-fill mb-0">
                                                {{-- label --}}
                                                <label for="issue1" class="txt">Hardware Issues:</label>
                                                <div class=" clr-line">
                                                    {{-- sellect/input --}}
                                                    <select id="issue-select2" name="issue1" class="box">
                                                        <option value="" selected disabled>
                                                            Select
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

                                        {{-- select 3 --}}
                                        <div class="select3 col-12 d-flex flex-row align-items-center mb-3 d-none">
                                            <div class="form-outline flex-fill mb-0">
                                                {{-- label --}}
                                                <label for="issue1" class="txt">Hardware Issues:</label>
                                                <div class=" clr-line">
                                                    {{-- sellect/input --}}
                                                    <select id="issue-select3" name="issue1" class="box">
                                                        <option value="" selected disabled>
                                                            Select
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
                            <div class="row bttn g-3">
                                <div class="col-auto">
                                    <button class="animated-button" id="diagnosed">
                                        <svg viewBox="0 0 24 24" class="arr-2" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.9,16.6c-0.3,0-0.7-0.1-0.9-0.4L4.4,11c-0.5-0.5-0.5-1.3,0-1.8s1.3-0.5,1.8,0l3.7,3.7l7.8-7.8 c0.5-0.5,1.3-0.5,1.8,0s0.5,1.3,0,1.8L10.8,16.2C10.6,16.5,10.2,16.6,9.9,16.6z">
                                            </path>
                                        </svg>
                                        <span class="text">Diagnosed</span>
                                        <span class="circle"></span>
                                        <svg viewBox="0 0 24 24" class="arr-1" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.9,16.6c-0.3,0-0.7-0.1-0.9-0.4L4.4,11c-0.5-0.5-0.5-1.3,0-1.8s1.3-0.5,1.8,0l3.7,3.7l7.8-7.8c0.5-0.5,1.3-0.5,1.8,0s0.5,1.3,0,1.8L10.8,16.2C10.6,16.5,10.2,16.6,9.9,16.6z">
                                            </path>
                                        </svg>
                                    </button>
                                </div>

                                <div class="col-auto">

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
                                <div class="col-auto">
                                    <button class="animated-button d-none" id="next-button2">
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

                                <div class="col-auto col">
                                    <button class="animated-button d-none" id="submit">
                                        <svg viewBox="0 0 24 24" class="arr-2" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.9,16.6c-0.3,0-0.7-0.1-0.9-0.4L4.4,11c-0.5-0.5-0.5-1.3,0-1.8s1.3-0.5,1.8,0l3.7,3.7l7.8-7.8 c0.5-0.5,1.3-0.5,1.8,0s0.5,1.3,0,1.8L10.8,16.2C10.6,16.5,10.2,16.6,9.9,16.6z">
                                            </path>
                                        </svg>
                                        <span class="text">Submit</span>
                                        <span class="circle"></span>
                                        <svg viewBox="0 0 24 24" class="arr-1" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.9,16.6c-0.3,0-0.7-0.1-0.9-0.4L4.4,11c-0.5-0.5-0.5-1.3,0-1.8s1.3-0.5,1.8,0l3.7,3.7l7.8-7.8sc0.5-0.5,1.3-0.5,1.8,0s0.5,1.3,0,1.8L10.8,16.2C10.6,16.5,10.2,16.6,9.9,16.6z">
                                            </path>
                                        </svg>
                                    </button>
                                </div>
                            </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    {{-- <script type="module" src="{{ asset('js/dashboard.js') }}"></script> --}}
    <script>
        let issueForm;
        $("#diagnosed, #submit").on("click", async (e) => {
            e.preventDefault()
            issueForm = $("form#issue-form")[0]
            let brandType = issueForm[1].value
            let issue1 = issueForm[2].value
            let issue2 = issueForm[3].value
            let issue3 = issueForm[4].value

            if (!issue1) {
                Swal.fire({
                    icon: "error",
                    title: "You forgot to select",
                    text: "Select Issue",
                    showDenyButton: false,
                    confirmButtonText: 'OK',
                    // denyButtonText: `Don 't save`
                }).then((okay) => {
                    console.log(okay)
                    // location.href = "/"
                });
                return;
            }

            let hints = ""
            let deviceId = 0
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
                    Swal.fire({
                        icon: "success",
                        title: `Issues`,
                        html: `${hints}`,
                        // showDenyButton: true,
                        confirmButtonText: 'View Details',
                        // denyButtonText: `Return to dashboard`
                    }).then((okay) => {
                        if (okay.isConfirmed) {
                            location.href = `/diagnosing-result/${deviceId}`
                        }
                    });
                }
            });

            const jsonData = {
                brandType: brandType,
                issues: [
                    issue1.toLowerCase(),
                    issue2.toLowerCase(),
                    issue3.toLowerCase(),
                ],
            }
            try {
                const res = await axios.post("/diagnosing", jsonData)
                console.log(res)
                hints = res.data.hints
                let list = ""
                let increment = 0
                hints.map(data => {
                    increment += 1
                    list += `
                        <p>${increment}. ${data}</p>
                    `
                })
                deviceId = res.data.device.id
                hints = list
                issueForm[1].value = ""
                issueForm[2].value = ""
                issueForm[3].value = ""
                issueForm[4].value = ""
                $("#next-button1, .select1, .select-brand").removeClass("d-none")
                $("#next-button2, #submit,1 .select2, .select3").addClass("d-none")
            } catch (error) {
                console.error(error)
            }
        })

        $("button#next-button1").on("click", (e) => {
            e.preventDefault()
            issueForm = $("form#issue-form")[0]
            let brandType = issueForm[1].value
            let issue1 = issueForm[2].value
            if (issue1) {
                
                $("#next-button1, .select1, .select-brand").addClass("d-none")
                $("#next-button2, .select2").removeClass("d-none")
                removeOptionIfSelected("issue-select2", issueForm[2].value)
            } else {
                Swal.fire({
                    icon: "error",
                    title: "You forgot to select",
                    text: "Select Issue",
                    // showDenyButton: true,
                    confirmButtonText: 'OK',
                    // denyButtonText: `Don 't save`
                }).then((okay) => {
                    console.log(okay)
                    // location.href = "/"
                });
                return
            }
        })

        $("button#next-button2").on("click", (e) => {
            e.preventDefault()
            let issue2 = issueForm[3].value
            if (issue2) {
                removeOptionIfSelected("issue-select3", issueForm[2].value)
                removeOptionIfSelected("issue-select3", issueForm[3].value)
                $("#next-button2, #diagnosed, .select2").addClass("d-none")
                $("#submit, .select3").removeClass("d-none")
            } else {
                Swal.fire({
                    icon: "error",
                    title: "You forgot to select",
                    text: "Select Issue",
                    // showDenyButton: true,
                    confirmButtonText: 'OK',
                    // denyButtonText: `Don 't save`
                })
                return
            }
        })

        function removeOptionIfSelected(selectId, optionValue) {
            $(`#${selectId} option[value="${optionValue}"]`).remove();
        }
    </script>
@endsection
