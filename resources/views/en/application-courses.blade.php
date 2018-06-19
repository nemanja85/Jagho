@extends('layouts.app-en')

@section('title')
Application for courses
@endsection

@section('content')

<div class="service">
<div class="container">
  <div class="row">
    <img src="{{asset('/images/logobrand.png')}}" alt="images">
     <p> JAKHO Software </p>
      <h1>APPLICATION FOR COURSES </h1>
      <p>
       OUR AGENCY IS ORGANIZING QA COURSE BASED ON METHODOLOGY AND
        <span>IN COOPERATION WITH RHEA SOFTWARE D.O.O. FROM BELGRADE.</span>
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
        <p><i class="material-icons">brightness_1</i> Upon registration you will receive further information and guidance on the course via e-mail.</p>
        <p><i class="material-icons">brightness_1</i> The course is held at Rhea Software d.o.o. Belgrade, Takovska 45.</p>
        <p><i class="material-icons">brightness_1</i> The course is scheduled twice a week for 3 hours.</p>
        <p><i class="material-icons">brightness_1</i> A group of max. 10 participants.</p>
        <p><i class="material-icons">brightness_1</i> <strong>Classes schedule:</strong></p>
        <p> Monday: 18:00h – 20:30h</p>
        <p> Thursday: 18:00h – 20:30h</p>
        <p><i class="material-icons">brightness_1</i> The total number of classes is 60 (1 class = 45 minutes).</p>
        <p><i class="material-icons">brightness_1</i> <strong>The price of the course is 72.000 RSD.</strong></p>
      </div>
      <div class="col s12 m12 l6 xl6 left-align service-text-right">
       <form id="formv" name="application-for-courses" method="POST" action="form/en-application" class="col s12 form-contact">
{{ csrf_field() }}
        <input type="hidden" name="type" value="en-application">
           <div class="row">
               <div class="input-field col s12 m12 l12 xl12 right-form">
                   <div class="input-field col s12 m12 l6 xl6">
                    <input id="name"  name="name" type="text" maxlength="25" class="validate"  placeholder="Full Name:">
                  </div>
                  <div class="errorTxt1 err"></div>
                  <div class="input-field col s12 m16 l6 xl6">
                    <input id="email" name="email" type="email" class="validate"  placeholder="E-mail:">
                  </div>
                  <div class="errorTxt2 err"></div>
                  <div class="input-field col s12 m12 l12 xl12">
                  <input type="text" placeholder="Phone:" class="tel" id="phone" name="phone"  maxlength="15">
                  </div>
                  <div class="errorTxt3 err"></div>
               </div>
                <div class="input-field col s12 m12 l12 xl12 left-form">
                      <div class="input-field col s12 m12 l12 xl12 input-texarea">
                       <textarea id="message" name="message" cols="35" rows="3" maxlength="300" minlength="10" class="control-textarea"  placeholder="Message"></textarea>
                      </div>
                       <span id="charst">*</span> <span id="chars"> 300</span> <span id="chars">characters remaining
                       </span>
                       <div class="errorTxt4 err"></div>
                      <div class="input-field col s12 m12 l12 xl12 input-btn">
                          <button class="waves-effect waves-light btn-large" type="submit" id="action" name="action">SEND</button>
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
    $('#action').on('click', function(){

    $.validator.addMethod("regex", function(value, element, regexpr) {
        return regexpr.test(value);
    },
    "Please enter only letters");
    $.validator.addMethod("regx", function(value, element, regexpr) {
        return regexpr.test(value);
    },
    "Please enter valid e-mail address");
    $.validator.addMethod("pattern", function(value, element, regexpr) {
        return regexpr.test(value);
    },
    "Please enter only numbers");

      $("#formv").validate({
        rules: {
            name: {
                required: true,
                minlength: 3,
                regex: /^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$/
            },
            email: {
                required: true,
                email: true,
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
                required: "Enter valid Name",
                minlength: "You must have minimum 3 characters"
            },
            email:{
                required: "Enter valid e-mail",
                email: "Please enter valid e-mail address."
            },
            phone:{
                required: "Enter valid Phone",
                minlength: "You must have minimum 9 characters"
            },
            message:{
                required: "Enter valid Message",
                 minlength: "You must have minimum 10 characters"
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

     //   var form = $('#application-for-courses').serializeArray();
     //   console.log(form);
        // $.post( 'http://jakho.rs/send_email.php', { data: form })
        //     .done(function( resp ) {
        //        //$("#application-for-courses")[0].reset();
        //       console.log('resp',resp);
        //       $('.success').css('display','block');
        //      $(".success").html(resp);
        // });
    });
  </script>
  @include('sweet::alert')
  @endsection