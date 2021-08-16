
.- La Carpeta Public/ tendra la informacion correspondiente a los archivos
    que contienen los archivos accesibles por el usuarios

.- La carpeta App/ contiene la estructura MVC donde tenemos
    Vistas/
    Controladores/
    Modelos/
    y Libs/ que contendra librerias o archivos auxiliares para el 
    correcto funcionamiento de la aplicacion
        ej:
            configuracion acceso a BD (Mysql.php)
            control del manejo de URL para el envio de objeto/metodo/parametro (Control.php)

.- Usamos POO lo que nos permite una mayor seguridad en nuestro sitio al separar los archivos de las clases y tener definido especificamente las propiedades y metodos de cada una, ademas de ser mas eficiente su mantenimiento.


.- Creamos los .htaccess
    Es para configurar Apache con los redireccionamientos
    Para evitar el acceso de los usuarios a las carpetas no permitidas
    Permitir el paso de parametros y/o metodos a traves de la URL


    .-Se inicia el repositorio Git Hub.

.- Definimos una variable para configurar la RUTA que se referenciara cada vez que se desea acceder a los recursos de manera absoluta

.- $_SERVER["REQUEST_METHOD"] Este metodo nos dice que metodo de envio se utiliza si es POST o GET




*- El archivo index.php sera el que el usuario vera y a traves de el se enviaran las peticiones al controlador.
	Este archivo trae desde la vista cada seccion que corresponde de acuerdo a la ubicacion, header, menu, main y footer, todo esto a travez del controlador PlantillaControl.


*- Lista blancas para evitar ataques de inyeccion sql a traves de la url