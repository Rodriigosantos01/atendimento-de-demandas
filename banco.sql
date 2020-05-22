-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.11-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para tickets
CREATE DATABASE IF NOT EXISTS `tickets` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `tickets`;

-- Copiando estrutura para tabela tickets.status_tickets
CREATE TABLE IF NOT EXISTS `status_tickets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela tickets.status_tickets: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `status_tickets` DISABLE KEYS */;
INSERT INTO `status_tickets` (`id`, `descricao`) VALUES
	(1, 'Ativo'),
	(2, 'Em andamento'),
	(3, 'Finalizado'),
	(4, 'Deletado');
/*!40000 ALTER TABLE `status_tickets` ENABLE KEYS */;

-- Copiando estrutura para tabela tickets.tickets
CREATE TABLE IF NOT EXISTS `tickets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) NOT NULL DEFAULT '',
  `descricao` varchar(500) NOT NULL DEFAULT '',
  `data_cadastro` datetime NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela tickets.tickets: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `tickets` DISABLE KEYS */;
INSERT INTO `tickets` (`id`, `titulo`, `descricao`, `data_cadastro`, `status`) VALUES
	(1, 'Cabo de rede ruim', 'Precisa trocar o cabe de rede, soltou o conector', '2020-05-21 22:15:30', 1),
	(2, 'Monitor não liga', 'Computador liga, mas fica com tela preta', '2020-05-21 22:15:30', 2),
	(3, 'Mouse parou', 'Mouse não aparece a seta e não acende a luz', '2020-05-21 22:15:30', 3),
	(4, 'Internete lenta', 'Muita lentidão para carregar sites, impossível trabalhar', '2020-05-21 21:15:30', 1);
/*!40000 ALTER TABLE `tickets` ENABLE KEYS */;

-- Copiando estrutura para tabela tickets.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(250) NOT NULL DEFAULT '',
  `email` varchar(250) NOT NULL DEFAULT '',
  `senha` varchar(250) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela tickets.usuarios: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`) VALUES
	(1, 'Rodrigo Santos', 'rodriigosantos01@gmail.com', '$2y$10$a8cwhsNAZhaw/ciGaJrttOfJ6BXXul1yKgj3Hmla4cUOVky7gotoG');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
