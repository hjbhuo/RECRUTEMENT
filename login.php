<?php
session_start();
if(isset($_SESSION["id_candidat"]) || isset($_SESSION["id_recruteur"])){
    header("location: index.php");
}
include "link1.php";
?>
<title>Se Connecter</title>
<?php
include "header.php";
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Se Connecter</h1>
            <form action="includes/login.inc.php" method="post">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <label for="password">Mot de passe</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Mot de passe" required>
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Se Connecter</button>
                <p>Vous n'avez pas de compte? <a href="typeinscription.php">S'inscrire</a></p>
            </form>
        </div>
    </div>
</div>


<?php
include "footer.php";
?>