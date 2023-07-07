<?php require_once __DIR__ . '/config.php';  ?>
<?php require_once __DIR__ . '/inc/result.inc.php';  ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BootStrap CDN Link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <title>Results</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
        <div class="container">
            <h3 class="h3"><a href="#" class="navbar-brand">Results</a></h3>
        </div>
    </nav>
    <div class="container my-2">
        <div class="table-responsive">
            <table class="table table-striped table-primary table-hover">
                <thead>
                    <tr>
                        <th>Total Questions</th>
                        <th>Correct Answers</th>
                        <th>Incorrect Answers</th>
                        <th>Total Attempted</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?= $totalQuestions ?? '' ?></td>
                        <td><?= $correctAnswer ?? ''; ?></td>
                        <td><?= $wrongAnswer ?? ''; ?></td>
                        <td><?= $totalAttemptedAnswers ?? ''; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</body>

</html>