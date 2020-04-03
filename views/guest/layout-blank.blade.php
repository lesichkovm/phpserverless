<?php
$webpageTitle = isset($webpage_title) ? $webpage_title : 'None';
$routeName = 'home';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>{{ $webpageTitle }} | PHPServerless</title>
    <link
        href="data:image/x-icon;base64,AAABAAEAEBAQAAEABAAoAQAAFgAAACgAAAAQAAAAIAAAAAEABAAAAAAAgAAAAAAAAAAAAAAAEAAAAAAAAAD9/f0AAAAAAP///wD4+PgA8fHxAPr6+gD8/PwA7u7uAP7+/gDw8PAA+fn5APLy8gD7+/sADAzoAPT09AAAAAAAh4cRGHERuYfq4d3RHd0T6nJx0R3RHRByJxEd0R3REYdxeBERERFQEiEnEREREbkXchEZLdchEXInESYScXIRh3F4eRchJ1ASYWFqRkZGGxTLEcERERwRy3gRHYeH0RF4JyHd3d3dGYdycd3d3d0QcicnHd3d0bmHcnhxEREXUHIAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA"
        rel="icon" type="image/x-icon" />
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com" />
    <link rel="dns-prefetch" href="//use.fontawesome.com" />
    <link rel="dns-prefetch" href="//stackpath.bootstrapcdn.com" />
    <link rel="dns-prefetch" href="code.jquery.com" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous" />
    <!-- Styles -->
    <!--<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />-->
    <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/yeti/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-w6tc0TXjTUnYHwVwGgnYyV12wbRoJQo9iMlC2KdkdmVvntGgzT9jvqNEF/uKaF4m" crossorigin="anonymous" />
    <?php echo joinCss(['css/guest.css']); ?>
    @yield('styles')
</head>

<body>
    <!-- START: Page Wrapper -->
    <table class="Layout" cellspacing="0" cellpadding="0" style="width:100%;height:100%;">
        <!-- START: Header -->
        <tr>
            <td class="Header" align="center" valign="middle" style="height:1px;">
                @yield('header')
            </td>
        </tr>
        <!-- END: Header -->

        <!-- START: Content-->
        <tr>
            <td class="Content" align="left" valign="top" style="">
                @yield('content')
            </td>
        </tr>
        <!-- END: Content -->

        <!-- START: Footer -->
        <tr>
            <td class="Footer" align="center" valign="middle" style="height:80px;">
                @yield('footer')
            </td>
        </tr>
        <!-- END: Footer -->
    </table>
    <!-- END: Page Wrapper -->

    <script src="https://code.jquery.com/jquery-3.4.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"
        integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous">
    </script>
    <?php
    echo joinScripts(
        [
            '/js/main.js',
            '/js/functions.js',
            '/js/date.js',
            '/js/strtotime.js',
        ],
        ['minify' => 'yes']
    );
    ?>
    @yield('scripts')
</body>

</html>