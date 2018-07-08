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
                    Etes-vous végétarien ? 
                    <input type="checkbox" name ="vegetarien">
                </label> <br>
                <label for="">Vous habitez où ?
                    <select name="ville">
                        <option value="Lille" selected="selected">
                                               Lille</option>
                        <option value="Orléans">Orléans</option>
                        <option value="Paris">Paris</option>
                        <option value="Valenciennes">Valenciennes</option>
                    </select>
                </label>
            </p>
            <p>
                <input type="submit" value="valid">
            </p>
        </form>
    </body>
</html>