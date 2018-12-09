# КАК ЭТО ЗАПУСТИТЬ???

### Скачиваем файлы
**1. По зеленой кнопке нажимаем на DOWNLOAD ZIP**
**2. Распаковаваем наш архив с помощью менеджера архивов (сам открывается при двойном клике по архиву) по пути `/var/www/html/`**

### Устанавливаем LAMP (LinuxApacheMysqlPhp)
**Чтобы установить php mysql и т д - CTRL+ALT+T - открываем консоль, вводим по очереди комманды (если просит пароль - вводим, который ставили при установки убунту или какой админский короче)**
```bash
sudo apt-get update
sudo apt-get install apache2 mysql-server php libapache2-mod-php php-mysql php-xml php-gd php-imap php-mysql
sudo systemctl restart apache2
sudo mysql
```

### Настраиваем БД под скачанный сайт
**Можно скопировать вообще все строки ниже и до конца и вставить в консоль базы данных (консоль БД мы открыли командой sudo mysql)**
```mysql
CREATE SCHEMA db_sanya;

create user 'sanya'@'localhost'
  identified with mysql_native_password
  by 'sanya228';

grant all privileges on db_sanya.* to 'sanya'@'localhost';

use db_sanya;

CREATE TABLE admins
(
    id int PRIMARY KEY NOT NULL AUTO_INCREMENT,
    username varchar(64) NOT NULL,
    password varchar(64) NOT NULL
);
CREATE UNIQUE INDEX admins_id_uindex ON categories (id);

CREATE TABLE categories
(
    id int PRIMARY KEY NOT NULL AUTO_INCREMENT,
    name varchar(64) NOT NULL
);
CREATE UNIQUE INDEX categories_id_uindex ON categories (id);

CREATE TABLE comments
(
    id int PRIMARY KEY NOT NULL AUTO_INCREMENT,
    thread_id int NOT NULL,
    text text NOT NULL,
    op int
);
CREATE UNIQUE INDEX comments_id_uindex ON comments (id);

CREATE TABLE threads
(
    id int PRIMARY KEY NOT NULL AUTO_INCREMENT,
    op int NOT NULL,
    session_id varchar(128) NOT NULL,
    category_id int NOT NULL,
    title varchar(128) NOT NULL,
    text text NOT NULL
);
CREATE UNIQUE INDEX threads_id_uindex ON threads (id);

INSERT INTO `admins` (`username`, `password`) VALUES ('sanya', 'sanya228');
INSERT INTO `categories` (`name`) VALUES ('/b/');
INSERT INTO `categories` (`name`) VALUES ('/a/nime');
INSERT INTO `categories` (`name`) VALUES ('/s/oft');
INSERT INTO `categories` (`name`) VALUES ('/po/litics');
INSERT INTO `categories` (`name`) VALUES ('/se/rials');
INSERT INTO `categories` (`name`) VALUES ('/p/rogramming');
```
**Открываем браузер и по ссылке localhost/<название папки со скачанными файлами> видим наш сайт**

# УРА!
