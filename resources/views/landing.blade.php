<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="apple-touch-icon" href="apple-touch-icon.png" />
    <link rel="shortcut icon" href="{{asset('assets/favicon.png')}}">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css" />
    <link rel="stylesheet" href="assets/css/fontAwesome.css" />
    <link rel="stylesheet" href="assets/css/light-box.css" />
    <link rel="stylesheet" href="{{ asset('assets/css/templatemo-style.css') }}">
    <link rel="stylesheet" href="assets/css/card.css" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <link href="https://fonts.googleapis.com/css?family=Kanit:100,200,300,400,500,600,700,800,900" rel="stylesheet" />

    <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>

<body>
    @include('sweetalert::alert')
    <nav>
        <div class="logo">
            <a href="index.html">Buku <em>Tamu</em></a>
        </div>
        <div class="container-button">
            <a class="btn btn-lg" href="/admin">
                <span>ADMIN</span>
            </a>
        </div>
    </nav>

    <div id="video-container">
        <div class="video-overlay"></div>
        <div class="video-content">
            <div class="inner">
                <h1>
                    Selamat Datang di <em>Dinas Arsip dan Perpustakaan Kota Semarang</em>
                </h1>
                <p>Silahkan Daftarkan diri Anda</p>
                <p>Sesuai dengan kategori di bawah ini</p>
                <div class="scroll-icon">
                    <a class="scrollTo" data-scrollTo="portfolio" href="#"><img src="assets/img/scroll-icon.png"
                            alt=""></a>
                </div>
            </div>
        </div>
        <video autoplay="" loop="" muted>
            <source src="PROFIL DINAS ARSIP DAN PERPUSTAKAAN KOTA SEMARANG.mp4" type="video/mp4" />
        </video>
    </div>

    <div class="full-screen-portfolio" id="portfolio">
        <div class="container-fluid">
            <div class="col-md-4 col-sm-6">
                <div class="portfolio-item">
                    <a href="/member-pameran">
                        <div class="thumb">
                            <div class="hover-effect">
                                <div class="hover-content">
                                    <h1>Pameran</h1>
                                    <p>Pendaftaran tamu untuk event Pameran</p>
                                </div>
                            </div>
                            <div class="image">
                                <img src="assets/img/pameran.jpg">
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            
            <div class="col-md-4 col-sm-6">
                <div class="portfolio-item">
                    <a href="{{ route('nonmember.create') }}">
                        <div class="thumb">
                            <div class="hover-effect">
                                <div class="hover-content">
                                    <h1>Perpustakaan Keliling</em></h1>   
                                    <p>Pendaftaran tamu untuk event Pameran</p>
                                </div>
                            </div>
                            <div class="image w-75">
                                <img src="assets/img/perpusling.png">
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="portfolio-item">
                    <a href="/rombo-metaverse" >
                        <div class="thumb">
                            <div class="hover-effect">
                                <div class="hover-content">
                                    <h1>Metaverse</em></h1>
                                    <p>Pendaftaran tamu untuk event Metaverse</p>
                                </div>
                            </div>
                            <div class="image">
                                <img src="{{ asset('assets/img/metaverse.png') }}">
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="container-fluid">
            <div class="col-md-12">
                <p>Copyright &copy; 2024 DINAS ARSIP DAN PERPUSTAKAAN KOTA SEMARANG</p>
            </div>
        </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        window.jQuery ||
            document.write(
                '<script src="assets/js/vendor/jquery-1.11.2.min.js"><\/script>'
            );
    </script>

    <script src="assets/js/vendor/bootstrap.min.js"></script>

    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>

</body>

</html>
