@extends('layouts.master')

@section('contenu')
<section id="hero">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">
      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
      <div class="carousel-inner" role="listbox">
        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/img/slide/s1.jpg)">
          <div class="container">
            <h2>Bienvenue à <span> la Fabrique</span></h2>
            <p>Dans le cadre du respect des mesures sanitaires du à la pandémie COVID-19 
              nous vous donnons la possibilités de participer a nos programme de formaion</p>
            <a href="#about" class="btn-get-started scrollto">En savoir plus</a>
          </div>
        </div>
        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/s3.jpg)">
          <div class="container">
            <h2>Quelque information sur l'application</h2>
            <p>Une application qui permettra l'accès au 25 premiers apprenants ayant reserver une place sur la platform a tous de reserver une place afin de participer a la formation </p>
            <a href="#about" class="btn-get-started scrollto">En savoir plus</a>
          </div>
        </div>
        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/s2.png)">
          <div class="container">
             <h2>L'objectif de la fabrique</h2>
            <p>Reduction le taux de chomage sur le marché d'emploi.</p>
            <a href="#counts" class="btn-get-started scrollto">Savoir plus</a>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </section>
    @endsection