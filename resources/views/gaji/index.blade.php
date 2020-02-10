<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<center>Data Gaji</center>
    <table>
        <table border="1">
    <thread>
        <tr>
        <th>nip</th>
        <th>nama</th>
        <th>jenis_kelamin</th>
        <th>jabatan</th>
        <th>Aksi</th>
        </tr>
        </thread>
    <tbody>
    @foreach($gaji as $gajii)
    <tr>
    <td>{{ $gajii->nip     }}</td>
    <td>{{ $gajii->nama }}</td>
    <td>{{ $gajii->jenis_kelamin      }}</td>
    <td>{{ $gajii->jabatan    }}</td>
    <td><a href="/gajii/{{ $gaji->id }}">Lihat</a></td>
    </tr>
    @endforeach
</body>
</html>