<!DOCTYPE html>
<html>
<head>
    <title>Daftar Fakultas - Telkom University</title>
</head>
<body>
    <h1>Daftar Fakultas - Telkom University</h1>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>Kode</th>
            <th>Nama Fakultas</th>
        </tr>
        @foreach($fakultas as $f)
            <tr>
                <td>{{ $f['kode'] }}</td>
                <td>{{ $f['nama_fakultas'] }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>
