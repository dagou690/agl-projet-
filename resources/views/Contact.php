<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Page de Contact</title>
  <link rel="stylesheet" href="Contacts.css">
</head>
<body>
  <header>
    <h1>Contactez-Nous</h1>
  </header>

  <main>
    <section class="contact-form">
      <h2>Envoyez-nous un message</h2>
      <form action="#" method="POST">
        <div class="form-group">
          <label for="name">Nom :</label>
          <input type="text" id="name" name="name" placeholder="Votre nom" required>
        </div>

        <div class="form-group">
          <label for="email">Email :</label>
          <input type="email" id="email" name="email" placeholder="Votre email" required>
        </div>

        <div class="form-group">
          <label for="message">Message :</label>
          <textarea id="message" name="message" placeholder="Votre message" rows="5" required></textarea>
        </div>

        <button type="submit">Envoyer</button>
      </form>
    </section>

    <section class="contact-info">
      <h2>Informations de Contact</h2>
      <p>Adresse : 123 Rue de la médine, Abidjan, Cote d'ivoire</p>
      <p>Téléphone : +225 01 50 20 53 42/05 45 66 01 65 /07 97 62 80 18</p>
      <p>Email : cherifaidarahabiba@gmail.com</p>
    </section>
  </main>
</body>
</html>
