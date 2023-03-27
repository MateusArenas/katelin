<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
    <!-- FullCalendar CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" icrossorigin="anonymous" />
  <script src="
https://cdn.jsdelivr.net/npm/fullcalendar@6.1.5/index.global.min.js
"></script>
</head>
<body>
<section>
  <div class="container">
    <h2 class="text-center">Calendário de Aulas</h2>
    <div id="calendar"></div>
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
    calendar.render();
  });
</script>
</body>
</html>