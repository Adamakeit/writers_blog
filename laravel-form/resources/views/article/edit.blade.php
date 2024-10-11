@extends('../layouts/master')
@section('content')
<div class="container">
    <div class="row d-flex justify-content-center mt-5">
        <div class="card carte ">
            @if (session()->has('success'))
                <div class="alert alert-success mt-3">{{session()->get('success')}}</div>
            @endif
            <h2 class="text-center">Modifier un Article</h2>
            <form action="/update/{{$article->id}}" method="POST">
                @csrf
                @method('put')
                <div class="form-group mb-3">
                    <label for="title">Titre</label>
                    <input type="text" class="form-control" id="title" name="titre" value="{{$article->titre}}" >
                    @error('titre')
                        <p class="text-danger">{{$message}}</p>
                    @enderror

                </div>
                <div class="form-group mb-3">
                    <label for="content">Desriptions</label>
                    <textarea class="form-control" id="content" rows="5" name="descriptions" >{{$article->descriptions}}</textarea>
                    @error('descriptions')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group mb-3">
                  <button type="submit" class="btn btn-success">Editer</button>
                </div>
            </form>
        </div>
    </div>
</div>
    
@endsection