@extends('../../layouts/master')
@section('content')
    <div class="container ">
        <div class="row d-flex justify-content-center">
            <div class="card carte shadow mt-4">
                <div class="card-header">
                    <h2 class="text-center">{{$recuparticles->titre}}</h2>
                </div>
                <div class="card-body">
                    <p class="text-center">{{$recuparticles->descriptions}}</p>
                </div>
                @if (Auth::user()->id == $recuparticles->users_id)
                    @auth
                    <div class="card-footer d-flex justify-content-center ">
                        <a href="/edit/{{$recuparticles->id}}" class="btn btn-warning me-3">Editer</a>
                    <form action="/delete/{{$recuparticles->id}}" method="post">
                        @csrf
                        @method('delete')
                        <a href="/edit/{{$recuparticles->id}}" ><button class="btn btn-danger" type="submit">Supprimer</button></a>
                    </form>
                    </div>
                    @endauth
                @endif
            </div>
        </div>
    </div>
@endsection