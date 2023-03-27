<?php 

  // $servername = "localhost";
  // $username = "seu_nome_de_usuario";
  // $password = "sua_senha";
  // $dbname = "seu_banco_de_dados";

  // // Cria uma conexão com o banco de dados
  // $conn = new mysqli($servername, $username, $password, $dbname);

  // // Verifica se a conexão foi bem-sucedida
  // if ($conn->connect_error) {
  //     die("Falha na conexão com o banco de dados: " . $conn->connect_error);
  // }

  // $sql = "SELECT * FROM aulas";
  // $result = $conn->query($sql);

  // if ($result->num_rows > 0) {
  //     while($row = $result->fetch_assoc()) {
  //         echo "Data: " . $row["data"] . " - Hora: " . $row["hora"] . "<br>";
  //     }
  // } else {
  //     echo "Nenhum resultado encontrado.";
  // }

  // $conn->close();
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
  <header>
  <nav>
    <ul>
      <li><a href="#">Home</a></li>
      <li><a href="#">Sobre Mim</a></li>
      <li><a href="#">Fotos</a></li>
      <li><a href="#">Calendário de Aulas</a></li>
      <li><a href="#">Aulas no YouTube</a></li>
      <li><a href="#">Parceiras</a></li>
    </ul>
  </nav>
  <h1>Escola de Balé</h1>
  <p>Desenvolva sua paixão pela dança</p>

  <link rel="stylesheet" href="./assets/styles.css">
  </header>

  <section>
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h2>Sobre Mim</h2>
        <p>A escola de balé é um lugar onde dançarinos de todas as idades e níveis podem desenvolver sua paixão pela dança. Nossos instrutores altamente qualificados ajudam os alunos a melhorar suas habilidades de dança, enquanto mantêm um ambiente de aprendizado positivo e encorajador.</p>
        <p>Entre em contato conosco para saber mais sobre nossas aulas de balé, jazz e dança contemporânea.</p>
        <ul>
          <li>Endereço: Rua X, Número Y</li>
          <li>E-mail: escoladebale@email.com</li>
          <li>Telefone: (XX) XXXX-XXXX</li>
        </ul>
      </div>
      <div class="col-md-6">
        <img src="imagens/sobre-mim.jpg" class="img-fluid">
      </div>
    </div>
  </div>
</section>

<section>
  <h2>Parceiros</h2>
  <div class="parceiros">
    <a href="http://www.exemplo.com"><img src="imagens/exemplo-logo.png"></a>
    <a href="http://www.outroexemplo.com"><img src="imagens/outroexemplo-logo.png"></a>
  </div>
</section>

<section>
  <h2>Calendário de Aulas</h2>
  <div id="calendar"></div>
</section>

<section>
  <h2>Aulas no YouTube</h2>
  <div class="video-container">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/VIDEO_ID" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>
</section>

<section>
  <h2>Parceiros</h2>
  <div class="row">
    <div class="col-md-4">
      <a href="http://www.parceiro1.com.br" target="_blank"><img src="logo_parceiro1.jpg" alt="Logo do Parceiro 1"></a>
    </div>
    <div class="col-md-4">
      <a href="http://www.parceiro2.com.br" target="_blank"><img src="logo_parceiro2.jpg" alt="Logo do Parceiro 2"></a>
    </div>
    <div class="col-md-4">
      <a href="http://www.parceiro3.com.br" target="_blank"><img src="logo_parceiro3.jpg" alt="Logo do Parceiro 3"></a>
    </div>
  </div>
</section>


<section>
  <h2>Aulas de Ballet no YouTube</h2>
  <div class="video">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/VIDEO_ID" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
  </div>
</section>
  
<script>
  document.addEventListener('DOMContentLoaded', function() {
  var calendarEl = document.getElementById('calendar');
  var calendar = new FullCalendar.Calendar(calendarEl, {
    initialView: 'dayGridMonth',
    events: [
      {
        title: 'Aula de Balé',
        start: '2023-04-01T10:00:00',
        end: '2023-04-01T11:30:00'
      },
      {
        title: 'Aula de Jazz',
        start: '2023-04-02T14:00:00',
        end: '2023-04-02T15:30:00'
      },
      {
        title: 'Aula de Contemporâneo',
        start: '2023-04-04T18:00:00',
        end: '2023-04-04T19:30:00'
      }
    ]
  });
</script>
</body>
</html>