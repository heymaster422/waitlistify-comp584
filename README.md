# Waitlistify
## How to run Waitlistify
1. Our website uses **Laravel**, **Docker**, and **SQL(specificially using MySQLWorkbench)**. Please install the required software and composers.

2.To use the website, simply clone the repository and in your ubuntu console go to the file directory and run `bash ./vendor/laravel/sail/bin/sail up`. 

3. connect to the Database by opening mySQL Workbench and conect to Database with the password: `password`. 

4. Next you must run `bash ./vendor/laravel/sail/bin/sail artisan migrate` to migrate the database tables into MySQL. 

After this, simply go to localhost and enjoy. As of right now, you can login and register, enroll in classes you are interested in, and have the classes be sorted by the most popular to least popular. 

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.


