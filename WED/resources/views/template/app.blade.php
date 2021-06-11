{{--
resources/views/template/app.blade.php
Description : Template général
--}}

<!doctype html>
<html class="no-js" lang="zxx">
<head>
  @include('template.partials.head')
</head>

<body>
<!-- Preloader Start -->
  @include('template.partials.preloader')
<!-- Preloader Start-->

<header>
    @include('template.partials.header')
</header>

<main>
  @section('contenu')
  @show
</main>

<footer>
  @include('template.partials.footer')
</footer>

<!-- JS here -->
  @include('template.partials.script')


</body>
</html>
