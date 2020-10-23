# PHP Web posts  (CMS)
>Basic web CMS posts articles

## Table of Contents
  - [Demo](#demo)
  - [Screenshots](#screenshots)
  - [Technologies](#technologies)
  - [Setup](#setup)
  - [Config project](#config-project)
  - [License](#license)

## Demo
Here is a working live demo: [Basic posts CMS Demo](https://whispering-wave-41519.herokuapp.com/)
## Screenshots
Example web application page
### Home page
![](sceenshots/home.png)
### Login admin
![](sceenshots/login.png)
### View posts
![](sceenshots/viewpost.png)
### Insert post
![](sceenshots/insert.png)

## Technologies
Project is created with:
- [php >= 7](https://www.php.net/)
- [Bootstrap 5](https://v5.getbootstrap.com/)


## Setup
To clone this project, you need [Git](https://git-scm.com) to install on your computer. command line below:

```zsh
# Clone this repository
$ git clone https://github.com/Bongkot-Kladklaen/PHP-basic_cms_posts.git

# Go into the repository
$ cd PHP-basic_cms_posts
```
## Config project
1. Create database and table :

    Open project `PHP-basic_cms_posts` find file `database_table.sql` and Import file to database server for you
2. Config connect database server : 

    Open project `PHP-basic_cms_posts` find folder: `config>config.php` to config: hostname, username, password, database
 
    ```php
        # Config database connect
        define('DB_HOST', 'localhost');     // hostname
        define('DB_USER', 'root');          // username
        define('DB_PASS', 'root');          // password
        define('DB_NAME', 'basic_cms');     // database
    ```

## License
[MIT](LICENSE)
