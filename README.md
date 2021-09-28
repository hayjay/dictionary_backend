# Laravel Dev Test

## Development Area

### Building

The following installation will require you to have GIT, PHP and Composer installed on 
your local machine.

#### Build (ALL)

Clone repo and initail configuration:
```
git clone https://github.com/hayjay/technical_challenge_1.git
cd technical_challenge_1.git
composer install
cp .env.example .env
go to your mysql and create a database using the command create database database_name
php artisan key:generate

```
#### Set Database Configuration Values

Edit the .env and set (or uncomment) the database details to the following:
```
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=database_name
DB_USERNAME=root
DB_PASSWORD=

View project:

* Project [http://localhost:8000](http://localhost:8000)