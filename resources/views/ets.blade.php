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
        <h1 class="text-center">Please Fill Form Below</h1>
        <form action="https://id.wikipedia.org/wiki/Halaman_Utama">
            <div class="row mt-3">
                <div class="col-4">
                    Nama Mahasiswa
                </div>
                <div class="col-1">
                    <p>:</p>
                </div>
                <div class="col-7">
                    <input type="text" class="name">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-4">
                    NRP
                </div>
                <div class="col-1">
                    <p>:</p>
                </div>
                <div class="col-7">
                    <input type="text" class="zip">
                </div>
            </div>
           <div class="row mt-3">
            <div class="col-4">
              Jurusan
            </div>
            <div class="col-1">
                <p>:</p>
            </div>
            <div class="col-7">
                <select name="" id="counry">
                    <option value="0" selected></option>
                    <option value="Sistem Informasi">Sistem Informasi</option>
                    <option value="Elektro">Elektro</option>
                    <option value="Informatika">Informatika</option>
                </select>
            </div>
        </div>
        <div class="row my-3">
            <div class="col-4">
               Nomor Handphone
            </div>
            <div class="col-1">
                <p>:</p>
            </div>
            <div class="col-7">
                <input type="text" id="phone" class="phone">
            </div>
        </div>
        <div class="button text-center">
            <button class="btn-primary submit" type="submit">Submit</button>
            <button class="btn-success">Reset</button>
        </div>
        </form>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){
            $(".submit").click(function(){
                var nameVal = $(".name").val();
                var name = /^[a-zA-Z\s]+$/;
                if(nameVal == ""){
                    alert("Input your name")
                    return false;
                }
                if(!nameVal.match(name) ||  nameVal.length == 1){
                    alert("Name must be alphabet and not allow 1 digit");
                    return false;
                }
                var jurusan = $("select option:selected").val();
                if(jurusan == 0){
                    alert("You must be select a jurusan");
                    return false;
                }
                var nrp = $(".zip").val();
                if(nrp == ""){
                    alert("Input your nrp")
                    return false;
                }
                if(isNaN(nrp) || nrp.length !== 10){
                    alert("NRP must be a number and 10 digits");
                    return false;
                }
                var phone = $("#phone").val();
                if( phone == ""){
                    alert("Masukkan angka")
                    return false;
                }
                if(phone.length < 10){
                    alert("Phonenumber must be minimum 10 digits")
                    return false;
                }
                if(isNaN(phone)){
                    alert("Phonenumber must be a number");
                    return false;
                }
            })
        })
    </script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
