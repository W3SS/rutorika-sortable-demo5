[rutorika sortable](https://github.com/boxfrommars/rutorika-sortable) demo (Laravel 5)

## Laravel 5 - Demo

* http://sortable5-demo.boxfrommars.ru/
* http://sortable5-demo.boxfrommars.ru/grouped (sortable groups demo)

# Install

```bash
xu@calypso:~$ git clone git@github.com:boxfrommars/rutorika-sortable-demo5.git
xu@calypso:~$ cd rutorika-sortable-demo5/
xu@calypso:~$ cp ./.env.example ./.env
xu@calypso:~$ chmod a+rw storage -R
xu@calypso:~$ composer update

mysql> CREATE USER 'sortable'@'localhost' IDENTIFIED BY 'sortable';
mysql> CREATE DATABASE sortable;
mysql> GRANT ALL PRIVILEGES ON sortable . * TO 'sortable'@'localhost';
mysql> FLUSH PRIVILEGES;

xu@calypso:~$ php artisan migrate
xu@calypso:~$ php artisan db:seed
```