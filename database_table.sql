CREATE DATABASE basic_cms CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE basic_cms;

CREATE TABLE admin(
    id INT(10) NOT NULL PRIMARY KEY auto_increment,
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL
) ENGINE = InnoDB DEFAULT charset=utf8;

CREATE TABLE posts(
    post_id INT(10) NOT NULL PRIMARY KEY auto_increment,
    post_title VARCHAR(255) NOT NULL,
    post_date DATE NOT NULL,
    post_author VARCHAR(255) NOT NULL,
    post_image TEXT NOT NULL,
    post_keywords TEXT NOT NULL,
    post_content TEXT NOT NULL
) ENGINE = InnoDB DEFAULT charset=utf8;