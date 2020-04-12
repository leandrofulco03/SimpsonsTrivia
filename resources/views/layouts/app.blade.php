<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('Titulo')</title>
    @yield('css')
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
        <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Voltaire&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Press+Start+2P&display=swap" rel="stylesheet">
      <!--  <script src="{ asset('js/app.js') }}" defer></script> -->
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <!--links de animaciones-->
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/bart.css">
    <!--Links de animaciones-->
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <header>
       <div class="container container1">
        <div class="imagenhomero">
        <img src="img/homero.png" alt="homero" width="400">
      </div>
      </div>
      <div class="container container2">
      <nav class="navbar navbar-expand-lg navbar-light "style="background-color: #ffea00">
        <div class="container">
            <a class="navbar-brand" style="font-weight: bold; font-family: 'Voltaire', sans-serif; font-size: 20px;" href="{{ url('/question') }}">
                {{ config('app.name', 'Simpsons Trivia') }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest

                    @else
                      <li class="nav-item dropdown">
                                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="position: relative; padding-left: 50px;">
                                      <img src="/uploads/avatars/{{ Auth::user()->avatar }}" style="width: 32px; position: absolute; top: 10px; left: 10px; border-radius: 50%;">
                                    <span style="font-weight: bold; font-family: 'Voltaire', sans-serif; font-size: 20px;">  {{ Auth::user()->name }} </span> <span class="caret"></span>
                                  </a>

                                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                      <a  class="dropdown-item" href="{{ url('/profile') }}">Perfil</a>
                                      <a class="dropdown-item" href="{{ route('logout') }}"
                                         onclick="event.preventDefault();
                                                       document.getElementById('logout-form').submit();">
                                          {{ __('Cerrar Sesión') }}
                                      </a>

                                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                          @csrf
                                      </form>
                                  </div>
                              </li>
                    @endguest
                </ul>
            </div>
        </div>

       <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <ul class="navbar-nav ml-2 mr-auto">
           <li class="nav-item" style="text-align: center; font-weight: bold; font-family: 'Voltaire', sans-serif; font-size: 20px; margin-right: -20px;">
             <a class="nav-link" href="/preguntas2">PREGUNTAS FRECUENTES<span class="sr-only"></span></a>
           </li>
         </ul>

        </div>
      </div>
      </nav>
     </header>
     <main class="py-4">
         @yield('content')
     </main>
     <div class="container footer" style="margin-bottom: -50px; margin-top: 140px;">
     <section class="row" style="background-color:#2C3E50">
      <article class="col-12 text-center">
        <p style="color: white; padding-top: 15px; font-family: sans-serif;">Copyright&copy TheSimpsonsVideoTrivia 2020</p>
      </article>
     </section>
      </div>
     <main class="py-4">
       @yield('footer')
     </main>
   </body>
     </html>
