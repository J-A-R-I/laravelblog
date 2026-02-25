# laravelblog

# clone 
``
git clone https://github.com/syntraprogrammeurs/laravelblogklas2026.git laravelblog
``
move naar directory 

``
npm install
``

``
composer install
``

.env.example copie en rename naar .env

database aanmaken/aanpassen

key aanmaken ||`` php artisan key:generate ``

developer mode == local
production mode = production 

``
php artisan migrate
``

``
php artisan db:seed
``
## artisan 

## faker 
create nep data met faker 
## database
altijd 1 op veel relatie proberen aanhouden

## controler

php artisan make:controller --resource <modelnaam + Controller>

## Route 
 Route::get =  iedereen kan erbij
 Route::middleware = beveiligd
 Route::resource voor alles met id  (post/1, post/2)
