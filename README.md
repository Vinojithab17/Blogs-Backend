# Blogging Platform

## Overview
This Laravel project serves as a simple blogging platform where users can create, read, update, and delete their blogs. User authentication is implemented to manage user accounts securely.

## Features
- User registration
- Adding operations for blogs
- MySQL database storage

## Requirements
- PHP >= 7.4
- Composer
- MySQL

## Installation
1. Clone this repository to your local machine:

2. Navigate to the project directory:
    ```
    cd blogging-platform
    ```

3. Install PHP dependencies:
    ```
    composer install
    ```

4. Copy the `.env.example` file and rename it to `.env`:
    ```
    cp .env.example .env
    ```

6. Update the `.env` file with your MySQL database credentials.

7. Run the database migrations to create the necessary tables:
    ```
    php artisan migrate
    ```

8. (Optional) Seed the database with sample data:
    ```
    php artisan db:seed
    ```

## Usage
1. Start the development server:
    ```
    php artisan serve
    ```

2. Access the application in your web browser at `http://localhost:8000`.

3. Register a new user or log in with existing credentials.

4. Creat blogs

## Database Seeding
To seed the database with sample data, you can use the following artisan command:
