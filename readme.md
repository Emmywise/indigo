# Building an E-commerce platform with Laravel and Vue
This is a demo application showing how to build an e-commerce platform using Laravel and Vue.

## Getting Started
These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.

### Prerequisites
What things you need to install the software.

* Git.
* PHP.
* Composer.
* Laravel CLI.
* A webserver like Nginx or Apache.
* A Node Package Manager ( npm or yarn ).

After cloning the application, you need to install it's dependencies. 

```
$ cd indigo
$ composer install
```


### Setup
- When you are done with installation, copy the `.env.example` file to `.env`

  ```$ cp .env.example .env```


- Generate the application key

  ```$ php artisan key:generate```


- Add your database credentials to the necessary `env` fields

- Migrate the application

  ```$ php artisan migrate```

- Install laravel passport

  ```$ php artisan passport:install```

- Seed Database

  ```$ php artisan db:seed```


- Install node modules

  ```$ npm install```


### Run the application

  ```$ php artisan serve```


## Built With
* [Laravel](https://laravel.com) - The PHP framework for building the API endpoints needed for the application
* [Vue](https://vuejs.org) - The Progressive JavaScript Framework for building interactive interfaces
