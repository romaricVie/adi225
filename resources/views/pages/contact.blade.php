@extends('templates/master',['title'=>'Contacts'])
@section('content')
<h1 class="text-center text-muted">Nous contacter</h1>
<section>
	<div class="container">
	    <form method="POST" action="{{route('store.contact')}}" enctype="multipart/form-data">
         @csrf  
        <div class="row">
        	<div class="col-md-6">
            <!--Tel field-->
            <div class="form-group">
               <label for="nom" class="col-form-label">{{ __('Nom & Prénoms') }}</label>
               <input name="nom" id="nom" type="text" class="form-control @error('nom') is-invalid @enderror" value="{{ old('nom') ?? old('nom') }}" autocomplete="nom" placeholder="Entrez nom & prénoms" autofocus>
                    @error('nom')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
               </div>  
          </div>

          <div class="col-md-6">
            <!--Tel field-->
            <div class="form-group">
               <label for="tel" class="col-form-label">{{ __('Numero mobile') }}</label>
               <input name="tel" id="tel" type="text" class="form-control @error('tel') is-invalid @enderror" value="{{ old('tel') ?? old('tel') }}" placeholder="Entrez votre numero mobile" autocomplete="tel" autofocus>
                    @error('tel')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
               </div>  
          </div>

          <div class="col-md-6">
            <!--Tel field-->
            <div class="form-group">
               <label for="email" class="col-form-label">{{ __('E-mail') }}</label>
               <input name="email" id="email" type="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') ?? old('email') }}" placeholder="Entrez votre adresse email" autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
               </div>  
          </div>
          <div class="col-md-12">
            <!--Description field-->
             <div class="form-group">
                <label for="message" class="col-form-label">{{ __('Votre message *') }}</label>
                <textarea name="message" id="message" rows="5" cols="5" type="text" class="form-control @error('message') is-invalid @enderror"  autocomplete="message" placeholder="Message texte">{{ old('message') ?? old('message') }}</textarea>

                     @error('message')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div> 
          </div>
          <div class="col-md-6">           
        </div> 
         <div class="col-md-12">
            <button type="submit" class="btn btn-primary btn-lg">{{('J\'envoie message')}}</button>
        </div>
     </div>  
   </form>
     <p class="mt-2">Vous pouvez nous contacter pas e-mail: <a href="mailto:contact@adi225.com">contact@adi225.com</a></p>
</div>
</section>

@endsection