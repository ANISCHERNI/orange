<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        
<!--
         <link rel="stylesheet" type="text/css" href="{{asset('css/orange.css')}}">
         -->
    <title>Hello, world!</title>

</head>
<body>


<div class="container"> 
<h3>Expoting data to Excel </h3>

<div class="table-responsive">

<a href="{{route('form')}}"><img src="https://img.icons8.com/plasticine/60/000000/return.png"/></a>
<a href="{{route('export_excel.excel')}}" class="btn btn-success">Export to Excel</a>
<hr>
<table class="table table-striped  table_bordered">
<tr>
<th>nom</th>
<th>prenom</th>
<th>departemet</th>
<th>formation</th>
<th>autre</th>
<th>radio</th>
<th>population</th>
<th>checkbox</th>
</tr>
@foreach($formulaire_data as $formulaire)
<tr>  
<td>{{$formulaire->nom}}</td>
<td>{{$formulaire->prenom}}</td>
<td>{{$formulaire->departement}}</td>
<td>{{$formulaire->formation}}</td>
<td>{{$formulaire->autre}}</td>
<td>{{$formulaire->radio}}</td>
<td>{{$formulaire->population}}</td>
<td>{{$formulaire->chekbox}}</td>
</tr>
@endforeach




</table>

</div>

</div>




<!-- Optional JavaScript     <script rel="stylesheet" href=""></script> -->

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
