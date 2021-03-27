@extends('layouts.admin')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<div class="container">
	    <div class="table table-responsive p-0">
	        <table id="example1" class="table table-hover">
	            <thead class="">
	                <tr class=" btn-sm text-center">
	                <th scope="col">N°</th>
	                 <th scope="col">nom</th>
	                <th scope="col">prenom</th>
	                <th scope="col">genre</th>
	                <th scope="col">date de debut</th>
	                <th scope="col">date de fin</th>
	                <th scope="col">Option</th>
	            </thead>
	            <tbody >
		            @foreach($Reservations as $key=>$Reservation)
			            <tr class="tablecolor text-center">
				            <td>{{++$key}}</td>
				            <td>{{$Reservation->nom}}</td>
				            <td>{{$Reservation->prenom}}</td>	
				            <td>{{$Reservation->genre}}</td>
				            <td>{{$Reservation->date_de_debut}}</td>
				            <td>{{$Reservation->date_de_fin}}</td>				          <td>
				                <a href=" "><button class="btn btn-success"><i class="fas fa-eye"></i></button></a>
				            </td>
			            </tr>
		            @endforeach
		        
	            </tbody>
	        </table>
	    </div>
	</div>
@endsection
</body>
</html>