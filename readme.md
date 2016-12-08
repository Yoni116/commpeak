requirements:
-put commpeak folder inside www folder on webserver
-mysql database named "commpeak" on localhost
-mysql user named "commpeak" with no password
-run command "php artisan migrate:install"
-run command "php artisan migrate"
-reach website using http://localhost/commpeak/public/



frontend:
commpeak\resources\views
commpeak\public\css
commpeak\public\js

routing:
commpeak\routes\web.php

task logic:
commpeak\app\Http\Controllers (the controllers for site)
commpeak\app\Http\helpers.php (functions used in backend logic)



