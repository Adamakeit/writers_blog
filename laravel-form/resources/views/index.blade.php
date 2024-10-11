@extends('./layouts/master')
@section('content')
    <div class="container my-4">
        <div class="row">
            <h1 class="text-center mt-2">Bienvenue sur la page Writersblog 🖋️</h1>
            <p class="text-center">Nous sommes ravis de vous accueillir ici, un espace dédié à l’exploration, au partage et à la découverte de sujets passionnants. Que vous soyez un visiteur régulier ou que ce soit votre première visite, nous espérons que vous trouverez ici des articles enrichissants qui nourriront votre curiosité.</p>
            <hr>
            @forelse ($articles as $article)
                <div class="card mt-3 shadow">
                    <div class="card-header">
                        <h3>{{$article->titre}}</h3>
                    </div>
                    <div class="card-body">
                        <p>{{$article->descriptions}}</p>
                    </div>
                    <div class="card-footer d-flex justify-content-between">
                        <p class="italic">Publier le: {{$article->created_at}}</p>
                        <a href="/enregistrer/{{$article->id}}" class="btn btn-primary">Lire la suite <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            @empty
                <p class="text-danger">Aucun Article disponible</p>
            @endforelse
        </div>
    </div>
    
@endsection