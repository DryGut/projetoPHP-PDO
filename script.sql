CREATE DATABASE exemplo;

use exemplo;

CREATE produtos(
  id int(11) NOT NULL AUTO_INCREMENT,
  descricao varchar(200) DEFAULT NULL,
  PRIMARY KEY(id)
);