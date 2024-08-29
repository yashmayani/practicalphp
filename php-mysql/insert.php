<?php
include("./confing.php");

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $name=$_POST['name'];
    $age=$_POST['age'];

    $students=$conn->query ("insert into student_auto(name,age)values('$name','$age')");

    if($students){
        echo "inserted successfully";
        header("Location: ".$_SERVER['PHP_SELF']);
    }
    else{
        echo"something went wrong";
    }

}
?>





<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <form action="insert.php" method="POST">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" id="exampleFormControlInput1"
                placeholder="Enter your name" required>
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Age</label>
            <input type="text" name="age" class="form-control" id="exampleFormControlInput1"
                placeholder="Enter your age" required>
        </div>

        <button class="btn btn-success">Submit</button>
    </form>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>