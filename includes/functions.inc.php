<?php 
include_once "includes/database_connect.inc.php";

function getFramework($cnx,$idcd){
    $sqlfram = "SELECT NomFramework FROM frameworks where frameworks.Id_candidat = '$idcd';";
    $exec = $cnx->query($sqlfram);
    $framework = $exec->fetchColumn();
    return $framework;
}
function getLanguagesDeProg($cnx,$idcd){
    $sqlprog = "SELECT Langage FROM langages_de_programmation where langages_de_programmation.Id_candidat = '$idcd';";
    $exec = $cnx->query($sqlprog);
    $prog = $exec->fetchColumn();
    return $prog;
}
function getPersonal($cnx, $idcd){
    $sqlcv = "SELECT Categorie FROM `cv` WHERE Id_candidat = $idcd";
    $exec = $cnx->query($sqlcv);
    $personal = $exec->fetchColumn();
    return $personal;
}

function CheckRecruiter($cnx,$email){
    $checkEmail = "SELECT * FROM `recruteurs` where `EmailRecruteur` ='$email'";
    $checkEmailExecute = $cnx->query($checkEmail);
    $checkEmailResult = $checkEmailExecute->fetchAll();
    if(count($checkEmailResult) > 0){
        return true;
    }
    else{
        return false;
    }
}

function getOffers($cnx){
    $sql = "SELECT * FROM `offres`,`recruteurs` where offres.id_recruteur = recruteurs.id_rec;";
            $sth = $cnx->query($sql);
            $result = $sth->fetchAll(PDO::FETCH_ASSOC);
            return $result;
}
function getCandidates($cnx){
    $sql = "SELECT * FROM `candidats`,`cv` where candidats.id_cand = cv.id_candidat order by  `Score` desc;";
    $sth = $cnx->query($sql);
    $result = $sth->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

// Function to fetch base_de_donnees data
function getBaseDeDonnees($cnx, $idcd) {
    $sql = "SELECT * FROM base_de_donnees WHERE Id_candidat = '$idcd'";
    $exec = $cnx->query($sql);
    return $exec->fetchAll();
}

// Function to fetch experiences data
function getExperiences($cnx, $idcd) {
    $sql = "SELECT * FROM experiences WHERE Id_candidat = '$idcd'";
    $exec = $cnx->query($sql);
    return $exec->fetchAll();
}

// Function to fetch formations data
function getFormations($cnx, $idcd) {
    $sql = "SELECT * FROM formations WHERE Id_candidat = '$idcd'";
    $exec = $cnx->query($sql);
    return $exec->fetchAll();
}

// Function to fetch frameworks data
function getFrameworks($cnx, $idcd) {
    $sql = "SELECT * FROM frameworks WHERE Id_candidat = '$idcd'";
    $exec = $cnx->query($sql);
    return $exec->fetchAll();
}

// Function to fetch langues data
function getLangues($cnx, $idcd) {
    $sql = "SELECT * FROM langues WHERE Id_candidat = '$idcd'";
    $exec = $cnx->query($sql);
    return $exec->fetchAll();
}

// Function to fetch langages_de_programmation data
function getLangagesDeProgrammation($cnx, $idcd) {
    $sql = "SELECT * FROM langages_de_programmation WHERE Id_candidat = '$idcd'";
    $exec = $cnx->query($sql);
    return $exec->fetchAll();
}

// Function to fetch systeme_d'exploitaion data
function getSystemeDExploitation($cnx, $idcd) {
    $sql = "SELECT * FROM `systeme_d'exploitaion` WHERE Id_candidat = '$idcd'";
    $exec = $cnx->query($sql);
    return $exec->fetchAll();
}

// Function to fetch personal CV data
function getPersonalCV($cnx, $idcd) {
    $sql = "SELECT * FROM `cv` WHERE Id_candidat = '$idcd'";
    $exec = $cnx->query($sql);
    return $exec->fetch();
}
function getCandidatByID($cnx, $idcd){
    $check = "SELECT `id_cand` FROM `candidats` WHERE `id_cand` = '$idcd'";
    $exec = $cnx->query($check);
    return $exec->fetch();
}
function getCandidat($cnx, $idcd){
    $sql = "SELECT * FROM `candidats` WHERE `id_cand` = '$idcd'";
    $sth = $cnx->query($sql);
    $result = $sth->fetchAll();
    return $result;
}
function getLinkedInByUser($cnx, $idcd){
    $sql = "SELECT LinkedIn FROM `cv` WHERE `Id_candidat` = '$idcd'";
    $sth = $cnx->query($sql);
    $result = $sth->fetch();
    return $result;
}
function getOffersPostuledByUser($cnx, $idcd){
    $sql = "SELECT DISTINCT * FROM `offres`,`offres_postules` where offres.Id_offre = offres_postules.id_offre
    AND offres_postules.id_candidat = '$idcd';";
    $sth = $cnx->query($sql);
    $result = $sth->fetchAll();
    return $result;
}
// Function to fetch recruteur data by Id_rec
function fetchRecruteurById($cnx, $idrec) {
    $sql = "SELECT * FROM `recruteurs` WHERE `Id_rec` = '$idrec'";
    $sth = $cnx->query($sql);
    return $sth->fetch();
}

// Function to fetch offres data by Id_recruteur
function fetchOffresByRecruteurId($cnx, $idrec) {
    $sql = "SELECT * FROM `offres` WHERE `Id_recruteur` = '$idrec'";
    $sth = $cnx->query($sql);
    return $sth->fetchAll();
}

// Function to fetch offres_postules data by id_recruteur
function fetchAccoffresByRecruteurId($cnx, $idrec) {
    $sql = "SELECT * FROM `offres_postules`,`offres` where offres.Id_offre = offres_postules.id_offre
    AND offres_postules.id_recruteur = '$idrec'";
    $sth = $cnx->query($sql);
    return $sth->fetchAll();
}

// Function to fetch candidate data
function fetchCandidates($cnx) {
    $sql = "SELECT DISTINCT *  FROM `candidats`, `offres_postules` where candidats.id_cand = offres_postules.id_candidat";
    $sth = $cnx->query($sql);
    return $sth->fetch();
}