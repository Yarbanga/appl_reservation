@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Tableau de bord') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('vous etes connecter!') }}
                    
            </div>
        </div>
    </div>
</div>
<script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
 <script src="{{ asset('js/app.js') }}" defer></script>
@endsection
