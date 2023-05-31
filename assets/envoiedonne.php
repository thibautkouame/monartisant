<?php

session_start();
require 'dbconn.php';
include 'dbconn.php';

if(isset($_POST['declaration_sinistre'])){
    $assurance = mysqli_real_escape_string($con, $_POST['assurance']);
    $nomprenoms = mysqli_real_escape_string($con, $_POST['nomprenoms']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $contact = mysqli_real_escape_string($con, $_POST['contact']);
    $lieudusinistre = mysqli_real_escape_string($con, $_POST['lieudusinistre']);
    $datesinistre = mysqli_real_escape_string($con, $_POST['datesinistre']);
    $natureinter = mysqli_real_escape_string($con, $_POST['natureinter']);
    $details = mysqli_real_escape_string($con, $_POST['details']);

    $query = "INSERT INTO table_clients (assurance,nomprenoms,email,contact,lieudusinistre,datesinistre,natureinter,details) VALUES ('$assurance','$nomprenoms','$email','$contact','$lieudusinistre','$datesinistre','$natureinter','$details')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Requête envoyée avec succès";
        header("Location: ../index.php#declaSinistre");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Échec d'enregistrement, vérifié si les données sont correctes";
        header("Location: ../index.php#declaSinistre");
        exit(0);
    }
}

if(isset($_POST['btn_assur'])){
    $libele_assurance = mysqli_real_escape_string($con, $_POST['libele_assurance']);

    $query = "INSERT INTO table_assurances (libele_assurance) VALUES ('$libele_assurance')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Requête effectuée avec succès";
        header("Location: ../pages/addassurance.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Échec d'enregistrement, vérifié si les données sont correctes";
        header("Location: ../pages/addassurance.php");
        exit(0);
    }
}

if(isset($_POST['btn_serv'])){
    $libele_service = mysqli_real_escape_string($con, $_POST['libele_service']);

    $query = "INSERT INTO table_services (libele_service) VALUES ('$libele_service')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Requête effectuée avec succès";
        header("Location: ../pages/addservice.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Échec d'enregistrement, vérifié si les données sont correctes";
        header("Location: ../pages/addservice.php");
        exit(0);
    }
}

if(isset($_POST['btn_co'])){
    $mail_admin =  $_POST["mail_admin"];
    $mail_admin = mysqli_real_escape_string($con, $_POST['mail_admin']);

    $query = "SELECT * FROM table_admin WHERE mail_admin='$mail_admin'";
    $query_run = mysqli_query($con, $query);
    if ($query_run->num_rows > 0) {
        		$row = mysqli_fetch_assoc($query_run);
        		$_SESSION['mail_admin'] = $row['mail_admin'];
        		header("Location: ../pages/index.php");
                $_SESSION['message'] = "<h5>Bienvenue !</h5>";
    }
    else{
        
                $_SESSION['message'] = "Adresse mail incorrect";
                header("Location: ../pages/connexion.php");
                exit(0);
    }

    //header("Location: ../pages/addassurance.php");
    exit(0);

}



// if(isset($_POST["selogin"])){ 

//     $mail =  $_POST["mail"];  
//     $mdp = $_POST["mdp"];

//     $query = "SELECT * FROM administrateur WHERE mail='$mail' AND mdp='$mdp'";
//     $query_run = mysqli_query($con, $query);

//     if ($query_run->num_rows > 0) {
// 		$row = mysqli_fetch_assoc($query_run);
// 		$_SESSION['nomprenom'] = $row['nomprenom'];
// 		header("Location: index.php");
//         $_SESSION['message'] = "<h5>Bienvenue !</h5>";
// 	}
//     else {
// 		// echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
//         $_SESSION['message'] = "Adresse mail ou mot de passe incorrect";
//         header("Location: connexion.php");
//         exit(0);
// 	}
// }

// if(isset($_POST['ajouter_admin'])){
//     $nomprenom = mysqli_real_escape_string($con, $_POST['nomprenom']);
//     $mail = mysqli_real_escape_string($con, $_POST['mail']);
//     $mdp = mysqli_real_escape_string($con, $_POST['mdp']);

//     // $query = "INSERT INTO administrateur (nomprenom,mail,mdp) VALUES ('$nomprenom','$mail','$mdp')";

//     // $query_run = mysqli_query($con, $query);

//     if ($nomprenom == ''  || $mail == '' || $mdp == ''){

// 		$_SESSION['message'] = "Veillez à remplir correctement tous les champs";
//         header("Location: ins.php");
//         exit(0);
// 	}

//     else
//     {
//         $query = "INSERT INTO administrateur (nomprenom,mail,mdp) VALUES ('$nomprenom','$mail','$mdp')";

//         $query_run = mysqli_query($con, $query);
//         if($query_run)
//     {
//         $_SESSION['message'] = "Compte créer avec succès";
//         header("Location: index.php");
//         exit(0);
//     }
//     else
//     {
//         $_SESSION['message'] = "Échec lors de la création du compte";
//         header("Location: ins.php");
//         exit(0);
//     }


//     }

    
// }



// if(isset($_POST['supprimer']))
// {
//     $employe_id = mysqli_real_escape_string($con, $_POST['supprimer']);

//     $query = "DELETE FROM employe WHERE id='$employe_id' ";
//     $query_run = mysqli_query($con, $query);

//     if($query_run)
//     {
//         $_SESSION['message'] = "Supprimé avec succès";
//         header("Location: index.php");
//         exit(0);
//     }
//     else
//     {
//         $_SESSION['message'] = "Echec lors de la suppression";
//         header("Location: index.php");
//         exit(0);
//     }
// }


// if(isset($_POST['modifier']))
// {
//     $employe_id = mysqli_real_escape_string($con, $_POST['employe_id']);

//     $nomprenom = mysqli_real_escape_string($con, $_POST['nomprenom']);
//     $activite = mysqli_real_escape_string($con, $_POST['activite']);
//     $mail = mysqli_real_escape_string($con, $_POST['mail']);
//     $telephone = mysqli_real_escape_string($con, $_POST['telephone']);
//     $web = mysqli_real_escape_string($con, $_POST['web']);
//     $date = mysqli_real_escape_string($con, $_POST['date']);

//     $query = "UPDATE employe SET nomprenom='$nomprenom', activite='$activite', mail='$mail', telephone='$telephone', web='$web', date='$date' WHERE id='$employe_id'";

//     $query_run = mysqli_query($con, $query);

//     if($query_run)
//     {
//         $_SESSION['message'] = "Mise à jour effectué avec succès ";
//         header("Location: index.php");
//         exit(0);
//     }
//     else
//     {
//         $_SESSION['message'] = "Echec de la mise à jour";
//         header("Location: index.php");
//         exit(0);
//     }

// }



?>