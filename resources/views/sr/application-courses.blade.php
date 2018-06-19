@extends('layouts.app')

@section('title')
Prijava za kurs
@endsection

@section('content')

<div class="service">
<div class="container">
	<div class="row">
	  <img src="{{asset('/images/logobrand.png')}}" alt="images">
		 <p> JAKHO Software </p>
			<h1>PRIJAVA ZA KURS</h1>
			<p>
				AGENCIJA JAKHO SOFTWARE ORGANIZUJE QA KURS, PO METODOLOGIJI I U
				<span>SARADNJI SA RHEA SOFTWARE D.O.O. IZ BEOGRADA</span>
			</p>

	</div>
</div>
</div>
<!-- end service-background -->

<!-- service text -->
<div class="service-text">
  <div class="row">

    <div class="container">

      <div class="col s12 m12 l6 xl6 center-align service-text-left">
        <p><i class="material-icons">brightness_1</i> Nakon prijave, dobićete e-mail sa daljim informacijama i uputstvima u vezi sa kursom.</p>
        <p><i class="material-icons">brightness_1</i> Kurs se održava u prostorijama Rhea Software d.o.o. Beograd,  Takovska 45.</p>
        <p><i class="material-icons">brightness_1</i> Kurs je organizovan u dva termina sedmično po 3 časa.</p>
        <p><i class="material-icons">brightness_1</i> Grupa od maksimalno 10 polaznika.</p>
        <p><i class="material-icons">brightness_1</i> <strong>Termini su:</strong></p>
        <p>Ponedeljak: 18:00h – 20:30h</p>
        <p> Četvrtak: 18:00h – 20:30h</p>
        <p><i class="material-icons">brightness_1</i> Ukupan broj časova je 60 (1 čas = 45 minuta).</p>
        <p><i class="material-icons">brightness_1</i> <strong>Cena kursa je 72.000 dinara.</strong></p>

      </div>
      <div class="col s12 m12 l6 xl6 left-align service-text-right">
       <form id="formv" name="prijava-za-kurs" method="POST" class="col s12 form-contact" action="form/sr-prijava">
       {{ csrf_field() }}
        <input type="hidden" name="type" value="sr-prijava">
        <div class="row">
               <div class="input-field col s12 m12 l12 xl12 right-form">
                   <div class="input-field col s12 m12 l6 xl6">
                    <input id="name"  name="name" type="text" maxlength="25" class="validate" placeholder="Ime i prezime:" />
                  </div>
                  <div class="errorTxt1 err"></div>
                  <div class="input-field col s12 m16 l6 xl6">
                    <input id="email" name="email" type="email" class="validate"  placeholder="E-mail:" />
                  </div>
                  <div class="errorTxt2 err"></div>
                  <div class="input-field col s12 m12 l12 xl12">
                  <input type="text" placeholder="Telefon:" class="tel" id="phone" name="phone" maxlength="15" />
                </div>
                <div class="errorTxt3 err"></div>
        </div>

        <div class="input-field col s12 m12 l12 xl12 left-form">
          <div class="input-field col s12 m12 l12 xl12 input-texarea">
           <textarea id="message" name="message" cols="35" rows="3" maxlength="300" minlength="10" class="control-textarea" placeholder="Poruka"></textarea>
          </div>
          <div class="errorTxt4 err"></div>
           <span id="charst">*</span> <span id="chars"> 300</span> <span id="chars">karaktera preostalo</span>
          <div class="input-field col s12 m12 l12 xl12 input-btn">
              <button class="waves-effect waves-light btn-large" type="submit" id="action" name="action">POŠALJI</button>
          </div>
       </div>
      </div>
    </form>
      </div>
    </div>

  </div>
</div>

@endsection


@section('script')
<script src="{{ asset('js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('js/additional-methods.min.js') }}"></script>
<script type="text/javascript">
     /*   $('#phone').formatter({
          'pattern': '+381 {{99}}-{{999}}-{{99}}-{{99}}',
          'persistent': true
        });
*/

    $('#action').on('click', function(){

    $.validator.addMethod("regex", function(value, element, regexpr) {
        return regexpr.test(value);
    },
    "Dozvoljeno je uneti samo slova");

    $.validator.addMethod("regx", function(value, element, regexpr) {
        return regexpr.test(value);
    },
    "Unesite validnu e-mail adresu");

    $.validator.addMethod("pattern", function(value, element, regexpr) {
        return regexpr.test(value);
    },
    "Dozvoljeno je uneti samo brojeve");


      $("#formv").validate({
        rules: {
            name: {
                required: true,
                minlength: 3,
                regex: /^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$/
            },
            email: {
                required: true,
                email:true,
                regx: /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/
            },
            phone: {
                required: true,
                minlength: 9,
                 number: true,

            },
            message:{
                required: true,
                minlength: 10
            }
        },
        //For custom messages
        messages: {
            name:{
                required: "Unesite Ime",
                minlength: "Morate da imate minimum 3 karaktera"
            },
            email:{
                required: "Unesite E-mail",
                email: "Unesite validnu e-mail adresu"
            },
            phone:{
                required: "Unesite broj Telefona",
                minlength: "Morate da imate minimum 9 karaktera",

            },
            message:{
                required: "Unesite poruku",
                 minlength: "Morate da imate minimum 10 karaktera"
            }
        },
        errorElement : 'div',
            errorPlacement: function(error, element) {
              var placement = $(element).data('error');
              if (placement) {
                $(placement).append(error)
              } else {
                error.insertAfter(element);
              }
            }
     });


 //   var form = $('#contact_form').serializeArray();

   });
  </script>
@include('sweet::alert')
@endsection