

//Esta funcion carga las imagenes de las habatacion en el index
function cargarImagenes() {

  $.ajax({

    url: 'api/cargarimagen.php',
    dataType: 'json',
    type: 'POST',
    success: function (datos) {

      let imagen1 = datos[0]['imagen'];
      $("#imagen1").html("<a href='reserva.html'><img class='img-fluid' src='" + imagen1 + "' alt=''></a>")

      $(datos).each(function (index, tabla) {
        $("#contenido").append("<div class='card mt-2' style='width: 18rem;'><img id='img'src='" + datos[index].imagen + "' class='card-img-top'><div class='card-body'> <h5 class='card-title'>" + datos[index].tipo_hab + "</h5><p class='card-text'>" + datos[index].descripcion + "</p></div></div> ")

      });
      
    },
    error: function () {

      $("#nombreP").text("Algo Anda Mal");
    }
  });
}





function cargarHabitacion() {
  $("#imghab").attr('src', 'img/entrada.jpg');
$("#precio").html(localStorage.getItem('precio'));
$("#descrip").html(localStorage.getItem('descripcion'));
}

function cambiarHabitacion() {
  let habatacion = $("#tipoHabitacion").val()
  console.log(habatacion)
  localStorage.setItem('habitacion', habatacion)

  $.ajax({

    url: 'api/cargarimagen.php',
    dataType: 'json',
    type: 'POST',
    success: function (datos) {

      if (habatacion == 1) {
    
        $("#imghab").attr('src',datos[0].imagen)
        $("#prehab").html(datos[0].precio)
        $("#desphab").html(datos[0].descripcion)
      }
      if (habatacion == 2) {
        $("#imghab").attr('src',datos[1].imagen)
        $("#prehab").html(datos[1].precio)
        $("#desphab").html(datos[1].descripcion)
      }
      if (habatacion == 3) {
        $("#imghab").attr('src',datos[2].imagen)
        $("#prehab").html(datos[2].precio)
        $("#desphab").html(datos[2].descripcion)
      }
      if (habatacion == 4) {
        $("#imghab").attr('src',datos[3].imagen)
        $("#prehab").html(datos[3].precio)
        $("#desphab").html(datos[3].descripcion)
      }
      if (habatacion == 5) {
        $("#imghab").attr('src',datos[4].imagen)
        $("#prehab").html(datos[4].precio)
        $("#desphab").html(datos[4].descripcion)
      }
      if (habatacion == 6) {
        $("#imghab").attr('src',datos[5].imagen)
        $("#prehab").html(datos[5].precio)
        $("#desphab").html(datos[5].descripcion)
      }
      if (habatacion == 0) {
        $("#imghab").attr('src','img/entrada.jpg')
        $("#prehab").html('...')
        $("#desphab").html('...')
        
      }
    },
    
  });
  


}




//Esta funcion carga las imagenes de las habatacion en el index
function enviarDatos() {
  
  let habitacion=Math.random() * (500 - 100+1) + 100 ;
  let habitaciones=Math.trunc(habitacion)
  let fechaEntrada = $("#fechaEntrada").val();
  let fechaSalida = $("#fechaSalida").val();
  let personas = $("#personas").val();
  let id_hab=localStorage.getItem('habitacion');

  let parametros = {

    'habitacion': habitaciones,
    'fechaEntrada': fechaEntrada,
    'fechaSalida': fechaSalida,
    'personas': personas,
    'id_hab':id_hab

  }


  $.ajax({
    url: 'api/reserva.php',
    dataType: 'json',
    type: 'POST',
    data: parametros,
    success: function (datos) {
      if (datos=='ok'){
        window.location = "areacliente.php";

      }

    },
    error: function () {

      $("#nombreP").text("Algo Anda Mal");
    }
  });
}


//Esta funcion carga las imagenes de las habatacion en el index
function login() {

  let correo = $("#correo").val()
  let contra = $("#contra").val()
  

  let parametros = {

    'correo': correo,
    'contra': contra
  }

  console.log(parametros)

  $.ajax({
    url: 'api/login.php',
    dataType: 'json',
    type: 'POST',
    data: parametros,
    success: function (datos) {
console.log(datos)
      if (datos.tipo_usu == 1) {
        localStorage.setItem("idUsuario", datos.id_usu)
        localStorage.setItem("nombreUsuario", datos.nombre_usu)
        window.location = "areacliente.php";
      }
      else if (datos.tipo_usu == 0) {
        window.location = "xyz/index.html"
      }

      localStorage.setItem('id',datos.id_usu)
    },
    error: function () {

      $("#nombreP").text("Algo Anda Mal");
    }
  });
}


//Esta funcion carga las imagenes de las habatacion en el index
function Reserva() {

  id = localStorage.getItem('id')

  $.ajax({
    url: 'api/cargarReserva.php',
    dataType: 'json',
    type: 'POST',
    data: { id: id },
    success: function (datos) {

      console.log(datos)
    

      $(datos).each(function (index, tabla) {
        $("#contenido").append("<div class='row container tarjeta mt-3'><div class='col-md-4'><img src='"+datos[index].imagen+"' height='170px' width='280px'class='mt-2' alt=''></div><div class='col-md-6 '><h3>Fecha de Entrada " + datos[index].fecha_entrada + "</h3><h3>Fecha de Salida " + datos[index].fecha_salida + "</h3><p>Cantidad de personas " + datos[index].personas_res + ", No. de habitacion: " + datos[index].habitacion_res + " </p><button onclick='eleminarReserva(" + datos[index].id_res + ")' class='btn btn-danger'>Cancelar</button></div></div>")
      });

    },
    error: function () {

      $("#nombreP").text("Algo Anda Mal");
    }
  });
}

//Esta funcion carga las imagenes de las habatacion en el index
function eleminarReserva(id) {


  let parametros = {

    'idReserva': id
  }


  $.ajax({
    url: 'api/eliminarReserva.php',
    dataType: 'json',
    type: 'POST',
    data: parametros,
    success: function (datos) {

      if (datos == 'ok') {
        $("#contenido").html(' ');
        Reserva();
        window.location = "areacliente.php";
      }


    },
    error: function () {

      $("#nombreP").text("Algo Anda Mal");
    }
  });
}


function editarReserva() {

  let id=localStorage.getItem("habitacion");
  
  $.ajax({
    url: 'api/editarReserva.php',
    dataType: 'json',
    type: 'POST',
    
    success: function (datos) {

      console.log(datos)


    },
    error: function () {

      $("#nombreP").text("Algo Anda Mal");
    }
  });
}

function registro(){
  
  let name=$("#name").val();
  let email=$("#email").val();
  let pass=$("#pass").val();
  let direction=$("#direc").val();
  let phone=$("#phone").val();

  let parametros={
    'name':name,
    'email':email,
    'pass':pass,
    'direc':direction,
    'phone':phone
  }


  $.ajax({
    url: 'api/registro.php',
    dataType: 'json',
    type: 'POST',
    data: parametros,
    success: function (datos) {
      if (datos=='ok'){
        window.location = "areacliente.php";

      }

    },
    error: function () {

      $("#nombreP").text("Algo Anda Mal");
    }
  });

}

function usuario(){

  $.ajax({
    url: 'api/usuario.php',
    dataType: 'json',
    type: 'POST',
    
    success: function (datos) {
     
      $("#name").html(datos.nombre_usu)


    },
    error: function () {

      $("#nombreP").text("Algo Anda Mal");
    }
  });

}