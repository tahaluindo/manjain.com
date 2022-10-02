<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Buat Perusahaan') }}
        </h2>
    </x-slot>
<!DOCTYPE html>
<html>
<head>
<!-- Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

<!-- Styles -->
<link rel="stylesheet" href="../css/style.css">
</head>

<body>
@if(Session::get('success'))
    <div class="alertSuccess">
        {{Session::get('success')}}
    </div>
    
@endif
<form action="addPerusahaan" method="post" enctype="multipart/form-data">
    @csrf
    Nama Perusahaan :  <input type="text" name="nama" placeholder="Masukkan Nama" value="{{old('nama')}}">
    <span style="color: red;">@error('nama'){{$message}} @enderror</span><br>
    Industri : <input type="text" name="industri" placeholder="Masukkan Industri" value="{{old('industri')}}">
    <span style="color: red;">@error('industri'){{$message}} @enderror</span><br>
    Alamat Kantor : <input type="text" name="alamat" placeholder="Masukkan Alamat Kantor" value="{{old('alamat')}}">
    <span style="color: red;">@error('alamat'){{$message}} @enderror</span><br>
    Situs Resmi : <input type="text" name="situs" placeholder="Masukkan Situs Resmi" value="{{old('situs')}}"> 
    <span style="color: red;">@error('situs'){{$message}} @enderror</span><br>
    Logo Perusahaan : <input type="file" name="logo" ><br>
    Deskripsi Perusahaan : <textarea name="deskripsi"  cols="30" rows="6" placeholder="Masukkan Deskripsi Perusahaan" value="{{old('deskrpsi')}}"></textarea>
    <span style="color: red;">@error('deskripsi'){{$message}} @enderror</span><br>
    
    <button type="submit" class="inputp">Submit</button>
</form>

</body>
</html>
</x-app-layout>