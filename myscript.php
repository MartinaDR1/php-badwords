<?php

$name = ($_GET["name"]);
$word = ($_GET["word"]);
$censored = str_replace($word, "***", $name);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>Result</title>
</head>
<body>
    <div class="container d-flex justify-content-center my-4">
        <div class="card rounded-0 shadow col-8 p-4">
            <h2 class="pb-2">Ecco i tuoi risultati</h2>
            
            <div class="mb-3 ">
                <h6>La frase che hai inserito è : <?php echo $name ?> </h6>
                <span>La tua frase è composta da <?php echo strlen($name);?> caratteri</span>
            </div>

            <div class="mb-3">
                <h6>Il paragrafo con la parola censurata è : <?php echo $censored ?> </h6>
                <span>La tua parola è composta da <?php echo strlen($censored);?> caratteri</span>
            </div>

            <button class="btn btn-primary mt-5 align-self-center" style="width: 100px">
                <a href="./index.php" class="text-light text-decoration-none">Riprova</a>
            </button>
        </div>    
    </div>
</body>
</html>