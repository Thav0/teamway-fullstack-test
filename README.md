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
**RESOURCE: /questions - CRUD**
POST: /questions
Params: question: string
UPDATE: /questions/{id}
Params: question: string;
DELETE: /questions/{id}
INDEX: /questions - all questions stored
GET: /questions/{1} - get question by id

-----------------------------------------

**RESOURCE: /answers - CRUD**
POST: /answers
Params:
	answer: string;
	question_id: number:
	personality_group_id: number;
UPDATE: /answers/{id}
Params:
	answer: string;
	question_id: number:
	personality_group_id: number;
DELETE: /answers/{id}
INDEX: /answers - all answers stored
GET: /answers/{1} - get answer by id

-----------------------------------------

**POST: /finish-quiz - this will return the result of the quiz**
Params:
  answers[]: {
		answer: string;
		id: number;
		personality_group_id: number;
		question_id: number
	}

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
