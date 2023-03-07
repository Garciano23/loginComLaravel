<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title');</title>

        
        
       <!-- Fonte do google-->
<link href="https://fonts.googleapis.com/css2? família=Roboto" rel="stylesheet">

        <!-- css do boostrap-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">



               <!-- css  da aplicação-->

         <link rel="stylesheet" href="/css/style.css">
         <script src="js/script.js"></script>

      </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="collapse navbar-collapse" id="navbar">
                    <a href="/" class="navbar-brand">
                        <img src=""  width="30" height="30" class="d-inline-block align-top" alt="Help Desk"  srcset="">
                    
                    </a>

                    <ul class="navbar-nav">
                      <li class="nav-item">
                        <a href="/" class="nav-link">login</a>

                      </li>
                      
                    </ul>

                </div>
            </nav>
        </header>
        <main>
          <div class="container-flud">
            <div class="row">
              @if(session('msg'))
              <p class="msg">{{session('msg')}}</p>
              @endif
              @yield('content');

            </div>
          </div>
        </main>
        <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>

    </body>
</html>
