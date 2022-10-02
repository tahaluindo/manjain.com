<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Kelola Lowongan Pekerjaan Perusahaan Anda') }}
        </h2>
    </x-slot>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/stylePerusahaan.css">

    <style>
        .grid-title{
            display: block;
            font-family: 'Nunito',sans-serif;
            font-size: 2rem;
            text-align: center;
            
        }
    </style>
</head>
<body>
@foreach($perusahaan as $item)
<form action="{{Route('buatLowonganPerusahaan', $item['idperusahaan']) }}" class="card-button">
                        <input class="card-button-text" type="submit" value="Buat Lowongan">
                </form>
@break
@endforeach  

<div class="grid" >

@foreach($perusahaan as $item)

    <div class="grid-item">
        <div class="card">
            <img class="card-img" src="img/{{$item['logo']}}" alt="" >
            <div class="card-content">
                <h1 class="card-title">{{$item['judul']}}</h1>
                <form action="{{Route('editLowongan', $item['id']) }}" class="card-button">
                    <input class="card-button-text" type="submit" value="Edit Lowongan">
                </form>
                <form action="{{Route('delete', $item['id']) }}" class="card-button">
                    <input class="card-button-text" type="submit" value="Hapus">
                </form>
            </div>
        </div>
        </div>
@endforeach    


</div>
</body>
</html>
</x-app-layout>