<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<x-head/>
<body class="body">
<!-- WRAPPER -->
<div class="wrapper">

    <x-header/>

    <!-- MAIN CONTENT -->
    <main class="main">
        @yield('content')
    </main>

    <x-footer/>

</div>

</body>

</html>
