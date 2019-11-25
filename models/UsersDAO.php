<?php

require('../database/Connection.php');

class UsersDAO {

    public function insertUser($age, $weight, $height, $course, $facility, $secondFrequence, $firstFrequence) {

        $sql = "
            INSERT INTO tb_utilisateurs (
                uti_age, uti_poids, uti_taille, uti_cours, 
                uti_facilite, uti_deuxieme_frequence_cardiaque, 
                uti_premiere_frequence_cardiaque)
            VALUES (:age, :weight, :height, :course, :facility, :secondFrequence, :firstFrequence)";

        $prepare = Connection::conect()->prepare($sql);

        $prepare->bindParam(':age', $age);
        $prepare->bindParam(':weight', $weight);
        $prepare->bindParam(':height', $height);
        $prepare->bindParam(':course', $course);
        $prepare->bindParam(':facility', $facility);
        $prepare->bindParam(':secondFrequence', $secondFrequence);
        $prepare->bindParam(':firstFrequence', $firstFrequence);

        return $prepare->execute();
    }

    public function selectUserByData($height, $weight, $age) {
       
        $sql = "SELECT uti_id FROM tb_utilisateurs 
                WHERE uti_age = :uti_age 
                AND uti_poids = :uti_poids 
                AND uti_taille = :uti_taille";
        
        $stmt = Connection::conect()->prepare($sql);
        $stmt->bindParam(':uti_age', $age);
        $stmt->bindParam(':uti_poids', $weight);
        $stmt->bindParam(':uti_taille', $height);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function updateSecondFrequence($id, $secondFrequence) {

        $sql = "
            UPDATE tb_utilisateurs 
            SET uti_deuxieme_frequence_cardiaque = :secondFrequence
            WHERE uti_id = :id";

        $prepare = Connection::conect()->prepare($sql);

        $prepare->bindParam(':secondFrequence', $secondFrequence);
        $prepare->bindParam(':id', $id);

        return $prepare->execute();
    }
}
