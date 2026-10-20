# User Auth & Records Dashboard (Laravel 13)

A small **Laravel 13** task project. A user **registers**, then **logs in**, and after login sees a table on the **dashboard**. The table data is fetched from an **API** using **AJAX** and displayed with **jQuery DataTables**.

## Features

- **Register** – create a new user account
- **Login** – sign in with email and password
- **Dashboard** – visible only to logged-in users
- **Database table** – pre-filled with **50 dummy records** using a seeder
- **API** – returns the records as JSON
- **AJAX + jQuery DataTables** – loads data without a page reload, with search, sorting and pagination

## How It Works

```
Register → Login → Dashboard
                      │
                      ▼
            AJAX request to the API
                      │
                      ▼
      API fetches 50 records from the database
                      │
                      ▼
        Data is shown in a jQuery DataTable
```

## Technologies

- **Laravel 13** (PHP 8.4+)
- **MySQL** database
- Blade templates, HTML, CSS, JavaScript
- **jQuery** and **jQuery DataTables**
- Bootstrap 

## Requirements

- **PHP 8.4 or higher**
- Composer
- MySQL (XAMPP)
- Git

## Setup and Run

1. Clone the project:
   ```bash
   git clone <your-repo-url>
   cd <project-folder>
   ```
2. Install dependencies:
   ```bash
   composer install
   ```
3. Open the `.env` file and set your database details (create an empty MySQL database first):
   ```
   DB_DATABASE=your_database_name
   DB_USERNAME=root
   DB_PASSWORD=
   ```
4. Run the **migrations** to create the tables:
   ```bash
   php artisan migrate
   ```
5. Run the **seeder** to add 50 dummy records:
   ```bash
   php artisan db:seed
   ```
   *(To run both together: `php artisan migrate --seed`)*
6. Start the server:
   ```bash
   php artisan serve
   ```
7. Open `http://localhost:8000` in your browser. **Register** first, then **log in**, and the table will appear on the dashboard.

## Pages

| Page | Purpose |
|------|---------|
| Register | Create a new user |
| Login | User sign in |
| Dashboard | Shows API data in a table (login required) |

## Note

- The table data is **dummy data** created by the seeder, not real data.
- Opening the dashboard without logging in redirects to the login page.
