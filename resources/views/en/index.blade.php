@extends('layouts.app-en')

@section('title')
Home
@endsection

@section('content')

<div class="header">
	<div class="row">
      <p>
          We are organizing courses and trainings with the goal to provide non-formal education and development in the field of information and communication technologies (ICT).<br/><br/> Our objective is to pass the knowledge, expertise and mindset to our courses students. By doing so, we enable them to realize their ambitions and launch their careers within the most popular industry of our time.
      </p>  
	</div>
</div>

<!-- about-us -->
<div class="about-us">
  <div class="row">
    <div class="container">
      <div class="col s12 m12 l12 xl12 center-align about-us-right">
           <p>
              The courses and trainings are organized in compliance with the highest international standards. Our trainers continuously monitor the information and communication technology changing trends. Staying in touch with the latest innovations in ICT is very important to us so we could optimize our plan and program for each course individually. Depending on the area covered by the lectures, courses may last for up to 6 months. Our courses are organized to fit the schedule of fully employed students as well.
           </p>
      </div>
       <div class="col s12 m12 l12 xl12 center-align about-us-left">
            <img src="{{asset('images/home.png')}}" alt="home">
        </div>
        <div class="col s12 m12 l12 xl12 center-align about-us-right">
            <p>
              We are combining our experience and business operations with partner companies and through this form of synergy
              we have developed numerous creative solutions that we can offer to the ICT market.
              Lectures are designed to fulfil the needs of companies that are leaders in different areas of business. We are providing trainings of highest quality to ensure success on the market of ICT training and development.
            </p>
        </div>
    </div>

  </div>
</div>
<!-- end about-us -->

 @endsection