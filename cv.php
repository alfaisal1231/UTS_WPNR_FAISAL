<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curriculum Vitae</title>
     <!-- PUNYA FAISAL EAKKKKKKKK -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/x-icon" href="logo/images.jpeg">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php
    include_once 'Database.php';
    include_once 'User.php';
    include_once 'School.php';
    include_once 'Lpk.php';

    $database = new Database();
    $db = $database->getConnection();

    $query = new Users($db);
    $listuser = $query->getUsersId($_GET["user_id"])->fetchAll(PDO::FETCH_ASSOC);
    $user_data = ($listuser[0]);

    $queryschool = new School($db);
    $listschool = $queryschool->getSchoolId($_GET["user_id"])->fetchAll(PDO::FETCH_ASSOC);
    $school_data = ($listschool[0]);

    $querylpk = new Lpk($db);
    $listlpk = $querylpk->getlpkId($_GET["user_id"])->fetchAll(PDO::FETCH_ASSOC);
    $lpk_data = ($listlpk[0]);
    ?>
 
 <div class="container">
  <div class="profile">
      <div class="profile_container">
        <div>
          <h1 class="profile_name">
            <span class="nama_profil"><?php echo $user_data['fullname']; ?></span>
          </h1>
          <p class="profile_title">Tukang Komputer</p>
          <p class="description profile_description">
            Saya adalah seorang kapiten mempunyai pedang panjang kalau berjalan prok-prok-prok
        </p>
        </div>
      </div>
    </div>
    <div class="profile">
      <div class="section">
        <div class="title">Sekolah</div>
        <table class="table table-bordered table-dark">
          <div class="col-md-4">
            <tr class="table-primary">
              <th>Sekolah</th>
              <th>Tahun</th>
              <th>Jurusan</th>
            </tr>
            <?php foreach ($listschool as $key => $user_school) { ?>
              <tr>
                <td><?php echo $user_school['n_school']; ?></td>
                <td><?php echo $user_school['tahun']; ?></td>
                <td><?php echo $user_school['jurusan']; ?></td>
              </tr>
            <?php } ?>
          </div>
        </table>
      </div>
    </div>
    <div class="profile">
      <div class="section">
        <div class="title">Keahlian</div>
        <table class="table table-bordered table-dark">
          <div class="col-md-4">
            <tr class="table-primary">
              <th>Sertifikasi</th>
              <th>Nama Lembaga Pendidikan</th>
              <th>Nilai</th>
            </tr>
            <?php foreach ($listlpk as $key => $user_lpk) { ?>
              <tr>
                <td><?php echo $user_lpk['sertifikasi']; ?></td>
                <td><?php echo $user_lpk['lpk']; ?></td>
                <td><?php echo $user_lpk['nilai']; ?></td>
              </tr>
            <?php } ?>
          </div>
        </table>
      </div>
    </div>
    <hr>
    <div class="group">
      <div class="contact">
        <h3 class="title">Contact</h3>
        <div class="contact_info">
          <p class="description">
            Cikunir, Indonesia
          </p>
          <p class="description">
            <?php echo $user_data['telpon']; ?>
          </p>
          <p class="description">
            <?php echo $user_data['email']; ?>
          </p>
        </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>