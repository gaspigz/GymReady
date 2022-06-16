/* Creacion DB y tablas
CREATE DATABASE gymready;

USE gymready;

CREATE TABLE users (
    id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    user VARCHAR(16) NOT NULL,
    email VARCHAR(50) NOT NULL,
    name VARCHAR(50) NOT NULL,
    surname VARCHAR(50) NOT NULL,
    birth date NOT NULL,
    cr_date date NOT NULL,
    type INT(3) NOT NULL DEFAULT 0,
    verified INT(1) NOT NULL DEFAULT 0,
    password VARCHAR(50) NOT NULL,
    UNIQUE KEY user (user),
    UNIQUE KEY email (email)
)


DESCRIBE users;
*/


