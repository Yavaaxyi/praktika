SET NAMES 'utf8';

--
-- Описание для таблицы goods
--
DROP TABLE IF EXISTS goods;
CREATE TABLE goods (
  id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  good VARCHAR(255) NOT NULL,
  category_id INT(10) UNSIGNED NOT NULL,
  brand_id INT(10) UNSIGNED NOT NULL,
  price INT(11) UNSIGNED NOT NULL,
  rating INT(11) UNSIGNED NOT NULL DEFAULT 0,
  photo VARCHAR(255) NOT NULL,
  PRIMARY KEY (id),
  CONSTRAINT FK_goods_brands_id FOREIGN KEY (brand_id)
    REFERENCES brands(id) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT FK_goods_categories_id FOREIGN KEY (category_id)
    REFERENCES categories(id) ON DELETE CASCADE ON UPDATE CASCADE
)
ENGINE = INNODB
AUTO_INCREMENT = 15
AVG_ROW_LENGTH = 1170
CHARACTER SET utf8
COLLATE utf8_general_ci;

-- 
-- Вывод данных для таблицы goods
--
INSERT INTO goods VALUES
(1, 'Пудра злаковая для умывания', 1, 1, 690, 8, 'Пудра_злаковая.webp'),
(2, 'Крем для лица увлажняющий', 1, 1, 890, 9, 'apple_macbook_pro.jpg'),
(3, 'Крем для лица флюид', 1, 4, 790, 5, 'lenovo_idea_pad.jpg'),
(4, 'Крем для лица лифтинг', 1, 4, 990, 7, 'lenovo_g5030.jpg'),
(5, 'Ледяной гуаша', 1, 3, 690, 8, 'acer_aspire.jpg'),
(6, 'Мининабор уходовой косметики', 2, 2, 490, 9, 'samsung_galaxy_a7.jpg'),
(7, 'Бальзам для губ питательный', 2, 2, 490, 8, 'samsung_galaxy_a5.jpg'),
(8, 'Вода мицеллярная для снятия макияжа', 2, 1, 690, 10, 'apple_iphone_se.jpg'),
(9, '', 2, 5, 690, 6, 'asus_zenfone_laser.jpg'),
(10, 'Гидролат алое', 2, 4, , 3, 'lenovo_a5000.jpg'),
(11, 'Смартфон Lenovo P90', 2, 4, 16000, 5, 'lenovo_p90.jpg'),
(12, 'Видеокарта ASUS', 3, 5, 2000, 8, 'asus_video.jpg'),
(13, 'Видеокарта GIGABYTE GT-740', 3, 6, 6000, 9, 'gigabyte_video_gt740.jpg'),
(14, 'Видеокарта GIGABYTE GTX-960', 3, 6, 14000, 10, 'gigabyte_video_gtx960.jpg');
