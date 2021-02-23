<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary navbar-static fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('welcome')}}">
        <img src="{{asset('/assets/images/logo1.jpg')}}" style="width:50px; height:50px;">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav m-auto">
          <li class="nav-item {{set_active_route('welcome')}}">
             <a class="nav-link" href="{{route('welcome')}}">{{ __('Accueil') }}</a>
          </li>
          <li class="nav-item  {{set_active_route('expertise')}}">
             <a class="nav-link" href="{{route('expertise')}}">{{ __('Expertises') }}</a>
          </li>
          <li class="nav-item  {{set_active_route('about')}}">
             <a class="nav-link" href="{{route('about')}}">{{ __('A propros') }}</a>
          </li> 
          <li class="nav-item {{set_active_route('contact')}}">
             <a class="nav-link" href="{{route('contact')}}">{{ __('Nous Contacter') }}</a>
          </li>
        </ul>
      </div>
    </div>
</nav>

