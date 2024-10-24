## Overview MovieSpot
APPLICATION FOR MOVIE FANS TO FIND AND WATCH MOVIES IN STREAMING

## Table of Contents

## Requirements

- PHP >= 8.0
- Composer
- MySQL or PostgreSQL database
- Node.js & npm (for frontend asset compilation)

## Installation

1. Clone the repository:
    ```bash
    git clone https://github.com/Nafiskurniatul/bioskop-new.git
    ```
2. Navigate to the project directory:
    ```bash
    cd bioskop-new
    ```
3. Install PHP dependencies using Composer:
    ```bash
    composer install
    ```
4. Install JavaScript dependencies:
    ```bash
    npm install
    ```
5. Copy .env.example to .env and configure your environment variables:
    ```bash
    cp .env.example .env
    ```
6. Generate the application key:
    ```bash
    php artisan key:generate
    ```
7. Run database migrations:
    ```bash
    php artisan migrate
    ```
8. Run the development server:
    ```bash
    php artisan serve
    ```