<!DOCTYPE html>
<html lang="en">

    <head>
        @include('crcm.includes.head')
        @yield('head')
    </head>

    <body>
        <div class=" container-scroller">
            @include('crcm.includes.header')
            <div class="container-fluid">
                <div class="row row-offcanvas row-offcanvas-right">
                    @include('crcm.includes.sidebar')
                    <div class="content-wrapper">
                        @yield('content')
                    </div>
                    @include('crcm.includes.footer')
                </div>
            </div>
        </div>
        @include('crcm.includes.scripts')
        @yield('scripts')
    </body>

</html>
