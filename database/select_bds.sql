
INSERT INTO db_quiz.tb_utilisateurs 
(uti_age, uti_poids, uti_taille, uti_cours, uti_facilite, uti_deuxieme_frequence_cardiaque, uti_premiere_frequence_cardiaque)
SELECT uti_age, uti_poids, uti_taille, uti_cours, uti_facilite, uti_deuxieme_frequence_cardiaque, uti_premiere_frequence_cardiaque 
FROM db_quiz2.tb_utilisateurs2; 


INSERT INTO db_quiz.tb_questionnaire (qur_uti_id, qur_resultat)
SELECT U.uti_id, QE.qur_resultat
FROM db_quiz2.tb_questionnaire2 QE
	INNER JOIN db_quiz2.tb_utilisateurs2 U2 ON (U2.uti_id = QE.qur_uti_id)
    INNER JOIN db_quiz.tb_utilisateurs U ON (U.uti_age = U2.uti_age)
WHERE U.uti_poids = U2.uti_poids 
AND U.uti_premiere_frequence_cardiaque = U2.uti_premiere_frequence_cardiaque 
AND U.uti_id > 13;
    
    
    
INSERT INTO db_quiz.tb_questions (que_titre, que_uti_id)
SELECT Q2.que_titre, U.uti_id
FROM db_quiz2.tb_questions2 Q2
	INNER JOIN db_quiz2.tb_questionnaire2 QE ON (QE.qur_uti_id = que_uti_id)
    INNER JOIN db_quiz2.tb_utilisateurs2 U2 ON (U2.uti_id = QE.qur_uti_id)
    INNER JOIN db_quiz.tb_utilisateurs U ON (U.uti_age = U2.uti_age)
WHERE U.uti_poids = U2.uti_poids 
AND U.uti_premiere_frequence_cardiaque = U2.uti_premiere_frequence_cardiaque 
AND U.uti_id > 13;



INSERT INTO db_quiz.tb_alternatives (alt_description, alt_hit, alt_que_id)
SELECT A2.alt_description, A2.alt_hit, Q.que_id
FROM db_quiz2.tb_alternatives2 A2

	INNER JOIN db_quiz2.tb_questions2 Q ON (Q.que_id = A2.alt_que_id)
	INNER JOIN db_quiz2.tb_questionnaire2 QE ON (QE.qur_uti_id = Q.que_uti_id)
    INNER JOIN db_quiz2.tb_utilisateurs2 U2 ON (U2.uti_id = QE.qur_uti_id)
    INNER JOIN db_quiz.tb_utilisateurs U ON (U.uti_age = U2.uti_age)

WHERE U.uti_poids = U2.uti_poids 
AND U.uti_premiere_frequence_cardiaque = U2.uti_premiere_frequence_cardiaque 
AND U.uti_id > 13;

