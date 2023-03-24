# Electro shop

## Main plan steps:

[x] Схема БД - https://app.dbdesigner.net/designer/schema/609365    
[ ] Зона Админа (adminLTE + blade + php)    
[ ] Зона Клиента (vue3 + vue router + vuex)    
[ ] Деплой + платежная система  

## How to setup local server

1. Install XAMPP ``` https://www.apachefriends.org/ ```
2. Install Composer  ``` https://getcomposer.org/download/ ```
3. Clone this repository 
    ``` git clone git@github.com:EnverMT/ultratex.git```
4. Rename ```.env.example``` to ```.env```
5. ``` composer update ```
6. ``` php artisan key:generate ```
7. ``` php artisan migrate ```
8. ``` npm run build ``` 

