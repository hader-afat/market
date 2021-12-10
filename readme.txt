                            To run this project follow this steps:
  ==================================================================================================
1) composer update or composer install
2) if there is no file name .env -> copy the file with name of .env.example and name it .env
3) write the name of your database in the .env file and the username and password of it:
   	DB_DATABASE=database name
	DB_USERNAME=root
	DB_PASSWORD= 
4) run this command in the terminal : php artisan key:generate
5) php artisan migrate
6) run this command in the terminal : php artisan serve 
