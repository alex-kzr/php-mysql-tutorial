sudo apt update
sudo apt install mysql-server

sudo service mysql status // check mysql server status
sudo service mysql start // start mysql server service
sudo service mysql stop // stop mysql server service

sudo mysql_secure_installation // set up mysql installation, create root pass

sudo apt install phpmyadmin php-mbstring php-gettext // install phpmyadmin

sudo mysql // mysql console
mysql> CREATE USER 'admin'@'localhost' IDENTIFIED BY 'password'; // create user
mysql> GRANT ALL PRIVILEGES ON *.* TO 'admin'@'localhost' WITH GRANT OPTION; // privileges on all DB and grant privileges to other users
mysql> FLUSH PRIVILEGES; // upgrade tables of privileges