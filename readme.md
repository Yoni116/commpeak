
## Requirements

- put commpeak folder inside www folder on webserver
- mysql database named "commpeak" on localhost
- mysql user named "commpeak" with no passwor
- run command "php artisan migrate:install"
- run command "php artisan migrate"
- reach website using http://localhost/commpeak/public/


## Frontend Files

- commpeak\resources\views
- commpeak\public\css
- commpeak\public\js

## Routing Files

- commpeak\routes\web.php

## Logic Files
- commpeak\app\Http\Controllers (the controllers for site)
- commpeak\app\Http\helpers.php (functions used in backend logic)