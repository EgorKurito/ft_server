CREATE DATABASE wordpress;
CREATE USER 'egor'@'localhost' IDENTIFIED BY 'egor';
GRANT ALL PRIVILEGES ON wordpress.* TO 'egor'@'localhost' WITH GRANT OPTION;
FLUSH PRIVILEGES;
