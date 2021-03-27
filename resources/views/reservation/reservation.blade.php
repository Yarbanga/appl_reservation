@extends('layouts.master')

@section('contenu')


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
<script src="{{ asset('js/reservation.js') }}"></script>
<link href="{{asset('/assets/css/reservation.css')}}" rel="stylesheet">
<link href="https://res.cloudinary.com/dxfq3iotg/raw/upload/v1587270922/datepicker/datedropper.css" rel="stylesheet">
<script src="https://res.cloudinary.com/dxfq3iotg/raw/upload/v1587268278/datepicker/datedropper.js"></script>
<div class="container mt-100">
    <div class="card">
        <form action="{{route('apprnt_store')}}" method="post">
          @csrf
          <div class="row">
            <div class="col-md-4"> <label>Nom</label> <input type="text" class="form-control" name="nom"> </div>
            <div class="col-md-4"> <label>Prenoms</label> <input type="text" class="form-control" name="prenom"> </div>
            <div class="col-md-4"> <label>Genre</label> <input type="text" class="form-control" name="genre"></div>
        </div>
          <div class="row">
            <div class="col-md-4"> <label>Date d'arrivée</label> <input type="date" class="form-control" name="date_de_debut"> </div>
            <div class="col-md-4"> <label>Date de depart</label> <input type="date" class="form-control" name="date_de_fin"> </div>
            <div class="col-md-4"> <label>Soumettre</label> <button type="submit" class="btn btn-primary pro-button w-100">Un email de confirmation en cours</button></div>
        </div>
        </form>
    </div>
</div>
@endsection