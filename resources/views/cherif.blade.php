 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion de la planification du festival</title>
    <link rel="stylesheet" href="planning.css">
</head>
<body>
    <header>
        <h1>GESTION DE LA PLANIFICATION DU FESTIVAL</h1>
    </header>
    <main>
        <!-- Login Section -->
        <section id="login">
            <h2>Connectez-Vous</h2>
            <form id="login-form">
                <label for="password">Mot de passe:</label>
                <input type="password" id="password" name="password" required>
                <button type="submit">Connectez-Vous</button>
            </form>
            <p id="login-message">Veuillez vous connecter pour gérer la planification du festival.</p>
        </section>
        <!-- Alternative Scenario 1: Connexion echouée -->
        <section id="login-failed" style="display:none;">
            <h2>La connexion a echouée</h2>
            <p>Identifiants de connexion incorrects. Veuillez réessayer.</p>
            <a href="#login">Retour à la connexion </a>
        </section>
         <!-- Planning Management Section -->
        <section id="planning-management" style="display:none;">
            <h2>Gérer la planification</h2>
            <p id="welcome-message">Bienvenue, utilisateur responsable !</p>
            <button class="action-button">Publier le planning</button>
            <button class="action-button">Modifier la planification</button>
            <button class="action-button">Supprimer le planning</button>

            <!-- Publier Planning Section -->
            <div id="publish-section" style="display:none;">
                <h3>Sélectionnez un planning à publier</h3>
                <input type="file" id="planning-file" accept=".txt,.csv">
                <button class="action-button">PUBLIER</button>
            </div>
        </section>
        <!-- Alternative Scenario 2: Modifier Planning -->
        <section id="modify-planning" style="display:none;">
            <h3>Modifier Planning</h3>
            <form action="#" method="post">
                <label for="date">Jour:</label>
                <input type="date" id="date" name="date" required>
                <label for="time">Heure :</label>
                <input type="time" id="time" name="time" required>
                <label for="location">Lieu de projection :</label>
                <input type="text" id="location" name="location" required>
                <button type="submit">Enregistrer les modifications</button>
            </form>
        </section>

        <!-- Alternative Scenario 2: Supprimer Planning -->
        <section id="delete-planning" style="display:none;">
            <h3>Supprimer Planning</h3>
            <form action="#" method="post">
                <label for="planning">Selectionez le  Planning à supprimer :</label>
                <select id="planning" name="planning">
                    <option value="planning1">Planning 1</option>
                    <option value="planning2">Planning 2</option>
                </select>
                <button type="submit"> SUPPRIMER </button>
            </form>
        </section>
                <!-- Pre-condition Section -->
                <section id="precondition" style="display:none;">
            <h3>Precondition</h3>
            <p>Tous les utilisateurs responsables doivent disposer d’un compte et le système doit être opérationnel pour gérer la planification.</p>
        </section>

        <!-- Post-condition Section -->
        <section id="post-condition" style="display:none;">
            <h3>Post-condition</h3>
            <p>The user is successfully connected and redirected to the planning management page. The connection date and time are recorded.</p>
        </section>

    </main>

    <footer>
        <p>© Système de gestion de la planification du festival Doc à Tunis</p>
    </footer>
</body>
</html>

