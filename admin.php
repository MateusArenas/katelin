<?php 


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <section>
  <h2>Upload de Fotos</h2>
  <form action="upload.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label for="foto">Selecione uma foto:</label>
      <input type="file" name="foto" id="foto" class="form-control-file">
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
  </form>
</section>
</body>
</html>