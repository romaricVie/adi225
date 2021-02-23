@extends('templates/master',['title'=>'Administration'])
@section('content')
<section>
	<div>
		<h1 class="text-center">Administrateur</h1>
		<h4>{{$contacts->count()}} message{{$contacts->count()>1 ? 's': ''}}</h4>
		 <div class="table-responsive">
      <table class="table">
             <thead class="thead-dark">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nom & Prenoms</th>
                  <th scope="col">téléphone</th>
                  <th scope="col">Email</th>
                  <th scope="col">Actions</th>
                 </tr>
                </thead>
                <tbody>
                    @foreach($contacts as $contact)
                    <tr>
                    <th scope="row">{{$contact->id}}</th>
                    <td>{{$contact->nom}}</td>
                    <td>{{$contact->tel}}</td>
                    <td><a href="mailto:{{$contact->email}}">{{$contact->email}}</a></td>
                    <td> 
                    <a href="{{route('show.contact',$contact)}}"><button class="btn btn-primary"><i class="fa fa-eye"></i>Voir message</button></a>
                     
                   </td>
                 </tr>
                 @endforeach
               </tbody>
            </table>
      </div>          
    </div>
	</div>
     
</section>
@endsection