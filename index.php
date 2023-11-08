<?php
include 'config.php';

$result = mysqli_query($conn, "SELECT*FROM cv_data2 WHERE id = 1;"); // Sesuaikan dengan id CV
$data = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="main.css">
  <script src="script.js"></script>
  <style>#rcorners2 {
   
}
</style>
  <title>Curriculum vitae</title>
</head>

<body class="p-3">
  <nav class="navbar sticky-top bg-body-tertiary biru">
    <div class="container-fluid">
      <h1>CREATE CV</h1>
      <a class="navbar-brand" href="admin.php">Update</a>
    </div>
  </nav>
  <div class="card">
    <div class="p-3">
      <img src="<?php echo $data['foto_path']; ?>">
      <div class="card-body">
        <h2>Nama :</h2>
        <p class="card-title"><?php echo $data['nama']; ?></p>
        <h2>Alamat : </h2>
        <p class="card-text"><?php echo $data['alamat']; ?></p>
        <h2>telpon : </h2>
        <p class="card-text"><?php echo $data['telpon']; ?></p>
        <h2>email : </h2>
        <p class="card-text"><?php echo $data['email']; ?></p>
        <h2>Link Git Hub : </h2>
        <p class="card-text"><?php echo $data['web']; ?></p>
        <h2>Pendidikan : </h2>
        <p class="card-text"><?php echo $data['pendidikan']; ?></p>
        <h2>Pengalaman Kerja : </h2>
        <p class="card-text"><?php echo $data['pengalaman_kerja']; ?></p>
        <h2>Keterampilan : </h2>
        <p class="card-text"><?php echo $data['keterampilan']; ?></p>
      </div>
    </div>
  </div>
  
<
</body>

</html>