@extends('layouts.app')
@section('title','listagem')
@section('content')
    <h1>Listagem de Usuários
        (<a href="{{route('users.create') }}"> + </a>)
    </h1>
    <ul>
        @foreach($users as $user)
    <li>
        {{$user->name}} - {{$user->email}} - {{$user->created_at}}

        |<a href="{{ route('users.show', $user->id)}}">Detalhes</a>
        |<a href="{{ route('users.edit', $user->id)}}">Editar</a>
    </li>    
        @endforeach    
    </ul>    
@endsection
