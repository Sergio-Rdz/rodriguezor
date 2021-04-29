//Validación
$(document).ready(function()
{
  $("#validar").click(function()
  {   
      var usuario=$('#User').val();
      var contraseña=$('#Pass').val();
  if( usuario=='Sergio' && contraseña=='WEB123')
  {
      alert("¡Se ha inciado sesión correctamente!");                                      
  }
  else 
  {
      alert("Error al inciar sesión");
  }
  });
});