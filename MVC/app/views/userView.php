<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detail Data Pengguna</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <div class="container mt-3">
        <h1 class="text-center">Detail Pengguna</h1>
        <hr>
        <div class="card">
          
          <div class="card-body">
          <table class="table">
            <tr>
                <td><li class="list-group-item">ID </li></td>
                <td> : <?php echo $user['id'];?></td>
            </tr>
            <tr>
                <td>Nama </td>
                <td> : <?php echo $user['name'];?></td>
            </tr>
            <tr>
                <td>Email </td>
                <td> : <?php echo $user['email'];?></td>
            </tr>
          </table>
            <a href="index.php" class="btn btn-primary">Kembali</a>
          </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>