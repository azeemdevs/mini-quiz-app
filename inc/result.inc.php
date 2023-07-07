<?php
// PHP Version: 8.2.0
if (isset($_POST['submit'])) {
    if (empty($_POST['checkanswer'])) {
        echo "No Options is selected";
        exit();
    } else {
        $user_Answers = $_POST['checkanswer'];
        $totalAttemptedAnswers = count($user_Answers);
        $i = 1;
        $correctAnswer = 0;
        $wrongAnswer = 0;
        $query = "SELECT * FROM questions;";
        $result = mysqli_query($conn, $query);
        $totalQuestions = mysqli_num_rows($result);
        while ($rows = mysqli_fetch_assoc($result)) {
            extract($rows);
            if (array_key_exists($i, $user_Answers)) {
                if ($answer_id == $user_Answers[$i]) {
                    $correctAnswer++;
                } elseif ($answer_id != $user_Answers[$i]) {
                    $wrongAnswer++;
                }
            }
            $i++;
        }
    }
}
