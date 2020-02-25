## Contact App

**Contact app** is a application to manage contact list belongs to group.

## Getting Started
Requirement: 
### Server Requirement:
1. PHP >= 7.2.0 (and meet [Laravel 6.x server requirements](https://laravel.com/docs/6.x#server-requirements))
2. MySQL or MariaDB database

### Installation Step:
1. Clone the repository: `git clone https://github.com/sandiwo/contacts.git`
2. `$ cd contacts`
3. `$ composer install`
4. `cp .env.example .env`
5. `$ php artisan key:generate`
6. Create new MySQL database for this application
7. Set database credentials on `.env` file
8. `$ php artisan migrate`
9. `$ php artisan db:seed`
10. `$ php artisan serve`
11. Visit `http://localhost:8000/` via web browser
