<?php
    require_once('../DB/database.php');

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $titre = trim($_POST['titre']);
        $auteur = trim($_POST['auteur']);
        $categorie = trim($_POST['categorie']);
        $date_ajout = trim($_POST['date_ajout']);
        $disponible = trim($_POST['disponible']);
        $isValid = true;

        if($isValid){
            try{            
                $sql = "insert into livres (titre, auteur, categorie, date_ajout, disponible) VALUES (?,?,?,?,?) ";   
                $stmt = $conn ->prepare($sql);
    
                if(!$stmt){
                    $error = "error";
                }
    
                $stmt->bind_param("sssss", $titre, $auteur, $categorie, $date_ajout,  $disponible);
    
                $stmt->execute();
    
                $stmt->close();
                $conn->close();
                header("Location:../pages/listeLivres.php");
                exit;
    
            }catch(mysqli_sql_exception){
                echo'Error';
            }
        }
    }

    







?>