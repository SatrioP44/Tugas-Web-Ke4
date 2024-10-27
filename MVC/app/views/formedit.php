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
        <h1 class="text-center">MVC</h1>
        <h4>Edit Data</h4>
        <hr class="mt-0">
        <form method="POST">
            <div class="form-group" >
                <input type="hidden" class="form-control" id="id" name="id" value="<?php echo ($user['id']); ?>" >
            </div>
            <div class="form-group" >
                <label for="name">Nama</label>
                <input type="text" class="form-control" id="name" name="name" value="<?php echo ($user['name']); ?>" >
            </div>
            <div class="form-group" class="mb-03">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo ($user['email']); ?>" >
            </div>
            <div class="mt-3">
              <button type="submit" class="btn btn-primary">Update</button>
              <a href="index.php" class="btn btn-secondary">Batal</a>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>