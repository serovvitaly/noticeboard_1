-- Скрипт сгенерирован Devart dbForge Studio for MySQL, Версия 5.0.97.1
-- Домашняя страница продукта: http://www.devart.com/ru/dbforge/mysql/studio
-- Дата скрипта: 17.12.2012 9:41:03
-- Версия сервера: 5.1.66-community-log
-- Версия клиента: 4.1

-- 
-- Отключение внешних ключей
-- 
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;

-- 
-- Установка кодировки, с использованием которой клиент будет посылать запросы на сервер
--
SET NAMES 'utf8';

-- 
-- Установка базы данных по умолчанию
--
USE noticeboard_1;

--
-- Описание для таблицы nt_categories
--
DROP TABLE IF EXISTS nt_categories;
CREATE TABLE nt_categories (
  id INT(10) NOT NULL AUTO_INCREMENT,
  name VARCHAR(150) NOT NULL,
  left_key INT(10) NOT NULL DEFAULT 0,
  right_key INT(10) NOT NULL DEFAULT 0,
  level INT(10) NOT NULL DEFAULT 0,
  PRIMARY KEY (id),
  INDEX left_key (left_key, right_key, level)
)
ENGINE = INNODB
AUTO_INCREMENT = 1
CHARACTER SET utf8
COLLATE utf8_general_ci;

-- 
-- Вывод данных для таблицы nt_categories
--
-- Таблица noticeboard_1.nt_categories не содержит данных

-- 
-- Включение внешних ключей
-- 
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;