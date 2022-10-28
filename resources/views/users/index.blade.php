@extends('layouts.app')
@section('title', '- Users')
@section('content')
<h2>Users</h2>

<a href="{{ route('users.create') }}"><button type="button">Create New user</button></a>

<br />
<br />


<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Action</th>
    </tr>
    @foreach ($users as $user)
    <tr>
        <td><a href="{{ route('users.show', $user->id) }}">{{ $user->id }}</a></td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>
            <a href="{{ route('users.show', $user->id) }}">Show</a>
            <a href="{{ route('users.edit', $user->id) }}">Edit</a>
            <form action="{{ route('users.destroy', $user->id)}}" method="post" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
            </form>
    </tr>
    @endforeach


</table>

<br />

{{ $users->links() }}
@endsection
