CREATE DATABASE betsy_bagel2;
USE betsy_bagel2;
CREATE TABLE User(
  user_id int NOT NULL AUTO_INCREMENT,
  username varchar(15) NOT NULL UNIQUE,
  password varchar(15) NOT NULL,
  is_admin boolean NOT NULL DEFAULT 0,
  PRIMARY KEY (user_id)
);

CREATE TABLE Item(
  item_id int NOT NULL AUTO_INCREMENT,
  name varchar(20) NOT NULL,
  price decimal(13, 2) NOT NULL,
  upc varchar(30) NOT NULL,
  PRIMARY KEY (item_id)
);

CREATE Table Invoice(
  order_id int NOT NULL AUTO_INCREMENT,
  user_id int NOT NULL,
  item_id int NOT NULL,
  card_carrier varchar(30) NOT NULL,
  credit_card varchar(50) NOT NULL,
  PRIMARY KEY (order_id),
  FOREIGN KEY (user_id) REFERENCES User(user_id),
  FOREIGN KEY (item_id) REFERENCES Item(item_id)  
);

INSERT INTO User (username, password, is_admin) VALUES ('jasmine', 'elgato14', 1);
INSERT INTO User (username, password, is_admin) VALUES ('john', 'passwordninja', 0);
INSERT INTO User (username, password, is_admin) VALUES ('callie', 'meow18', 0);

INSERT INTO Item (name, price, upc) VALUES ('Grande Coffee', 2.75, "2147483647");
INSERT INTO Item (name, price, upc) VALUES ('Venti Coffee', 3.75, "2147483648");
INSERT INTO Item (name, price, upc) VALUES ('Tall Coffee', 2.25, "2147483649");

INSERT INTO Invoice (user_id, item_id, card_carrier, credit_card) VALUES (3, 1, "MasterCard", "5300882056254656");