<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        

         <link rel="stylesheet" type="text/css" href="{{asset('css/orange.css')}}">
    <title>Hello, world!</title>
</head>
<body>

<div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
              welcom to  {{ Auth::user()->name }}
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
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
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
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
<div class="container">

    <div class="row mt-4">
        <div class="col-12"><img src="{{asset('images\orange.jpg')}}" ></div>
<div class="col mt-3"><h2>Demande de formation</h2> </div>
    </div>
    <div class="row">
        <div class="col">

            <form action="{{url('/form')}}" method="POST">
            @csrf

            <div class="form-group">
                    <label for="formGroupExampleInput">Nom</label>
                    <input type="text" class="form-control @error('nom') is-invalid @enderror" name="nom"  placeholder="Votre reponse">
                @error('nom')
                <div class="invalid-feedback">
                champ obligatoire*
                </div>
                @enderror
                </div>


                <hr>


    <div class="form-group">
                    <label for="formGroupExampleInput">prenom</label>
                    <input type="text" class="form-control @error('prenom') is-invalid @enderror" name="prenom"  placeholder="Votre reponse">
                @error('prenom')
                <div class="invalid-feedback">
                champ obligatoire*
                </div>
                @enderror
                </div>


                <hr>



                <div class="form-group">
                    <label for="formGroupExampleInput2">Direction/Département/Service</label>
                    <input type="text" class="form-control" name="departement" placeholder="Votre reponse">
                </div>

                <hr>

                <div class="form-group">
                    <label for="formGroupExampleInput">Formation demandé & description de besoin *</label>
                    <input type="text" class="form-control" name="formation" placeholder="Votre reponse">
                </div>
               
                <hr>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Population ciblé par la formation :(mentionner la liste des participants identifiés si possible)</label>
                    <input type="text" class="form-control" name="population" placeholder="Votre reponse">
                </div>
                <hr>

                <div class="form-group">
                    <label for="formGroupExampleInput">Cette action de formation a-elle été validé  au niveaude plan de formation 2020 ? </label>
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio"  value="oui" checked>
                    <label class="form-check-label" for="exampleRadios1">
                        Oui
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio"  value="non">
                    <label class="form-check-label" for="exampleRadios2">
                        Non
                    </label>
                </div>



                <hr>

<div class="form-group">
    <label for="formGroupExampleInput2">Cette formation repond a quel besoin ? *</label>

         <!--check box-->

<div class="form-check">
    <input class="form-check-input" type="checkbox" value="1" name="chekbox[]">
    <label class="form-check-label" for="defaultCheck1">
        Evolution des métiers et des compétences
    </label>
</div>

<!--check box-->

<div class="form-check">
    <input class="form-check-input" type="checkbox" value="2" name="chekbox[]">
    <label class="form-check-label" for="defaultCheck1">
        Projet des transformation et d'investissement
    </label>
</div>

     <!--check box-->

     <div class="form-check">
    <input class="form-check-input" type="checkbox" value="3" name="chekbox[]">
    <label class="form-check-label" for="defaultCheck1">
       Dysfonctionnement et difficultés d'atteinte des objectifs
    </label>
</div>

     <!--check box-->

     <div class="form-check">
    <input class="form-check-input" type="checkbox" value="4" name="chekbox[]">
    <label class="form-check-label" for="defaultCheck1">
        Autre:  
    </label>
     <input type="text" class="form-control" name="autre" placeholder="Votre reponse">
</div>


</div>


             
</div>

               
<input type="submit"  class="btn btn-secondary btn-lg btn-block" value="sauvgarder">



            
            </form>
            <br>
           <a href="{{route('export')}}"  class="btn btn-success btn-lg btn-block" >Transfer to Execel File</a>
        </div>

    </div>
</div>

<!-- Optional JavaScript     <script rel="stylesheet" href=""></script> -->

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
