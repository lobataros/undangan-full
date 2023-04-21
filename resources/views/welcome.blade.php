<!doctype html>
<html lang="en" data-bs-theme="light">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $guest['name'] ?? 'Undangan' }} - Pernikahan Ira & Dimas</title>
    <meta name="title" content="Undangan Pernikahan Ira & Dimas">
    <meta name="description" content="Website Undangan Elektronik Pernikahan Ira & Dimas">
    <meta property="og:title" content="{{ $guest['name'] }} - Undangan Spesial" />
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="article">
    <meta property="og:image" content="images/link-preview.jpg" />
    <meta property="og:image:width" content="600">
    <meta property="og:image:height" content="600">
    <meta property="og:image:alt" content="Ira & Dimas">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:description" content="Undangan Pernikahan Ira & Dimas" />
    <meta property="article:published_time" content="2023-05-18T00:16:14+07:00">
    <meta property="article:modified_time" content="2023-05-18T15:32:38+07:00">
    <meta property="article:section" content="Undangan Digital">
    <link rel="icon" type="image/png" sizes="192x192" href="images/icon-192x192.png">
    <meta name="theme-color" content="#212529">
    <meta name="color-scheme" content="dark">
    <link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin="anonymous">
    <link rel="preconnect" href="https://undangan-api-gules.vercel.app" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin="anonymous">
    <link rel="preconnect" href="https://gstatic.com" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/all.min.css" integrity="sha256-Z1K5uhUaJXA7Ll0XrZ/0JhX4lAtZFpT6jkKrEDT0drU=" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" integrity="sha256-GqiEX9BuR1rv5zPU5Vs2qS/NSHl1BJyBcjQYJ6ycwD4=" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Sacramento&display=swap">
    <link rel="stylesheet" href="app.css">
</head>

<body data-email="user@example.com" data-password="12345678" data-url="{{ url('/') }}">
    <nav class="navbar navbar-light bg-light navbar-expand fixed-bottom rounded-top-4 p-0" id="navbar-example2">
        <ul class="navbar-nav nav-justified w-100 align-items-center">
            <li class="nav-item">
                <a class="nav-link" href="#home">
                    <i class="fas fa-home"></i>
                    <span class="d-block" style="font-size: 0.7rem;">Home</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#mempelai">
                    <i class="fa-solid fa-user-group"></i>
                    <span class="d-block" style="font-size: 0.7rem;">Mempelai</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#tanggal">
                    <i class="fa-solid fa-calendar-check"></i>
                    <span class="d-block" style="font-size: 0.7rem;">Tanggal</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#ucapan">
                    <i class="fa-solid fa-comments"></i>
                    <span class="d-block" style="font-size: 0.7rem;">Ucapan</span>
                </a>
            </li>
        </ul>
    </nav>

    <main class="scrollspy-example" data-bs-spy="scroll" data-bs-target="#navbar-example2"
        data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" tabindex="0">

        <section class="container-fluid" id="home">
            <div class="text-center py-4">
                <h2 class="my-4">Undangan Pernikahan</h2>
                <div class="py-4">
                    <div class="cropper border border-3 border-light shadow mx-auto">
                        <img src="images/bg.png" alt="bg">
                    </div>
                </div>
                <h1 class="font-estetik my-4" style="font-size: 3rem;">Ira & Dimas</h1>
                <h4>Kamis, 18 Mei 2023</h4>
                <a class="btn btn-outline-dark btn-sm shadow rounded-pill px-3 my-1 mb-5" target="_blank"
                    href="http://www.google.com/calendar/event?action=TEMPLATE&dates=20230518T010000Z%2F20230518T030000Z&text=%F0%9F%92%8D%20The%20Wedding%20of%20Ira%20and%20Dimas&location=Masjid%20At-Taqwa%20KPAD%2C%20Jl.%20Pak%20Gatot%20Raya%20H%20No.27%2C%20Gegerkalong%2C%20Kec.%20Sukasari%2C%20Kota%20Bandung%2C%20Jawa%20Barat%2040153%2C%20Indonesia&details=%F0%9F%92%8D%20The%20Wedding%20of%20Ira%20and%20Dimas%0A%F0%9F%97%93%EF%B8%8F%2018%20Mei%202023%0A%F0%9F%97%BA%EF%B8%8F%20Masjid%20At-Taqwa%20KPAD%2C%20Gegerkalong%2C%20Kec.%20Sukasari%2C%20Kota%20Bandung%2C%20Jawa%20Barat%2040153%0A%F0%9F%95%91%2008.00%20-%2010.00%20WIB">
                    <i class="fa-solid fa-calendar-check me-2"></i>Save The Date</a>
            </div>
        </section>

        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#feefcb" fill-opacity="1"
                d="M0,160L48,144C96,128,192,96,288,106.7C384,117,480,171,576,165.3C672,160,768,96,864,96C960,96,1056,160,1152,154.7C1248,149,1344,75,1392,37.3L1440,0L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
            </path>
        </svg>

        <section style="background-color: #feefcb !important; margin-top: -5px; margin-bottom: -5px;" id="mempelai">
            <div class="text-center">
                <h1 class="font-estetik py-4 px-2">Assalamualaikum Warahmatullahi Wabarakatuh</h1>

                <p class="pb-3 px-3">
                    Tanpa mengurangi rasa hormat. Kami mengundang Bapak/Ibu/Saudara/i serta kerabat
                    sekalian untuk menghadiri acara pernikahan kami:
                </p>

                <div class="overflow-x-hidden">
                    <div data-aos="fade-right" data-aos-duration="2000">
                        <div class="cropper border border-3 border-light shadow my-4 mx-auto">
                            <img src="images/cowo.png" alt="bg">
                        </div>
                        <h1 class="font-estetik" style="font-size: 3rem;">Dimas Hayat Pratama</h1>
                        <h5 class="mt-3 mb-0">Putra dari pasangan</h5>
                        <p class="mb-0">Bapak Tukiyat & Ibu Hana</p>
                    </div>

                    <h1 class="font-estetik my-4" style="font-size: 4rem;">&</h1>

                    <div data-aos="fade-left" data-aos-duration="2000">
                        <div class="cropper border border-3 border-light shadow my-4 mx-auto">
                            <img src="images/cewe.png" alt="bg">
                        </div>
                        <h1 class="font-estetik" style="font-size: 3rem;">Ira Triyana</h1>
                        <h5 class="mt-3 mb-0">Putri dari pasangan</h5>
                        <p class="mb-0">Bapak Oyon (alm.) & Ibu Dede (alm.)</p>
                    </div>
                </div>
            </div>
        </section>

        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#feefcb" fill-opacity="1"
                d="M0,192L40,181.3C80,171,160,149,240,149.3C320,149,400,171,480,165.3C560,160,640,128,720,128C800,128,880,160,960,186.7C1040,213,1120,235,1200,218.7C1280,203,1360,149,1400,122.7L1440,96L1440,0L1400,0C1360,0,1280,0,1200,0C1120,0,1040,0,960,0C880,0,800,0,720,0C640,0,560,0,480,0C400,0,320,0,240,0C160,0,80,0,40,0L0,0Z">
            </path>
        </svg>

        <div class="container">
            <div class="text-center">
                <p style="font-size: 0.9rem;" class="px-2" data-aos="fade-up" data-aos-duration="1500">
                    Dan di antara tanda-tanda (kebesaran)-Nya ialah Dia menciptakan pasangan-pasangan untukmu dari
                    jenismu sendiri, agar kamu cenderung dan merasa tenteram kepadanya, dan Dia menjadikan di antaramu
                    rasa kasih dan sayang. Sungguh, pada yang demikian itu benar-benar terdapat tanda-tanda
                    (kebesaran Allah) bagi kaum yang berpikir.
                </p>
                <span class="mb-0" data-aos="fade-up"><strong>QS. Ar-Rum Ayat 21</strong></span>
            </div>
        </div>

        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#feefcb" fill-opacity="1"
                d="M0,96L30,106.7C60,117,120,139,180,154.7C240,171,300,181,360,186.7C420,192,480,192,540,181.3C600,171,660,149,720,154.7C780,160,840,192,900,208C960,224,1020,224,1080,208C1140,192,1200,160,1260,138.7C1320,117,1380,107,1410,101.3L1440,96L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z">
            </path>
        </svg>

        <section style="background-color: #feefcb !important; margin-top: -5px; margin-bottom: -5px;" id="tanggal">
            <div class="container">
                <div class="text-center">
                    <h1 class="font-estetik py-3" style="font-size: 2rem;">Waktu Menuju Acara</h1>
                    <div class="border rounded-pill shadow py-2 px-4 mx-2 mb-4">
                        <div class="row justify-content-center" data-waktu="2023-05-18 08:00:00" id="tampilan-waktu">
                            <div class="col-3 p-1">
                                <h2 class="d-inline m-0 p-0" id="hari">0</h2><small
                                    class="ms-1 me-0 my-0 p-0 d-inline">Hari</small>
                            </div>
                            <div class="col-3 p-1">
                                <h2 class="d-inline m-0 p-0" id="jam">0</h2><small
                                    class="ms-1 me-0 my-0 p-0 d-inline">Jam</small>
                            </div>
                            <div class="col-3 p-1">
                                <h2 class="d-inline m-0 p-0" id="menit">0</h2><small
                                    class="ms-1 me-0 my-0 p-0 d-inline">Menit</small>
                            </div>
                            <div class="col-3 p-1">
                                <h2 class="d-inline m-0 p-0" id="detik">0</h2><small
                                    class="ms-1 me-0 my-0 p-0 d-inline">Detik</small>
                            </div>
                        </div>
                    </div>

                    <p style="font-size: 0.9rem;" class="mt-4 py-2">
                        Dengan memohon rahmat dan ridho Allah Subhanahu Wa Ta'ala, insyaAllah kami akan menyelenggarakan
                        acara :
                    </p>

                    <div class="overflow-hidden">
                        <div class="py-2" data-aos="fade-left" data-aos-duration="1500">
                            <h1 class="font-estetik" style="font-size: 2rem;">Akad</h1>
                            <p class="mb-0">Pukul 08.00 WIB - 09.00</p>
                        </div>
                        <div class="pb-2" data-aos="fade-up" data-aos-duration="1500">
                            <p class="mb-3 mx-1" style="font-size: 0.9rem;">
                                Masjid At-Taqwa KPAD Gegerkalong
                            </p>
                            <a href="https://goo.gl/maps/vBD4Lf7xvBwp2ZL8A" target="_blank"
                                class="btn btn-outline-dark btn-sm rounded-pill shadow-sm mb-2 px-3">
                                <i class="fa-solid fa-map-location-dot me-2"></i>Lihat Google Maps
                            </a>
                            <p class="mb-0 mt-1 mx-1" style="font-size: 0.9rem;">
                                Jl. Pak Gatot Raya H No.27, Gegerkalong, Kec. Sukasari, Kota Bandung, Jawa Barat 40153
                            </p>
                        </div>

                        <div class="py-2" data-aos="fade-right" data-aos-duration="1500">
                            <h1 class="font-estetik" style="font-size: 2rem;">Syukuran</h1>
                            <p>Pukul 10.00 WIB - Selesai</p>
                        </div>
                        <div class="py-2" data-aos="fade-up" data-aos-duration="1500">
                            <a href="https://goo.gl/maps/gVwMDMySzLpHU48q6" target="_blank"
                                class="btn btn-outline-dark btn-sm rounded-pill shadow-sm mb-2 px-3">
                                <i class="fa-solid fa-map-location-dot me-2"></i>Lihat Google Maps
                            </a>
                            <p class="mb-0 mt-1 mx-1" style="font-size: 0.9rem;">
                                Jl. Gegerkalong Girang No.2, RT.04/RW.01, Gegerkalong, Kec. Sukasari, Kota Bandung, Jawa Barat 40153
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#feefcb" fill-opacity="1"
                d="M0,96L30,106.7C60,117,120,139,180,154.7C240,171,300,181,360,186.7C420,192,480,192,540,181.3C600,171,660,149,720,154.7C780,160,840,192,900,208C960,224,1020,224,1080,208C1140,192,1200,160,1260,138.7C1320,117,1380,107,1410,101.3L1440,96L1440,0L1410,0C1380,0,1320,0,1260,0C1200,0,1140,0,1080,0C1020,0,960,0,900,0C840,0,780,0,720,0C660,0,600,0,540,0C480,0,420,0,360,0C300,0,240,0,180,0C120,0,60,0,30,0L0,0Z">
            </path>
        </svg>

        <div class="container">
            <div class="py-4">
                <div class="text-center">
                    <h1 class="font-estetik mt-0 mb-3" style="font-size: 3rem;">Love Gift</h1>
                    <p class="mb-1" style="font-size: 0.9rem;">
                        Tanpa mengurangi rasa hormat, bagi anda yang ingin memberikan tanda kasih untuk kami,
                        dapat melalui :
                    </p>

                    <div class="overflow-x-hidden">
                        <div class="row justify-content-center">
                            <div class="col-12 card-body border rounded-3 shadow p-3 m-3" style="max-width: 25rem;"
                                data-aos="fade-down" data-aos-duration="1500">
                                <img src="images/qris.jpeg"
                                    class="img-fluid rounded rounded-3" width="150" alt="bni">
                                <p class="card-text mt-3 mb-0" style="font-size: 0.9rem;">
                                    QRIS
                                </p>
                                <p class="card-text" style="font-size: 0.9rem;">
                                    a.n DIMASHPT
                                </p>
                            </div>

                            <div class="col-12 card-body border rounded-3 shadow p-3 m-3" style="max-width: 25rem;"
                                data-aos="fade-down" data-aos-duration="1500">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Bank_Central_Asia.svg/440px-Bank_Central_Asia.svg.png"
                                    class="img-fluid rounded rounded-3" width="150" alt="bri">
                                <p class="card-text mt-3 mb-0" style="font-size: 0.9rem;">
                                    No. Rekening <i id="rekening">3460646897</i>
                                </p>
                                <p class="card-text" style="font-size: 0.9rem;">
                                    a.n Dimas Hayat Pratama
                                </p>
                                <button class="btn btn-light btn-sm" onclick="salin(this)">Salin
                                    No. Rekening</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="m-0 p-0" id="ucapan">
            <div class="container">
                <div class="border rounded-3 p-3">
                    <h1 class="font-estetik text-center mb-3" style="font-size: 3rem;">Ucapan & Doa</h1>
                    <input type="hidden" id="idbalasan">
                    <div class="mb-1" id="balasan"></div>
                    <div class="mb-3">
                        <label for="formnama" class="form-label">Nama</label>
                        <input type="text" class="form-control shadow-sm" id="formnama" placeholder="Isikan Nama Anda" value="{{ $guest['name'] }}">
                        <input disabled type="hidden" class="form-control shadow-sm" id="guestId" value="{{ $guest['id'] }}">
                    </div>
                    <div class="mb-3">
                        <label for="hadiran" class="form-label" id="labelhadir">Kehadiran</label>
                        <select class="form-select shadow-sm" aria-label="selectkehadiran" id="hadiran">
                            <option value="0" selected>Konfirmasi Kehadiran</option>
                            <option value="1">Hadir</option>
                            <option value="2">Berhalangan</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="formpesan" class="form-label">Ucapan & Doa</label>
                        <textarea class="form-control shadow-sm" id="formpesan" rows="4" placeholder="Tulis Ucapan & Doa"></textarea>
                    </div>
                    <div class="d-flex">
                        <button class="flex-fill btn btn-danger btn-sm rounded shadow m-1" style="display: none;"
                            onclick="resetForm()" id="batal">
                            Batal<i class="fa-solid fa-xmark ms-1"></i>
                        </button>
                        <button class="flex-fill btn btn-primary btn-sm rounded shadow m-1" style="display: none;"
                            onclick="kirimBalasan()" id="kirimbalasan">
                            Kirim<i class="fa-solid fa-paper-plane ms-1"></i>
                        </button>
                    </div>
                    <div class="d-grid mb-2">
                        <button class="btn btn-primary btn-sm rounded shadow" onclick="kirim()" id="kirim">
                            Kirim<i class="fa-solid fa-paper-plane ms-1"></i>
                        </button>
                    </div>
                </div>
                <div class="rounded-3 mt-4 mb-2">
                    <div id="daftarucapan"></div>
                </div>
            </div>
        </section>

        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#feefcb" fill-opacity="1"
                d="M0,224L34.3,234.7C68.6,245,137,267,206,266.7C274.3,267,343,245,411,234.7C480,224,549,224,617,213.3C685.7,203,754,181,823,197.3C891.4,213,960,267,1029,266.7C1097.1,267,1166,213,1234,192C1302.9,171,1371,181,1406,186.7L1440,192L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z">
            </path>
        </svg>

        <div style="background-color: #feefcb !important; margin-top: -5px; padding-bottom: 4rem;">
            <div class="container">
                <div class="text-center">
                    <p style="font-size: 0.9rem;" class="pt-2 pb-1 px-2" data-aos="fade-up" data-aos-duration="1500">
                        Merupakan suatu kehormatan dan kebahagiaan bagi kami apabila, Bapak / Ibu / Saudara / i.
                        berkenan hadir untuk memberikan do'a restunya kami ucapkan terimakasih.
                    </p>
                    <h1 class="font-estetik" data-aos="fade-up" data-aos-duration="2000">Wassalamualaikum Warahmatullahi
                        Wabarakatuh</h1>
                    <hr class="mt-3 mb-2">
                    <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                        <div class="col-auto">
                            <small class="text-dark">
                                Build with<i class="fa-solid fa-heart mx-1"></i>Dewanakl
                            </small>
                        </div>
                        <div class="col-auto">
                            <small>
                                <i class="fa-brands fa-github me-1"></i><a target="_blank"
                                    href="https://github.com/dewanakl/undangan">dewanakl</a>
                            </small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <button type="button" id="tombol-musik" style="display: none;" class="btn btn-light btn-sm rounded-circle btn-music"
        onclick="play(this)" data-status="true" data-url="music/sound.mp3">
        <i class="fa-solid fa-circle-pause"></i>
    </button>

    <div class="loading" id="loading"></div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-fullscreen m-0">
            <div class="modal-content">
                <div class="d-flex justify-content-center align-items-center" style="height: 100vh !important;">
                    <div class="text-center">
                        @if($guest['name'])
                            <h2 class="my-4">Hi, you're invited!</h2>
                        @endif
                        <h1 class="font-estetik mb-4">The Wedding Of</h1>
                        <div class="cropper border border-3 border-light shadow mb-4 mx-auto">
                            <img src="images/bg.png" alt="bg">
                        </div>
                        <h1 class="font-estetik my-4" style="font-size: 2.5rem;">Ira & Dimas</h1>
                        @if ($guest['name'])
                            <p class="mt-0 mb-1 mx-0 p-0 text-dark">Kepada Yth Bapak/Ibu/Saudara/i</p>
                            <div id="namatamu">{{ $guest['name'] }}</div>
                            <button type="button" class="btn btn-dark shadow rounded-3 mt-4" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="bukaInfo()">
                                <i class="fa-solid fa-eye me-2"></i>Lihat Informasi
                            </button>
                        @else
                            <div id="namatamu">Sorry, invitation is invalid</div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="infoModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-fullscreen m-0">
            <div class="modal-content">
                <div class="d-flex justify-content-center align-items-center" style="height: 100vh !important;">
                    <div class="text-left">
                        <h1 class="font-estetik mb-4 text-center">💐 Informasi 💐</h1>
                        <div class="px-5">
                            Dear, {{ $guest['name'] }} <br>
                            Mohon maaf jika dalam acara pernikahan ini, kami tidak mengadakan makanan mewah, panggung megah, ataupun pesta yang meriah. <br><br>
                            Tanpa mengurangi rasa hormat, jika berkenan, hadirilah walimah kecil kami. Semoga hubungan kita tetap hangat, serta berkah bagi kami dan para tamu undangan.<br><br>
                            <div class="text-end">
                                With love,<br>
                                <h1 class="font-estetik mt-2">ID</h1>
                            </div>
                        </div>
                        <div class="text-center">
                            @if ($guest['name'])
                                <button type="button" class="btn btn-dark shadow rounded-3 mt-4" data-bs-toggle="modal" data-bs-target="#infoModal" onclick="buka()">
                                    <i class="fa-solid fa-envelope-open me-2"></i>Buka Undangan
                                </button>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js" integrity="sha256-pQBbLkFHcP1cy0C8IhoSdxlm0CtcH5yJ2ki9jjgR03c=" crossorigin="anonymous"></script>
    <script src="app.js"></script>
</body>

</html>