<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<fieldset>
    <legend>Show gaji</legend>
    Nip           : <b>{{$gaji->nip}}</b>
    Nama          : <b>{{$gaji->nama}}</b><br>
    Jenis Kelamin : <b>{{$gaji->jenis_kelamin}}</b>
    Jabatan       : <b>{{$gaji->jabatan}}</b>
    
    @if(gaji->jabatan == 'Manager')
    @php $uanggaji =  5000000; @endphp

    @elseif(gaji->jabatan == 'Sekretaris')
    @php $uanggaji =  3500000; @endphp
    @else
    @php $uanggaji =  3500000; @endphp
    @endif

    @if(gaji->jam_kerja >= 250)
    @php $a = $uang*10/100; @endphp
    @elseif(gaji->jam_kerja >= 150)
    @php $a = $uang*5/100; @endphp
    @elseif(gaji->jam_kerja >= 200)
    @php $a = $uang*7.5/100; @endphp
    @else
    @php bonus=$uang*0 @endphp
    @endif

    @gaji = <b>{{$uang}}</b>
    Gaji Jam Kerja = <b>{{bonus}}</b>
    Total Gaji = <b>{{uang}} + {{bonus}} = {{uang + bonus}}</b>
    </fieldset>
</body>
</html>