<!DOCTYPE >
<html>
<head>
    
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<body>
    <h2> Data Pendaftar CPNS</h2>
    <table >
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>NO</th><th>Nik</th><th>nama</th>
                <th>email</th><th>tempat</th>
                <th>Tanggal lahir</th><th>intansi</th><th>password</th>
                <th>Kode sekuriti</th>
            </tr>
      </thead>
    <tbody>
    <?php
    include "hamen.php";
    $insert = mysqli_query($conn,"SELECT * FROM nik");
    $no=0;
    while($data=mysqli_fetch_array($insert)){
    $no++;?>
    <tr>
    <td><?=$no?></td>
    <td><?=$data['nik']?></td>
    <td><?=$data['nama']?></td> 
    <td><?=$data['email']?></td>
    <td><?=$data['tempat_lahir']?></td>
    <td><?=$data['tanggal_lahir']?></td>
    <td><?=$data['instansi']?></td>
    <td><?=$data['password']?></td>
    <td><?=$data['kode_sekuriti']?></td>
     <!--  <td><a href="ubah_siswa.php?id_siswa=<?=$data['id_siswa']?>" class="btn btn-success">Ubah</a> | <a href="hapus.php?id_siswa=<?=$data['id_siswa']?>
                 " onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></td> -->
    </tr>
   
    <?php
    }
    ?>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</tbody>
</body>
</html>