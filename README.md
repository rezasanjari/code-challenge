# Laravel Code Challenge

This code test involves performing work on an existing Laravel project.
The task is split into several sub-categories and shouldn't take longer than 2-4 hours of your time.

### Restrictions and Requirements
1. This challenge requires Docker to be installed on your system. The easiest way to accomplish this is to [install Docker Desktop](https://www.docker.com/).
2. You should focus on code quality and structure.
3. Wherever possible, try to follow the [SOLID principles](https://en.wikipedia.org/wiki/SOLID).

### Setup
This repository has been set up for you to start right away. We are using Docker to ensure that
this code challenge can be run locally on your machine, regardless of your installed system environment.
- The project can be brought up by running the following commands from the root directory of the project:
  - `docker-compose up --remove-orphans`
  - `docker-compose run --rm php composer install`
  - `docker-compose run --rm php /var/www/artisan migrate:fresh --seed`
  - `docker-compose run --rm php /var/www/artisan l5-swagger:generate`

### The Challenge
You have been given access to a list of users. 
The assignment is to add a column named `nickname` (via a migration) to the database as well as updating the related endpoints.

1. The GET request needs to include the new column.
2. The POST request and the PUT request need to be able to change the value of the column asserting the following validation rules:
   - A valid nickname must be unique among users.
   - A valid nickname must be shorter than 30 characters.
3. Documentation should be updated so Swagger can be generated and used to smoke test.
   - We are using the open-source package [L5-Swagger](https://github.com/DarkaOnLine/L5-Swagger) to generate OpenAPI Swagger.
4. Tests
   - Integration and Acceptance tests should be updated to reflect your changes
   - Tests should be added to assert that your changes function as expected
   - Tests should be added to assert that given "bad" cases will fail (assert failures)

### Submitting Your Work
1. When you are ready to submit your work: do not open a PR. 
2. Instead, push your changes to a public repository on GitHub and email a link to [cto@binogi.com](cto@binogi.com).
3. In the email please specify your name in the subject field.

### Hints
- The OpenAPI Swagger documentation can be generated on demand by running `docker-compose run --rm php /var/www/artisan l5-swagger:generate` in the root directory of the project.
  - This documentation can be viewed by navigating to [http://localhost:7777/api/documentation](http://localhost:7777/api/documentation).
- Don't worry about authentication.
- Tests can be run by executing the following commands:
  - `docker exec -it mysql bash -c "mysql -u root -ppassword -e \"DROP DATABASE IF EXISTS testing; CREATE DATABASE testing\""` (creates the test DB)
  - `docker-compose run --rm php php /var/www/artisan test` (runs the tests)
