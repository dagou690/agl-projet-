<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enregistrement d'un Film</title>
    <style>
        * {
  padding: 0;
  margin: 0;
  color: #1a1f36;
  box-sizing: border-box;
  word-wrap: break-word;
  font-family: -apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Ubuntu,sans-serif;
}

body {
  background-color: #f4f7fa;
  color: #333;
  display: flex;
  justify-content: center;
  align-items: flex-start; 
  height: 100vh;
  margin: 0;
  padding-top: 40px;
  min-height: 100%;
}

h1 {
  letter-spacing: -1px;
}

a {
  color: #5469d4;
  text-decoration: unset;
}

.login-root {
  background: #fff;
  display: flex;
  width: 100%;
  min-height: 100vh;
  overflow: hidden;
}

.form-container {
  background-color: #fff;
  box-shadow: rgba(60, 66, 87, 0.12) 0px 7px 14px 0px, rgba(0, 0, 0, 0.12) 0px 3px 6px 0px;
  border-radius: 4px;
  width: 100%;
  max-width: 800px;
  padding: 20px;
  box-sizing: border-box;
}

fieldset {
  border: 2px solid #4A90E2;
  border-radius: 8px;
  padding: 20px;
  margin-bottom: 20px;
}

legend {
  font-size: 24px;
  color: #4A90E2;
  font-weight: bold;
  text-align: center;
  margin-bottom: 20px;
}

h3 {
  color: #4A90E2;
  font-size: 16px;
  margin-top: 15px;
  margin-bottom: 10px;
}

input, textarea {
  width: 100%;
  padding: 8px 16px;
  font-size: 16px;
  line-height: 28px;
  min-height: 44px;
  border: unset;
  border-radius: 4px;
  background-color: rgb(255, 255, 255);
  box-shadow: rgba(60, 66, 87, 0.16) 0px 0px 0px 1px, rgba(0, 0, 0, 0) 0px 0px 0px 0px;
  margin-bottom: 15px;
}

textarea {
  height: 120px;
  resize: vertical;
}

button {
  background-color: #5469d4;
  color: #fff;
  padding: 12px 20px;
  border: none;
  border-radius: 5px;
  font-size: 16px;
  cursor: pointer;
  width: 100%;
  margin-top: 20px;
  box-shadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0.12) 0px 1px 1px 0px, rgb(84, 105, 212) 0px 0px 0px 1px;
}

button:hover {
  background-color: #357ABD;
}

.success-message {
  background-color: #4CAF50;
  color: white;
  padding: 10px;
  border-radius: 5px;
  margin-bottom: 20px;
  text-align: center;
}

.error-message {
  background-color: #F44336;
  color: white;
  padding: 10px;
  border-radius: 5px;
  margin-bottom: 20px;
  text-align: center;
}

.back-button {
  background-color: #FFC107;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 5px;
  font-size: 16px;
  width: 100%;
  cursor: pointer;
}

.back-button:hover {
  background-color: #FF9800;
}

.field-checkbox input {
  width: 20px;
  height: 15px;
  margin-right: 5px;
  box-shadow: unset;
}

.field-checkbox label {
  display: flex;
  align-items: center;
  margin: 0;
}

.animationRightLeft {
  animation: animationRightLeft 2s ease-in-out infinite;
}

.animationLeftRight {
  animation: animationLeftRight 2s ease-in-out infinite;
}


@keyframes animationLeftRight {
  0% {
    transform: translateX(0px);
  }
  50% {
    transform: translateX(1000px);
  }
  100% {
    transform: translateX(0px);
  }
}

@keyframes animationRightLeft {
  0% {
    transform: translateX(0px);
  }
  50% {
    transform: translateX(-1000px);
  }
  100% {
    transform: translateX(0px);
  }
}

    </style>
</head>
<body>
<div class="form-container">
        @if(session('success'))
            <div class="success-message">
                {{ session('success') }}
            </div>
        @endif
        @if($errors->any())
            <div class="error-message">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if(isset($film) && $film->cover)
            <div class="cover-preview">
                <h3>Image de Couverture Actuelle :</h3>
                <img src="{{ asset('storage/' . $film->cover) }}" alt="Image de couverture" style="width: 100%; max-width: 300px; border-radius: 5px; margin-bottom: 20px;">
            </div>
        @endif



        <form action="{{ route('film.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <fieldset>
                <legend>Enregistrement de Film</legend>

                <h3>Informations sur le Film</h3>
                <input type="text" name="code_film" placeholder="Code Film" required>
                <input type="text" name="titre" placeholder="Titre" required>
                <input type="date" name="date_sortie" required>
                <textarea name="sujet" placeholder="Sujet" required></textarea>

                <!-- Champ pour l'image de couverture -->
                <h3>Image de Couverture</h3>
                <input type="file" name="cover" accept="image/*">

                <h3>Informations sur le Réalisateur</h3>
                <input type="text" name="code_realisateur" placeholder="Code Réalisateur" required>
                <input type="text" name="nom_realisateur" placeholder="Nom Réalisateur" required>
                <input type="text" name="prenom_realisateur" placeholder="Prénom Réalisateur" required>
                <input type="date" name="date_naissance_realisateur" required>

                <h3>Informations sur le Producteur</h3>
                <input type="text" name="code_producteur" placeholder="Code Producteur" required>
                <input type="text" name="nom_producteur" placeholder="Nom Producteur" required>
                <input type="text" name="prenom_producteur" placeholder="Prénom Producteur" required>
                <input type="date" name="date_naissance_producteur" required>

                <button type="submit">Enregistrer</button>
            </fieldset>
        </form>
    </div>
</body>
</html>
