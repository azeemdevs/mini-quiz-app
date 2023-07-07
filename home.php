<?php require_once __DIR__ . '/config.php'  ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BootStrap CDN Link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <title>Quiz || App</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
            <div class="container">
                <a class="navbar-brand text-uppercase fw-semibold fst-italic">Quiz</a>
            </div>
        </nav>
    </header>

    <div class="container my-3">
        <h3 class="text-center bg-primary text-white rounded-4 shadow-sm">Total Questions are 5, each question has 1 mark.</h3>
        <form action="result.php" method="POST">
            <!-- Code to fetch Questions from Database -->
            <?php
            for ($i = 1; $i <= 5; $i++) :
                $query = "SELECT * FROM questions WHERE id = '$i'";
                $result = mysqli_query($conn, $query);
                while ($rows = mysqli_fetch_assoc($result)) :
                    extract($rows);
            ?>
                    <div class="card my-2">
                        <div class="card-header">
                            <?= $questions; ?>
                        </div>
                        <div class="card-body">
                            <!-- Code to fetch Answers from Database -->

                            <?php
                            $query = "SELECT * FROM answers WHERE Question_id = '$i';";
                            $result = mysqli_query($conn, $query);
                            while ($rows = mysqli_fetch_assoc($result)) :
                                extract($rows);
                            ?>
                                <div class="form-check">
                                    <input type="radio" name="checkanswer[<?= $Question_id; ?>]
                                    " value="<?= $id; ?>" class="form-check-input"> <?= $answers; ?>
                                </div>
                                <!-- End OF Answers While -->
                            <?php endwhile;  ?>
                        </div>
                    </div>
            <?php endwhile;
            endfor; ?>
            <!-- End of Questions While -->
            <!-- End of Counter For Loop -->
            <div class="my-2 float-end">
                <button type="submit" name="submit" class="btn btn-primary btn-sm rounded-5 fw-semibold shadow-sm">Submit</button>
            </div>
        </form>
    </div>

</body>

</html>