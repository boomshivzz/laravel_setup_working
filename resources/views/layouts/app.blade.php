<html>
    
    <head>
        <title>App Name - @yield('title')</title>
    
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >
    
    </head>
    
    
    <body>
        <header>
             <nav>
                 <a href="#">Home</a>
                 <a href="#">About Us</a>
                 <a href="#">Contact</a>
                 <a href="#">Blog</a>
                 <a href="#">Search</a>
            </nav>
        
        </header>
        
        
        
        @section('sidebar')
            This is the master sidebar.
        @show

        <div class="container">
            @yield('content')
    
        </div>
    
    
    </body>
</html>
