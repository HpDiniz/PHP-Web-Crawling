-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 08-Dez-2018 às 02:09
-- Versão do servidor: 5.7.21
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inf493`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `usuario` varchar(100) COLLATE utf8_bin NOT NULL,
  `senha` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`usuario`, `senha`) VALUES
('Teste', '123\r\n');

-- --------------------------------------------------------

--
-- Estrutura da tabela `receitas`
--

DROP TABLE IF EXISTS `receitas`;
CREATE TABLE IF NOT EXISTS `receitas` (
  `nome` varchar(100) COLLATE utf8_bin NOT NULL,
  `ingredientes` varchar(10000) COLLATE utf8_bin NOT NULL,
  `preparo` varchar(10000) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`nome`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `receitas`
--

INSERT INTO `receitas` (`nome`, `ingredientes`, `preparo`) VALUES
('brigadeiro-de-caipirinha-no-copinho', ' 1 lata de leite condensado1 colher de sopa de manteiga3 colheres de sopa de cachaÃ§a envelhecida2 colheres de sopa de limÃ£o TaitiAÃ§Ãºcar cristalRaspas de limÃ£o pra confeitar', ' Em uma panela, juntar o leite condensado e a manteiga.Mexer em fogo baixo atÃ© desgrudar da panela.Acrescentar a cachaÃ§a envelhecida e mexer bastante.Acrescentar o suco de limÃ£o e mexer atÃ© engrossar.Colocar em pequenos copos.Por cima, adicionar um pouco de aÃ§Ãºcar cristal e raspas de limÃ£o. '),
('chocolate-quente', ' 2 gemas4 colheres de aÃ§Ãºcar1 litro de leite integral100g de cacau em pÃ³100g de marshmallow', ' Bater as gemas e o aÃ§Ãºcar atÃ© formar uma gemada. Reservar.Aquecer o leite em fogo baixo. Adicionar o cacau em pÃ³. Misturar bem.Juntar a gemada aos poucos, mexendo sempre atÃ© ganhar consistÃªncia.Servir em taÃ§as de chocolate quente, cobrir com o marshmallow e queimar com maÃ§arico. '),
('chocolate-quente-no-palito-de-canela', ' ', '  Chocolate Quente no Palito de Canela'),
('frango-molho-citrico-sadia', ' 4 filÃ©s de frango SadiaSalPimenta do reino1 colher de chÃ¡ de alho em pÃ³1 Â½ xÃ­cara de farinha de trigo2 colheres de sopa de manteiga2 colheres de sopa de azeite de olivaSuco de 2 limÃµes sicilianos1 xÃ­cara de caldo de frangoÂ¾ xÃ­cara de creme de leite2 colheres de sopa de alcaparrasRodelas de limÃ£o siciliano para decorar2 colheres de sopa de salsinha picada', ' Temperar ambos os lados do frango Sadia com sal pimenta e alho em pÃ³ e passar na farinha de trigo.Em uma frigideira derreter a manteiga e acrescentar o azeite. Dourar em fogo alto o frango Sadia por, aproximadamente, 3 minutos de cada lado. Reservar.Reduzir o fogo para mÃ©dio, juntar o suco de limÃ£o e o caldo de frango. Deixar ferver por 5 minutos e juntar o creme de leite e as alcaparras.Juntar os filÃ©s de frango Sadia, dispor as rodelas de limÃ£o.Corrigir o sal e a pimenta e retirar do fogo.Finalizar com salsinha picada. '),
('frango-picante-marinado-na-laranja', ' 200 ml de leite de coco1 pimenta dedo de moÃ§a sem semente picadinha1 laranja bahia1 colher de chÃ¡ de gengibre raladoSalPimenta do reino1 kg de sobrecoxa de frango Sadia Bio1 batata doce1 colher de sopa de azeite de oliva2 ramos de tomilho', ' Em uma tigela, misturar o leite de coco, a pimenta dedo de moÃ§a, as raspas da laranja, o suco da laranja, o gengibre ralado, o sal e a pimenta do reino. Adicionar as sobrecoxas de frango e misturar bem. Reserva na geladeira por, pelo menos, 4 horas. Cortar a batata doce em rodelas de, aproximadamente,1 centÃ­metro.Dispor em um refratÃ¡rio, regar com azeite de oliva e temperar com sal e pimenta do reino.Sobre as batatas, colocar as sobrecoxas de frango e cobrir com a marinada.Cobrir o refratÃ¡rio com papel alumÃ­nio e levar ao forno preaquecido a 200 graus por, aproximadamente, 50 minutos.Retirar o papel alumÃ­nio e voltar ao forno por mais 20 minutos ou atÃ© que esteja bem dourado.Finalizar com um ramo de tomilho e servir. '),
('lasanha-de-queijo-e-palmito', ' 5 colheres de sopa de manteiga5 colheres de sopa de farinha de trigo800ml de leite integral quenteSal a gostoPimenta do reino a gostoNoz-moscada a gosto1 colher de sopa de manteiga1 cebola em cubinhos1 dente de alho amassado750g de palmito pupunha em cubosÂ½ colher de chÃ¡ de orÃ©gano Folhinhas de tomilho a gosto3 xÃ­caras de queijo muÃ§arela raladoÂ½  xÃ­cara de queijo parmesÃ£o ralado', ' Em uma panela, derreter a manteiga e juntar a farinha de trigo.Mexer atÃ© a farinha se misturar a manteiga e cozinhar por 5 minutos.Juntar, aos poucos, o leite quente sem parar de mexer atÃ© o molho ficar homogÃªneo.Quando o molho engrossar, desligar o fogo, temperar com sal, pimenta-do-reino e noz-moscada. Reservar.Aquecer uma frigideira, derreter a manteiga e refogar a cebola.Adicionar o alho e o palmito picado e refogar por mais 3 minutos.Temperar com sal, pimenta do reino, orÃ©gano e tomilho. Reservar.Cobrir o fundo de uma forma refratÃ¡ria, com uma pequena porÃ§Ã£o de molho branco, dispor a massa de lasanha Petybon por cima e adicionar uma camada de molho bechamel e uma camada de palmito. Dispor uma camada de queijo muÃ§arela e mais uma camada de massa. Repetir o processo nessa ordem finalizando com molho branco, queijo muÃ§arela e queijo parmesÃ£o.Levar ao forno a 180 graus por 12 minutos.Retirar do forno e deixar esfriar um pouquinho antes de cortar e servir.  ');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
