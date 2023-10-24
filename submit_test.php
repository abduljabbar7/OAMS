<?php
include 'db_connection.php';
if (isset($_POST['submit_test'])) {
   
    // Check if the user has already taken the quiz
    $userIdentifier = $_POST["cnic"];
    $sql = "SELECT id FROM quiz_users WHERE user_identifier = ?";
    $stmt = mysqli_prepare($conn, $sql);

    if (!$stmt) {
        die("Error in preparing the statement: " . mysqli_error($conn));
    }

    mysqli_stmt_bind_param($stmt, "s", $userIdentifier);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);
    $rows = mysqli_stmt_num_rows($stmt);

    if ($rows === 0) {
        // User is taking the quiz for the first time, insert the quiz result
        $sql = "INSERT INTO quiz_users (user_identifier, total_questions_attempted, total_score) VALUES ( ?, ?, ?)";
    } else {
        header("Location: ../student/basic-form.html?you have attempt test one time");
        
    }

    $stmt = mysqli_prepare($conn, $sql);

    if (!$stmt) {
        die("Error in preparing the statement: " . mysqli_error($conn));
    }

    // Loop through all the questions and store user answers
    $totalQuestions = 10; // Assuming you have 10 questions
    $totalScore = 0;
$correctAnswers = [
    "question_1" => "option_a",
    "question_2" => "option_b",
    "question_3" => "option_c",
    "question_6" => "option_a",
    "question_7" => "option_b",
    "question_8" => "option_c",
    "question_9" => "option_a",
    "question_10" => "option_b",
    // Add more questions and correct answers as needed
];

$totalScore = 0;

for ($i = 1; $i <= $totalQuestions; $i++) {
    $questionNumber = "question_" . $i;
    
    // Check if the question number exists in the correctAnswers array
    if (array_key_exists($questionNumber, $correctAnswers)) {
        $userAnswer = $_POST[$questionNumber];
        $correctAnswer = $correctAnswers[$questionNumber];

        // Compare the user's answer to the correct answer
        if ($userAnswer === $correctAnswer) {
            $totalScore++;
        }
    } else {
        // Handle the case where the question number doesn't have a correct answer defined
        // You may choose to ignore it or handle it differently
    }
}
    // Bind parameters and execute the query
    if ($rows === 0) {
        mysqli_stmt_bind_param($stmt, "sii", $userIdentifier, $totalQuestions, $totalScore);
    } else {
        mysqli_stmt_bind_param($stmt, "iis", $totalQuestions, $totalScore, $userIdentifier);
    }

    mysqli_stmt_execute($stmt);

    if (mysqli_affected_rows($conn) > 0) {
        // Data saved successfully, redirect the user to the result page
        header("Location: ../student/basic-table.php?id=" . $userIdentifier);
        exit();
    } else {
        // Failed to save data
        die("Error: Data not saved in the database.");
    }

    mysqli_close($conn);
} else {
    // Redirect to the start_test page if accessed directly without form submission
    header("Location: ../basic-from.html?q7You have not Registered");
    exit();
}
?>

