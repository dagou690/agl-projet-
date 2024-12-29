<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactez-nous</title>
    </head>
    <style>
       /* Général */
/* Général */
body {
    background-image: url('{{ asset('images/a.jpeg') }}'); /* Utilise l'URL relative */
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

/* Titre principal */
h1 {
    font-size: 3rem;
    color: #2c3e50; /* Bleu foncé */
    margin-bottom: 1.5rem;
    font-weight: 700;
    text-align: center;
    letter-spacing: 1px;
}

/* Formulaire */
form {
    background-color: #ffffff; /* Fond blanc */
    padding: 70px;
    border-radius: 17px;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
    margin: 20px 0;
    transition: transform 0.3s ease-in-out;
}

form:hover {
    transform: translateY(-5px);
}

/* Champs de formulaire */
.form-label {
    font-weight: 800;
    color: #333; /* Texte sombre */
    margin-bottom: 9px;
}

.form-control {
    border: 2px solid #333;
    border-radius: 10px;
    padding: 15px;
    font-size: 1.0rem;
    transition: border-color 0.3s, box-shadow 0.1s;
}

.form-control:focus {
    border-color: #3498db; /* Couleur bleue à la sélection */
    box-shadow: 0 0 10px rgba(52, 152, 219, 0.3);
}

/* Bouton */
.btn-primary {
    background-color: #3498db;
    border: none;
    font-weight: 500;
    text-transform: uppercase;
    padding: 14px 20px;
    border-radius: 20px;
    font-size: 1.0rem;
    color: #ffffff;
    transition: background-color 0.3s, box-shadow 0.3s;
}

.btn-primary:hover {
    background-color: #2980b9; /* Couleur bleue plus foncée */
    box-shadow: 0px 12px 25px rgba(41, 128, 185, 0.3);
}

/* Alertes */
.alert-success {
    font-weight: bold;
    background-color: #dff0d8;
    color: #3c763d;
    border-radius: 12px;
    padding: 20px;
    margin-bottom: 20px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

/* Conteneur */
.container {
    max-width: 700px; 
    margin: 50px auto;
}

/* Responsive */
@media (max-width: 768px) {
    h1 {
        font-size: 2.5rem;
    }

    form {
        padding: 20px;
    }

    .form-control {
        font-size: 1rem;
        padding: 12px;
    }

    .btn-primary {
        font-size: 1rem;
        padding: 12px 25px;
    }
}
</style>

<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Contactez-nous</h1>

        <!-- Affichage du message de succès -->
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <!-- Formulaire de contact -->
        <form action="{{ route('contact.store') }}" method="POST">
            @csrf
            <!-- Nom -->
            <div class="mb-3">
                <label for="nom" class="form-label">Nom complet</label>
                <input type="text" class="form-control" id="nom" name="nom" placeholder="Entrez votre nom complet" required>
            </div>

            <!-- Email -->
            <div class="mb-3">
                <label for="email" class="form-label">Adresse Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Entrez votre email" required>
            </div>

            <!-- Sujet -->
            <div class="mb-3">
                <label for="sujet" class="form-label">Sujet</label>
                <input type="text" class="form-control" id="sujet" name="sujet" placeholder="Entrez le sujet de votre message">
            </div>

            <!-- Message -->
            <div class="mb-3">
                <label for="message" class="form-label">Votre Message</label>
                <textarea class="form-control" id="message" name="message" rows="5" placeholder="Écrivez votre message ici..." required></textarea>
            </div>

            <!-- Bouton d'envoi -->
            <div class="text-center">
                <button type="submit" class="btn btn-primary btn-lg">Envoyer</button>
            </div>
        </form>
    </div>

    
</body>
</html>