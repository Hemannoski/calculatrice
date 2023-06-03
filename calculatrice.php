<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="calculatrice-traitement.php" methode="GET">

        <!-- la saisie de la 1ére opérande -->
        <label>Votre 1ér nombre:</label>
        <input type="number" name="nombre1" size="30"><br><br>

        <!-- la saisie de l'opération -->
        <input type="radio" name="operation" value="+">+
        <input type="radio" name="operation" value="-">-
        <input type="radio" name="operation" value="*">*
        <input type="radio" name="operation" value="/">/
        <input type="radio" name="operation" value="%">%<br><br>

        <!-- la saisie de la 2ème opérande -->
        <label>Votre 2éme nombre:</label>
        <input type="number" name="nombre2" size="30"><br></br>

        <!-- mes boutons envoyer et annuler -->
        <input type="submit" name="envoi" value="Envoyer">
        <input type="reset" name="efface" value="Annuler"> 


    </form>
    <br><br>
    
</body>
</html>