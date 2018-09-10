DROP DATABASE IF EXISTS bsm;
CREATE DATABASE bsm;
SHOW DATABASES;

USE bsm;

CREATE TABLE IF NOT EXISTS staff(
    employee_key VARCHAR(10) NOT NULL,
    email VARCHAR(40) NOT NULL,
    password_hash VARCHAR(64) NOT NULL,
    PRIMARY KEY (employee_key)
)engine=innodb DEFAULT CHARSET=utf8;