## About Application
Laravel application to domonstrate Livewire version CRUD using wire-elements/modal. This can be starter kit for intranet service application which requires basic employees and organization units management.

## How to run the application
- Clone this repository using https or ssh depending on your choice.
 ```
    git clone https://github.com/soap/livewire3-org-unit-crud-demo
  ```
- Change directory to the application folder.
  ```
    cd livewire-organization-crud-demo
  ```
- Install PHP packages.
  ```
  composer install
  ```
- Create .env file by copying .env.example to .env file.
  ```
  cp .env.example .env
  ```
- Generate API key (and store in .env file).
  ```
  php artisan key:generate
  ```
- Create your database and put related information in the .env file.
  ```
  DB_DATABASE=livewire3_org_unit_crud_demo
  DB_USERNAME=root
  DB_PASSWORD=
  ```
- Edit first user data in the .env file. Default password is 'password'
```
  INITIAL_USER_NAME=John Doe
  INITIAL_USER_EMAIL=john.doe@gmail.com
  INITIAL_USER_PASSWORD_HASH=$2y$10$j/hxwdJcdKeoo4s6YyYUBeTQfnpQD1A1pbKM8fn9i7aUNIKbJebsC # password
```
- Install Node packages.
  ```
  npm install
  ```
- Migrate database.
  ```
  php artisan migrate
  ```
- Seed initial data.
  ```
  php artisan db:seed
  ```
- Run the application in your terminal!
  ```
  php artisan serve
  ```
- And run Vite in other termial.
  ```
  npm run dev
  ```
- Or You want production mode
  ```
  npm run build
  ```
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

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
