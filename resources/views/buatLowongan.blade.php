<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Buat Lowongan') }}
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
<h1 style="text-align: center;">Buat Lowongan</h1>
<form action="{{Route('addLowongan') }}" method="post">
    @csrf
    <input type="hidden" name="idperusahaan" value="{{$perusahaan}}" ><br>
    Judul Lowongan :  <input type="text" name="judul" placeholder="Masukkan Judul" value="{{old('judul')}}">
    <span style="color: red;">@error('judul'){{$message}} @enderror</span><br>
    Kategori Pekerjaan : <input type="text" name="kategori" placeholder="Masukkan Kategori" value="{{old('kategori')}}">
    <span style="color: red;">@error('kategori'){{$message}} @enderror</span><br>
    Gaji : <input type="text" name="gaji" placeholder="Masukkan Gaji" value="{{old('gaji')}}"> 
    <span style="color: red;">@error('gaji'){{$message}} @enderror</span><br>
    Jadwal Kerja : <input type="text" name="jadwal" placeholder="Masukkan jadwal" value="{{old('jadwal')}}"> 
    <span style="color: red;">@error('jadwal'){{$message}} @enderror</span><br>
    Deskripsi Singkat : <textarea name="deskripsi"  cols="30" rows="6" placeholder="Masukkan Deskripsi Perusahaan" value="{{old('deskrpsi')}}"></textarea>
    <span style="color: red;">@error('deskripsi'){{$message}} @enderror</span><br>
    Cara Melamar: <textarea name="cara"  cols="30" rows="6" placeholder="Masukkan Cara Melamar" value="{{old('cara')}}"></textarea><br>
    <span style="color: red;">@error('cara'){{$message}} @enderror</span><br>
<input type="submit" name="button" class="inputp" value="Submit">
</form>
 
</body>
</html>
</x-app-layout>