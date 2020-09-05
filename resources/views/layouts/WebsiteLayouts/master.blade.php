<!DOCTYPE html>
<html lang="en">
@include('layouts.WebsiteLayouts.head')
<body>
@include('layouts.WebsiteLayouts.header')
<div class="container">
    @yield('content')
</div>
@include('layouts.WebsiteLayouts.footer')
