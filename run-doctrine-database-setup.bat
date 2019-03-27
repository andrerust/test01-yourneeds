@ECHO OFF

REM Nginx is NOT running, so start it
cd src
rmdir /s /q Migrations
cd ..
php bin/console doctrine:database:drop --force
php bin/console doctrine:database:create
php bin/console doctrine:migrations:diff

php bin/console doctrine:migrations:migrate --no-interaction

REM php bin/console doctrine:fixtures:load --append
php bin/console doctrine:fixtures:load

ECHO Symfony database setup done!
