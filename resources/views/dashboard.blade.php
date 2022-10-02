<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Daftar Perusahaan') }}
        </h2>
    </x-slot>
   
    <div class="grid">
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

<div class="grid">
    @foreach($data as $item)
    
    <div class="grid-item">
        <div class="card">
            <img class="card-img" src="img/{{$item['logo']}}" alt="" >
            <div class="card-content">
                <h1 class="card-title">{{$item['perusahaan']}}</h1>
                <form action="{{Route('perusahaan', $item) }}" class="card-button">
                    <input class="card-button-text" type="submit" value="Lihat Perusahaan">
                </form>
            </div>
        </div>
    </div>
    @endforeach

    
</div>

</body>
</html>
    
    </x-app-layout>
