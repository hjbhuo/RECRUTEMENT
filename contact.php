<?php
session_start();
include "link1.php";
include "header.php";
include "includes/database_connect.inc.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include database connection file
    // Prepare SQL statement
    $stmt = $cnx->prepare("INSERT INTO contact_messages (profile, civilite, nom, prenom, telephone, email, entreprise, sujet, message) VALUES (:profile, :civilite, :nom, :prenom, :telephone, :email, :entreprise, :sujet, :message)");

    // Bind parameters
    $stmt->bindParam(':profile', $_POST['profile']);
    $stmt->bindParam(':civilite', $_POST['civilite']);
    $stmt->bindParam(':nom', $_POST['name']);
    $stmt->bindParam(':prenom', $_POST['prenom']);
    $stmt->bindParam(':telephone', $_POST['mobile']);
    $stmt->bindParam(':email', $_POST['email']);
    $stmt->bindParam(':entreprise', $_POST['entreprise']);
    $stmt->bindParam(':sujet', $_POST['sujet']);
    $stmt->bindParam(':message', $_POST['message']);

    // Execute statement
    if ($stmt->execute()) {
        // Data inserted successfully
        echo "Votre message a été envoyé avec succès.";
    } else {
        // Error occurred
        echo "Une erreur s'est produite. Veuillez réessayer plus tard.";
    }

    // Close connection
    $conn = null;
}

?>
 <form method="post" action="contact.php">
    <p class="profile">
        choisir votre profile
    </p>
    <div class="marg">
        <p class="radio">
            <input type="radio" name="profile" value="candidat"> candidat
            <input type="radio" name="profile" value="recruteur"> recruteur
        </p>
        <p>
            <select class="radio1" id="civilite" name="civilite">
                <option> civilité</option>
                <option> Marié(e)</option>
                <option> Célibataire</option>
            </select>
        </p>
        <p>
            <input class="radio1" placeholder="NOM" name="name">
        </p>
        <p>
            <input class="radio1" placeholder="PRENOM" type="text" name="prenom">
        </p>
        <p>
            <input class="radio1" placeholder="N° TELEPHONE" type="tel" name="mobile">
        </p>
        <p>
            <input class="radio1" id="EMAIL" placeholder="EMAIL" type="email" name="email">
        </p>
        <p>
            <input class="radio1" placeholder="VOTRE ENTREPRISE" type="text" name="entreprise">
        </p>
        <p>
            <strong class="information"> votre demande </strong>
        </p>
        <p>
            <input class="radio1" placeholder="sujet" type="text" name="sujet">
        </p>
        <textarea class="message" placeholder="message" name="message"></textarea>
        <button class="hello" type="submit"> Envoyer votre message</button>
    </div>
</form>
  
<?php
include "footer.php";
?>