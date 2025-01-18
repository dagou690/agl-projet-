<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogue des Films</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        
       img{
        width: 100%;
        height: 300px;
        object-fit: cover;
        
        transition: transform 0.3s ease;
       }
       h1{
        color: brown;
        text-align: center;
        text-decoration: underline;
       }
       .delete-button {
    margin-top: 20px; /* ou ajuster la valeur en fonction de l'espace désiré */
}
    </style>
</head>
<body>
    
<div class="container mt-5">
    <h1>Catalogue des Films</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="row">
        @foreach($films as $film)
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="{{ asset('storage/' . $film->cover) }}" class="card-img-top" alt="{{ $film->titre }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $film->titre }}</h5>
                        <p class="card-text">Code : {{ $film->code }}</p>
                        <form action="{{ route('jury.submitNote', $film->id) }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="note" class="form-label">Attribuer une Note (0-10)</label>
                                <input type="number" name="note" id="note" class="form-control" min="0" max="10" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Enregistrer la Note</button>
                        </form>
                        <!-- Formulaire pour supprimer le film -->
                        <form action="{{ route('films.destroy', $film->id) }}" method="POST" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce film ?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger delete-button">Supprimer</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
</body>
</html>
