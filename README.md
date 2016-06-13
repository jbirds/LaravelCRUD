## Laravel CRUD 

The application allows reading and editing of a list of Contacts from the database. It runs on Laravel and MySQL.

## Installation
1. In the application root, run ```composer install```.
2. Run 'php artisan key:generate' to generate a base64 key for your application.
2. Either in your .env file or config/database.php, use 'Haven' as your database name, 'haven', as the user, and the specified password.
3. In SQL, enter:
```
CREATE DATABASE Haven;
CREATE USER 'haven'@'localhost' IDENTIFIED BY 'PASSWORD';
GRANT ALL PRIVILEGES ON haven.* TO 'haven'@'localhost';
```
4. Run a Laravel migration using 'php artisan migrate' in your application root.
5. Seed the database with dummy data using 'php artisan db:seed --class=ContactsTableSeeder'.
6. Configure your Apache configuration to something like:
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
7. Navigate to http://havenapp.dev/haven


