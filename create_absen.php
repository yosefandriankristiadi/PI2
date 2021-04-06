<!doctype html> 
<html lang="en">  
        <head> 
        <title>Tambah Data Absen</title> 
        </head>  
    <body> 
    <h1>Tambah</h1> 
    <a href="absen.php">Kembali</a> 
    <br><br> 
        <form action="proccess.php" method="post"> 
            <label>ID</label> 
            <br> 
            <input type="text" name="id"> 
            <br> 
            <label>MHS ID</label> 
            <br> 
            <input type="text" name="mhs_id"> 
            <br> 
            <label>Matakuliah ID</label> 
            <br> 
            <input type="text" name="matakuliah_id"> 
            <br> 
            <label>WAKTU_ABSEN</label> 
            <br> 
            <input type="time" name="waktu_absen"> 
            <br> 
            <label>Status</label> 
            <br>
            <input type="text" name="status">
          <br><br>
            <button type="submit" name="submit_simpan_absen">Submit</button> 
            <button type="reset">Reset</button> 
        </form> 
    </body>  
</html> 