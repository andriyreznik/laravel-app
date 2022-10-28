@extends('layouts.app')
@section('mytitle', 'All Company')

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<h2>Add New User</h2>
<a href="{{ route('users.index') }}"><button type="button">Back to users</button></a>
<br />

<form action="{{ route('users.store') }}" method="POST">
    @csrf

    <strong>Name:</strong>
    <input type="text" name="name" placeholder="Full name" />
    <br />

    <strong>Email:</strong>
    <input type="text" name="email" placeholder="example@domain.com" />
    <br />

    <strong>Password:</strong>
    <input type="password" name="password" />
    <br />

    <button type="submit">Create</button>
</form>
