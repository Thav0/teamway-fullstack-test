# TEAMWAY - Fullstack Test

git clone https://github.com/Thav0/teamway-fullstack-test folder_name
cd /folder_name

**##Backend**

```php
cd /backend
// Refresh the database and run all database seeds...
php artisan migrate:refresh --seed
php artisan serve
// This will start the server on http://localhost:8000
// The api endpoint is http://localhost:8000/api

// There is 3 endpoints created
// RESOURCE: /questions - CRUD
// RESOURCE: /answers - CRUD
// POST: /finish-quiz - this will return the result of the quiz
```

This will create all tables and run the seeds with initial data
I used **sqlite** as a database

**##Frontend**
NextJs

```
cd /frontend
yarn install
yarn dev
```
