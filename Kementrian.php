
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kementerian</title>
</head>
<body>
    <center><h1>kementerian Perdangan</h1></center>
    <form action="cpnst.php" method="post">
<center>
<table>
    <tr>
        <td> NIK </td>
        <td> <input type="text" name="nik"></td>
    </tr>
    <tr>
        <td> Nama lengkap </td>
        <td> <input type="text" name="nama"></td>
    </tr>
    <tr>
        <td> Email </td>
        <td> <input type="text" name="email"></td>
    </tr>
    <tr>
        <td> Tempat Lahir</td>
        <td> <input type="text" name="tempat_lahir"></td>
    </tr>
    <tr>
        <td> Tanggal Lahir</td>
        <td> <input type="date" name="tanggal_lahirlahir" id="tanggal_lahir"></td>
    </tr>
    <tr>
        <td> Intansi</td>
        <td>  <select name="instansi" id="instansi">
                <option value=""></option>
                <option value="Laki"> Laki </option>
                <option value="Perempuan"> Perempuan </option>
                <option value="Khusus"> Khusus </option>
            </select> </td>
    </tr>
    <tr>
        <td> Password</td>
        <td> <input type="password" name="password"></td>
    </tr>
    <tr>
        <td> confirm<br>Password</td>
        <td> <input type="password" name="cofim_password"></td>
    </tr>
    <tr>
        <td> Kode sekuriti</td>
        <td> <input type="text" name="kode_sekuriti"></td>
    </tr>
    <tr>
        <td> Input Kode<br>sekuriti</td>
        <td> <input type="text" name="input_kode"></td>
    </tr>
    <tr>
            <td><input type="submit" name="cpnst" value="submit"></td>
        </tr>
</table>

</center>
</body>
</html>