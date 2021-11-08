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
  <body class="bg-primary">
    <div class="container">
        <h1 class="text-center">Please Insert 3 Numbers Randomly</h1>
        <form action="tugas9php" method="post">
            @csrf
            <div class="row mt-3">
                <div class="col-4">
                    1st Number
                </div>
                <div class="col-1">
                    <p>:</p>
                </div>
                <div class="col-7">
                    <input type="number" class="number1" name="number1">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-4">
                   2nd Number
                </div>
                <div class="col-1">
                    <p>:</p>
                </div>
                <div class="col-7">
                    <input type="number" class="number2" name="number2">
                </div>
            </div>
        <div class="row my-3">
            <div class="col-4">
               3rd Number
            </div>
            <div class="col-1">
                <p>:</p>
            </div>
            <div class="col-7">
                <input type="number" id="phone" class="number3" name="number3">
            </div>
        </div>
        <div class="button text-center">
            <button class="btn-primary submit" type="submit">Submit</button>
        </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
