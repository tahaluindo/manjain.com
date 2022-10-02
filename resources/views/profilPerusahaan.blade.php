<!DOCTYPE html>
<html>
<head>
<!-- Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

<!-- Styles -->


<style>
    h1 {
        font-family: 'Nunito', sans-serif;
        text-align : center;
    }
    body {
        font-family: 'Nunito', sans-serif;
        background-color : #f3f4f6;
    }
    .inputpp{
        font-family: 'Nunito', sans-serif;
        background-color: #a0aec0;
        padding: 17px 20px;
        font-size: 25px;
        border-radius: 10px;
        border: 3px black;

    }
    .inputp{
        font-family: 'Nunito', sans-serif;
        background-color: #919af9;
        height : 55px;
        width : 100px;
        font-size: 20px;
        border-radius  : 10px;
        border: 3px black;
        margin-top: 20px;
        text-align : center;
        align : center ;
    }
    form {
        font-family: 'Nunito', sans-serif;
        display: grid;
        padding: 1em;
        background: #f9f9f9;
        border: 1px solid #c1c1c1;
        margin: 2rem auto 0 auto;
        max-width: 600px;
        padding: 1em;
    }
    form input {
        background: #fff;
        border: 2px solid #9c9c9c;
    }
    #logo{
        font-family: 'Nunito', sans-serif;
        font-size: 40px;
        text-align: center;
        margin-top: 100px;
    }
</style>
</head>

<body>

<form action="{{ url('/dashboard') }}">
Nama Perusahaan: <input type="text" name="nama perusahaan"><br>
Logo <input type="file" name="logo"><br>
Industri : <input type="text" name="industri"><br>
Alamat Kantor Utama : <input type="text" name="alamat kantor utama"><br>
Situs Resmi : <input type="text" name="situs resmi"><br>
Deskripsi Perusahaan : <input type="text" name="deskripsi perusahaan"><br>

<input type="submit" name="button" class="inputp" value="Submit">
</form>

</body>
</html>
