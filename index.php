<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="#">PROYECTO FINAL</a>
  <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
 </nav>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="../vista/index.php">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" aria-disabled="true" href="">Cuantiles</a>
      </li>
      <li class="nav-item dropdown  ">
        <a class="nav-link dropdown-toggle disabled" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
          Graficas
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Barras</a>
          <a class="dropdown-item" href="../vista/graficas/graficos.php">Pastel</a>
          <a class="dropdown-item" href="#">Lineas</a>
          <a class="dropdown-item" href="#">Histograma</a> -->

</nav>

<!-- JUMBOTRON -->
<div class="jumbotron ">
    <h1 class="display-4 text-center">      MEDIDAS DE TENDENCIA CENTRAL</h1>
    <p class="lead text-center" >Realizado por: Carlosama Diana, Cabrera Lisbeth , Vásconez Erick  </p>
        <hr class="my-4">

  </div > 
<!--  FORMULARIOOOOOOOOOOOOOOO-->

<form class="form text-center " action="controller/controller.php" >
    <div class="form-group">
      <label for=""><p class="text-center"><strong>INGRESE LOS DATOS SEPARADOS POR COMAS :</strong> </p>
      </label>
      <input type="text" autofocus required  name ="datos" class="form-control text-center" id="cad" aria-describedby="" placeholder=" datos de la tabla...">
  </div>
  <!-- CUANTILES -->
<div class="form-group">
      <label for=""><p class="text-center"><strong> CUARTIL :</strong> </p>   </label>
   
      <input type="text" autofocus required  name ="txtCuartil" class="form-control text-center" id="cad" aria-describedby="" placeholder=" cuartil....">
  </div>
  <div class="form-group">
      <label for=""><p class="text-center"><strong> DECIL:</strong> </p>   </label>
   
      <input type="text" autofocus required  name ="txtDecil" class="form-control text-center" id="cad" aria-describedby="" placeholder=" decil....">
  </div>
  <div class="form-group">
      <label for=""><p class="text-center"><strong> PERCENTIL :</strong> </p>   </label>
   
      <input type="text" autofocus required  name ="txtPercentil" class="form-control text-center" id="cad" aria-describedby="" placeholder=" percentil.....">
  </div>


        <button type="submit" class="btn btn-primary btn-lg">Calcular</button>
</form>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>