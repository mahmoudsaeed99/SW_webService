@foreach($users as $user)
	
<h2>{{$user->username}}</h2>
<h2>{{$user->email}}</h2>
<h2>{{$user->pass}}</h2>
<h2>{{$user->type}}</h2>

@endforeach	


