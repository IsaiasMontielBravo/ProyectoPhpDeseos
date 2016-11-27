
//validacion Login
 $( document ).ready(function() {
    
  $('#envia').click(function(){
      var user = $('.correo').val();
      var pass = $('.clave').val();
   
      if(user != '' && pass != ''){
 
       $.ajax({
          url: '../controlador/login.php',
          method: 'POST',
          data: {correo: user, clave: pass},
          success: function(msg){

           if(msg=='1'){

          $('#mensaje').html('Datos incorrectos');
        }else{

          window.location = msg;
        }
      }

        });
    
      }else{
         $('#mensaje').html('Ingrese los datos');
      }
  });

});


//Registro de usuario

$( document ).ready(function() {
    
  $('#registrar').click(function(){
      
      var cedula = $('#cedula').val();
      var nombre = $('#nombre').val();
      var apellido = $('#apellido').val();
      var usuario = $('#usuario').val();
      var pass1 = $('#pass1').val();
      var pass2 = $('#pass2').val();
   
      if(cedula != '' && nombre != '' && apellido != '' && usuario != '' && pass1 != '' && pass2 != ''){
 
       $.ajax({
          url: '../controlador/crear.php',
          method: 'POST',
          data: {cedula: cedula, nombre: nombre, apellido: apellido, usuario: usuario, pass1: pass1, pass2: pass2},
          success: function(msg){

           if(msg=='1'){

          $('#mensaje').html('El usuario ingresado ya existe');
        }else if(msg == '2'){
            
            $('#mensaje').html('Las claves ingresadas no coinciden');
         
        }else{
             window.location = msg;
        }
      }

        });
    
      }else{
         $('#mensaje').html('Ingrese los datos');
      }
  });

});



//Click Agregar

$('#Agregar').click(function(){
    var titulo = $('#titulo').val();
    var des = $('#area').val();
    
    if(titulo != '' && des != ''){
        //Los campos estan llenos
        $('#mensaje').html('Campos llenos');
        $.ajax({
            url: '../controlador/agregarDeseo.php',
            method: 'POST',
            data: {titulo: titulo, des: des},
            success: function(msg){
               if(msg == '1'){
                   //Error
                   $('#mensaje').html('El deseo que ingresaste ya se encuentra registrado');
               }else{
                   //Se registro
                   $('#mensaje').html(msg);
               }
            }
        });
    }else{
        //algún campo esta vacio
        $('#mensaje').html('Por favor ingresa todos los campos');
    }
    
});



//Click Eliminar

$('#eliminar').click(function(){
    var titulo = $('#jax').val();
    
    if(titulo != ''){
        //el campo esta lleno
         $('#mensaje').html('');
        
        $.ajax({
            url: '../controlador/eliminar.php',
            method: 'POST',
            data: {titulo: titulo },
            success: function(msg){
                if(msg == 1){
                    //Error
                    $('#mensaje').html('El deseo que ingresaste no existe');
                }else{
                    //Se elimino
                    $('#mensaje').html(msg);
                }
            }
        });
    }else{
        //el campo esta vacio
        $('#mensaje').html('Por favor ingrese un titulo');
    }
});



//Click Actualizar

$('#actualizar').click(function(){
    var titulo = $('#jinx').val();
    var des = $('#area').val();
    
    if(titulo != '' && des != ''){
        //Los campos estan llenos
        $.ajax({
            url: '../controlador/actualizarDeseo.php',
            method: 'POST',
            data: {titulo: titulo, des: des},
            success: function(msg){
               if(msg == '1'){
                   //Error
                   $('#mensaje').html('El deseo que ingresaste no existe');
               }else{
                   //Se registro
                   $('#mensaje').html(msg);
               }
            }
        });
    }else{
        //algún campo esta vacio
        $('#mensaje').html('Por favor ingresa todos los campos');
    }
    
});




















