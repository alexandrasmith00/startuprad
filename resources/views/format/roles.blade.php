@foreach ($user->roles as $role)
    {{ $role->name }}, 
@endforeach