document.addEventListener('DOMContentLoaded', function () {
     document.getElementById('Ingresar').addEventListener('click', function (e) {
     e.preventDefault();
     var usuario=document.getElementById("usuario").value;
     var pass=document.getElementById("passwd").value;
      if (usuario === '' || pass=== '') {
        alertify.error("error usuario o contraseña vacios :) ");
        return;
      }
        $.ajax({ type:"POST",
 				url:"controler/validaringreso.php", 
 				data: { usuario: usuario, pass: pass },
 				success:function(r){
                    console.log(r);
 					if(r === 'success'){
                        console.log(r);
 						window.location.href = 'view/contactos.php';
 					}else{
 						alertify.error ("error en el servidor :( ");
                        console.log(r);
 					}
 				}
	});
     });
});