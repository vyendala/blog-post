# Basic Blog Application

## Git Repository

Repository URL: [https://github.com/vyendala/blog-post](https://github.com/vyendala/blog-post)

## Report

### Approach

1. **Setup and Initialize Project**
   - Set up the development environment by installing Visual Studio Code, Node.js, Git, Composer, and XAMPP.
   - Created a new Laravel project using `laravel new blog-app`.
   - Initialized Git in the project directory using `git init`.
   - Created a GitHub repository and linked it to the local repository with `git remote add origin <repository-URL>`.

2. **Create Database and Configure Laravel**
   - Created a MySQL database named `blog_app_db`.
   - Configured the `.env` file to connect Laravel with the MySQL database:
     ```plaintext
     DB_CONNECTION=mysql
     DB_HOST=127.0.0.1
     DB_PORT=3306
     DB_DATABASE=blog_app_db
     DB_USERNAME=root
     DB_PASSWORD=
     ```

3. **Define Routes**
   - Defined resource routes for posts in `routes/web.php`:
     ```php
     Route::resource('posts', PostController::class);
     ```

4. **Create Models and Migrations**
   - Generated the Post model and migration using Artisan commands:
     ```bash
     php artisan make:model Post -m
     ```
   - Edited the migration file to include the necessary fields and ran `php artisan migrate` to create the posts table.

5. **Create Factory and Seeder**
   - Generated a factory and seeder for posts:
     ```bash
     php artisan make:factory PostFactory --model=Post
     php artisan make:seeder PostSeeder
     ```
   - Defined the factory and seeder to populate the posts table with 10 records.
   - Ran the seeder with `php artisan db:seed --class=PostSeeder`.

6. **Create Controllers**
   - Generated the PostController and implemented CRUD operations:
     ```bash
     php artisan make:controller PostController --resource
     ```
   - Implemented methods for creating, reading, updating, and deleting posts in `PostController`.

7. **Create Blade Views**
   - Created the master layout `resources/views/layouts/app.blade.php`.
   - Created views for listing, creating, showing, editing, and deleting posts in `resources/views/posts`.

8. **Testing**
   - Manually tested each functionality: creating, reading, updating, and deleting blog posts to ensure everything works as expected.

9. **GitHub Push**
   - Made multiple commits with meaningful messages to document progress:
     ```bash
     git add .
     git commit -m "Initial commit with project setup"
     git push origin main
     ```

### Challenges Faced

- **Database Configuration**: Initially faced issues configuring the `.env` file due to incorrect database credentials. Resolved by double-checking database settings and ensuring the MySQL server was running.
- **Blade Views Layout**: Struggled with creating a clean layout in Blade templates. This was resolved by consulting the Laravel documentation and implementing best practices for Blade templating.
- **CRUD Operations**: Implementing the CRUD operations was straightforward, but integrating validation and error handling required additional attention to ensure a smooth user experience.

### Bonus Feature

**Feature**: Added search functionality to the blog posts listing page.

**Why Awarded**: This feature enhances user experience by allowing users to quickly find posts of interest without having to navigate through multiple pages. It demonstrates an extra level of attention to usability and functionality beyond the basic requirements.

