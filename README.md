## Consuming the GitHub api

### Getting Started

After cloning the repository and entering the folder

You need to duplicate the .env.example file.
Rename it to .env

Include this environment variable at the end of the file
.env: GITHUB_API="https://api.github.com/"

Run composer to download the project dependencies:
```bash
$ composer install
```

Run the migrate
```bash
$ php artisan migrate
```

Would you like to create it? yes

```bash
$ php artisan key:generate

```

And now run the app
```bash
$ php artisan serve
```

[http://127.0.0.1:8000](http://127.0.0.1:8000)

<img width="931" alt="Screenshot 2024-07-04 at 02 20 43" src="https://github.com/felipescunha/backend-laravel/assets/24916872/02795fd6-4c31-42bb-b18f-ee0d3f08ee5c">



### Router Explorer 
 - /github/user/:username
 - /github/user/:username/following

### Using in this project
[Laravel](https://laravel.com/) 
[PHP_8.3.8](https://www.php.net/)
