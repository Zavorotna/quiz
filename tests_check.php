<?php
//session_destroy();
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$questions = [
    [
        'question' => 'Як називається предмет',
        'answer' => ['php', 'html', 'java script', 'css'],
        'name' => 'test1',
        'correct' => 'php'
    ],
    [
        'question' => 'Знайди логічне заперечення',
        'answer' => ['==', '!=', '!', '.='],
        'name' => 'test2',
        'correct' => '!'
    ],
    [
        'question' => 'Знайди функцію для сортування масиву',
        'answer' => ['count()', 'array_splice()', 'sort()', 'array_push()'],
        'name' => 'test3',
        'correct' => 'sort()'
    ],
    [
        'question' => 'За допомогою якої функції видалити пробіли або інші символи з початку та/або кінця строки?',
        'answer' => ['trim()', 'explode()', 'strstr()', 'substr()'],
        'name' => 'test4',
        'correct' => 'trim()'
    ],
    [
        'question' => 'Як округлити дробове число до більшого?',
        'answer' => ['rand()', 'round()', 'max()', 'ceil()'],
        'name' => 'test5',
        'correct' => 'ceil()'
    ],
    [
        'question' => 'Назви індекс значення "зима" у масиву $season = ["весна", "літо", "осінь", "зима"]',
        'answer' => [1, 3, 0, 4],
        'name' => 'test6',
        'correct' => 3
    ],
    [
        'question' => 'Якого формату буде дата якщо записати її у такому вигляді date("N")?',
        'answer' => ['порядковий номер дня тижня', 'день тижня у форматі Fri', 'день тижня у форматі Wednesday', 'назва місяця'],
        'name' => 'test7',
        'correct' => 'порядковий номер дня тижня'
    ],
    [
        'question' => 'Як визначити чи змінна є масивом?',
        'answer' => ['is_array()', 'in_array()', 'array()', 'its_array()'],
        'name' => 'test8',
        'correct' => 'is_array()'
    ],
    [
        'question' => 'Як отримати довжину рядка?',
        'answer' => ['count()', 'length()', 'strlen()', 'lenstr()'],
        'name' => 'test9',
        'correct' => 'strlen()'
    ],
    [
        'question' => 'Що поверне функція time()?',
        'answer' => ['час у секундах з 01.01.1970', 'час у мілісекундах з 01.01.1970', 'час у хвилинах з 01.01.1970', 'час у форматі 01.01.1970'],
        'name' => 'test10',
        'correct' => 'час у секундах з 01.01.1970'
    ]
];
shuffle($questions);
//foreach($questions as &$question) {
//    shuffle($question['answer']);
//}

//перемішування питань і відповідей у двовимірному масиві за допомогою індекса
//$newQuestions = $questions;
//foreach($questions as $ind => $question) {
//    shuffle($question['answer']);
//    $newQuestions[$ind] = $question['answer'];
//}
$newQuestions = [];
for($i = 0; $i <= 4; $i++) {
    $newQuestions[$i] = $questions[$i];
    shuffle($questions[$i]['answer']);
    $newQuestions[$i]['answer'] = $questions[$i]['answer'];
}

$_SESSION['questionArr'] = $newQuestions;

?>

