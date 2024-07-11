<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

<h2 align="center">
    Invetario - PHP | Laravel
</h2>

<h3> 🛠️ Indicaciones del proyecto 🛠️ </h3>

***Requisitos***
- PHP "7.4.10"
- Composer "2.7.7"
- npm "8.19.2"
- MySQL

> [!NOTE]
> Puede que sea necesario que cree en su base de datos MySQL cree el schemas `comboinventory_db`.

***Pasos del proyecto***
1. Clonar el repocitorio:
```sh 
    gh repo clone AnderAlvarado13/inventory-combo
```
2. Instalar composer:
```sh 
    composer install
```
3. Crear en la raiz del proyecto el archivo`.env` con el schema solcitado y configurar sus credenciales de MYSQL.
4. Generar la key para nuestro proyecto:
```sh 
    php artisan key:generate
```
5. Migramos nuestra estructura de base de datos ya creada en el proyecto:
```sh 
    php artisan migrate
```
6. Instalamos dependecias para nuestro estilos y otras mas:
```sh 
    npm intall
```
7. Generamos nuestro recursos:
```sh 
    npm run dev
```
8. Finalmente coremos nuestro proyecto:
```sh 
    php artisan serve
```
> [!NOTE]
> Si todo nos salio con exito no va correo en un entorno localhost  `http://127.0.0.1:8000`, para lo cual ya podriamos navegar por nuestro inventario.



