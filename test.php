<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CPA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="Css/style.css" rel="stylesheet"/>
</head>


<body>
    
    <div class="cabecero mb-lg-5">
        <div class="titulo">
            CPA
        </div>
        <div class="text-center subtitulo">
            📅 Reserva de turnos 📅
        </div>
    </div>
    <div class="parrafos">
        <p>Bienvenido al formulario de reserva de turnos del consultorio Psicología Activa "CPA" (Developing)</p>
    </div>
    <!-- Inicio del formulario -->
    <form class="row justify-content-center" id="form">
        <div class="row">
            <!-- Input del nombre y apellido -->
            <div class="input-group input-group-sm mb-3 px-4 justify-content-center">
                <div class="d-flex flex-row flex-fill">
                <!-- Nombre -->
                  <div class="flex-fill me-3">
                    <div class="form-floating">
                      <input type="text" class="form-control" id="input_nombre" placeholder="Nombre" required="" value=""/>
                      <label for="input_nombre">Nombre</label>
                    </div>
                  </div>
                <!-- Apellido -->
                  <div class="flex-fill">
                    <div class="form-floating">
                      <input type="text" class="form-control" id="input_apellido" placeholder="Apellido" required="" value=""/>
                      <label for="input_apellido">Apellido</label>
                    </div>
                  </div>
                </div>
              </div>
                <!-- Celular -->
            <div class="input-group mb-3 px-4 justify-content-center">
              <span class="input-group-text">Celular</span>
              <input type="text" class="form-control" placeholder="09XXXXXXXX" id="input_Cel">
            </div>
            
                <!-- Investigar como implementar con google calendar -->
            <div class="text-center text-decoration-underline">
                <strong>Opcional</strong>
            </div>
                <div class="input-group mb-3 px-4 justify-content-center">
                    <span class="input-group-text">e-Mail</span>
                    <input type="txt" class="form-control" placeholder="mail@ejemplo.com" id="input_email">
                </div>
            

                <!-- Implementar el min="2023-01-23" con javascript para mostrar fecha actual -->
            <div class="input-group input-group-sm mb-3 has-validation px-4">
                <span class="input-group-text">Fecha</span>
                <div class="form-floating">
                  <input type="date" class="form-control" placeholder="Fecha" min="2023-01-23" required="" name="input_date" id="input_date"/>
                  <label for="input-date">Fecha</label>
                </div>
                <div class="invalid-feedback">
                    Por favor ingrese una fecha.
                </div>
            </div>

                <!-- Trabajar en como agregar, quitar las opciones con javascript -->
            <div class="text-center text-decoration-underline">
                <strong>Si no se encuentra el horario disponibles, es porque el turno está ocupado o no es un día hábil.</strong>
            </div>  
            <div class="input-group input-group-sm mb-3 px-4">
                <span class="input-group-text">Horarios disponibles</span>
                <div class="form-floating">
                  <select class="form-select" type="text" id="input_time" name="horario" required="" aria-label="Horarios disponibles">
                    <option value="09:15">09:15 - 9:55</option>
                    <option value="10:00">10:00 - 10:40</option>
                    <option value="10:45">10:45 - 11:25</option>
                    <option value="11:30">11:30 - 12:10</option>
                    <option value="14:15">14:15 - 14:55</option>
                    <option value="15:00">15:00 - 15:40</option>
                    <option value="15:45">15:45 - 16:25</option>
                    <option value="16:30">16:30 - 17:10</option>
                    <option value="17:35">17:35 - 18:15</option>
                    <option value="18:20">18:20 - 19:00</option>
                    <option value="19:05">19:05 - 19:45</option>
                    <option value="19:50">19:50 - 20:30</option>
                    <option value="20:35">20:35 - 21:15</option>
                  </select>
                </div>
            </div>
                 <!-- Implementar la funcion de agendar  -->
        </div>  
        <div class="d-flex justify-content-center mb-5">
          <button class="btn btn-primary" type="submit" onclick="agregarDato()" >Reservar</button>
        </div>             
    </form>
    

<!--                                            Script                                                   -->
<script src="Jss/App.js"></script>
<script src="Jss/Dato.js"></script>
<script src="Jss/Reservas.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
 
<!--           Realizamos llamada a conexion.php para poder establecer conexion                         -->
<?php
include_once("conexion.php");
Cconexion::ConexionDB();
?>

</body>

<footer class="text-center text-lg-start bg-light text-muted">
    <div class="text-center p-4" style="background-color: #1A120B; color: aliceblue;">
        Developed by: Ezequiel Díaz:
        <a class="text-reset fw-bold" href="https://github.com/Ezequiel6095">GitHud.com</a>
    </div>
</footer>


</html>