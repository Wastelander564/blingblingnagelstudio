<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>blingblingnagelstudiochnatal.org</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Bling Bling Nail Studio Chantal</h1>
    <form action="../index.php" method="post">
        <p>Kies 4 basiskleuren voor uw nagels</p>
        <input type="color" name="kleur1" value="#b10a0a" placeholder="#b10a0a">
        <input type="color" name="kleur2" value="#c10a4a" placeholder="#000000">
        <input type="color" name="kleur3" value="#ffffff" placeholder="#ffffff">
        <input type="color" name="kleur4" value="#ff00ff" placeholder="#ff00ff">
        <p>Uw telefoonnummer: </p>
        <input type="tel" name="telefoonnummer" placeholder="+31 6 2570 51 41" required>
        <p>Uw e-mailadres: </p>
        <input type="email" name="email" placeholder="randomguy@nowhere.com">
        <p>Afspraak datum: </p>
        <input type="datetime-local" name="afspraakDatum">
        <input type="hidden" name="verzondenDatumTijd" id="verzondenDatumTijd" value="<?php echo date('Y-m-d H:i:s'); ?>">
        <p>Soort behandeling:</p>
        <label><input type="checkbox" name="nagelbijtArrangement"> Nagelbijt arrangement (termijnbetaling mogelijk) 180$</label><br>
        <label><input type="checkbox" name="luxeManicure"> Luxe manicure (massage en handpakking) 30,00$</label><br>
        <label><input type="checkbox" name="nagelreparatie"> Nagelreparatie per nagel (in eerste week gratis) 5,00$</label><br>
        <br>
        <button type="submit">Sla op</button>
        <button type="reset">Reset</button>
    </form>
</body>
</html>

