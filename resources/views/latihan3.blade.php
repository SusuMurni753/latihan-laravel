<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center>Daftar Buku</center>
    @foreach($buku as $data)
    Judul    = {{ $data['judul'] }} <br>
    Penerbit = {{ $data['penerbit'] }} <br>
    Harga    = {{ $data['harga'] }} <br>
    Penulis  = {{ $data['penulis'] }} <br>
    @if($data['harga']>=150000 && $data['harga'] <200000 ) 
        @php status = Reguler @endphp
    @elseif($data['harga'] > 200000)
        @php $status = "Premium" @endphp
    @else
        @php $status = "Bajakan" @endphp 
    @endif
    @ifstatus == Premium || $status == "Reguler"<br>
        @php $keterangan = "Pembeli cerdas" @endphp
    @else
        @php $keterangan "Pemeli kurang cerdas" @endphp
    @endif
    status = {{ Status }} <br>
    keterangan = {{$keterangan}}
    <hr>
    @endforeach
</body>
</html>