@extends('layouts.app')
@section('title','Detalhes')
@section('content')
    <h1> Detalhes de usuários </h1>
    <ul>
    <li> {{$user->name}} </li>
    <li> {{$user->email}} </li>
    <li> {{$user->created_at}} </li>
    </ul>
@endsection