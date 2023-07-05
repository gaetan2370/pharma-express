<?php
  session_start();
  if(!$_SESSION['password']){
    header('Location: Accueil.php');
  }
?>
<?php include_once('fonctions_panier.php');?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="Index.css">
	<title>Ma page d'accueil</title>
</head>
<body>
  <?php include_once('header.php');?>
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
      <div class="carousel">
        <div class="carousel-images">
          <img src="28.png" class="active">
          <img src="29.png" >
          <img src="30.png" >
        </div>
          <button class="prev-button">&lt;</button>
          <button class="next-button">&gt;</button>
      </div>
      <div class="section2">
        <div class="container">
          <div class="items">
            <div class="img img1"><img src="31.png" alt=""></div>
            <div class="name">HUMEX</div>
            <div class="price">$5</div>
            <div class="info">Allergie,nez bouché, démangeaisons nasales</div>
            <a href="panier.php?action=ajout&amp;l=LIBELLEPRODUIT&amp;q=QUANTITEPRODUIT&amp;p=PRIXPRODUIT" onclick="window.open(this.href, '', 'toolbar=no, location=no, directories=no, status=yes, scrollbars=yes, resizable=yes, copyhistory=no, width=600, height=350'); return false;">Ajouter au panier</a>
          </div>
          <div class="items">
            <div class="img img2"><img src="32.png" alt=""></div>
            <div class="name">ZYRTEC SET</div>
            <div class="price">$6.34</div>
            <div class="info">Médicament pour allergie.</div>
          </div>
          <div class="items">
            <div class="img img3"><img src="33.png" alt=""></div>
            <div class="name">VALSARTAN</div>
            <div class="price">$9</div>
            <div class="info">160 mg, Voie Orale.</div>
          </div>
          <div class="items">
            <div class="img img1"><img src="34.png" alt=""></div>
            <div class="name">NAUSI CALM</div>
            <div class="price">$9.1</div>
            <div class="info">Médicament pour adulte, nausées et vomissements 50 mg gélule.</div>
          </div>
          <div class="items">
            <div class="img img1"><img src="35.png" alt=""></div>
            <div class="name">MAALOX</div>
            <div class="price">$20</div>
            <div class="info">Brulures d'estomac et remontées acides.</div>
          </div>
          <div class="items">
            <div class="img img1"><img src="36.png" alt=""></div>
            <div class="name">HUMEX</div>
            <div class="price">$18</div>
            <div class="info">.Nez bouché .Ecoulement nasal .Maux de tête .Fièvre.</div>
          </div>
          
        </div>
      </div>
  </div>
 </section>
 </main>
 <?php include_once('footer.php');?>
  <script src="Index.js"></script>
</body>
</html>
