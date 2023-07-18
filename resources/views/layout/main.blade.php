<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Single" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.15.1/devicon.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Apolitz | {{ $title }}</title>
</head>
<!-- My CSS -->
<style>
    .jumbotron {
        padding-top: 6rem;
        background: url(../images/home-img.jpg) no-repeat;
        background-size: cover;
        background-position: center;
        color: rgba(255, 255, 255, 0.9);
        min-height: 95vh;
    }


    .display-6,
    .display-4 {
        text-shadow: 5px 2px 5px#000;
    }


    #about {
        background-color: #000;
        color: rgba(255, 255, 255, 0.9);
    }


    #member {
        background-color: #000;
        color: rgba(255, 255, 255, 0.9);
    }


    #single {
        background-color: #000;
        color: rgba(255, 255, 255, 0.9);
    }


    #album {
        background-color: #000;
        color: rgba(255, 255, 255, 0.9);
    }


    #contact {
        background-color: #000;
        color: rgba(255, 255, 255, 0.9);
    }


    section {
        padding-top: 6rem;
    }


    .nav-link {
        position: relative;
        color: rgb(255, 255, 255);
        text-decoration: none;
        font-weight: 500;
        margin-left: 8px;
    }


    .nav-link:after {
        content: '';
        position: absolute;
        left: 0;
        bottom: -6px;
        width: 100%;
        height: 3px;
        background: white;
        border-radius: 5px;
        transform: scaleX(0);
        transition: transform .5s;
    }


    .nav-link:hover::after {
        transform: scaleX(1);
    }


    #submit:hover {
        transform: scale(1.1);
        transition: all 0.1s ease 0s;
    }


    .btn:hover {
        transform: scale(1.08);
        transition: all 0.1s ease 0s;
        background-color: #d3b186;
    }


    .btn-try {
        background-color: #d3ad7f;
    }


    .btn-send {
        background-color: #d3ad7f;
    }


    .acolor {
        color: #d3ad7f;
    }


    .bg-content {
        background-color: #181821;
        padding-top: 3rem;
        padding-bottom: 3rem;
    }


    .card {
        background-color: #000;
        color: #fff;
    }


    #abt-img {
        width: 100%;
    }


    #abt-logo {
        width: 8vh;
    }


    #ftr:hover {
        transform: scale(1.08);
        transition: all 0.1s ease 0s;
    }


    .share {
        font-size: x-large;
        padding-bottom: 1rem;
    }


    footer {
        background-color: #000;
    }


    #brand {
        font-weight: 500;
    }


    .preloader {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 9999;
        background: #000000;
        opacity: 0.5;
    }


    .loading {
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        font-size: large;
    }

</style>
<body>


    <!-- Navbar -->
    <nav class="navbar border-bottom navbar-expand-lg bg-black navbar-dark shadow fixed-top">
        <div class="container">
            <a class="navbar-brand" href="https://apolitz.vercel.app"><img id="abt-logo"
                    src="images/logo.png">&nbsp;&nbsp;<b>Apolitz</b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ ($title === "Home") ? 'active' : '' }}" aria-current="page"
                            href="/"><b>Home</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ ($title === "About") ? 'active' : '' }} " href="/about"><b>About</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ ($title === "Member") ? 'active' : '' }}" href="/member"><b>Member</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ ($title === "Singles") ? 'active' : '' }}"
                            href="/single"><b>Singles</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ ($title === "Album") ? 'active' : '' }}" href="/album"><b>Albums</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ ($title === "Contact") ? 'active' : '' }}"
                            href="/contact"><b>Contact</b></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <b>Others</b>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark">
                            <li><a class="dropdown-item" href="cv.pdf" target="blank"><i
                                        class="bi bi-file-earmark-person"></i>&nbsp;
                                    Download CV</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navber-END -->


    <!-- Container -->
    <section class="container">
        @yield('container')
    </section>
    <!-- Container-END -->


    <!-- Footer -->
    <footer class="text-white text-center pb-3 pt-4 border-top">
        <p class="share">
            <a class="bi bi-youtube text-light" href="https://www.youtube.com/@ant1po1e" target="blank"></a>&nbsp;&nbsp;
            <a class="bi bi-twitter text-light" href="https://www.twitter.com/apolantipole"
                target="blank"></a>&nbsp;&nbsp;
            <a class="bi bi-instagram text-light" href="https://www.instagram.com/_ant1po1e"
                target="blank"></a>&nbsp;&nbsp;
            <a class="bi bi-github text-light" href="https://github.com/ant1po1e" target="blank"></a>
        </p>
        <p>Copyright &copy; 2022 <a href="https://ant1po1e.vercel.app" style="text-decoration:none;"
                class="text-blue fw-bold" target="blank">Ant1po1e</a>. All rights reserved.</p>
    </footer>
    <!-- Footer-END -->


    <!-- Bootstrap CSS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>


    <!-- Java Form Script -->
    <script>
        const scriptURL =
            "https://script.google.com/macros/s/AKfycbx0eCzzKaKtZ2gIwprnJ-5xtkpoM0kqcLv5uoVVUVZZMgIsJ6Fn6YHJ5OzUIOcpIcJV/exec";
        const form = document.forms["Ant1po1e-contact-form"];
        const btnSend = document.querySelector(".btn-send");
        const btnLoading = document.querySelector(".btn-loading");
        const myAlert = document.querySelector(".alert");

        form.addEventListener("submit", (e) => {
            e.preventDefault();
            btnLoading.classList.toggle("d-none");
            btnSend.classList.toggle("d-none");
            fetch(scriptURL, {
                    method: "POST",
                    body: new FormData(form),
                })
                .then((response) => {
                    btnLoading.classList.toggle("d-none");
                    btnSend.classList.toggle("d-none");
                    myAlert.classList.toggle("d-none");
                    form.reset();
                    console.log("Success!", response);
                })
                .catch((error) => console.error("Error!", error.message));
        });

    </script>


    <!-- AOS Script -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();

    </script>


    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" />
</body>

</html>
