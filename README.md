# Serayucms

This is an implementation of Content Management System based on [Laravel 5.2](http://laravel.com/) 

## System Requirements
Serayucms is designed to run on a machine with PHP 5.5.9 and MySQL 5.5.

* PHP >= 5.5.9 with
    * OpenSSL PHP Extension
    * PDO PHP Extension
    * Mbstring PHP Extension
    * Tokenizer PHP Extension
* [Composer](https://getcomposer.org/) installed to load the dependencies of Serayucms.

### Installing

Please check the system requirements before installing Serayucms.

* You may install by cloning from github, or via composer.
    * Github:
        * ``` git clone git@github.com:serayusoft/serayucms.git ```
        * From a command line open in the folder, run composer install.
    * Composer:
        * ``` composer create-project serayusoft/serayucms --prefer-dist website ```
* Enter your database details in .env file on root folder.
* Publish and seed
    * php artisan migrate --seed to setup your database.
* You can contigure mail server details in config/mail.php.
* You can configure the site in the config folder before production.
* Finally, setup an Apache VirtualHost to point to the "public" folder.
* For development, you can simply run php artisan serve

## Administrator Login

* Url: sites-public-url/administrator
* Superuser : 
    *  Username : admin@admin.com
    *  Password : admin

## License

Serayucms is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
