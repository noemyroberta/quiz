CREATE DATABASE db_quiz;
USE db_quiz;

-- DROP DATABASE db_quiz;

CREATE TABLE tb_utilisateurs (

	uti_id	INT PRIMARY KEY AUTO_INCREMENT NOT NULL UNIQUE,
    uti_age	VARCHAR(3) NOT NULL,  
    uti_poids INTEGER NOT NULL,
    uti_taille DECIMAL(12,2) NOT NULL,
    uti_cours ENUM ('Informática', 'Eletroeletrônica') NOT NULL,
	uti_facilite ENUM ('Baixa', 'Média', 'Alta') NOT NULL,	
	uti_deuxieme_frequence_cardiaque VARCHAR(45) NOT NULL,
	uti_premiere_frequence_cardiaque VARCHAR(45) NOT NULL

);


CREATE TABLE tb_questionnaire (

	qur_uti_id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
	qur_resultat INT NOT NULL,
    
    FOREIGN KEY (qur_uti_id)
    REFERENCES tb_utilisateurs (uti_id)

);


CREATE TABLE tb_questions (

	que_id INT PRIMARY KEY AUTO_INCREMENT NOT NULL UNIQUE,
	que_titre TEXT NOT NULL,
	que_uti_id INT NOT NULL,
    
    FOREIGN KEY (que_uti_id)
    REFERENCES tb_utilisateurs (uti_id)

);


CREATE TABLE tb_alternatives (

	alt_id INT PRIMARY KEY AUTO_INCREMENT NOT NULL UNIQUE,
	alt_description TEXT NOT NULL,
	alt_hit BOOLEAN DEFAULT FALSE NOT NULL,
	alt_que_id INT NOT NULL,
    
    FOREIGN KEY (alt_que_id)
    REFERENCES tb_questions (que_id)
    
);