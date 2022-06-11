# Project Setup

## Requirements

Install [Composer](https://getcomposer.org/Composer-Setup.exe)

## Database Configuration

Create a new database on phpmyadmin or SDBM you're using.

Go to `.env` file and change lms to your database name and set the password if you don't have a password let variable empty.

```
DB_DATABASE=lms
DB_USERNAME=root
DB_PASSWORD=
```

Open the root directory of the project and with terminal.

### **Run this commands**

To import libraries used in the project .

```
composer install
```

To Create a key for the app: (Key is private and used to hash passwords...)

```
php artisan key:generate
```

To Create tables in the database run:

```
php artisan migrate
```

To Create fake data in the datatables run:

```
php artisan seed:db
```

To launch the server:

```
php artisan serve
```

Then u can visit you website on [localhost:8000](https://localhost:8000)

You don't need to run this commands every time just once ,later you need just to strat the server by runing.

```
php artisan serve
```

# Absence Management (Gestion d’Absence) :

it is a Web Application for management absences of students.

## Technologies and Frameworks used:

-   [laravel 7](https://laravel.com/)
-   [Bootstrap](https://getbootstrap.com/)
-   [PHP](https://www.php.net/)

Description of the application :

There are four kind of accounts :

    - Admin          :  manage students,teachers,modules ...

    - Student        :  You can check your absences

    - Administration : - You can check the absence of all students
    	           - You can send warnings to students who have exceeded the number of absences authorized by the university
    	           - Others options also ...

    - Teacher        : - You can get the list of student who were absent per session
                       - Create class sessions
                       - You can register absent students
                       - Others options also ...

To get the project up and running on your local machine, do the following.

-   clone it :`git clone https://github.com/ayoubmouallim/Gestion-Absence.git`
-   Run composer install, to install dependencies
-   Edit the created .env file at the root of your project, to add database credentials, etc
-   To setup your database tables, run this command `php artisan migrate `in your cmd

```
php artisan serve
```
