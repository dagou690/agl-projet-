
<style>
    body {
        background-image: url('{{ asset('images/plan.jpeg') }}'); /* Utilise l'URL relative */
        background-size: cover;
        background-position: center;
        height: 100vh;
        margin: 0; /* Corrigé pour ne pas avoir de marge par défaut */
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        padding: 20px; 
    }

    /* Style du titre */
    h1 {
        text-align: center;
        color: #333;
        margin-bottom: 20px;
    }

    /* Style du message de succès */
    div[style="color: green;"] {
        background-color: #dff0d8;
        color: #3c763d;
        padding: 10px;
        border: 1px solid #d6e9c6;
        border-radius: 5px;
        margin-bottom: 20px;
        text-align: center; /* Centrer le message de succès */
    }

    /* Style du formulaire */
    form {
        background-color: #fff;
        padding: 40px;
        border-radius: 7px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        max-width: 400px;
        width: 100%; /* Assure que le formulaire ne dépasse pas la largeur de l'écran */
        margin: auto; /* Centre le formulaire */
    }

    /* Style des éléments du formulaire */
    div {
        margin-bottom: 17px;
    }

    /* Style des labels */
    label {
        display: block;
        margin-bottom: 7px;
        font-weight: bold;
    }

    /* Style des champs de saisie */
    input[type="text"],
    input[type="date"],
    input[type="time"] {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    /* Style du bouton de soumission */
    button {
        background-color: #5cb85c;
        color: white;
        padding: 10px 15px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
        width: 100%;
    }

    button:hover {
        background-color: #4cae4c;
    }
</style>

<!DOCTYPE html>
<html>
<head>
    <title>Créer une Projection</title>
</head>
<body>
    <h1>ETABLIR UN PLANNING</h1>

    <form action="{{ route('planning.store') }}" method="POST">
        @csrf
        
            <label for="film_id">Film :</label>
        <select id="film_id" name="film_id" required>
            @foreach ($films as $film)
                <option value="{{ $film->id }}">{{ $film->titre }}</option>
            @endforeach
        </select><br>
            <label for="jour">Jour :</label>
        <input type="date" id="jour" name="jour" required><br>


        <label for="heure">Heure :</label>
        <input type="time" id="heure" name="heure" required><br>

        <div >
                <label for="lieu" class="form-label">Lieu de Projection</label>
                <input type="text" class="form-control" id="lieu" name="lieu" placeholder="Saisissez le lieu de projection" required>
            </div>
        <button type="submit">PUBLIER</button>
    </form>
</body>
</html>
