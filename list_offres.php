<?php
session_start();
include "link1.php";
include_once "includes/database_connect.inc.php";
include "includes/functions.inc.php";
?>
<title>Liste d'offres</title>
<?php
include "header.php";
if(isset($_SESSION["id_candidat"])){
$id = $_SESSION["id_candidat"];}
?>


<h1 id="title">Liste Offres</h1>    

<div class="container">
    <form action="includes/filter.php">
<div class="info filter">
    <h4 id="filterby"><i class="fa-solid fa-filter" style="padding-right: 5px;"></i>Filter By</h4>
    <h5 id="h5">Categories</h5>
    <table class="table_login">
        <tr>
            <td><input name="categorie[]" value="Web dev" class="checkbox" type="checkbox"></td>
            <td><h6 class="checkbox">Developpement Web</h6></td>
        </tr>
        <tr>
            <td><input name="categorie[]" value="App mobile" class="checkbox" type="checkbox"></td>
            <td><h6 class="checkbox">Developpement d'Applications</h6></td>
        </tr>
        <tr>
            <td><input name="categorie[]" value="Appweb dev" class="checkbox" type="checkbox"></td>
            <td><h6 class="checkbox">Developpement d'Applications Web</h6></td>
        </tr>   
    </table>
    <h5 id="h5">Type d'offres</h5>
    <table class="table_login">
        <tr>
            <td><input name="type[]" value="Stage"  class="checkbox" type="checkbox"></td>
            <td><h6 class="checkbox">Stage</h6></td>
        </tr>
        <tr>
            <td><input name="type[]" value="Stage PFE" class="checkbox" type="checkbox"></td>
            <td><h6 class="checkbox">Stage PFE</h6></td>
        </tr>
        <tr>
            <td><input name="type[]" value="Stage pre-embauche" class="checkbox" type="checkbox"></td>
            <td><h6 class="checkbox">Stage pre-embauche</h6></td>
        </tr>
        <tr>
            <td><input name="type[]" value="Emploi" class="checkbox" type="checkbox"></td>
            <td><h6 class="checkbox">Emploi</h6></td>
        </tr>   
    </table>
    <button name="filterOffres" class="btn" id="filtrer">Filtrer</button>
</div>
</form>
<div class="table">
    <table >
        <tr>
            <th>Recruteur</th>
            <th>Titre</th>
            <th>Type</th>
            <th>Description</th>
            <th>Durée</th>
        </tr>
        <?php
            $result = getOffers($cnx);
            if($result){
                foreach($result as $row){?>   
                    <tr>
                    <td><?php echo $row["Societe"]; ?></td>
                        <td><?php echo $row['Titre'] ?></td>
                        <td><?php echo $row['Type'] ?></td>
                        <td><?php echo $row['Description'] ?></td>
                        <td><?php echo $row['Duree'] ?></td>
                        <?php if(isset($_SESSION["id_candidat"])){ 
                            echo "<td><a href='includes/postulerOffre.php?postuler=".$row['Id_offre']."&candidat=".$id."'><button class='btn' id='filtrer'>Postuler</button></a></td>";
                        }?>
                            
                        
                    </tr>
                <?php
                }
            }
            else{
                echo "<tr style=\"background-color: red;\"><td>No Data Found!</td></tr>";
            }
        ?>
    </table>
</div>
</div>


</body>