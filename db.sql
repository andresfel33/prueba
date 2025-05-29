
create table usuario(
idusuario int not null AUTO_INCREMENT PRIMARY KEY,
usuario varchar(255) not null,
pass varchar(255) not null
);
create table contactos(
idcontacto int not null AUTO_INCREMENT PRIMARY KEY,
   nombre varchar(255) not null,
    telefono varchar(40) not null,
    email varchar(255) not null,
	idusuario int not null,
	   CONSTRAINT fkidusuario  FOREIGN key (idusuario) REFERENCES usuario(idusuario)
);
INSERT INTO `usuario` (`idusuario`, `usuario`, `pass`) VALUES (NULL, 'andresfel17', 'Tes09');
INSERT INTO `usuario` (`idusuario`, `usuario`, `pass`) VALUES (NULL, 'nicolas12', 'Tes07');