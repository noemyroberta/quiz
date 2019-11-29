<?php

    require_once('../database/Connection.php');

    class QuizDAO {

        public function insertQuestion($title, $user_id) {

            $sql = "INSERT INTO tb_questions (que_titre, que_uti_id) VALUES (:que_titre, :que_uti_id)";

            $prepare = Connection::conect()->prepare($sql);
            $prepare->bindParam(':que_titre', $title);
            $prepare->bindParam(':que_uti_id', $user_id);

            return $prepare->execute();
        }

        public function selectQuestionsByUserId($user_id) {

            $array = [];

            $sql = "SELECT que_id 
                    FROM tb_questions Q 
                        INNER JOIN tb_utilisateurs U ON (U.uti_id = Q.que_uti_id)
                    WHERE uti_id = :uti_id
                    AND que_uti_id = :que_uti_id";

            $stmt = Connection::conect()->prepare($sql);
            $stmt->bindParam(':uti_id', $user_id);
            $stmt->bindParam(':que_uti_id', $user_id);
            $stmt->execute();

            while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                array_push($array, $row);
            }

            return $array;
        }

        public function insertAnswer($question_id, $alternative, $answer) {

            $sql = "INSERT INTO tb_alternatives (alt_description, alt_hit, alt_que_id) VALUES (:alt_description, :alt_hit, :alt_que_id)";

            $prepare = Connection::conect()->prepare($sql);
            $prepare->bindParam(':alt_description', $alternative);
            $prepare->bindParam(':alt_hit', $answer);
            $prepare->bindParam(':alt_que_id', $question_id);

            return $prepare->execute();
        }

        public function insertQuiz($user_id, $result) {

            $sql = "INSERT INTO tb_questionnaire (qur_uti_id, qur_resultat) VALUES (:qur_uti_id, :qur_resultat)";

            $prepare = Connection::conect()->prepare($sql);
            $prepare->bindParam(':qur_uti_id', $user_id);
            $prepare->bindParam(':qur_resultat', $result);
            

            return $prepare->execute();
        }

    }