# test_entrevista

aplicacion para ver,editar y eliminar contactos que tenga cada usuario que ingrese

## Tecnologías

PHP
Bootstrap 5.3.3
Jquery 3.7.1
alertify 1.13.1
Mysql
JavaScript
Html 5

## Características

1. inicio de sesion de usuarios
2. listar todos los contactos de cada usuario
3. CRUD (Editar elimar agregra y actualizar un nuevo contacto)
4. interfaces con estilos bootstrap 5.3.3
5. buena seguridad en base de datos y en las aplicaciones

## Estructura del proyecto

Prueba/.
│   README.md  //redmi del proyecto
│   .gitattributes
│   login.php  //contiene la interfaz login para el ingreso de los contactos
│   index.php //permite que el usuario no pueda acceder a las subcarpetas por medio del url
│   db.sql //contiene el script de creacion de tablas necesarias para el proyecto y dos scripts para validar login de mysql 
│
├───model
│       conexion.php //contiene una funcion que retorna la conexion de base de datos
│       agregarContacto.php //contiene la funcion que permite adicionar un nuevo usuario
│       eliminarContacto.php  //contiene la funcion que permite eliminar un nuevo usuario
│       editarContacto.php   //contiene la funcion que permite editar un nuevo usuario
│       validarususario.php  //contiene la funcion que permite validar el usuario y password en base de datos y retornal el id de ese usuario que se encuentra en base de datos
│
├───view
│       contactos.php //vista principal donde contiene los modals de adicionar,editar y eliminar los contactos del componente tabla. tambien hace un llamado al componenete tabla.php desde jquery y el llamado a las funciones para cada modal
│       validarlogin.php //destruye la sesion del usuario en caso de que acceda a la pagina contactos sin ingresar al login y lo redireciona al login.php
│       cerrarsesion.php //permite cerrar la sesion cuando de click en el a href cerrar sesion y lo redireciona al login.php
│
├───controler
│       validaringreso.php //encapsula los datos usuario y password del login y los envia directamente al validarusuario.php del modal el cual retorna el resultado. tambien se hace una validacion en caso de que retorne resultado o no
│
├───js
│       ingresar.js // hace el llamado del evento click cuando presiono el boton Ingresar del login, se encapsula los datos usuario y password y se envian por medio de ajax a la pagina validaringreso.php que se encuentra en la carpeta view y crea una alerta por medio del js alertify para cada una de las validaciones
│       funciones.js // contiene todas las funciones de cada modal y las funciones que se llaman en cada boton(añadir,eliminar,editar), tambien esta la funcion que me permite hacer el filtro utilizando javascript para la tabla de contactos esto se hace por medio de query selectorall que me selecciona todo lo que esta en el tbody y en el tr de la tabla contactos y accedo a sus celadas 0 donde esta los nombre y celda 2 donde esta el email y muestro dinamicamente la fila donde esta ese valor que coloco en los campos de texto name y correo . tambien contiene dos funciones una llamada acutalizar y otra llamada eliminar que son llamados de los botones eliminar y editar que estan en la tabla contactos, el cual me  permite por medio de la funcion split transforma la cadena de texto en arreglo y este se envia el valor correspondiente a cada input de los modal editar y eliminar. tambien contiene las funciones agregarcontacto, eliminarcontacto y editarcontacto el cual su funcion principal es redireccionar por medio de ajax a sus php correspondientes(agregarContacto.php,editarContacto.php y eliminarContacto.php) y poder cumplir el funcionamiento cuando añado o edito o elimino un contacto en la interfaz contactos.php
│
├───componentes
│       tabla.php //es un vista tipo componente donde se muestra toda la tabla de contactos traido de base de datos del usuario que ingreso
│
└───(entornos)
        _dev_.php //contiene todas las variables e entorno de conexion de base de datos (host,usuario,password y base de datos)


## Autor


Desarrollado por andrés felipe cortes amaya
