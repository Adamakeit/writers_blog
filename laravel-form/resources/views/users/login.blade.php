@extends('../../layouts/master')
@section('content')
<div class="container">
    <div class="row d-flex justify-content-center mt-5">
        <div class="card carte shadow">
            <form action={{route('login')}} method="POST">
                @csrf
                @if (session()->has('erreur'))
                    <div class="alert alert-danger mt-3">{{session()->get('erreur')}}</div>
                @endif
                <h1 class="text-center">Connexion</h1>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Adresse Email</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" name="email"  value="{{old('email')}}" >
                    @error('email')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Mot de passe</label>
                    <input type="password" class="form-control" id="exampleFormControlInput1" name="password"  value="{{old('password')}}" >
                    @error('password')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary">Se connecter</button>
                </div>
                    <p>Aucun compte ? <a href="{{route('register')}}">Inscrivez-vous</a></p>
            </form>
        </div>
    </div>
</div>
    
@endsection