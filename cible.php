<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"> 
        <title>Get information from Forms</title>
    </head>
    <body>
        <p>
            Bonjour <?php echo htmlspecialchars($_POST['prenom']); ?>
        </p>
        <?php
            if(isset($_POST['vegetarien'])){
                echo 'Vous etes végétarien';
            }else{
                echo 'Vous n\'etes pas végétarien';
            }
        ?>
        
    </body>
</html>