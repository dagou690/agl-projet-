<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validation des Notes Finales</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        h1{
        color: brown;
        text-align: center;
        text-decoration: underline;
       }
    </style>
</head>
<body>
<div class="container mt-5">
    <h1>Validation des Notes Finales</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Titre</th>
            <th>Notes Attribuées</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($films as $film)
            <tr>
                <td>{{ $film->titre }}</td>
                <td>
                    @foreach($film->notes as $note)
                        {{ $note->note }} (par Jury ID: {{ $note->jury_member_id }})<br>
                    @endforeach
                </td>
                <td>
                    <form action="{{ route('president.validateNote', $film->id) }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="note_finale">Attribuer une Note Finale</label>
                            <input type="number" name="note_finale" class="form-control" min="0" max="10" required>
                        </div>
                        <button type="submit" class="btn btn-success">Valider</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
