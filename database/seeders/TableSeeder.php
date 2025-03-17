<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Table;

class TableSeeder extends Seeder
{
   
    public function run()
    {
        Table::create(['feature_name' => 'Model', 'description' => 'Represents the structure of your database tables and allows interaction with the database using Eloquent ORM. Each model corresponds to a database table.']);
        Table::create(['feature_name' => 'View', 'description' => 'Handles the presentation layer of your application using Blade templates. It displays the data passed from controllers.']);
        Table::create(['feature_name' => 'Controller', 'description' => 'Manages the applications logic by handling user requests, processing data, and returning responses.']);
        Table::create(['feature_name' => 'Routes', 'description' => 'Defines the URL structure of your application and maps incoming requests to the correct controller method or closure.']);
        Table::create(['feature_name' => 'Middleware', 'description' => 'Filters HTTP requests before they reach your application (e.g., authentication, logging).']);
        Table::create(['feature_name' => 'Blade Templates', 'description' => 'Laravels simple yet powerful templating engine that allows you to write reusable views with dynamic content.']);
        Table::create(['feature_name' => 'Migrations', 'description' => 'A version control system for your database that allows you to create and modify database tables.']);
        Table::create(['feature_name' => 'Seeders', 'description' => 'Prepopulate your database with test or default data using database seed files.']);
        Table::create(['feature_name' => 'Database', 'description' => 'Laravel provides a robust database abstraction layer that supports multiple database systems like MySQL, PostgreSQL, SQLite, and SQL Server.']);
        Table::create(['feature_name' => 'Eloquent ORM', 'description' => 'An object-relational mapper (ORM) that allows you to interact with your database using an elegant, expressive syntax.']);

    }
}
