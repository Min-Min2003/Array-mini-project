<?php
    $projects=[
        [
            "title" => "Programming Basic With Javascript",
            "Chapter" => 9,
            "Lesson" => 55,
            "Complete_student" => 35,
            "price" => 60000
        ],
        [
            "title" => "MERN Stack Deployment",
            "Chapter" => 4,
            "Lesson" => 10,
            "Complete_student" => 2,
            "price" => 50000
        ],
        [
            "title" => "Php + Deep Dive Laravel",
            "Chapter" => 11,
            "Lesson" => 102,
            "Complete_student" => 43,
            "price" => 100000
        ],
        [
            "title" => "Js+Vue+Firebase Combo Package",
            "Chapter" => 14,
            "Lesson" => 113,
            "Complete_student" => 43,
            "price" => 100000
        ],
    ]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini Array Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>

<div class="row row-cols-1 row-cols-md-3 g-4">
    <?php
        foreach($projects as $project): ?>
            <div class="col">
                <div class="card border-success mb-3" style="max-width: 30rem;">
                    <div class="card-body text-success">
                    <h5 class="card-title">Title - <span><?= $project['title']; ?></span></h5>
                    <p class="card-text">Chapters - <span><?= $project['Chapter']; ?></span></p>
                    <p class="card-text">Lessons - <span><?= $project['Lesson']; ?></span></p>
                    <p class="card-text">Completed_students - <span><?= $project['Complete_student']; ?></span></p>
                    </div>
                <div class="card-footer bg-transparent border-success">Fees : <span><?= $project['price']; ?></span> MMK</div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

</body>
</html>