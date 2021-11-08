<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="images/laugh.jpg">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Hello, world!</title>
  </head>
  <style>
      *{
    box-sizing: border-box;
}
.isi{
 position: absolute;
top: 50%;
left: 50%;
transform: translate(-50%, -50%);
width: 670px;
background: white;
border-radius: 10px;
box-shadow: 10px 10px 15px rgba(0,0,0,0.05);
padding: 20px;
}
  </style>
  <body class="bg-primary">
    <div class="isi text-center">
        <h1 class="text-center">Welcome to Our Website</h1>
        <p class="text-center">This Website Will Make You Entertain</p>
        <button type="button" class="click">Click Me for Jokes</button>
        <br>
       </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script>
        let arr = ["Jika seseorang melemparmu dengan batu, balaslah dengan bunga sekalian dengan potnya.", " Hidup ini singkat. Tersenyumlah selagi kamu masih memiliki gigi.", "Jika kamu pikir kamu terlalu kecil untuk membuat perbedaan, cobalah tidur dengan nyamuk.", "Kacamata hitam bisa membantumu mengamati orang tanpa ketahuan. Sama seperti Facebook di dunia nyata.", "Ikhlas itu kayak keset. Diinjek-injek tetap welcome", "Jika kamu merasa kesepian, matikan lampu dan tontonlah film horor. Maka kamu tidak akan merasakan kesepian lagi.", "Kenapa kalo lagi mikir orang suka megang jidatnya? -Ya iyalah, masa megang jidat orang lain!", "Negara mana yang memiliki huruf dobel? u ganda (Uganda)."]

        $(document).ready(function(){
            $(".click").click(function(){
                $(".click").after("<p>")
                $(".click").after(arr[Math.floor(Math.random()*arr.length)])
                $(".click").after("</p>")
                $(".click").after("<p><img width = '100px' src='tugas/images/laugh.jpg'></p>")
                $(".click").after("<p class='p'>")
                    $('.click').after(" <audio controls src='tugas/mp3/laugh.mp3' autoplay> Your browser does not support the <code>audio</code> element. </audio>")
                $(".click").after("</p>")
            })

        })
    </script>
  </body>
</html>
