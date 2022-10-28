@extends('layouts.app')
@section('title', "User $user->id")

<a href="{{ route('users.index') }}"><button type="button">Back to users</button></a>
<br />

<h2>{{ $user->name }}</h2>
<h3>User details</h3>

<table border="1">
    <tr>
        <td><b>ID</b></td>
        <td>{{$user->id}}</td>
    </tr>
    <tr>
        <td><b>NAME</b></td>
        <td>{{$user->name}}</td>
    </tr>
    <tr>
        <td><b>EMAIL</b></td>
        <td>{{$user->email}}</td>
    </tr>
    <tr>
        <td><b>CREATED AT</b></td>
        <td>{{$user->created_at}}</td>
    </tr>
    <tr>
        <td><b>UPDATED AT</b></td>
        <td>{{$user->updated_at}}</td>
    </tr>
</table>
