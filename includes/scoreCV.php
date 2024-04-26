<?php
include_once 'database_connect.inc.php';
include 'functions.inc.php';
session_start();

$idcd = $_SESSION["id_candidat"];
$framework = getFramework($idcd);

$prog = getLanguagesDeProg($idcd);

$personal = getPersonal($idcd);

$exp = getExperiences($idcd);

$score = 0;
if($categorie = "Web Dev"){
	foreach ($prog as $row) {

		if($row["Langage"] = "html" || $row["Langage"] = "css" || $row["Langage"] = "javascript" || $row["Langage"] = "php" || $row["Langage"] = "sql"){
			$score += 3;
		} 
		if($row["Langage"] = "ruby" || $row["Langage"] = "python" || $row["Langage"] = "c++"){
			$score += 2;
		}
		if($row["langage"] = "java" || $row["langage"] = "git" || $row["langage"] = "C" || $row["langage"] = "Bash" || $row["langage"] = "C#"){
			$score += 1;
		}}
		foreach ($framework as $row) {
		if($row["NomFramework"] = "bootstrap"){
			$score += 3;
		}
		
		if($row["NomFramework"] = "angular" || $row["NomFramework"] = "Express.js" || $row["NomFramework"] = "React.js" || $row["NomFramework"] = "Flutter"){
			$score +=2;
		}
		
		if($row["NomFramework"] = "Cordova" || $row["NomFramework"] = "NAtvieIOS" || $row["NomFramework"] = "Django" || $row["NomFramework"] = "ReactNative" ||
		 $row["NomFramework"] = "RubyOnRails" || $row["NomFramework"] = "NativeAndroid" || $row["NomFramework"] = "Vue.js" || $row["NomFramework"] = "Spring" || 
		 $row["NomFramework"] = "Meteor" ){
			$score += 1;
		}}
		// tableau experience
		foreach($exp as $row){
			if(isset($row["Id_experience"])){
				$score += 1;
			}
	}

}
else if($categorie = "Appweb dev"){
	foreach ($prof as $row) {
		if($row["Langage"] = "python" || $row["Langage"] = "java" || $row["Langage"] = "javascript" || $row["Langage"] = "ruby" || $row["Langage"] = "C#"){
			$score += 3;
		}
		if($row["Langage"] = "c++" ||  $row["Langage"] = "php" || $row["Langage"] = "sql" || $row["Langage"] = "html"){
			$score += 2;
		}
		if($row["Langage"] = "css" ||  $row["langage"] = "git" || $row["langage"] = "C" || $row["langage"] = "Bash"   ){
			$score += 1;
		}}
		foreach($framework as $row){

		if($row["NomFramework"] = "NAtvieIOS" || $row["NomFramework"] = "NativeAndroid" || $row["NomFramework"] = "ReactNative" || $row["NomFramework"] = "Cordova" 
		|| $row["NomFramework"] = "Flutter" || $row["NomFramework"] = "Spring"){
			$score += 3;
		}
		
		if($row["NomFramework"] = "Django"  || $row["NomFramework"] = "bootstrap" || $row["NomFramework"] = "angular" || $row["NomFramework"] = "Express.js" || 
		$row["NomFramework"] = "React.js" || 
		 $row["NomFramework"] = "RubyOnRails"  || $row["NomFramework"] = "Vue.js"  || $row["NomFramework"] = "Meteor" ){
			$score += 1;
		}
	}

		// tableau experience
		foreach($exp as $row){
			if(isset($row["Id_experience"])){
				$score += 1;
			}
	}

}
else if ($categorie = "App mobile"){
	foreach ($prog as $row) {
		if($row["Langage"] = "html" || $row["Langage"] = "css" || $row["Langage"] = "javascript" || $row["Langage"] = "php" || $row["Langage"] = "sql"  ||
		$row["Langage"] = "ruby" ){
		   $score += 3 ;
	   }  
	   if($row["Langage"] = "python"){
		$score += 2;
		}
		if( $row["Langage"] = "c++" || $row["langage"] = "java" || $row["langage"] = "git" || $row["langage"] = "C" || $row["langage"] = "Bash" || $row["langage"] = "C#" ){
			$score += 1 ;
		}  }
	if($row["NomFramework"] = "Django"  || $row["NomFramework"] = "React.js" || 
		 $row["NomFramework"] = "RubyOnRails"  || $row["NomFramework"] = "Vue.js" ){
			$score += 3;
		}

		if( $row["NomFramework"] = "Express.js" || $row["NomFramework"] = "Meteor" || $row["NomFramework"] = "Spring"){
			$score += 2;
		}

		foreach ($framework as $row) {
		if($row["NomFramework"] = "Cordova" || $row["NomFramework"] = "NAtvieIOS"  || $row["NomFramework"] = "ReactNative"  || 
		$row["NomFramework"] = "NativeAndroid" || $row["NomFramework"] = "bootstrap" ||
		  $row["NomFramework"] = "angular"  || $row["NomFramework"] = "Flutter" ){
			$score += 1;
		}}

		if(isset($row["Id_experience"])){
			$score += 1;
		}
		foreach($exp as $row){
			if(isset($row["Id_experience"])){
				$score += 1;
			}
	}
$sqlscore = UPDATE `cv` SET `Score` = $score WHERE `cv`.`Id_cv` = $row["Id_cv"] ;
}
header("location: profil_candidat.php?id=$idcd");
?>