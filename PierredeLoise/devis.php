<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
     <!-- GOOGLE FONT-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
    <!-- font Awesome-->
    <script src="https://kit.fontawesome.com/de4b82448d.js" crossorigin="anonymous"></script>
    <!--CSS & JS BOOTSTRAP-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  
    <!-- Css_boostrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- CSS-->
    <link rel="stylesheet" href="devis.css">
</head>
<body >
    <header>
      <!-- NAVIGATION -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <div class="nav barre-nav">
    
      <ul class="nav nav-pills">
      <li class="nav-item">
        <a class="btnnav  " aria-current="page" href="Index.html">Accueil</a>
      </li>
      <div class="dropdown">
        <button class="btnnav  dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
          Nos chantiers
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
          <li><a class="btnnav dropdown-item" href="#">Nos chantiers interieurs</a></li>
          <li><a class="btnnav dropdown-item" href="nos_chantiers_ext.html">Nos chantiers exterieurs</a></li>
          <li><a class="btnnav dropdown-item" href="#">Inspiration</a></li>
        </ul>
      </div>
      <li class="nav-item">
        <a class="btnnav" href="devis.php">Contact</a>
      </li>
      
    </ul>
    <h1 class="logo">Les pierres de l'oise</h1>
  </div>
      </header>
     
      <!-- CAROUSELLE BANNIERE -->
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" style="object-fit: contain;" >
      <div class="carousel-inner" style="height: 500px; border-radius: 20px;">
        <div class="carousel-item active">
          <img src="images/IMG-20220308-WA0017.jpg" class="d-block w-100" alt="..." style="object-fit: contain;">   <!-- TODO :ajouts des balise arial-->
        </div>
        <div class="carousel-item">
          <img src="images/IMG-20220308-WA0020.jpg" class="d-block w-100" alt="..." >
        </div>
        <div class="carousel-item">
          <img src="images/IMG-20220308-WA0021.jpg" class="d-block w-100" alt="..." >
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <hr/>
  

      
      <!-- FORMULAIRE DE CONTACT -->
     <h2 class="h2-contact">Contact</h2>
      <div class="formulaire">
       
        <div class="contact">
          <p>
            Si vous vouliez nous contacter pour une demande de devis,<br>
            ou une simple information utilisait le formulaire de contact, <br>
            nous vous recontacterons dans les plus brefs délais</p>
        </div>
       
        <form method="post" >
          <label type="">Votre Nom</label>
          <input type="name" name="nom" required><br>
        <label>Votre email</label>
        <input type="email" name="email" required><br>
        <label>Votre numero de telephone</label>
        <input type="tel" name="tel" required><br>
        <label>Brief de votre projet (Ajoutez autant de détails que nécessaire)</label>
        <textarea name="message" required></textarea><br>
        <input class="btn" type="submit">
    </form>
  </div>
  <hr />
  <h4> LE PROCEDE </h4> <br>
    <div class="visite"> 
      
      <img class="img-visit" src="images/IMG-20220308-WA0008.jpg" aria-label="">
         
                   <p class="p-visite"> Lors d'une visite technique, notre technicien conseil établira un devis gratuit selon différents critère tels que :<br>
                    
                    ​
                    
                    - La nature du supports <br>
                    
                    - Le nombre de m² <br>
                    
                    - Type de finitions <br>
                    
                    - Accès <br>
                    
                    Votre technicien sera alors en mesure de chiffré votre projet. <br>
                    
                    Une fois le devis validé, un rdv de démarrage chantier sera fixé et une date d'intervention vous sera alors communiqué. </p>
                  </div>
 
    <!-- FONCTION PHP D"ENVOI DU FORMULAIRE VIA MAIL  -->
    <?php
    
    if (isset($_POST['message'])) {
      $message = "Demande de contact
        Nom : " . $_POST["nom"] . "
        Email : " . $_POST["email"] . "
        Tel : " . $_POST["tel"] . "
        Message : " . $_POST["message"];
    
        $retour = mail('r.berthier95@outlook.com'/* ADRESSE DE D"ENVOIE*/ , 'Envoi depuis la page Contact', $message /* CONTENUE*/ , 'From: "contact@lespierresdeloise.fr"'/*EMAIL D"ENVOI*/  . "\r\n" . 'Reply-to: ' . $_POST['email'] /* EMAIL CLIENT*/);
        if($retour)
            echo '<p>Votre message a bien été envoyé.</p>';/* REPONSE CLIENT*/
    }
    ?>
   
              <!-- Footer AJOUTER LES LIEN RESEAU-->
              <footer>
              <div class="bloc bgc-atomic-tangerine d-bloc" id="bloc-8">
	<div class="container bloc-sm">
		<div class="row">
			<div class="col-sm-12">
				<p class="text-center black">
					Les pierres de l'oise.<br>
				</p>
				<div class="row row-no-gutters social">
					<div class="col-sm-3">
						<div class="text-center">
							<a class="social" href="#" aria-label="twitter"><span class="fa fa-twitter icon-md"></span></a>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="text-center">
							<a class="social" href="#" aria-label="facebook"><span class="fa fa-facebook icon-md"></span></a>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="text-center">
							<a class="social" href="#" aria-label="dribbble" ><span class="fa fa-dribbble icon-md"></span></a>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="text-center">
							<a class="social" href="#" aria-label="instagram"><span class="fa fa-instagram icon-md"></span></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Footer - bloc-8 END -->

</div>
              </footer>
</body>
</html>