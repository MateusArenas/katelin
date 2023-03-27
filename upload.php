<?php 


// if ($_FILES['image']['error'] == UPLOAD_ERR_OK) {
//   $tmp_name = $_FILES['image']['tmp_name'];
//   $name = basename($_FILES['image']['name']);
//   $data = base64_encode(file_get_contents($tmp_name));
  
//   // Conectar ao banco de dados e inserir a imagem
//   $pdo = new PDO('mysql:host=localhost;dbname=meubanco', 'meuusuario', 'minhasenha');
//   $stmt = $pdo->prepare('INSERT INTO fotos (nome, data) VALUES (?, ?)');
//   $stmt->execute([$name, $data]);
// }

// $pdo = new PDO('mysql:host=localhost;dbname=meubanco', 'meuusuario', 'minhasenha');
// $stmt = $pdo->query('SELECT * FROM fotos');
// $fotos = $stmt->fetchAll(PDO::FETCH_ASSOC);

// // Exibir as fotos na página
// foreach ($fotos as $foto) {
//   echo '<img src="data:image/jpeg;base64,' . $foto['data'] . '">';
// }

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $foto = $_FILES["foto"]["tmp_name"];
  $tipo = $_FILES["foto"]["type"];

  // Verifica se o arquivo enviado é uma imagem
  if ($tipo == "image/jpeg" || $tipo == "image/png") {
      // Lê o conteúdo da imagem e
          // converte-o para base64
    $conteudo = file_get_contents($foto);
    $base64 = base64_encode($conteudo);

    // Insere a imagem no banco de dados
    $sql = "INSERT INTO fotos (nome, tipo, base64) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $nome, $tipo, $base64);

    $nome = $_FILES["foto"]["name"];
    $tipo = $_FILES["foto"]["type"];

    if ($stmt->execute()) {
        echo "Foto enviada com sucesso.";
    } else {
        echo "Ocorreu um erro ao enviar a foto.";
    }
} else {
    echo "Somente são permitidos arquivos JPEG e PNG.";
}
}

?>