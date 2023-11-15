@foreach($users as $user)
    <h2>{{ $user->name }}</h2>
    <p>Roles: {{ implode(', ', $user->roles->pluck('name')->toArray()) }}</p>
@endforeach