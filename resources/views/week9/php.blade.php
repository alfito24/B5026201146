<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Hello, world!</title>
    <style>
        body{
    display: flex;
}
.container{
    align-items: center;
    justify-content: center;
    width: 670px;
    background: white;
    padding: 20px;
    border-radius: 10px;
    margin: 50px auto;
    min-height: 50vh;
}
input{
    width: 80%;
}
select {
    width: 80%;
}
    </style>
  </head>
  <body class="bg-success">
    <div class="container">
        <h1 class="text-center mt-3">Your pick : </h1>
        <h1 class="text-center">
            <?php
            $number1 = $_POST['number1'];
            $number2 = $_POST['number2'];
            $number3 = $_POST['number3'];
            $smallest;
            $biggest;
            if($number1 < $number2){
                $smallest = $number1;
            } else{
                $smallest = $number2;
            }
            if($number3 < $smallest){
                $smallest = $number3;
            }
            if($number1 > $number2){
                $biggest = $number1;
            } else{
                $biggest = $number2;
            }
            if($number3 > $biggest){
                $biggest = $number3;
            }
            ?>
             <?php  echo $number1 . ', ' . $number2 . ', ' . $number3; ?>
        </h1>
        <h1 class="text-center mt-5">So, the smallest number is
            <?php echo $smallest; ?>
        </h1>
        <h1 class="text-center mt-5">So, the biggest number is
            <?php echo $biggest; ?>
        </h1>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
