Barbería - Laravel 10 scaffold (generated 2025-08-09T21:54:48.180944Z)
-----------------------------------------------
Contenido:
- app/Models: Cliente, Reserva, Servicio
- app/Http/Controllers: resource controllers for Clientes, Reservas, Servicios
- routes/web.php
- database/migrations: for clientes, reservas, servicios
- database/seeders: ServicioSeeder, DatabaseSeeder
- resources/views: basic Blade templates (Bootstrap via CDN)
- barberia.sql: SQL file to import sample data

Instrucciones rápidas:
1. Crear proyecto Laravel 10 (si no lo tienes):
   composer create-project laravel/laravel barberia "10.*"
2. Copia los archivos/carpetas de este scaffold dentro de la carpeta del proyecto Laravel.
3. Ajusta tu .env (DB_*), o importa barberia.sql:
   mysql -u root -p barberia < barberia.sql
4. Ejecuta migraciones y seeders si prefieres usar migraciones/seeders:
   php artisan migrate
   php artisan db:seed --class=ServicioSeeder
5. Ejecuta:
   composer install
   php artisan key:generate
   php artisan serve

Nota: Este scaffold no incluye la carpeta vendor ni dependencias de Composer.
