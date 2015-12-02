# Albums parser for Job Task
## Author: Vladyslav Gaysyuk <mr.mikield@gmail.com>

## Install

* run `composer install` in project root
* configure your database settings in `phinx.php` file.
* run `php vendor/bin/phinx migrate` to migrate (create tables)
* Add to cron file `parse.php` or just open it manualy in your browser.
* Visit the main page and see latest 20 albums.


## Configuration

* database configuration are located in `phinx.php`. 
* count of parsing albums are located in `parse.php`


### Any questions?
mr.mikield@gmail.com <Vladyslav Gaysyuk>


TEST SLACK ^_^
