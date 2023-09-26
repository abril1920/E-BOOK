<?php
include 'genero.php';
$id = $_POST['id'];
$genero = genero::encontrar($id);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
<form action="cambiar.php" method="POST">
  <div class="mb-3 mt-3">
    <label for="genero" class="form-label">Genero:</label>
    <input type="hidden" class="form-control" id="genero" placeholder="Enter genero" value="<?php echo $genero['gen_id'] ?>" name="id">
    <input type="text" class="form-control" id="genero" placeholder="Enter genero" value="<?php echo $genero['gen_gender'] ?>" name="nombre">
  </div>
  <button type="submit" class="btn btn-primary">Editar</button>
</form>
</div>

</body>
</html>
