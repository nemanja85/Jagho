    <!-- header and nav -->
<div class="container nav-container">
	<nav>
		<div class="nav-wrapper">
     		<a href="/" class="brand-logo"><img src="{{ asset('images/logo.png') }}" alt="jakhom software"></a>
     		<a href="javascript:void(0)" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul class="right lang">
         <li>
                <a href="{{ url( 'sr' , [(collect(request()->segments())->last() != 'en') ? collect(request()->segments())->last() : '']) }}" class="srp">SRB</a>
          </li>
        </ul>
     		<ul class="right hide-on-med-and-down">
            <li><a href="{{ url('en') }}" id="">About US</a></li>
           <li class="drop"> Courses
               <ul id="drop-dowen">
               <li  class="sub-m" ><a href="{{ url('en',['page'=>'qa-course']) }}">QA Course</a></li>
             </ul>
           </li>
            <li><a href="{{ url('en',['page'=>'contact']) }}">Contact</a></li>
        </ul>
        <ul class="side-nav" id="mobile-demo">
            <li><i class="material-icons close-btn">close</i></li>
            <ul class="collapsible" data-collapsible="accordion">
                 <li><a href="{{ url('en', ['lang' => 'sr']) }}" id="">About Us</a></li>
                  <li>
                      <div class="collapsible-header">Courses<i class="material-icons  rotate">arrow_drop_down</i></div>
                      <div class="collapsible-body">
                           <a href="{{ url('en',['page'=>'qa-course']) }}">QA Course</a>
                      </div>
                  </li>
                  <li><a href="{{ url('en',['page'=>'contact']) }}">Contact</a></li>
            </ul>
            <span><li class="lang"><a href="{{ url('sr', [(collect(request()->segments())->last() != 'en') ? collect(request()->segments())->last() : '']) }}" id="active-menu" class="srp">SRB</a></li></span>
        </ul>
      </div>
  </nav>
</div>
<!-- end header and nav -->
