<?php
$no = $_GET['id'];
include 'model.php';
$model = new Model();
$rslt = $model->edit_absen($no);
?>
<!doctype html>
<html lang="eng">
<head>
    <title>Edit Absen Mahasiswa</title>
</head>
<body>
    <h1>Edit Absen Mahasiswa</h1>
    <a href="absen.php">Kembali</a>
    <form action="proccess.php" method="post">
        <label>ID</label>
        <br>
        <input type="text" name="id" value="<?php echo $rslt->id ?>">
        <br>
         <label>MAHASISWA ID</label>
        <br>
        <input type="text" name="mhs_id" value="<?php echo $rslt->mhs_id ?>">
        <br>
         <label>MATAKULIAH_ID</label>
        <br>
        <input type="text" name="matakuliah_id" value="<?php echo  $rslt->matakuliah_id ?>">
        <br>
         <label>WAKTU ABSEN</label>
        <br>
        <input type="time" name="waktu_absen" value="<?php echo $rslt->waktu_abesen ?>">
        <br>
         <label>STATUS</label>
        <br>
        <input type="text" name="status" value="<?php echo $rslt->status ?>">
        <br><br>
        <button type="submit" name="submit_edit_absen">submit</button>
    </form>
</body>
<html>