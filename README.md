## Clonar el repositorio
    ## ejecutar el comando composer install el cual reconstruye los modulos requeridos.
    ## Renombrar el archivo .env.example a solo .env, aqui podemos setear nuestra base de datos, 

       "DB_CONNECTION=mysql
        DB_HOST=127.0.0.1
        DB_PORT=3306
        DB_DATABASE=test   //Este nombre puede ser cualquiera, siempre y cuando tengamos creada la base de datos.
        DB_USERNAME=root
        DB_PASSWORD="
    
    ##Generamos una APP_KEY: con el comando php artisan key:generate. 
    ## Una vez configurada la base de datos ejecutar php artisan migrate, esto para crear las tablas en nuestra base de datos.
    ## Para ejecutar el seed de nuestra entidad ejecutamos php artisan db:seed --class=DataSeeder