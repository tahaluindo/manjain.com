<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Perusahaan') }}
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
    p{
        text-align: center;
        font-family: sans-serif, 'Nunito';
        font-size: 25px;
    }


    </style>
</head>
<body>


<p>Anda Belum Memiliki Lowongan Pekerjaan, Silahkan Buat Lowongan Terlebih Dahulu</p>

<form action="{{Route('buatLowonganPerusahaan', $perusahaan['id']) }}" class="card-button">
                        <input class="card-button-text" type="submit" value="Buat Lowongan">
                </form>
</body>
</html>
</x-app-layout>