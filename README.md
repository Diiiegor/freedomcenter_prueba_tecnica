**FREEDOMCENTER**
Aplicación desarrollada en la prueba técnica de la empresa freedomcenter

**Requisitos**
1. Tener php  7.2 instalado y agregado a las variables de entorno para poder ejecutar el comando php
3. tener mysql instalado
2. tener composer instalado

**Como iniciar**
1. Descargar el repositorio
2. Abrirlo en la terminal
3. Ejecutar composer install
4. crear una base de datos con el nombre "granja"
5. Cambiar el nombre del archivo ".env.example" a simplemente ".env"
6. Abrir el archivo .env y cambiar el texto "DB_DATABASE=laravel" por "DB_DATABASE=granja"
7. Ejecutar el comando "php artisan key:generate"
7. Ejecutar el comando "php artisan migrate" para crear las tablas necesarias en la base de datos
8. Ejecutar "php artisan serv" para iniciar la aplicacion en la url localhost:8000

[![captura](https://res.cloudinary.com/dzxmrgbiy/image/upload/v1610357014/Captura.png "captura")](http://https://res.cloudinary.com/dzxmrgbiy/image/upload/v1610357014/Captura.png "captura")
