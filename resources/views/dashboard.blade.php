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
                                                    <select id="brand" name="brand" class="box">
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
                                                        <option value="bluescreen">
                                                            Blue Screen
                                                        </option>
                                                        <option value="overheating">
                                                            Overheating
                                                        </option>
                                                        <option value="error messages">
                                                            Error messages
                                                        </option>
                                                        <option value="drive misuse">
                                                            Drive Misuse
                                                        </option>
                                                        <option value="no power">
                                                            No Power
                                                        </option>
                                                        <option value="no display">
                                                            No Display
                                                        </option>
                                                        <option value="no sound">
                                                            No Sound
                                                        </option>
                                                        <option value="fan spins too fast">
                                                            Fan Spins Too Fast
                                                        </option>
                                                        <option value="psu smoke">
                                                            PSU Smoke
                                                        </option>
                                                        <option value="system crashes">
                                                            System Crashes
                                                        </option>
                                                        <option value="slow performance">
                                                            Slow Performance
                                                        </option>
                                                        <option value="noise">
                                                            Noise
                                                        </option>
                                                        <option value="random crashes">
                                                            Random Crashes
                                                        </option>
                                                        <option value="black screen">
                                                            Black Screen
                                                        </option>
                                                        <option value="color fade">
                                                            Color Fade
                                                        </option>
                                                        <option value="blurry">
                                                            Blurry
                                                        </option>
                                                        <option value="flickering screen">
                                                            Flickering Screen
                                                        </option>
                                                        <option value="light or dark patches">
                                                            Light or Dark Patches
                                                        </option>
                                                        <option value="freeze">
                                                            Freeze
                                                        </option>
                                                        <option value="corrupted files">
                                                            Corrupted Files
                                                        </option>
                                                        <option value="outdated drivers">
                                                            Outdated Drivers
                                                        </option>
                                                        <option value="bios settings lost">
                                                            BIOS Settings Lost
                                                        </option>
                                                        <option value="time-of-day clock stopped error message">
                                                            Time-of-Day Clock Stopped Error Message
                                                        </option>
                                                        <option value="hard drive/fan fail spin">
                                                            Hard Drive/Fan Fail Spin
                                                        </option>
                                                        <option value="insufficient power supply to gpu">
                                                            Insufficient Power Supply to GPU
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                        {{-- end --}}
                        <div class="row justify-content-center" id="diagnosed">
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
                            </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#recommendation-modal">
        Launch demo modal
    </button> --}}

    <div class="modal fade" id="recommendation-modal" tabindex="-1" aria-labelledby="recommendation-modal-label"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="recommendation-modal-label">RECOMMENDATION</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal"><a
                            class='text-decoration-none text-white' href="{{ route('device') }}">View my
                            devices</a></button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    {{-- <script type="module" src="{{ asset('js/dashboard.js') }}"></script> --}}
    <script>
        let issueForm;
        $("#diagnosed").on("click", async (e) => {
            e.preventDefault()
            let brandType = $('#brand').val()
            let issue1 = $('#issue1').val()

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
                        confirmButtonText: 'View Recommendation',
                        buttonsStyling: false,
                        customClass: {
                            confirmButton: 'btn btn-primary',
                            cancelButton: 'btn btn-secondary ms-2'
                        },
                        preConfirm: () => {
                            $('#recommendation-modal').modal('show');
                        }
                    })
                }
            });

            const jsonData = {
                brandType: brandType,
                issues: [issue1.toLowerCase()],
            }
            try {
                const res = await axios.post("/diagnosing", jsonData)
                hints = res.data.hints
                let list = ''
                let showRecommendation = '';
                let increment = 0
                hints.map((data) => {
                    let components = data[0]
                    let link = data[1]
                    let recommends = data[2]
                    let steps = 0
                    list +=
                        `${increment+=1}. ${components}---><a class='' title='${link}' href='${link}' target='_blank'>Click References</a> <br/>`
                    showRecommendation +=
                        `<h3 class='text-decoration-underline '><strong>For ${components} Recommendation</strong></h3>`
                    recommends.map(recommend => {
                        showRecommendation +=
                            `<p><strong>Step ${steps+=1}</strong>. ${recommend}</p>`
                    })
                    showRecommendation += '<br/><br/>'
                })
                console.log(showRecommendation)
                hints = list
                $('.modal-body').html(showRecommendation);
                $('#issue1').val('')
            } catch (error) {
                console.error(error)
            }
        })
    </script>
@endsection
