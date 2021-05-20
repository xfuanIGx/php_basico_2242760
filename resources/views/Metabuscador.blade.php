<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.css">
    <title>Controller</title>
</head>
<body>
    <form
        method="POST"
        action="{{url ("Buscar")}}"
        class="form-horizontal">
        @csrf
        <fieldset>

        <!-- Form Name -->
        <center><legend>Búsqueda en varios motores </legend></center>
<br>
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="Termino">1.Ingrese el termino de búsqueda</label>
          <div class="col-md-4">
          <input id="Termino" name="termino" type="text" placeholder="Ing.Termino" class="form-control input-md">
          <span class="help-block">ayuda</span>
          </div>
        </div>

        <!-- Multiple Radios -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="motores">2.selecione el botón de búsqueda</label>
          <div class="col-md-4">
          <div class="radio">
            <label for="motores-0">
              <input type="radio" name="motores" id="motores-0" value="1" checked="checked">
              Google
            </label>
            </div>
          <div class="radio">
            <label for="motores-1">
              <input type="radio" name="motores" id="motores-1" value="2">
              Bing
            </label>
            </div>
            <div class="radio">
            <label for="motores-0">
              <input type="radio" name="motores" id="motores-0" value="3" checked="checked">
              Baing
            </label>
            </div>
            <div class="radio">
            <label for="motores-0">
              <input type="radio" name="motores" id="motores-0" value="4" checked="checked">
              Yahoo!
            </label>
            </div>
            <div class="radio">
            <label for="motores-0">
              <input type="radio" name="motores" id="motores-0" value="5" checked="checked">
              Yandex
            </label>
            </div>
            <div class="radio">
            <label for="motores-0">
            <input type="radio" name="motores" id="motores-0" value="6" checked="checked">
             Ask
            </label>
            </div>
            <div class="radio">
            <label for="motores-0">
            <input type="radio" name="motores" id="motores-0" value="7" checked="checked">
            Youtube
            </label>
            </div>
            <div class="radio">
            <label for="motores-0">
            <input type="radio" name="motores" id="motores-0" value="8" checked="checked">
            Traductor
            </label>
            </div>
            <div class="radio">
            <label for="motores-0">
            <input type="radio" name="motores" id="motores-0" value="9" checked="checked">
            Facebook
            </label>
            </div>
            <div class="radio">
            <label for="motores-0">
            <input type="radio" name="motores" id="motores-0" value="10" checked="checked">
            depositphotos
            </label>
            </div>
          </div>
        </div>

        <!-- Button -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="Buscar"></label>
          <div class="col-md-4">
            <button id="Buscar" name="Buscar" class="btn btn-danger">Buscar</button>
          </div>
        </div>

        </fieldset>
        </form>

</body>
</html>
