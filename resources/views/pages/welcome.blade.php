@extends('templates/master',['title'=>'Bienvenue'])
@section('content')
<section id="main-section">
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{asset('/assets/images/logo1.jpg')}}" class="d-block w-100" alt="..." style="height:500px;">
      <div class="carousel-caption d-none d-md-block">
        <h5>Le logo ADI</h5>
        <p>Agence Digital Ivoirienne</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{asset('/assets/images/dev.jpg')}}" class="d-block w-100" alt="..." style="height:500px;">
      <div class="carousel-caption d-none d-md-block">
        <h5>Developpement d'application web et mobile</h5>
        <p>Le metier du digital</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{asset('/assets/images/account.jpg')}}" class="d-block w-100" alt="..." style="height:500px;">
      <div class="carousel-caption d-none d-md-block">
        <h5>Account manager</h5>
        <p>Account manager.</p>
      </div>
    </div>

    <div class="carousel-item">
      <img src="{{asset('/assets/images/info.jpg')}}" class="d-block w-100" alt="..." style="height:500px;">
      <div class="carousel-caption d-none d-md-block">
        <h5>Infographie</h5>
        <p>Creation d'image, de logo, etc...</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</section>
<section>
	<div class="mt-5">
    	<div class="jumbotron">
    		<h2 class="text-muted">Bienvenue</h2>
    		<p><strong>Agence Digital Ivoirienne (ADI)</strong> veut comprendre vos enjeux business.En y apportant une réponse digitale sur-mésure et pramatique.<br>Parce que vos enjeux de notoriété, de développement commercial ou de vente passent par le digital, notre responsabilté est de comprendre rapidement vos problematiques et d'y répondre concrètemen par un dispositif digital sur-mesure fondé sur notre expérience.</p>
    	</div>
    </div>
</section>	
@endsection