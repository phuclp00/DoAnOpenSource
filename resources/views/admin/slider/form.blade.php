@inject('blog', 'App\Helpers\Helper')

<html>
    <head>
        <title>App Name - @yield('title')</title>
    </head>
    <body>
        @section('sidebar')
            This is the master sidebar.
        @show

        <div class="container">
            @yield('content')
        </div>  
        <h1> XIN CHAO {{ $blog->getname_Admin(route("$controller_name"."_form"))}}</h1>

    <a href="{{route("$controller_name"."_view")}}"> BACK</a>
    </body>
</html>