<?php
session_start();
include "links3.php";
?>
<title>Home</title>
<?php
include "header.php";
$_SESSION["user"] = "on";

?>
<body>
<div class="container-fluid">
<div class="jumbotron max-auto hero p-3 p-md-5 text-white rounded bg-dark row justify-content-center gap-3">
        <div class="col-md-5 d-flex justify-content-end px-0">
          <h1 class="display-1 font-italic text-end fozka">THE <br> JOB IS <br> YOURS</h1>
        </div>
        <div class="col-md-5 d-flex row gap-2 px-0 align-items-center">
          <div class="feature">
            <h2 class="display-5">Trouvez</h2>
            <p class="lead my-3">Trouvez le travail de vos rêves en un clic !</p>
           </div>
           <div class="feature">
            <h2 class="display-5">Postulez</h2>
            <p class="lead my-3">Postulez aux offres d'emploi qui vous intéressent.</p>
           </div>
              <div class="feature">
                <h2 class="display-5">Recrutez</h2>
                <p class="lead my-3">Recrutez les meilleurs candidats pour votre entreprise.</p>
            </div>
            
        </div>
      </div>

</div>
<p> <h6 class="propos"> Find A Work</h6> </p>
<div>
    <table class="Ma">
   
        <td>  <div > <h4 class="table">
            Bienvenue sur notre site web !  <br> 

         
            Nous sommes ravis de vous accueillir ici, où vous pourrez découvrir notre entreprise et nos services. Chez nous, nous nous efforçons de fournir des solutions de qualité à nos clients, en répondant à leurs besoins de manière efficace et professionnelle.  <br>
            
             
                Naviguez à travers les différentes sections de notre site pour en savoir plus sur notre entreprise, notre histoire, nos produits et services, ainsi que les témoignages de nos clients. Nous sommes à votre disposition pour répondre à toutes vos questions et vous aider à trouver ce dont vous avez besoin. <br>
             
             
            Merci de votre visite, et à bientôt !
        </h4>

        <div class="container"><a  href="typeinscription.php">
            <button class="Lika btn">s'inscrire</button>
            <a  href="login.php">
            <button class="Lika btn">se connecter</button>
             </div></div>
        </td>
    </table>
</div>
    </div>
<?php
include "footer.php";
?>