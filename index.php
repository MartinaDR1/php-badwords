<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>PHP Badwords</title>
</head>
<body>
<div class="container d-flex justify-content-center my-4">
    <div class="card rounded-0 shadow col-8">

      <div class="card p-4">
        <form action="myscript.php" method="get">
          <div class="mb-3">
                <label for="name">Inserisci una frase</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Inserisci qui la frase" aria-describedby="suffixId">
          </div>
          <div class="mb-3">
                <label for="word">Inserisci una parola</label>
                <input type="text" name="word" id="word" class="form-control" placeholder="Inserisci qui la parola" aria-describedby="suffixId">
          </div>
        

          <button type="submit" class="btn btn-primary">Submit</button>
        
        </form>
      </div>


    </div>
</div>

</body>
</html>