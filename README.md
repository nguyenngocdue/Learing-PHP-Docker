// RUN: PHP, MySQL, MySQLAdmin
---
sudo docker-compose up --build

// Open url
php:  http://localhost:9000/
mysqlAdmin: http://localhost:90001/
