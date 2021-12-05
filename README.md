### Renombrar .env.example a .env

### Base de datos:

-   Crear base de datos llamada "proyecto"

### Comandos:

-   composer install
-   php artisan key:generate
-   php artisan migrate
-   npm install
-   php storage:link

### Nueva branch:

-   Después de instalar todo, dentro de la carpeta ejecutan "git branch **nombre de su branch**".
-   Una vez creada su branch, ejecutan "git switch **nombre de su branch**".
-   El primer push que ejecuten por consola, tiene que ser "git push --set-upstream origin **nombre de su branch**".
-   Con eso queda ya en parte configurado el control de versiones
