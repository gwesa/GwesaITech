<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Medicio landing page template for Health niche</title>

    @include('includes.include_css')
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
    <div id="wrapper">
        @include('includes.include_header')

        @yield('main_body')

        @include('footer.footer')
    </div>
    <a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

    @include('includes.include_js')

</body>

</html>
