<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"> 
        <title>Get information from Forms</title>
    </head>
    <body>
        <form action="cible.php" method="POST"> 
            <p>
                <label>
                    Prénom : <input type="text" name ="prenom">
                </label> <br>
                <label>
                    Etes-vous végétarien ? <input type="checkbox" name ="vegetarien">
                </label>
            </p>
            <p>
                <input type="submit">
            </p>
        </form>
    </body>
</html>