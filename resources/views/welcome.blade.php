<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<header>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <img class="logo" src="{{ asset('LCD-CI-removebg-preview (3).png') }}" alt="">
    <ul class="liste">
        <li><a href="">Accueil</a></li>
        <li><a href="">A propos</a></li>
        <li> <a href="">Contact</a></li>
    </ul>
    <p>Doc à Tunis est le nom attribué au <br/> festival international des films documentaires
en Tunisie. <br/> Cette manifestation est entièrement dédiée au genre<br/> 
cinématographique documentaire et vise<br/>  le développement social et culturel de la
Tunisie. 
</p>

        <i class="material-icons" style="font-size:36px;color:red; border-radius:50px; border:solid red">person</i>
       <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: red; margin-top:-80px; margin-left:80%; border:none">
    Dropdown button
  </button>
  <ul class="dropdown-menu dropdown-menu-dark" style="position:absolute; background-color:black">
    <li ><a class="dropdown-item active" href="#">Action</a></li>
    <li><a class="dropdown-item" href="#">Another action</a></li>
    <li><a class="dropdown-item" href="#">Something else here</a></li>
    <li><a class="dropdown-item" href="#">Something else here</a></li>
    <div></div>
   
  </ul>
</div>
      <button class="film-button">FILMS</button>
      <button class="planning-button">PLANNING</button>
    

  

</header>
<body>
    
    <div class="a-propos">
    <h1 class="titre-propos">A PROPOS</h1>
        <div class="decoration-propos"></div>
      
<div id="carouselExampleIndicators" class="carousel slide" style="margin-top: 100px;width:100%;height:400px; background-color:red;background: linear-gradient(to right, red 40%, black 80%);">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" style="height:400px; width:50%;">
      <img src="{{ asset('R (2).jpeg') }}" class="d-block w-100" alt="..." height="400px" >
      <h1 >DOC A TUNIS</h1>
      <p>​Doc à Tunis est bien plus qu’un simple festival de films documentaires ; c’est une célébration unique du cinéma et de la culture en Tunisie. Fondé dans le but de mettre en lumière le genre documentaire, souvent sous-estimé, cet événement annuel rassemble des cinéastes, des amateurs de cinéma et des professionnels de l'industrie du monde entier pour explorer des récits captivants et des réalités universelles.</p>
    </div>
    <div class="carousel-item" style="height:400px; width:50%;">
      <img src="{{ asset('R (1).jpeg') }}" class="d-block w-100" alt="..." height="400px" >
      <h1>DOC A TUNIS</h1>
      <p>​Rejoindre Doc à Tunis, c’est plonger dans un univers d’histoires authentiques, de créations audacieuses, et de perspectives enrichissantes. C’est une expérience unique qui célèbre le pouvoir du documentaire en tant qu'outil de changement, de compréhension et d’inspiration. Que vous soyez cinéaste, passionné de cinéma ou simplement curieux, Doc à Tunis vous invite à partager cette aventure exceptionnelle au cœur de la Tunisie. </p>
    </div>
    <div class="carousel-item"style="height:400px; width:50%;">
      <img src="{{ asset('R.jpeg') }}" class="d-block w-100" alt="..."height="400px">
      <h1>DOC A TUNIS</h1>
      <p>​Depuis sa création, Doc à Tunis s’est imposé comme une plateforme incontournable pour les documentaristes, leur offrant l’opportunité de présenter leurs œuvres à un public diversifié, curieux et passionné. Le festival met l'accent sur des thématiques sociales, culturelles, et humaines, reflétant les défis et les espoirs de nos sociétés modernes, tout en célébrant la richesse et la diversité des perspectives locales et internationales.</p>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true" style="margin-right: 50%;"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true" style="margin-left: 50%;"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
<div class="film-planning">
    <div class="film"></div>
    <div class="planning"></div>
</div>
<div class="nos jury" style="height: 500px;">

</div>

    
</body>
<footer>

</footer>
</html>