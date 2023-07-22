<!DOCTYPE html>
<html lang="en">
<head>
    @include ('layouts/head')
    <link rel="stylesheet" href="/css/index.css" />
    <script src="/js/script.js"></script>
    <title>Arcis</title>
</head>
<body>
    @include('layouts/navbar')
    @include('layouts/explore')
    @include('layouts/about')
    @include('layouts/contact')
    <a href="#" class="top"><i class="bi bi-chevron-double-up"></i></a>
    @include('layouts/footer')
</body>
</html>