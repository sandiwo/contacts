## Contact App

Contact app is a application to manage contact list belongs to group.

## Getting Started
Requirement: 
### Server Requirement:
1. PHP >= 7.2.0 (and meet Laravel 6.x server requirements)
2. MySQL or MariaDB database

### Installation Step:
1. Clone the repository: `git clone https://github.com/sandiwo/contacts.git`
2. `$ cd contacts`
3. `cp .env.example .env`
4. `$ php artisan key:generate`
5. Create new MySQL database for this application
6. Set database credentials on `.env` file
7. `$ php artisan migrate`
8. `$ php artisan db:seed`
9. `$ php artisan serve`
10. Visit `http://localhost:8000/` via web browser
