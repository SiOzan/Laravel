<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <h1>Biodata Diri</h1>
    <table>
        <tr>
            <td>Nama</td>
            <td> : </td>
            <td>{{ $nama }}</td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td> : </td>
            <td>{{ $jk }}</td>
        </tr>
        <tr>
            <td>Pendidikan Terakhir</td>
            <td> : </td>
            <td>{{ $pt }}</td>
        </tr>
        <tr>
            <td>Pekerjaan</td>
            <td> : </td>
            <td>{{ $pekerjaan }}</td>
        </tr>
    </table>

</body>
</html>