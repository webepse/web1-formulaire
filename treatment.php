<?php

// test si formulaire envoyé
if(isset($_POST['nom'])){ 
    // vérifier si mon formulaire est correct 
    $err=0;
    if(empty($_POST['nom']))
    {
        $err=1;
    }else{
        $nom = htmlspecialchars($_POST['nom']);
    }

    if(empty($_POST['prenom']))
    {
        $err=2;
    }else{
        $prenom = htmlspecialchars($_POST['prenom']);
    }

    if(empty($_POST['pays']))
    {
        $err=3;
    }else{
        $pays = htmlspecialchars($_POST['pays']);
        $world= ["BE","IT","FR"];
        if(!in_array($pays,$world))
        {
            $err=5;
        }
    }

    if(empty($_POST['message']))
    {
        $err=4;
    }else{
        $message= htmlspecialchars($_POST['message']);
    }


    // test s'il y a erreur
    if($err==0)
    {
        echo "ok";
    }else{
        header("LOCATION:index.php?error=".$err);
    }



}else{

    // redirection si l'utilisateur n'est pas passé mon formulaire
    header("LOCATION:index.php");
}





?>