@extends('theme.base')

@section('content')
    <div class="container py-5 text-center">
        <h1>Hola mundo!</h1>
        <form action="{{route('client.index')}}">
            <button type="submit" class="btn btn-primary" >Ver Clientes</button>
        </form>
    </div>
@endsection