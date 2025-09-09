<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<title>{{ $title ?? config('app.name') }}</title>
<meta name="description"
    content="Ilvarire technologies delivers cutting-edge web and mobile app development services, coupled with advanced cybersecurity solutions to safeguard your digital presence.">
<meta name="keywords"
    content="web development, app development, mobile apps, software development, UI/UX design, cybersecurity, ethical hacking, penetration testing, digital security, full-stack development, frontend, backend, secure coding">
<meta name="author" content="Ilvarire Technologies">

<link rel="icon" href="{{ url('/assets/images/logo.svg')}}" sizes="any">
<link rel="icon" href="{{ url('/assets/images/logo.svg')}}" type="image/svg+xml">
<link rel="apple-touch-icon" href="/apple-touch-icon.png">
<link href="{{ url('/assets/images/logo.svg')}}" rel="shortcut icon">
<link rel="preconnect" href="https://fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

@vite(['resources/css/app.css', 'resources/js/app.js'])
@fluxAppearance