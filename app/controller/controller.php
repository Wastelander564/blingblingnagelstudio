<?php
require_once 'model.php';

class Controller {
    private $model;

    public function __construct() {
        $this->model = new Model();
    }

    public function handleFormSubmission() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Extract form data
            $kleur1 = $_POST["kleur1"];
            $kleur2 = $_POST["kleur2"];
            $kleur3 = $_POST["kleur3"];
            $kleur4 = $_POST["kleur4"];
            $telefoonnummer = $_POST["telefoonnummer"];
            $email = $_POST["email"];
            $afspraakDatum = $_POST["afspraakDatum"];
            $verzondenDatumTijd = $_POST["verzondenDatumTijd"];
            $nagelbijtArrangement = isset($_POST["nagelbijtArrangement"]) ? 1 : 0;
            $luxeManicure = isset($_POST["luxeManicure"]) ? 1 : 0;
            $nagelreparatie = isset($_POST["nagelreparatie"]) ? 1 : 0;
    
            // Debugging: Output values for debugging
            echo "Values received: <br>";
            echo "Kleur1: $kleur1 <br>";
            echo "Kleur2: $kleur2 <br>";
            echo "Kleur3: $kleur3 <br>";
            echo "Kleur4: $kleur4 <br>";
            echo "Telefoonnummer: $telefoonnummer <br>";
            echo "Email: $email <br>";
            echo "AfspraakDatum: $afspraakDatum <br>";
            echo "VerzondenDatumTijd: $verzondenDatumTijd <br>";
            echo "NagelbijtArrangement: $nagelbijtArrangement <br>";
            echo "LuxeManicure: $luxeManicure <br>";
            echo "Nagelreparatie: $nagelreparatie <br>";
    
            // Call model method to save data
            $success = $this->model->createAfspraak($kleur1, $kleur2, $kleur3, $kleur4, $telefoonnummer, $email, $afspraakDatum, $verzondenDatumTijd, $nagelbijtArrangement, $luxeManicure, $nagelreparatie);
            var_dump($success);
            // Redirect to thank you page or show error
            if ($success) {
                header("Location: ../index.php");
            } else {
                echo "Er is een fout opgetreden bij het opslaan van de gegevens.";
            }
            exit();
        }
    }
    
}
?>