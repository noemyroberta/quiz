<?php
require('../models/QuizDAO.php');
$quiz = new QuizDAO();

$questions = array(
    0 => 'Qual dos cubos abaixo poderia ser a rotação do cubo maior?',
    1 => 'Se o dia depois de amanhã é dois dias antes da quinta-feira, que dia é hoje?',
    2 => 'Marque a palavra que não combina com as outras:',
    3 => '4-7-11-18-29... Qual é o próximo número nessa sequência?',
    4 => 'Fernanda gosta do número 96, mas não do 45. Ela também gosta do número 540, mas não do 250. De qual número abaixo ela gosta?',
    5 => 'C, F, I, L, O... Nesta sequência, qual é a próxima letra?',
);

$quiz_1 = $_POST['image'];
$quiz_2 = $_POST['week'];
$quiz_3 = $_POST['words'];
$quiz_4 = $_POST['sequence'];
$quiz_5 = $_POST['numbers'];
$quiz_6 = $_POST['letters'];

$user_id = $_GET['id'];

$answer_1 = $quiz_1[0];
$answer_2 = $quiz_2[0];
$answer_3 = $quiz_3[0];
$answer_4 = $quiz_4[0];
$answer_5 = $quiz_5[0];
$answer_6 = $quiz_6[0];

$answers = array(
    0 => $answer_1,
    1 => $answer_2,
    2 => $answer_3,
    3 => $answer_4,
    4 => $answer_5,
    5 => $answer_6,
);

$answersTrue = array(
    0 => 4,
    1 => 'sunday',
    2 => 4,
    3 => 1,
    4 => 132,
    5 => 'R',
);

for ($i = 0; $i < 6; $i++) {
    $question = $questions[$i];
    $quiz->insertQuestion($question, $user_id);
}

$quizQuestionsUser = $quiz->selectQuestionsByUserId($user_id);

for ($i = 0; $i < 6; $i++) {
    if ($answers[$i] == $answersTrue[$i]) {
        $quiz->insertAnswer((int) implode(":", $quizQuestionsUser[$i]), $answers[$i], true);
    } else {
        $quiz->insertAnswer((int) implode(":", $quizQuestionsUser[$i]), $answers[$i], false);
    }
}

// VERIFY RIGHT QUESTION
for ($i = 0; $i < 6; $i++) {
    $result_array = array_intersect_assoc($answers, $answersTrue);
}
$rightQuestions = count($result_array);

$quiz->insertQuiz($user_id, $rightQuestions);

if($quizQuestionsUser != 0) {    
    header("Location: ../views/final.php?id=$user_id&rightQuestions=$rightQuestions");
}
