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
		<h5 class="card-title">Bienvenue</h5>

	    <div class="table table-responsive p-0">
	        <table id="example1" class="table table-hover">
	            <thead class="">
	                <tr class=" btn-sm text-center">               
	                <th scope="col">Date</th>
	                <th scope="col">Localisation</th>
	                <th scope="col">Heure</th>
	                <th scope="col">Option </th>
	            </thead>
	            <tbody >
		            @foreach($date_reservatns as $Date_reservatn)
			            <tr class="tablecolor text-center">	       
				            <td>{{$Date_reservatn->date}}</td>	
				            <td>{{$Date_reservatn->localisation}}</td>
				            <td>{{$Date_reservatn->heure}}</td>				  <td>
				                <a href=" "><button class="btn btn-success"><i class="fas fa-eye"></i></button></a>
				            </td>
			            </tr>
		            @endforeach
		            <div> <a class="btn btn-primary mt-3" href="{{route('admin_reserv')}}">Ajouter une date</a></div>
	            </tbody>
	        </table>
	    </div>
	</div>
@endsection
</body>
</html>