# Laravel 12 Without Tailwind CSS

## **Clone the Repository**

Clone the Laravel project from GitHub:

```sh
git clone https://github.com/mufaddaltajani/laravel12-starter-kit-without-tailwindcss.git
cd laravel12-starter-kit-without-tailwindcss
```

## **Install Dependencies**

Make sure you have **Node.js**, **npm**, **PHP**, **Composer**, and **MySQL** installed. Then, run:

```sh
composer install
npm install
```

## **Set Up Environment File**

Copy the `.env.example` file to `.env`:

```sh
cp .env.example .env
```

## **Generate Application Key**

Run the following command to generate a new application key:

```sh
php artisan key:generate
```

## **Configure Database**

1. Create a database in MySQL.
2. Update the `.env` file with your database credentials:
    ```env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_database_name
    DB_USERNAME=your_database_user
    DB_PASSWORD=your_database_password
    ```

## **Run Migrations**

Run database migrations to create tables:

```sh
php artisan migrate
```

## **Run the Development Server**

Start the Laravel application:

```sh
php artisan serve
```

## **Build Frontend Assets**

If the project uses frontend assets, compile them with Vite:

```sh
npm run dev
```

## **Access the Application**

Once the server is running, visit:

```
http://127.0.0.1:8000
```

Done!

---

Developed by [StarWebDeveloper.com](https://www.starwebdeveloper.com)
