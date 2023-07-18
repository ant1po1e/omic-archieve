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
    <link rel="stylesheet" href="css/style.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Apolitz | {{ $title }}</title>
</head>

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
