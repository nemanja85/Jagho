@extends('layouts.app')

@section('title')
O nama
@endsection

@section('content')

<!-- header-background -->
<div class="header">
  <div class="row">
       <p>
          Bavimo se organizacijom kurseva i obuka sa ciljem pružanja usluga neformalnog obrazovanja i obuka u oblasti informacionih i komunikacionih tehnologija (IKT).<br/><br/> Želja nam je da prenesemo znanje, stručnost i način razmišljanja na polaznike naših kurseva. Na taj način omogućavamo polaznicima da ostvare svoje ambicije i započnu poslovni put u trenutno najpopularnijoj industriji.
      </p> 
    <!--  <button class="join-us">PRIDRUŽI SE</button>
      <img src="images/mouse.png" alt="mouse">
    -->
  </div>
</div>
<!-- end header-background -->

<!-- about-us -->
<div class="about-us">
  <div class="row">

    <div class="container">
        <div class="col s12 m12 l12 xl12 center-align about-us-right">
            <p>Kursevi i obuke koje organizujemo su u skladu sa najvišim svetskim standardima. Naši predavači konstantno prate trendove i promene u svetu IKT te u skladu sa tim optimizuju plan i program svakog pojedinačnog kursa. U zavisnosti od same oblasti koja se obrađuje na predavanjima, kursevi mogu trajati i do 6 meseci. Termini naših kurseva su prilagođeni i ljudima koji imaju redovno zaposlenje.</p>
        </div>
        <div class="col s12 m12 l12 xl12 center-align about-us-left">
            <img src="{{asset('images/home.png')}}" alt="home">
        </div>
        <div class="col s12 m12 l12 xl12 center-align about-us-right">
            <p>Naše iskustvo i poslovanje smo udružili sa partnerskim firmama i kroz taj vid sinergije smo uspeli da razvijemo veliki broj kreativnih rešenja koja možemo da ponudimo na tržištu IKT. Predavanja su prilagođena potrebama kompanija koje su lideri u različitim oblastima poslovanja. Držimo se visokih standarda jer nam samo oni garantuju uspeh na tržištu IKT obuke i usavršavanja.
            </p>
        </div>
    </div>
  </div>
</div>
<!-- end about-us -->

@endsection