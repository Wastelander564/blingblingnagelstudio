<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afspraken</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #dddddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Afspraken</h2>
    <table>
        <thead>
            <tr>
                <th>Kleur 1</th>
                <th>Kleur 2</th>
                <th>Kleur 3</th>
                <th>Kleur 4</th>
                <th>Telefoonnummer</th>
                <th>Email</th>
                <th>Afspraak Datum</th>
                <th>Verzonden Datum/Tijd</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($afspraken as $afspraak): ?>
                <tr>
                    <td><?php echo $afspraak['kleur1']; ?></td>
                    <td><?php echo $afspraak['kleur2']; ?></td>
                    <td><?php echo $afspraak['kleur3']; ?></td>
                    <td><?php echo $afspraak['kleur4']; ?></td>
                    <td><?php echo $afspraak['telefoonnummer']; ?></td>
                    <td><?php echo $afspraak['email']; ?></td>
                    <td><?php echo $afspraak['afspraakDatum']; ?></td>
                    <td><?php echo $afspraak['verzondenDatumTijd']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
