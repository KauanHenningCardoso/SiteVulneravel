



CREATE DATABASE bd_vulneravel ; use bd_vulneravel;

CREATE TABLE tb_admin (
  cd_admin int(11) NOT NULL,
  nm_admin varchar(20) DEFAULT NULL,
  ds_senha char(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



INSERT INTO tb_admin (cd_admin, nm_admin, ds_senha) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e');


ALTER TABLE tb_admin
  ADD PRIMARY KEY (cd_admin);


ALTER TABLE tb_admin
  MODIFY cd_admin int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;


