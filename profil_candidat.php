<?php
session_start();
include "link1.php";
include_once "includes/database_connect.inc.php";
include "includes/functions.inc.php";

?>
<title>Mon Profile</title>
<?php
include "header.php";
$id = getCandidatByID($cnx, $_GET['id']);

if(!isset($_SESSION["id_recruteur"]) && !isset($_SESSION["id_admin"]) && !isset($_SESSION["user"])){
if($id["id_cand"] == $_SESSION["id_candidat"]){
    $idcd = $id["id_cand"];    
    $self = true;
}
else if(isset($_GET['id'])){
    $idcd = $_GET['id'];
    $self = false;
}}
else {
    $idcd = $_GET['id'];
}
$result = getCandidat($cnx, $idcd);
$result2 = getOffersPostuledByUser($cnx, $idcd);
$result3 = getLinkedInByUser($cnx, $idcd);

$zero = "+216 ";

$db = getBaseDeDonnees($cnx, $idcd);
$exp = getExperiences($cnx, $idcd);
$formations = getFormations($cnx, $idcd);
$framework = getFrameworks($cnx, $idcd);
$langue = getLangues($cnx, $idcd);
$prog = getLangagesDeProgrammation($cnx, $idcd);
$se = getSystemeDExploitation($cnx, $idcd);
$personal = getPersonalCV($cnx, $idcd);
?>

     <div style="    display: flex;
    align-items: center;
    background-color: black;
    justify-content: center;
    gap: 5rem;">
        <?php 
        if(isset($_SESSION["user"]))
        {
            ?>
        <h1 id="title">Mon Profile: </h1>
        <?php }else{ ?>
        <h1 id="title"><?php echo  $result[0]["Prenom"]." ".$result[0]["Nom"]; ?> Profile: </h1>
        <?php } ?>
        <div>
           <a href="contact.php"><i id="icon" style="margin-right: 50px;" class="fa-solid fa-message fa-2x"></i></a> 
           <?php 
           if(isset($_SESSION["id_candidat"])){
            ?>
           <a href="candidat1.php"><i id="icon" class="fa-solid fa-pencil fa-2x"></i></a>
           <?php   }?>
           <span class="score">Score: <?php echo $personal["Score"] ;?></span>
        </div>
    </div>
     <div class="container">
        <div class="info">
            <h1 id="img_title"><img id="profil_pic" src="<?php echo $personal["Photo"] ;?>" alt="photo"> 
            <?php foreach($result as $row){
                echo $row['Prenom']." ".$row['Nom'] ;
                }?> 
            </h1>
            <ul>
                <li><span class="material-symbols-outlined">
                    call
                    </span><?php  foreach($result as $row){
                    echo  $zero."".$row['Telephone'];
                     }?></li>
                <li><a href=
                    <?php  foreach($result as $row){
                    echo $row['EmailCandidat'];
                     }?>>
                <span class="material-symbols-outlined">
                    alternate_email
                    </span>
                    <?php  foreach($result as $row){
                    echo $row['EmailCandidat'];
                     }?></a>
                </li>
                <li><span class="material-symbols-outlined">
                    home </span>
                    <?php  foreach($result as $row){
                    echo $row['Ville'];
                     }?></li>
                <li><a href="
                    <?php echo $result3['LinkedIn'];?>"
                     ><i id="linkedin" style="margin-right: 15px;" class="fa-brands fa-linkedin"></i>LinkedIn</a></li>
            </ul>
        </div>
        <div id="candidat" class="candidat" style="display:block;">
            <div class="options">
                <div><button class="btn" id="profil">Profil</button></a></div>
                <?php 
                if(isset($_SESSION["id_candidat"])){
                    ?>
                <div><button class="btn" id="offres">Postulations</button></div>
                <?php } ?>
                
            </div>
            <div id="div_profil">
                <h1 class="candidat">Description: </h1>
                <p class="cv"><?php echo $personal["Description"] ?>.</p>
                <h1 class="candidat">Formations: </h1>
                <?php foreach($formations as $formation){?>
                <h2 id="h2" class="candidat"><?php echo $formation["Diplome"];?></h2>
                <li class="cv"><?php echo $formation["Etablissement"];}?>.</li>
                <h1 class="candidat">Competences: </h1>
                <h2 class="candidat"><?php foreach($prog as $progr){ ?></h2>
                <li class="cv"><?php echo $progr["Langage"] ;}?></li>
                <h2 class="candidat">Base de Données: </h2>
                <h2 class="candidat"><?php foreach($db as $datab){ ?></h2>
                <li class="cv"><?php echo $datab["NomBdd"] ;}?></li>
                <h2 class="candidat">Frameworks: </h2>
                <h2 class="candidat"><?php foreach($framework as $fram){ ?></h2>
                <li class="cv"><?php echo $fram["NomFramework"] ;}?></li>
                <h2 class="candidat">Systemes d'exploitation: </h2>
                <h2 class="candidat"><?php foreach($se as $sys){ ?></h2>
                <li class="cv"><?php echo $sys["NomSystemeExploitation"] ;}?></li>
                <h2 class="candidat">Langues: </h2>
                <?php foreach($langue as $lng){?>
                    <li class="cv"><?php echo $lng["Langue"] ;}?></li>

            </div>

            <div id="div_offres">
            <?php foreach($result2 as $row){
                if($self){
                echo"<div class=cd_offre>
                    <h2>".$row['Titre']."</h2>
                    <p>".$row['Description'].".</p>
                    
                    <a href='includes/deletePostulation.php?refuser=".$row['Id_offre']."'><button class='btn btn-danger' name='refuser'>Supprimer</button></a>
                </div>";}}?>
                
        </div>
       
     </div></div>

     <script>
        const btn_offr = document.getElementById("offres")
        const btn_prfl = document.getElementById("profil")
        const prfl = document.getElementById("div_profil")
        const offr = document.getElementById("div_offres")

        btn_offr.addEventListener("click", hide2)
        btn_offr.addEventListener("click", show2)
        btn_prfl.addEventListener("click", show)
        btn_prfl.addEventListener("click", hide)
        function hide2(){
            prfl.style.display = "none"
        }
        function hide(){
            offr.style.display = "none"
        }
        function show(){
            prfl.style.display = "block"
            btn_prfl.style.backgroundColor = "white"
            btn_prfl.style.color = "#45608b"
            btn_offr.style.backgroundColor = "#45608b"
            btn_offr.style.color = "white"
        }
        function show2(){
            offr.style.display = "block"
            btn_offr.style.backgroundColor = "white"
            btn_offr.style.color = "#45608b"
            btn_prfl.style.backgroundColor = "#45608b"
            btn_prfl.style.color = "white"
        }
    </script>
<?php
include "footer.php";
?>