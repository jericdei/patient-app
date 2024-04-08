# Patient App

This project is from a practical examination. It's a simple CRUD app for managing patients.

## Tech Stack

-   Laravel 10
-   Bootstrap 5

## Running Locally

Copy the `.env.example` file to generate the `.env` file.

```bash
cp .env.example .env
```

This project is developed using a Docker Development Environment setup. To run this project using the containers, you can build and run the containers:

```bash
docker compose up -d --build
```

The `docker-compose.yml` contains the following services:

-   `web`: PHP 8.3, Apache, Node.js & Yarn
-   `mysql`: MySQL 8.0
-   `traefik`: Traefik 2.11 (For proxy)

## Setting Up Laravel

Install Composer dependencies

```bash
composer install

# If using Docker:
docker compose exec web composer install
```

Generate application key

```bash
php artisan key:generate

# If using Docker:
docker compose exec web php artisan key:generate
```

Run the migrations and seeders

```bash
php artisan migrate:fresh --seed

# If using Docker:
docker compose exec web php artisan migrate:fresh --seed
```

Install Node dependencies

```bash
yarn install

# If using Docker:
docker compose exec web yarn install
```

Run the Vite dev server

```bash
yarn dev

# If using Docker:
docker compose exec web yarn dev
```

After successful building and running the containers (if using Docker), you can access the app using the following on http://patient.localhost.

## Administrator Login

These are the credentials for logging in the Administrator user:

-   Email: `admin@example.com`
-   Password: `password`

## External Database Connection

To connect to the database externally, you can use these credentials:

-   Host: `localhost`
-   Port: `3307`
-   Username: `username`
-   Password: `password`
-   Database Name: `patient`
