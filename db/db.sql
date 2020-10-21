CREATE TABLE admin(
    id INT(10) NOT NULL PRIMARY KEY auto_increment,
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL
) ENGINE = InnoDB DEFAULT charset=utf8;

CREATE TABLE posts(
    post_id INT(10) NOT NULL PRIMARY KEY auto_increment,
    post_title VARCHAR(255) NOT NULL,
    post_date VARCHAR(255) NOT NULL,
    post_author VARCHAR(255) NOT NULL,
    post_image VARCHAR(255) NOT NULL,
    post_keywords VARCHAR(255) NOT NULL,
    post_content VARCHAR(255) NOT NULL,
) ENGINE = InnoDB DEFAULT charset=utf8;