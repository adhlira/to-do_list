<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

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

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

# To-Do List Application

This is a simple To-Do List application built with Laravel, allowing users to manage their daily tasks. The app features user authentication (login and registration), task management, task editing (description, priority, and status), and task completion tracking.

## Features

- **User Authentication**: Users must log in to create, edit, or view their tasks.
- **Task Management**: Users can add, view, and delete their tasks.
- **Task Editing**: Users can edit the task description, change its priority, and mark it as complete or incomplete.
- **Task Prioritization**: Tasks can be assigned a priority level (e.g., High, Medium, Low).
- **Task Status**: Users can toggle the status of a task (completed or not).

## Usage

### User Registration & Login
A user must first register using the sign-up page.
After registering, users can log in with their credentials to access the to-do list features.

### Task Management
- Create Task: Users can add new tasks by providing a description, selecting a priority (High, Medium, Low), and setting the task status (Incomplete by default).
- Edit Task: Users can edit an existing task to change:
Task description
Task priority
Task status (Mark as complete or incomplete)
- Delete Task: Users can delete tasks they no longer need.

### Task Prioritization
Tasks can have one of three priority levels:
- High
- Medium
- Low

### Task Status
Tasks can be marked as:
- Incomplete
- Completed
Users can easily update the status of a task from the task list view.

### Routes
Here are some key routes for the application:

/sign_up: User registration page.
/login: User login page.
/tasks: Displays the logged-in user's tasks.
/add-task: Create a new task.
/edit-page/{slug}: Edit an existing task.
/tasks/{id}: Delete a task.

### Database Structure
Tables
 - users:
id: Primary key.
name: User's name.
email: User's email address (unique).
password: User's hashed password.
created_at: Timestamp of user creation.
updated_at: Timestamp of last update.

- tasks:
id: Primary key.
user_id: Foreign key referencing the users table.
description: Task description.
priority: Task priority (High, Medium, Low).
status: Task status (0 = Incomplete, 1 = Completed).
created_at: Timestamp of task creation.
updated_at: Timestamp of last update.

