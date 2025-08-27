<!DOCTYPE html>
<html class="scroll-smooth" lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>{{ $title ?? config('app.name') }}</title>
    <meta name="description"
        content="Ilvarire technologies delivers cutting-edge web and mobile app development services, coupled with advanced cybersecurity solutions to safeguard your digital presence.">
    <meta name="keywords"
        content="web development, app development, mobile apps, software development, UI/UX design, cybersecurity, ethical hacking, penetration testing, digital security, full-stack development, frontend, backend, secure coding">
    <meta name="author" content="Ilvarire Technologies">
    <meta name="robots" content="index, follow">

    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.ilvariretechnologies.com/">
    <meta property="og:title" content="Ilvarire Technologies – Web & App Development | Cybersecurity Solutions">
    <meta property="og:description"
        content="Custom software and mobile apps with robust cybersecurity strategies. Build and protect your digital future with Ilvarire Technologies.">
    <meta property="og:image" content="https://www.ilvarire.com/assets/images/og-image.jpg">


    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="https://www.ilvariretechnologies.com/">
    <meta name="twitter:title" content="Ilvarire Technologies – Web & App Development | Cybersecurity Solutions">
    <meta name="twitter:description"
        content="From innovative web apps to enterprise-grade security, Ilvarire Technologies covers all your digital needs.">
    <meta name="twitter:image" content="https://www.ilvariretechnologies.com/assets/images/og-image.jpg">

    <link rel="canonical" href="https://www.ilvariretechnologies.com/">

    <link href="{{ url('/assets/images/logo.svg')}}" rel="shortcut icon">

    <link href="{{ url('/assets/plugins/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
    <link href="{{ url('/assets/style.css')}}" rel="stylesheet">

    <link href="{{ url('/assets/plugins/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @fluxAppearance
</head>

<body class="bg-black font-opensans overflow-x-hidden">
    <!-- Header -->
    <div class="z-10 fixed top-0 left-0 w-full py-5">
        <div class="container mx-auto max-w-[1600px] px-5 md:px-10">
            <div class="flex justify-between relative">
                <div class="text-3xl font-outfit font-medium text-white">
                    <a href="{{route('home')}}">
                        <img src="{{ url('/assets/images/logo.svg')}}" style="width: 40px" alt="ilvarire">
                    </a>
                </div>
                <div>
                    <ul class="space-x-2">
                        <li class="list-none inline-block">
                            <a class="inline-block relative z-[1] overflow-hidden group px-5 py-2.5 pr-[34px] backdrop-blur bg-white/15 text-white font-outfit rounded-3xl uppercase text-sm font-medium tracking-wider before:content-[''] before:absolute before:-z-[1] before:left-0 before:top-0 before:w-full before:h-full before:bg-themeGradient before:opacity-0 hover:before:opacity-20 before:transition-all before:ease-linear before:duration-100 after:content-[''] after:absolute after:top-1/2 after:right-[20px] after:-translate-y-1/2 after:bg-white after:w-[5px] after:h-[5px] after:rounded-full after:transition-all after:duration-[60ms] hover:after:opacity-40 hover:after:scale-[2.7]"
                                href="#contact">
                                <span
                                    class="block relative text-transparent before:content-[attr(data-text)] before:absolute before:top-0 before:left-0 before:opacity-100 before:text-white before:transition-all before:ease-out before:duration-200 group-hover:before:-top-full group-hover:before:opacity-0 after:content-[attr(data-text)] after:absolute after:top-full after:left-0 after:opacity-0 after:text-white after:transition-all after:ease-out after:duration-200 group-hover:after:top-0 group-hover:after:opacity-100"
                                    data-text="Let's Talk">Let's Talk</span>
                            </a>
                        </li>
                        <li class="list-none inline-block">
                            <div id="nav-toggle"
                                class="inline-block relative z-[1] overflow-hidden cursor-pointer group px-5 py-2.5 pr-[34px] bg-white text-black font-outfit rounded-3xl uppercase text-sm font-medium tracking-wider after:content-[''] after:absolute after:top-1/2 after:right-[20px] after:-translate-y-1/2 after:bg-black after:w-[5px] after:h-[5px] after:rounded-full after:transition-all after:duration-[60ms] hover:after:opacity-40 hover:after:scale-[2.7] cursor-link">
                                <span
                                    class="block relative text-transparent before:content-[attr(data-text)] before:absolute before:top-0 before:left-0 before:opacity-100 before:text-black before:transition-all before:ease-out before:duration-200 group-hover:before:-top-full group-hover:before:opacity-0 after:content-[attr(data-text)] after:absolute after:top-full after:left-0 after:opacity-0 after:text-black after:transition-all after:ease-out after:duration-200 group-hover:after:top-0 group-hover:after:opacity-100"
                                    data-text="Menu">Menu</span>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- Toggle Menu -->
                <nav
                    class="nav-box absolute overflow-hidden invisible opacity-0 translate-y-[5px] top-[60px] right-0 bg-white/10 px-7 py-6 min-w-[250px] rounded-lg font-outfit text-xl backdrop-blur transition-all ease-linear duration-100 before:content-[''] before:absolute before:-z-[1] before:left-0 before:top-0 before:w-full before:h-full before:bg-themeGradient before:opacity-30">
                    <ul class="space-y-[10px]">
                        <li class="list-none"><a
                                class="text-white block relative hover:pl-[26px] transition-all ease-out duration-300 group"
                                href="#about"><i
                                    class="bi bi-arrow-right absolute top-1/2 left-0 -translate-y-1/2 opacity-0 invisible transition-all ease-linear duration-100 group-hover:opacity-100 group-hover:visible"></i>About</a>
                        </li>
                        <li class="list-none"><a
                                class="text-white block relative hover:pl-[26px] transition-all ease-out duration-300 group"
                                href="#services"><i
                                    class="bi bi-arrow-right absolute top-1/2 left-0 -translate-y-1/2 opacity-0 invisible transition-all ease-linear duration-100 group-hover:opacity-100 group-hover:visible"></i>Services</a>
                        </li>
                        <li class="list-none"><a
                                class="text-white block relative hover:pl-[26px] transition-all ease-out duration-300 group"
                                href="#portfolio"><i
                                    class="bi bi-arrow-right absolute top-1/2 left-0 -translate-y-1/2 opacity-0 invisible transition-all ease-linear duration-100 group-hover:opacity-100 group-hover:visible"></i>Portfolio</a>
                        </li>
                        <li class="list-none"><a
                                class="text-white block relative hover:pl-[26px] transition-all ease-out duration-300 group"
                                href="#team"><i
                                    class="bi bi-arrow-right absolute top-1/2 left-0 -translate-y-1/2 opacity-0 invisible transition-all ease-linear duration-100 group-hover:opacity-100 group-hover:visible"></i>Team</a>
                        </li>
                        <li class="list-none"><a
                                class="text-white block relative hover:pl-[26px] transition-all ease-out duration-300 group"
                                href="#contact"><i
                                    class="bi bi-arrow-right absolute top-1/2 left-0 -translate-y-1/2 opacity-0 invisible transition-all ease-linear duration-100 group-hover:opacity-100 group-hover:visible"></i>Contact</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <!-- end Header -->

    {{ $slot }}

    <!-- Footer -->
    <div class="container text-center px-5 py-9 xl:py-10">
        <p class="text-white/70">&copy; 2025 ilvariretechnologies, All Rights Reserved.</p>
    </div>
    <!-- end Footer -->

    <!-- Page Preloader -->
    <div
        class="preloader z-30 fixed top-0 left-0 visible opacity-100 bg-black w-full h-full text-center transition-all ease-out duration-500">
        <div
            class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 flex space-x-4 font-outfit font-normal uppercase text-white">
            <span class="opacity-100 inline-block text-center transition ease-linear duration-100 animate-loader">
                <img src="{{ url('/assets/images/logo.svg')}}" style="width: 40px" alt="ilvarire">
            </span>

        </div>
    </div>
    <!-- end Page Preloader -->

    <!-- JavaScripts -->
    <script src="{{ url('/assets/plugins/plugins.js')}}"></script>
    <script src="{{ url('/assets/functions.js')}}"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        AOS.init();
    </script>
    @fluxScripts
</body>

</html>