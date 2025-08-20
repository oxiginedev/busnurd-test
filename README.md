# Busnurd Interview Test

Here is my submission for the Busnurd Technologies Laravel developer test.

## Setup Guide

1. **Clone the repository**
    ```bash
    git clone https://github.com/oxiginedev/busnurd-test.git
    cd busnurd-test
    ```

2. **Install dependencies**
    ```bash
    composer install
    npm install
    ```

3. **Copy and configure environment file**
    ```bash
    cp .env.example .env
    ```
    Update `.env` with your database and other environment settings.

4. **Generate application key**
    ```bash
    php artisan key:generate
    ```

5. **Run migrations**
    ```bash
    php artisan migrate --seed
    ```

6. **Start the development server**
    ```bash
    php artisan serve
    ```

7. **(Optional) Compile frontend assets**
    ```bash
    npm run dev
    ```

## What Can Be Improved

Although this is a very concise application without a large scope, here are some of the things that could be improved:

- Add robust Unit and Feature tests (Using PHPUnit or PestPHP) 
- Integrate a CDN layer to serve product image assets, this can help improve overall page load times and performance
- To achieve cleaner controllers, I will extract business logic into `Action` classes, each class is responsible for a single action, thereby making it easy to test and manage.
- Product schema could also be more robust, but it's a small application for now.
- Improve UI/UX

 