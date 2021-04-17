## CRUD Laravel 

Creación de un CRUD utilizando el Framework Laravel.

El proyecto consiste guardar notas, se pueden crear, editar, archivar y eliminar las notas,
las notas se pueden filtrar por dos tipos o mostrar todas.

Las notas se muestran utilizando axios.

La base de datos es MySQL

![Alt text](https://raw.githubusercontent.com/Altair343/CRUD-Laravel/main/Preview/Captura%201.PNG "screenshot 1")

![Alt text](https://raw.githubusercontent.com/Altair343/CRUD-Laravel/main/Preview/Captura%202.PNG "screenshot 2")

## Instrucciones

Descargamos el proyecto y lo descomprimimos.

Abres la consola de comando dentro del proyecto.

ejecutamos el comando: 
composer install

Renombramos el archivo .env.example a .env

ejecutamos el comando: 
php artisan key:generate

creamos una base de datos, para este ejemplo se utilizó una de MySQL utilizando XAMP posteriormente configuramos las credenciales de la base de datos en el archivo .env

ejecutamos el siguiente comando para correr las migraciones
php artisan migrate

finalmente ejecutamos el siguiente comando para iniciar el servidor
php artisan serve

o con parámetros
php artisan serve --host=0.0.0.0 --port=8000
