<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('templates/partials/_header')
<body>
@include('templates/partials/_nav')
<section id='main-content' class="container">
	 @if(session('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong>{{session('success')}}!</strong>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
             </div>
             @endif
	@yield('content')
</section>
@include('templates/partials/_footer')
</body>
</html>