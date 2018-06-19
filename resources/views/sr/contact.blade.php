@extends('layouts.app')

@section('title')
Kontakt
@endsection


@section('content')

<div class="contact-page">
	<div class="row">

			<h1>KONTAKT</h1>

	</div>
</div>
<!-- end contact-background -->

<!-- contact -->

<div class="container center-align contact-content">
  <div class="row">


    <div class="col s12 m6 l6 xl6 icons">
      <img src="{{asset('images/telephone.png')}}" alt="">
       <h5>Telefon</h5>
      <a href="tel: +381 64 069 31 20"><strong>+381 64 069 31 20</strong></a>
    </div>
    <div class="col s12 m6 l6 xl6 icons">
      <img src="{{asset('images/mail.png')}}" alt="">
       <h5>E-mail</h5>
    <a href="mailto:info@jakho.rs"><strong>info@jakho.rs</strong></a>
    </div>

  </div>
</div>
  <!-- form-->
<div class="container">
  <div class="row">
       <div class="input-field col s12 danger">
              Morate da popunite sva polja
       </div>
    <form id="formv" name="contact_form" method="POST" class="col s12 form-contact" novalidate="novalidate" action="form/sr-kontakt">
      {{ csrf_field() }}
       <input type="hidden" name="type" value="sr-kontakt">
      <div class="row">
       <div class="input-field col s12 m12 l12 xl12 right-form">
           <div class="input-field col s12 m12 l6 xl6">
            <input id="name"  name="name" type="text" maxlength="25" class="validate" placeholder="Ime i prezime:" />
            <div class="errorTxt1 err"></div>
          </div>
          <div class="input-field col s12 m16 l6 xl6">
            <input id="email" name="email" type="email" class="validate" placeholder="E-mail:"  />
            <div class="errorTxt2 err"></div>
          </div>
          <div class="input-field col s12 m12 l12 xl12">
          <input type="text" placeholder="Telefon:" class="tel" id="phone" name="phone" maxlength="15" />
            <div class="errorTxt3 err"></div>
          </div>
       </div>

        <div class="input-field col s12 m12 l12 xl12 left-form">
          <div class="input-field col s12 m12 l12 xl12 input-texarea">
           <textarea id="message" name="message" cols="35" rows="3" minlength="10" class="control-textarea"  placeholder="Poruka"></textarea>
                <div class="errorTxt4 err"></div>
          </div>
          <span id="charst">*</span> <span id="chars"> 300</span> <span id="chars">karaktera preostalo</span>
          <div class="input-field col s12 m12 l12 xl12 input-btn">
              <button class="waves-effect waves-light btn-large" type="submit"  id="action" name="action">POŠALJI</button>
          </div>
       </div>
      </div>
    </form>
  </div>
</div>

@endsection


@section('script')
<script src="{{ asset('js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('js/additional-methods.min.js') }}"></script>
<script type="text/javascript">
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
                 number: true
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
                minlength: "Morate da imate minimum 9 karaktera"
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


//    var form = $('#contact_form').serializeArray();

  // for (var i = 0; i < form.length; i++) {
  //   if(form[i].value === ""){

  //           $('.success').css('display','none');
  //   }
  // }

      // $.post( 'http://jakho.rs/send_email.php', { data: form })
      //       .done(function( resp ) {
      //        console.log(form)
      //        //$("#contact_form")[0].reset();
      //         console.log(resp);
      //         $('.success').css('display','block');
      //        $(".success").html(resp);
      //   })
   });
  </script>
@include('sweet::alert')
@endsection