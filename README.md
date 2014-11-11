StoreKeeper
===========

Inventory management with loans

Prerequires :
- PHP5
    With timezone in your php.ini ! (date.timezone = UTC)
- Mysql server
    With an user access to your database (able to create and use a database)
- Composer (Install it or use Composer.phar with php.exe)


Installing dependancings
-------------------------
- Open CLI and go to the folder StoreKeeper
- Run "composer install" and answer to questions (or replace "composer install" with good paths by "c:\php\php.exe c:\Composer.phar install")

Creating database and populate, run
------------------------------------
$ php app/console doctrine:database:create
$ php app/console doctrine:schema:update --dump-sql
$ php app/console doctrine:schema:update --force
$ php app/console doctrine:fixtures:load


Note for developpers:

- Generate class for doctrine (this is not a replace of class but adding missing fields)
$ php app/console doctrine:generate:entities StorekeeperInventoryBundle:Inventory\Part

- Drop database:
$ php app/console doctrine:database:drop --force