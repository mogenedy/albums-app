

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
    <header class="bg-light py-3">
        <div class="container">
            <h1 class="display-4 text-center text-dark">Albums</h1>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="bg-red text-white text-center py-3">
        <p> My album App.</p>
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>