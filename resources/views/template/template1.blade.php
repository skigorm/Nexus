<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/estilo.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>


  </head>
  <title>NEXUS</title>
  <div class="container-fluid">
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
      <a class="navbar-brand " href="/home  ">NEXUS</a>

      <ul class="navbar-nav">
        <!-- <li class="nav-item">
        <a class="nav-link" href="#">Home</a>
      </li> -->
      <li class="nav-item">
        <a class="nav-link" href="/aluno">Cadastro de Aluno</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/agenda">Agenda</a>
      </li>
      <!-- <li class="nav-item">
      <a class="nav-link" href="#">Agendamento</a>
    </li> -->
    <li class="nav-item">
      <a class="nav-link" href="/calendar">Calendario</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Dropdown</a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Link 1</a>
        <a class="dropdown-item" href="#">Link 2</a>
        <a class="dropdown-item" href="#">Link 3</a>
      </div>
    </li>
  </ul>
  </nav>

  @yield('content')

  </div>

  <script src="{{ asset('assets/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/jquery-easing/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('assets/jquery/jquery.min.js') }}"></script>



  <!-- <script src="http://code.jquery.com/jquery.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script> -->



  </body>


</html>
