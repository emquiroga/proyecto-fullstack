### Renombrar .env.example a .env

### Base de datos:

-   Crear base de datos llamada "proyecto"

### Comandos:

-   composer install
-   php artisan key:generate
-   php artisan migrate
-   php artisan storage:link
-   npm install
-   npm run dev para compilar css/js de resources a public (si sale en consola que no reconoce "mix" como script, ejecutar "npm uninstall laravel-mix" y volver a instalar con "npm i laravel-mix")

### Nueva branch:

-   Después de instalar todo, dentro de la carpeta ejecutan "git branch **nombre de su branch**".
-   Una vez creada su branch, ejecutan "git switch **nombre de su branch**".
-   El primer push que ejecuten por consola, tiene que ser "git push --set-upstream origin **nombre de su branch**".
-   Con eso queda ya en parte configurado el control de versiones
