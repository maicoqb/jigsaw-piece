<head>
    <link href="http://gmpg.org/xfn/11" rel="profile">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">

    <!-- Enable responsiveness on mobile devices-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">

    <title>
        @if ($page->title == 'Home' )
            {{ $page->site->title }} &middot; {{ $page->site->tagline }}
        @else
            {{ $page->title }} &middot; {{ $page->site->title }}
        @endif
    </title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{ $page->site->baseurl }}/public/css/poole.css">
    <link rel="stylesheet" href="{{ $page->site->baseurl }}/public/css/syntax.css">
    <link rel="stylesheet" href="{{ $page->site->baseurl }}/public/css/lanyon.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=PT+Serif:400,400italic,700%7CPT+Sans:400">

    <!-- Icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ $page->site->baseurl }}/public/apple-touch-icon-precomposed.png">
    <link rel="shortcut icon" href="{{ $page->site->baseurl }}/public/favicon.ico">

    <!-- RSS -->
    <link rel="alternate" type="application/rss+xml" title="RSS" href="/{{ $page->site->rss_url }}">
</head>
