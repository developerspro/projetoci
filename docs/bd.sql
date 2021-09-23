CREATE TABLE `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(60) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `email` varchar(60) not null, -- incluido
  `senha` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)