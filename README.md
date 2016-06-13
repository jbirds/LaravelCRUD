## Laravel CRUD 

The application allows reading and editing of a list of Contacts from the database. It runs on Laravel and MySQL and
leverages Eloquent as an ORM between the two.

## Installation
1. In the application root, run ```composer install``` to install dependencies.
2. Run 'php artisan key:generate' to generate a base64 key for your application.
3. Run 'chmod -R 777 bootstrap/cache' and 'chmod -R 777 storage' in your application root to allow write access to those directories.
3. Either in your .env file or config/database.php, use 'Haven' as your database name, 'haven', as the user, and the specified password.
4. In MySQL, configure your database by entering:
```
CREATE DATABASE Haven;
CREATE USER 'haven'@'localhost' IDENTIFIED BY 'PASSWORD';
GRANT ALL PRIVILEGES ON haven.* TO 'haven'@'localhost';
```
5. Run a Laravel migration using 'php artisan migrate' in your application root.
6. Seed the database with dummy data using 'php artisan db:seed --class=ContactsTableSeeder'.
7. Configure your Apache configuration to something like:
```
<VirtualHost *:80>
	ServerName havenapp.dev
	DocumentRoot /var/www/HavenApp/public
	
	<Directory /var/www/HavenApp/public>
		Order allow,deny
		Allow from all
		AllowOverride All
	</Directory>

	ErrorLog ${APACHE_LOG_DIR}/havenapp.log
</VirtualHost>
```
8. Navigate to http://havenapp.dev/haven


