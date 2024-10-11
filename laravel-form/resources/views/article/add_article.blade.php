@extends('../layouts/master')
@section('content')
<div class="container">
    <div class="row d-flex justify-content-center mt-5">
        <div class="card carte ">
            @if (session()->has('success'))
                <div class="alert alert-success mt-3">{{session()->get('success')}}</div>
            @endif
            <h2 class="text-center">Enregistrer un Article</h2>
            <form action={{route('enregistrer')}} method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label for="title">Titre</label>
                    <input type="text" class="form-control" id="title" name="titre" >
                    @error('titre')
                        <p class="text-danger">{{$message}}</p>
                    @enderror

                </div>
                <div class="form-group mb-3">
                    <label for="content">Desriptions</label>
                    <textarea class="form-control" id="content" rows="3" name="descriptions"></textarea>
                    @error('descriptions')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group mb-3">
                  <button type="submit" class="btn btn-success">Enregistrer</button>
                </div>
            </form>
        </div>
    </div>
</div>
    
@endsection