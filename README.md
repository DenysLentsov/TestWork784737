# Test Work 784737 for Mello.gg

In order to deploy and run this project you will need the [Docker](https://docs.docker.com/get-docker/)

## Step 1

Run container

```
docker-compose up -d --build
```

You may check the status with

```
docker-compose ps
```

you should see two containers are running:

- testwork784737_app_1
- testwork784737_nginx_1

## Step 2

Bash into your container:

```
docker-compose exec app bash
```

Install composer dependencies

```
composer install
```

And generate a key

```
php artisan key:generate
```

The app should now be accessible under localhost:8080

## Step 3

Use Postman collection to test API

## Bonus

As a bonus you get a Docker container with Nginx and PHP 8.1 with configured XDebug 3!
Important! If you are on Mac, ensure you have created an Host address alias and 10.254.254.254 is aliased to your localhost.