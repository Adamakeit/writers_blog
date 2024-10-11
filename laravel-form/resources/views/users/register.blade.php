@extends('../../layouts/master')
@section('content');
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="card carte shadow">
            <form action={{route('register')}} method="POST">
                @csrf
                @if (session()->has('success'))
                    <div class="alert alert-success mt-3">{{session()->get('success')}}</div>
                @endif
                <h1 class="text-center">Inscription</h1>
                <div class="mb-3">
                    <label for="Nom" class="form-label">Nom </label>
                    <input type="text" class="form-control" id="Nom" name="nom" value="{{old('nom')}}" >
                    @error('nom')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
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
                    <button class="btn btn-primary">S'inscrire</button>
                </div>
                    <p>Deja un compte ? <a href="{{route('login')}}">Connectez-vous</a></p>
            </form>
        </div>
    </div>
</div>
    
@endsection