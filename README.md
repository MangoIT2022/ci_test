* Run composer command after cloning the repository in order to install the dependency
* Add mysql database connection information(database, username, password, hostname) in app/Config/Database.php file under the "Default" group.
* Update $baseURL in app/Config/App.php(make sure domain is poiting to the public directory)
* Connect with terminal and run "php spark migrate" to migrate the database schema.
* Run "php spark db:seed UserSeeder" to seed users table with some dummy records.