<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <form action="getreq.php"  method="GET"> 
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">name</label>
      <input type="text" name="name" id="disabledTextInput" class=" form-control" placeholder="enter your name">             
    </div>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">age</label>
      <input type="text" name="age" id="disabledTextInput" class="form-control" placeholder="enter your age">
    </div>
    <button class="btn btn-success">submit</button>    
    
</form>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
  
</html> 