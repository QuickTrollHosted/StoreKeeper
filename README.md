StoreKeeper
===========

About
---
Inventory management with check-in and check-out.
This software is Web based for simplify and have the rigor in manage assets.
- Full inventory with additionnals informations (financial, vendor, technical...)
- Management on kiosk tablette or barcode scanner for simplify actions
- Reservation assets by users, conflicts management
- History of all movements
- Alert for missings check-in or fixing assets life (power charge, waranty, check...)


Version
---
No version available. This is a build not fully functionnal !
This dev branch is auto publish on push (and reset) here : http://storekeeper.qth.fr
Please come back middle 2015 for a first release.


Prerequires
---
- PHP5
    With timezone in your php.ini ! (date.timezone = UTC)
- Mysql server
    With an user access to your database (able to create and use a database)
- Composer (Install it or use Composer.phar with php.exe)


Installing dependancings
---
- Open CLI and go to the folder StoreKeeper
- Run "composer install" and answer to questions (or replace "composer install" with good paths by "c:\php\php.exe c:\Composer.phar install")


Creating database and populate, run
---
```bash
php app/console doctrine:generate:entities Storekeeper
php app/console doctrine:database:create
php app/console doctrine:schema:update --force
php app/console doctrine:fixtures:load -n
```


Copy statics assets from bundle to web folder
---
```
php app/console assets:install
```


Note for developpers:
---

- Generate class for doctrine (this is not a replace of class but adding missing fields)
```
php app/console doctrine:generate:entities StorekeeperInventoryBundle:Inventory\Part
```

- Drop database:
```
php app/console doctrine:database:drop --force
```

- Generate form file:
```
php app/console generate:doctrine:form StorekeeperInventoryBundle:Part
```

- Clear cache
```
php app/console cache:clear --env=prod
```