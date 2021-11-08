<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
    margin: 50px auto;
    min-height: 100vh;
    width: 670px;
    background: white;
    border-radius: 10px;
    padding: 20px;
}
    </style>
  </head>
  <body class="bg-primary">
    <div class="container">
        <h1 class="text-center">Please Fill Form Below</h1>
        <form action="https://id.wikipedia.org/wiki/Halaman_Utama">
            <div class="row mt-3">
                <div class="col-4">
                    User id
                </div>
                <div class="col-8">
                    <input type="text" required class="user">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-4">
                   Password
                </div>
                <div class="col-8">
                    <input type="password" required class="password">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-4">
                   Name
                </div>
                <div class="col-8">
                    <input type="text" required class="name">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-4">
                  Address
                </div>
                <div class="col-8">
                    <input type="text"  class="address">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-4">
                    Country
                </div>
                <div class="col-8">
                    <select name="country" id="country">
                        <option value="0" selected>Please Select a country</option>
                        <option value="Malasyia">Malasyia</option>
                        <option value="Indonesia">Indonesia</option>
                        <option value="Kamboja">Kamboja</option>
                        <option value="Thailand">Thailand</option>
                        <option value="Japan">Japan</option>
                    </select>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-4">
                 Zipcode
                </div>
                <div class="col-8">
                    <input type="text" required class="zip">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-4">
                  Email
                </div>
                <div class="col-8">
                    <input type="text" required class="email">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-4">
                    Sex
                </div>
                <div class="col-8">
                    <input type="radio" class="gender"> Male
                    <input type="radio" class="gender"> Female
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-4">
                   Language
                </div>
                <div class="col-8">
                    <input type="checkbox" class="language"> English
                    <input type="checkbox" class="language"> Non English
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-4">
                    About
                </div>
                <div class="col-8">
                    <textarea name="" id="" cols="30" rows="10"></textarea>
                </div>
            </div>
            <div class="submit text-center mt-3">
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){
            $(".submit").click(function(){
                if($(".user").val().length < 5 || $(".user").val().length > 12){
                    alert("User id must be 5 to 12");
                    return false;
                }
                if($(".password").val().length < 7 || $(".password").val().length > 12){
                    alert("Password must be 7 to 12");
                    return false;
                }
               var name = $(".name").val();
               var patternName = /^[a-zA-Z\s]+$/;
               if(!name.match(patternName)){
                   alert("Must be alphabet");
                   return false;
               }
               var country = $('select option:selected').val();
               if(country == 0){
                   alert("Must be select one");
               }
               var foremail = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
               var radio = $("input[type='radio']:checked");
    var check = $("input[type='checkbox']:checked");
    if(radio.length == 0 || check.length == 0 ){
        alert("Must be select Sex and Languange")
        console.log(check);
          return (false);
      }
            })
        })
    </script>
  </body>
</html>
