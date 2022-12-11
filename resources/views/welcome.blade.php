<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Binogi Code Challenge</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */h1{font-size:1.6em!important;}h3{font-size:1.3em!important;}p,li{font-size:1.1em!important;}a{color:dodgerblue!important;}code{padding-left:5px;padding-right:5px;border-radius:3px;background-color:dimgrey;color:white}.info-block{margin-top:3rem;}html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-3 md:grid-cols-3">
                        <div class="p-6">
                            <div class="flex items-center">
                                <div class="ml-4 text-lg leading-7 font-semibold"><h1 class="text-gray-900 dark:text-white">Binogi Code Challenge</h1></div>
                            </div>

                            <div class="ml-4">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    <p>This code test involves performing work on an existing Laravel project. <br />
                                        The task is split into several sub-categories and shouldn't take longer than 2-4 hours of your time.</p>
                                    <div class="info-block">
                                        <h3>Restrictions and Requirements</h3>
                                        <ol>
                                            <li>This challenge requires Docker to be installed on your system. The easiest way to accomplish this is to <a target="_blank" href="https://www.docker.com/">install Docker Desktop</a>.</li>
                                            <li>You should focus on code quality and structure.</li>
                                            <li>Wherever possible, try to follow the <a target="_blank" href="https://en.wikipedia.org/wiki/SOLID">SOLID principles</a>.</li>
                                        </ol>
                                    </div>
                                    <div class="info-block">
                                        <h3>Setup</h3>
                                        <p>This repository has been set up for you to start right away. We are using Docker to ensure that
                                            this code challenge can be run locally on your machine, regardless of your installed system environment.</p>
                                        <ul>
                                            <li>The project can be brought up and running by running the following commands from the root directory of the project:
                                                <ul>
                                                    <li><code>docker-compose up --remove-orphans</code></li>
                                                    <li><code>docker-compose run --rm php composer install</code></li>
                                                    <li><code>docker-compose run --rm php /var/www/artisan migrate:fresh --seed</code></li>
                                                    <li><code>docker-compose run --rm php /var/www/artisan l5-swagger:generate</code></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="info-block">
                                        <h3>The Challenge</h3>
                                        <p>You have been given access to a list of users.
                                            The assignment is to add a column named <code>nickname</code> (via a migration) to the database as well as updating the related endpoints.</p>
                                        <ol>
                                            <li>The GET request needs to include the new column.</li>
                                            <li>The POST request and the PUT request need to be able to change the value of the column asserting the following validation rules:
                                                <ul>
                                                    <li>A valid nickname must be unique among users.</li>
                                                    <li>A valid nickname must be a string shorter than 30 characters.</li>
                                                </ul>
                                            </li>
                                            <li>Documentation should be updated so Swagger can be generated and used to smoke test.
                                                <ul>
                                                    <li>We are using the open-source package <a target="_blank" href="https://github.com/DarkaOnLine/L5-Swagger">L5-Swagger</a> to generate OpenAPI Swagger.</li>
                                                </ul>
                                            </li>
                                            <li>Tests
                                                <ul>
                                                    <li>Integration and Acceptance tests should be updated to reflect your changes</li>
                                                    <li>Tests should be added to assert that your changes function as expected</li>
                                                    <li>Tests should be added to assert that given "bad" cases will fail (assert failures)</li>
                                                </ul>
                                            </li>
                                        </ol>
                                    </div>

                                    <div class="info-block">
                                        <h3>Submitting Your Work</h3>
                                        <ol>
                                            <li>When you are ready to submit your work: do not open a PR.</li>
                                            <li>Instead, push your changes to a public repository on GitHub and email a link to <a href="mailto:cto@binogi.com">cto@binogi.com</a>.</li>
                                            <li>In the email please specify your name in the subject field.</li>
                                        </ol>
                                    </div>

                                    <div class="info-block">
                                        <h3>Hints</h3>
                                        <ul>
                                            <li>The OpenAPI Swagger documentation can be generated on demand by running <code>docker-compose run --rm php /var/www/artisan l5-swagger:generate</code> in the root directory of the project.
                                                <ul>
                                                    <li>This documentation can be viewed by navigating to <a target="_blank" href="http://localhost:7777/api/documentation">http://localhost:7777/api/documentation</a>.</li>
                                                </ul>
                                            </li>
                                            <li>Don't worry about authentication.</li>
                                            <li>Tests can be run by executing the following commands:
                                                <ul>
                                                    <li><code>docker exec -it mysql bash -c "mysql -u root -ppassword -e \"DROP DATABASE IF EXISTS testing; CREATE DATABASE testing\""</code> (creates the test DB)</li>
                                                    <li><code>docker-compose run --rm php php /var/www/artisan test</code> (runs the tests)</li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
