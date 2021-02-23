@extends('templates/master',['title'=>'Administration'])
@section('content')
<section>
	<div>
		<h1>Administration - Message d'utilisateur</h1>
    <div class="jumbotron">
      <p>Message de {{ $contact->nom}} <span>{{($contact->created_at)->DiffForHumans()}} </span></p>
       <p>{{ $contact->message}}</p>
     <a href="mailto:{{$contact->email}}">{{$contact->email}}</a>
    </div>
    <a href="{{route('index.contact')}}"><button class="btn btn-success"><i class="fa fa-home"></i> Retour</button></a>
    <form 
     action="{{route('destroy.contact',$contact)}}"
     method="POST"
     class="d-inline"
     onsubmit ="return confirm('Etre vous sur de vouloir supprimer ce message?');"
    >
     @csrf
      @method('DELETE')
      <a href=""><button class="btn btn-warning"><i class="fa fa-trash"></i> Supprimer</button></a>
    </form>
    </div>
	</div>  
</section>
@endsection