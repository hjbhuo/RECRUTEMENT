
<header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
  <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
    <img src="Images/logo.jpg" alt="logo" width="100" height="100">
  </a>

  <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
    <li><a href="index.php" class="nav-link px-2 link-secondary">Home</a></li>
    <li><a href="list_offres.php" class="nav-link px-2 link-dark">Offres</a></li>
    <li><a href="list_candidats.php" class="nav-link px-2 link-dark">Candidats</a></li>
    <?php if(isset($_SESSION["id_candidat"]) || isset($_SESSION["id_recruteur"]))
     echo'<li><a href="contact.php" class="nav-link px-2 link-dark">Contact</a></li>
    '?>
    
    <?php 
    if(isset($_SESSION["id_candidat"]) || isset($_SESSION["id_recruteur"])){
        echo "<li><a class='nav-link px-2 link-dark' href='";
        if(isset($_SESSION["id_candidat"])){
            echo "profil_candidat.php?id=".$_SESSION["id_candidat"];
        }
        else if(isset($_SESSION["id_recruteur"])){
            echo "profil_recruteur.php?id=".$_SESSION["id_recruteur"];
        }
        else {
            echo "dashboard.php?id=".$_SESSION["id_recruteur"];
        }
        echo "'>Profile</a></li>";
    }
    ?>
                <?php 
                if(isset($_SESSION["id_admin"]) ) {
                    echo ' <li><a href="dashboard.php" class="nav-link px-2 link-dark">Dashboard</a></li>';
                }
                ?>
    </ul>

  <div class="col-md-3 text-end">
    <?php if(isset($_SESSION["id_candidat"]) || isset($_SESSION["id_recruteur"])|| isset($_SESSION["id_admin"]))
    {
    ?>
    <a href="includes/logout.php" type="button" class="btn btn-outline-primary me-2">Deconnexion</a>
    <?php }else{
    ?>
    <a href="login.php" type="button" class="btn btn-outline-primary me-2">Login</a>
    <a href="typeinscription.php" type="button" class="btn btn-primary">Sign-up</a>
    <?php } ?>
  </div>
</header>