@foreach($users as $user)
    <h2>{{ $user->name }}</h2>
    <p>{{ $user->profile->bio }}</p>
@endforeach
