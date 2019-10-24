<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('web/materialize/css/materialize.css')}}">
    <link rel="stylesheet" href="{{ asset('web/style.css')}}">
</head>
<body>
    <div class="navbar-fixed">
         <nav>
                <div class="nav-wrapper blue">
                  <a href="#" class="brand-logo">lester</a>
                  <ul id="nav-mobile" class="right">
                    <li class="active"><a href="sass.html">Home</a></li>
                    <li><a href="#">Contacto</a></li>
                    <li><a href="{{ route('login')}}">Ingresar</a></li>
                    <li><a href="{{ route('register') }}"">Registrar</a></li>
                  </ul>
                </div>
        </nav>
    </div>
    <div class="parallax-container">
        <div class="parallax"><img src="{{asset ('web/img/fondo.jpg')}}"></div>
            <h1 class="center-align white-text">Hola amis</h1>
            <h5 class="center-align white-text">Como estas?</h5>
          </div>
    <div class="container">

            <div class="row">
                <div class="col s8 ">
                <div class="col s6 ">
                        <div class="card">
                                <div class="card-content">
                                  <span class="card-title">Card Title</span>
                                  Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                   Similique doloremque porro sint omnis quam neque laborum modi.
                                    Perferendis eveniet magnam suscipit, natus veritatis facere.
                                   Dolorem autem consequuntur minima beatae dolore!
                                </div>
                                <div class="card-action">
                                  <a href="./show.html" class="blue-text right">ver more</a>
                                  <br>
                                </div>
                        </div>
                </div>
                <div class="col s6 ">
                        <div class="card">
                                <div class="card-content">
                                  <span class="card-title">Card Title</span>
                                  Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                   Similique doloremque porro sint omnis quam neque laborum modi.
                                    Perferendis eveniet magnam suscipit, natus veritatis facere.
                                   Dolorem autem consequuntur minima beatae dolore!
                                </div>
                                <div class="card-action">
                                  <a href="./show.html" class="blue-text right">ver more</a>
                                  <br>
                                </div>
                        </div>
                </div> <div class="col s6 ">
                        <div class="card">
                                <div class="card-content">
                                  <span class="card-title">Card Title</span>
                                  Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                   Similique doloremque porro sint omnis quam neque laborum modi.
                                    Perferendis eveniet magnam suscipit, natus veritatis facere.
                                   Dolorem autem consequuntur minima beatae dolore!
                                </div>
                                <div class="card-action">
                                  <a href="/show.html" class="blue-text right">ver more</a>
                                  <br>
                                </div>
                        </div>
                </div> <div class="col s6 ">
                        <div class="card">
                                <div class="card-content">
                                  <span class="card-title">Card Title</span>
                                  Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                   Similique doloremque porro sint omnis quam neque laborum modi.
                                    Perferendis eveniet magnam suscipit, natus veritatis facere.
                                   Dolorem autem consequuntur minima beatae dolore!
                                </div>
                                <div class="card-action">
                                  <a href="/show.html" class="blue-text right">ver more</a>
                                  <br>
                                </div>
                        </div>
                </div>
                </div>
                <div class="col s4 ">
                        <ul class="collection with-header">
                                <li class="collection-header"><h4>Redes</h4></li>
                                <li class="collection-item">
                                    <div>
                                        <a href="htpps://es-la.facebook.com" class="blue-text">
                                            Facebook<i class="fab fa-facebook fa-lg secondary-content blue-text"></i>
                                        </a>
                                    </div>
                                </li>

                                <li class="collection-item">
                                        <div>
                                            <a href="htpps://twitter.com" class="blue-text">
                                               twitter<i class="fab fa-twitter fa-lg secondary-content blue-text"></i>
                                            </a>
                                        </div>
                                    </li>
                                        <li class="collection-item">
                                                <div>
                                                    <a href="htpps://instagram.com" class="blue-text">
                                                        Instagram<i class="fab fa-instagram fa-lg secondary-content pink-text">
                                                       </i>
                                                    </a>
                                                </div>
                                        </li>
                        </ul>
                </div>
            </div>




    </div>




    <script src="{{asset('web/fontawesome/fontawesome.js')}}"></script>
    <script src="{{asset('web/materialize/js/materialize.js')}}"></script>
    <script>  document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.parallax');
            var instances = M.Parallax.init(elems);
          });
        </script>
</body>
</html>
