<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Twitter Clone</title>
<link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('css/styles.css') }}" type="text/css">
</head>

    @yield('content')

<script>
    window.addEventListener('scroll',function() {
        localStorage.setItem('scrollPosition',window.scrollY);
    },false);
</script>

@if (session('return'))
<script>
    window.addEventListener('load',function() {
        if(localStorage.getItem('scrollPosition') !== null)
        window.scrollTo(0, localStorage.getItem('scrollPosition'));
    },false);
</script>
@endif

</html>
