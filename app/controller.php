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

            // Call model method to save data
            $success = $this->model->createAfspraak($kleur1, $kleur2, $kleur3, $kleur4, $telefoonnummer, $email, $afspraakDatum, $verzondenDatumTijd, $nagelbijtArrangement, $luxeManicure, $nagelreparatie);

            // Redirect to thank you page or show error
            if ($success) {
                echo "bedankt voor uw afspraak";
                header("Refresh: 2; url= ../alle_afspraken.php");
                exit();
            } else {
                echo "Er is een fout opgetreden bij het opslaan van de gegevens.";
            }
        }
    }

    public function readAfspraken() {
        $afspraken = $this->model->getAfspraken();
        require 'afspraken.php'; // Load the view
    }
    
    
}

?>
