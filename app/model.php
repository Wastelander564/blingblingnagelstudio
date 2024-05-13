<?php
require_once 'config.php';

class Model {
    private $db;

    public function __construct() {
        global $dbHost, $dbName, $dbUser, $dbPass;
        // Connect to the database
        $this->db = new PDO('mysql:host=' . $dbHost . ';dbname=' . $dbName, $dbUser, $dbPass);
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function createAfspraak($kleur1, $kleur2, $kleur3, $kleur4, $telefoonnummer, $email, $afspraakDatum, $verzondenDatumTijd, $nagelbijtArrangement, $luxeManicure, $nagelreparatie) {
        try {
            // Prepared statement to prevent SQL injection
            $stmt = $this->db->prepare("INSERT INTO Afspraak (kleur1, kleur2, kleur3, kleur4, telefoonnummer, email, afspraakDatum, verzondenDatumTijd, nagelbijtArrangement, luxeManicure, nagelreparatie) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
            // Execute the statement with the submitted data
            $stmt->execute([$kleur1, $kleur2, $kleur3, $kleur4, $telefoonnummer, $email, $afspraakDatum, $verzondenDatumTijd, $nagelbijtArrangement, $luxeManicure, $nagelreparatie]);
            return true; // Successfully added
        } catch (PDOException $e) {
            // Log the error message
            error_log("Database error: " . $e->getMessage());
            return false; // Error adding
        }
    }
    public function getAfspraken() {
        $query = "SELECT * FROM Afspraak ORDER BY verzondenDatumTijd DESC";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
//werkt
?>
