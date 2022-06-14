

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{asset('enseignant/css/style.css')}}">
    <title>Enseignant</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <a class=" d-flex align-items-center mb-0" style="gap:8px ;""   href="/Prof"><img  class="img-fluid" style="max-height:60px" src="{{asset('enseignant/images/logofsr.png')}}"  alt="ENSET"> <span class="text-white font-weight-bold" style="font-size:18px;">UM5</span></a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="{{ route('home.prof')}}">Accueil <span class="sr-only">(current)</span></a>
              </li>

               <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Services
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{ route('create.seance')}}">Créer une séance </a>
                  <a class="dropdown-item" href="{{ route('list.seance')}}">Enregistrer absence</a>
                  <a class="dropdown-item" href="{{ route('historique.absence')}} ">Consulter l'historique </a>
                  </div>
              </li>
          </ul>
          <ul class="navbar-nav">
            <li class="nav-item">

            <a class=" btn btn-primary" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Déconnecter
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
          </li>
          </ul>

          </div>
        </nav>


        @yield('content')


    <section class="footer text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-6  text-left">
                  <h3>SiteMap</h3>
                  <ul class="list-unstyled  three-columns">
                    <li><a href="#">Accueil</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Services</a></li>
                  </ul>
                  <ul class='list-unstyled sosial'>
                    <li>  <i class="fa fa-google-plus-square fa-3x" aria-hidden="true"></i></li>
                    <li> <i class="fa fa-linkedin-square fa-3x" aria-hidden="true"></i></li>
                    <li>  <i class="fa fa-twitter-square fa-3x" aria-hidden="true"></i></li>
                    <li> <i class="fa fa-facebook-square fa-3x" aria-hidden="true"></i></li>
                   </ul>
          </div>

          <div class="col-md-6 ">
            <div class="d-flex " style="gap:10px">
            <img  class="img-fluid" style="max-height:60px" src="{{asset('enseignant/images/logofsr.png')}}"  alt="ENSET">
            <h3>UM5</h3>
            </div>
            <p class=" text-left">
          Faculté des sciences <br>
           4 avenue Ibn Battouta     <br>
           B.P. 1014 RP,Rabat <br>
           <strong>Tél. :</strong>  +212 (0) 5 37 77 18 34 / 35 / 38 <br>
            <strong>Fax :</strong>  +212 5 37 77 42 61 <br>
            <strong>Email:</strong> decanat@fsr.ac.ma

            </p>
          </div>
        </div>
      </div>
      <div class="copyright text-center">
      <span>Gestion des absences</span>
      </div>
     </section>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
