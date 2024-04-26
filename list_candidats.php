<?php
session_start();
include "link1.php";
include_once "includes/database_connect.inc.php";
include "includes/functions.inc.php";
?>
<title>List Candidats</title>
<?php
include "header.php";
?>


<h1 id="title">Liste Candidats</h1>    

<div class="container-candidat">
    <form action="#">
<div class="info filter">
    <h4 id="filterby"><i class="fa-solid fa-filter" style="padding-right: 5px;"></i>Filter By</h4>
    <h5 id="h5">Categories</h5>
    <table class="table_login">
        <tr>
            <td><h6 class="checkbox">Developpement Web</h6></td>
        </tr>
        <tr>
            <td><h6 class="checkbox">Developpement d'Applications</h6></td>
        </tr>
        <tr>
            <td><h6 class="checkbox">Developpement d'Applications Web</h6></td>
        </tr>   
    </table>
    <h5 id="h5">Langages de Programmation</h5>
    <table class="table_login">
        <tr>
            <td><h6 class="checkbox">Python</h6></td>
            <td><h6 class="checkbox">Java</h6></td>
        </tr>
        <tr>
            <td><h6 class="checkbox">C</h6></td>
        </tr>
        <tr>
            <td><h6 class="checkbox">HTML</h6></td>
            <td><h6 class="checkbox">CSS</h6></td>
        </tr>
        <tr>
            <td><h6 class="checkbox">JavaScript</h6></td>
            <td><h6 class="checkbox">Php</h6></td>
        </tr>
        <tr>
*            <td><h6 class="checkbox">ruby</h6></td>
            <td><h6 class="checkbox">C#</h6></td>
        </tr>
        <tr>
            <td><h6 class="checkbox">Git</h6></td>
            <td><h6 class="checkbox">bash</h6></td>
        </tr>      
    </table>
    <h5 id="h5">Frameworks</h5>
    <table class="table_login">
        <tr>
            <td><h6 class="checkbox">Angular</h6></td>
            <td><h6 class="checkbox">Bootstrap</h6></td>
        </tr>
        <tr>
            <td><h6 class="checkbox">Cordova</h6></td>
            <td><h6 class="checkbox">Django</h6></td>
        </tr>
        <tr>
            <td><h6 class="checkbox">Express.js</h6></td>
            <td><h6 class="checkbox">NativeIOS</h6></td>
        </tr>
        <tr>
            <td><h6 class="checkbox">React.js</h6></td>
            <td><h6 class="checkbox">Flutter</h6></td>
        </tr>
        <tr>
            <td><h6 class="checkbox">Meteor</h6></td>
            <td><h6 class="checkbox">NativeAndroid</h6></td>
        </tr>
        <tr>
            <td><h6 class="checkbox">Spring</h6></td>
            <td><h6 class="checkbox">Vue.js</h6></td>
        </tr>     
        <tr>
            <td><h6 class="checkbox">ReactNative</h6></td>
            <td><h6 class="checkbox">RubyOnRails</h6></td>
        </tr>  
    </table>
    
</div>
</form>
<div class="table">
    <table>
        <tr>
            <th>Nom</th>
            <th>Categorie</th>
            <th>Description</th>
            <th>Score</th>
        </tr>
        <?php
            $result = getCandidates($cnx);
            if(isset($_SESSION["id_recruteur"])){
            $id = $_SESSION["id_recruteur"];}
            if($result){
                foreach($result as $row){?>   
                    <tr>
                        <td><?php echo $row['Prenom'] ." ". $row['Nom'];?></td>
                        <td><?php echo $row['categorie'] ?></td>
                        <td><?php echo $row['Description'] ?></td>
                        <td><?php echo $row['Score'] ?></td>
                        <td><?php if(isset($_SESSION["id_recruteur"])){echo "<a id ='filtrer'href='profil_candidat.php?id=" . $row["Id_cand"] . "'>View</a>"; }?></td>
                            
                        
                        
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