Aplicacion de Laravel 5 Base realizada por la empresa Innodite con las siguientes Caracteristicas

1) Multi Idioma con tan solo cambiar en el archivo /config/app.php podras visualizar la aplicacion   
    'locale' => 'es', en espanol
    'locale' => 'en', en ingles

2) Footer Integrado

3) en la carpeta /public/css se encuentran los Archivos css Base
con esto Podras modificar:
 - Estilos del Menu
 - Estilos del Footer
 - Estilos de los Paneles 

4) Tablas Responsivas

5) DataTables Integrados

6) CRUD de usuarios donde podra crear:

- Usuarios Administradores y Comunes si ha ingresado al sistema como Administrador

- Usuarios Comunes si no ha ingresado al sistema o si no es Administrador

Para ingresar como usuario administrador puede modificar el archivo
 
/database/seeds/AdminTableSeeder.php

colocar sus datos respectivos y ejecutar en consola en la carpeta de su proyecto

php artisan migrate:reset --seed

esto a su vez tambien le creara en sistema usuarios de prueba.

7) Control de acceso al modulo de usuarios

8) Herramienta para Generar CRUD (Scaffold) Modificado por Nosotros en Base a un Proyecto ya existente

Aqui esta su Documentacion 

https://github.com/Innodite/laravel5-scaffold

Cualquier duda 

anthonyfilgueira@hotmail.com

Saludos