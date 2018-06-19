<!-- header and nav -->
<div class="container nav-container">
  <nav>
    <div class="nav-wrapper">
        <a href="/" class="brand-logo"><img src="{{ asset('images/logo.png') }}" alt="jakhom software"></a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul class="right lang">
          <li><a href="{{ url('en',  [(collect(request()->segments())->last() != 'sr') ? collect(request()->segments())->last() : '']) }}" class="eng">ENG</a></li>
        </ul>
        <ul class="right hide-on-med-and-down">
            <li><a href="{{ url('sr') }}" id="">O nama</a></li>
            <li class="drop"> Kursevi
               <ul id="drop-dowen">
               <li  class="sub-m" ><a href="{{ url('sr', ['page'=>'qa-course']) }}">QA Kurs</a></li>
             </ul>
           </li>
            <li><a href="{{ url('sr', ['page'=>'contact']) }}">Kontakt</a></li>
        </ul>
        <ul class="side-nav" id="mobile-demo">
            <li><i class="material-icons close-btn">close</i></li>
              <ul class="collapsible" data-collapsible="accordion">
                  <li>
                      <a href="{{ url('sr') }}" id="">O nama</a>
                  </li>
                  <li>
                      <div class="collapsible-header">Kursevi<i class="material-icons  rotate">arrow_drop_down</i></div>
                      <div class="collapsible-body">
                            <a href="{{ url('sr', ['page'=>'qa-course']) }}">QA Kurs</a>
                      </div>
                  </li>
            <li><a href="{{ url('sr', ['page'=>'contact']) }}">Contact</a></li></ul>
            <li class="lang"><a href="{{ url('en',  [(collect(request()->segments())->last() != 'sr') ? collect(request()->segments())->last() : '']) }}" class="eng">ENG</a></li>
        </ul>
      </div>
  </nav>
</div>
<!-- end header and nav -->