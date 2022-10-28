@extends('layouts.app')
@section('title', "User $user->id")
@section('content')

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<h2>Edit User</h2>
<a href="{{ route('users.index') }}"><button type="button">Back to users</button></a>
<br /><br />
<form action="{{ route('users.update', $user->id) }}" method="POST">
    @csrf
    @method('PUT')
    <strong>Name:</strong>
    <input type="text" name="name" value="{{ $user->name }}" class="form-control" placeholder="Name">
    <br />
    <strong>Email:</strong>
    <input type="text" name="email" value="{{ $user->email }}" placeholder="Email" />
    <br /><br />
    <button type="submit">Update</button>
</form>
@endsection
