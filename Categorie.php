<?php
  session_start();
  if(!$_SESSION['password']){
    header('Location: Accueil.php');
  }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="Categorie.css">
  <title>Ma page d'accueil</title>
</head>
<body>
 <header>

  <h1><img src="logo2.png" class="logo"> Bienvenue chez Pharma Express</h1>
  <div class="search-container">
    <form action="/search">
      <input type="text" id="search" placeholder="Rechercher..." name="search">
      <button type="submit" id="submit">Go</button>
    </form>
  </div>
 </header>
 <nav id="menu">
      <ul>
        <li><a href="Index.php">Accueil</a></li> 
        <li><a href="Categorie.php">Catégorie</a></li>
        <li><a href="panier.php">Panier</a></li>
       	<li><a href="Deconnexion.php">Deconnexion</a></li>
      </ul>
 </nav>
 <main>
  <section>
    <div class="section">
      <div class="section2">
        <h1><p align="center"> ANTIBIOTIQUES ET ANTIBACTERIENS <p></h1>
        <div class="container">
          <div class="items">
            <div class="img img1"><img src="01.png" alt=""></div>
            <div class="name">AMOXILINE</div>
            <div class="price">$5</div>
            <div class="info">Gélules voie Orale 500 mg, Adulte et enfant + 6 ans.</div>
          </div>
          <div class="items">
            <div class="img img2"><img src="02.png" alt=""></div>
            <div class="name">AUGMENTIN</div>
            <div class="price">$6.34</div>
            <div class="info">Augmentin 250 mg.</div>
          </div>
          <div class="items">
            <div class="img img3"><img src="03.png" alt=""></div>
            <div class="name">OFLOCET</div>
            <div class="price">$9</div>
            <div class="info">Voie Orale 200 mg, 10 comprimés pelliculés sécables.</div>
          </div>
          <div class="items">
            <div class="img img1"><img src="04.png" alt=""></div>
            <div class="name">DOXYLIS</div>
            <div class="price">$9.1</div>
            <div class="info">100 mg,30 comprimés sécables.</div>
          </div>
        </div>
          <h1><p align="center"> ANTI INFLAMMATOIRE <p></h1>
        <div class="container">
          <div class="items">
            <div class="img img1"><img src="05.png" alt=""></div>
            <div class="name">PIASCLEDINE</div>
            <div class="price">$5</div>
            <div class="info">Traitement symtomatique a effet différé de l'arthrose du genou.</div>
          </div>
          <div class="items">
            <div class="img img2"><img src="06.png" alt=""></div>
            <div class="name">IBUPROFENE</div>
            <div class="price">$6.34</div>
            <div class="info">Lysinate d'ibuprofène 400 mg, voie orale.</div>
          </div>
          <div class="items">
            <div class="img img3"><img src="07.png" alt=""></div>
            <div class="name">GENACOL</div>
            <div class="price">$9</div>
            <div class="info">Aide à réduire la douleur et l'inflamation des articulations.</div>
          </div>
        </div>
        <h1><p align="center"> ANTIVIRAUX <p></h1>
        <div class="container">
          <div class="items">
            <div class="img img1"><img src="08.png" alt=""></div>
            <div class="name">FERVEX</div>
            <div class="price">$5</div>
            <div class="info">200 mg Adulte.</div>
          </div>
          <div class="items">
            <div class="img img2"><img src="09.png" alt=""></div>
            <div class="name">PAXLOVID</div>
            <div class="price">$6.34</div>
            <div class="info">150 mg + 100 mg, Comprimés.</div>
          </div>
      </div>
        <h1><p align="center"> CARDIOLOGIE <p></h1>
        <div class="container">
          <div class="items">
            <div class="img img1"><img src="10.png" alt=""></div>
            <div class="name">CARDIOVALAM H</div>
            <div class="price">$5</div>
            <div class="info">30 Comprimés, voie orale.</div>
          </div>
          <div class="items">
            <div class="img img2"><img src="11.png" alt=""></div>
            <div class="name">CARDIURINE</div>
            <div class="price">$6.34</div>
            <div class="info">Voie Orale.</div>
          </div>
          <div class="items">
            <div class="img img2"><img src="12.png" alt=""></div>
            <div class="name">PULSAGEN</div>
            <div class="price">$6.34</div>
            <div class="info">50 mg.</div>
          </div>
          <div class="items">
            <div class="img img2"><img src="13.png" alt=""></div>
            <div class="name">DUDREX</div>
            <div class="price">$6.34</div>
            <div class="info"></div>
          </div>
          <div class="items">
            <div class="img img2"><img src="14.png" alt=""></div>
            <div class="name">DEXOREN</div>
            <div class="price">$6.34</div>
            <div class="info">20 Comprimés, Digoxine 0,25 mg.</div>
          </div>
      </div>
      <h1><p align="center"> DERMATOLOGIE <p></h1>
        <div class="container">
          <div class="items">
            <div class="img img1"><img src="15.png" alt=""></div>
            <div class="name">HEXOMEDINE</div>
            <div class="price">$5</div>
            <div class="info">Antiseptique affections cutanées.</div>
          </div>
          <div class="items">
            <div class="img img2"><img src="16.png" alt=""></div>
            <div class="name">ALOPEXY</div>
            <div class="price">$6.34</div>
            <div class="info">chute de cheveux modérée.</div>
          </div>
          <div class="items">
            <div class="img img2"><img src="17.png" alt=""></div>
            <div class="name">ECONAZOLE</div>
            <div class="price">$6.34</div>
            <div class="info">1% crème.</div>
          </div>
          <div class="items">
            <div class="img img2"><img src="18.png" alt=""></div>
            <div class="name">BENPANTHEN</div>
            <div class="price">$6.34</div>
            <div class="info">Pommade.</div>
          </div>
        </div>
        <h1><p align="center"> DIETETIQUE <p></h1>
        <div class="container">
          <div class="items">
            <div class="img img1"><img src="19.png" alt=""></div>
            <div class="name">PERCUTAFEINE</div>
            <div class="price">$5</div>
            <div class="info">Caféine 5%.</div>
          </div>
          <div class="items">
            <div class="img img2"><img src="20.png" alt=""></div>
            <div class="name">FORMOLINE</div>
            <div class="price">$6.34</div>
            <div class="info">Comprimés.</div>
          </div>
        </div>
        <h1><p align="center"> OPHTALMOLOGIE <p></h1>
        <div class="container">
          <div class="items">
            <div class="img img1"><img src="21.png" alt=""></div>
            <div class="name">BORAX/ACIDE BORIQUE</div>
            <div class="price">$5</div>
            <div class="info">Solutiion pour lavage ophtalmique.</div>
          </div>
          <div class="items">
            <div class="img img2"><img src="22.png" alt=""></div>
            <div class="name">ARTELAC</div>
            <div class="price">$6.34</div>
            <div class="info">1,6 mg / 0,5 ml.</div>
          </div>
          <div class="items">
            <div class="img img2"><img src="23.png" alt=""></div>
            <div class="name">TRAVADROP</div>
            <div class="price">$6.34</div>
            <div class="info">40 mg, 2,5 ml.</div>
          </div>
          <div class="items">
            <div class="img img2"><img src="24.png" alt=""></div>
            <div class="name">DACUDOSE</div>
            <div class="price">$6.34</div>
            <div class="info"></div>
          </div>
        </div>
        <h1><p align="center"> UROLOGIE <p></h1>
        <div class="container">
          <div class="items">
            <div class="img img1"><img src="25.png" alt=""></div>
            <div class="name">ACIRYL</div>
            <div class="price">$5</div>
            <div class="info">Capsule Oral route.</div>
          </div>
          <div class="items">
            <div class="img img2"><img src="26.png" alt=""></div>
            <div class="name">PROSTAMED</div>
            <div class="price">$6.34</div>
            <div class="info">5 mg.</div>
          </div>
          <div class="items">
            <div class="img img2"><img src="27.png" alt=""></div>
            <div class="name">TAMSULOSINE</div>
            <div class="price">$6.34</div>
            <div class="info">Chlorhydrate de tamsulosine.</div>
          </div>
    </div>
 </section>
 </main>
  <footer>
    <div class="footer0">
      <h1>PHARMA EXPRESS</h1>
    </div>
    <div class="footer1 ">
      Rejoigner-nous sur<div class="social-media">
        <a href="#">
          <img src="face.jpg">
        </a>
        <a href="#">
          <img src="mail.jpg">
        </a>
        <a href="#">
          <img src="twit.jpg">
        </a>
        <a href="#">
          <img src="wat.jpg">
        </a>
        <a href="#">
          <img src="insta.jpg">
        </a>
      </div>
    </div>
     <div class="footer2">
      <div class="product">
        <div class="heading">Produits</div>
        <div class="div">Achetez votre produit</div>
        <div class="div">Concurrence</div>
      </div>
      <div class="services">
        <div class="heading">Services</div>
        <div class="div">Retour</div>
        <div class="div">Remise</div>
      </div>
      <div class="Company">
        <div class="heading">Pharmacie</div>
        <div class="div">Expérience</div>
        <div class="div">Support</div>
      </div>
      <div class="Get Help">
        <div class="heading">Obtenir de l'aide</div>
        <div class="div">Termes</div>
        <div class="div">Connexion</div>
      </div>
    </div>
    <div class="footer3">Copyright © <h4>PHARMA EXPRESS</h4> 2023</div>
  </footer>
</body>
</html>
