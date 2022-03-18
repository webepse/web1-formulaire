<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form action="treatment.php" method="POST">
            <div class="form-group my-3">
                <label for="nom">Nom: </label>
                <input type="text" name="nom" id="nom" class="form-control" required>
            </div>
            <!-- treatment.php?nom=Berti&prenom=jordan -->
            <!-- www.jordanberti.com/Berti/jordan -->
            <div class="form-group my-3">
                <label for="prenom">Prénom: </label>
                <input type="text" name="prenom" id="prenom" class="form-control">
            </div>
            <div class="form-group my-3">
                <label for="pays">Pays: </label>
                <select name="pays" id="pays" class="form-control">
                    <option value="BE">Belgique</option>
                    <option value="IT">Italie</option>
                    <option value="FR">France</option>
                </select>
            </div>
            <div class="form-group my-3">
                <label for="message">Message: </label>
                <textarea name="message" id="message" cols="30" rows="10" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <input type="submit" value="Envoyer" class="btn btn-primary">
            </div>
            <?php
                if(isset($_GET['error']))
                {
                    echo "<div class='alert alert-danger my-3'>Une erreur est survenue (code erreur: ".$_GET['error'].")</div>";
                }
             
            ?>
        </form>
        <?php 
               if(isset($_COOKIE['nom']))
               {
                   echo "<div>".$_COOKIE['nom']."</div>";
                   echo "<div>".$_COOKIE['prenom']."</div>";
                   echo "<div>".$_COOKIE['pays']."</div>";
                   echo "<div>".$_COOKIE['message']."</div>";
               }

        ?>
    </div>
</body>
</html>


