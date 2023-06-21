-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 21-Jun-2023 às 13:46
-- Versão do servidor: 10.4.28-MariaDB
-- versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sebastiao_alves`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `acessos`
--

CREATE TABLE `acessos` (
  `id` int(11) NOT NULL,
  `datas` varchar(2000) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `acessos`
--

INSERT INTO `acessos` (`id`, `datas`, `id_usuario`) VALUES
(1, '', 1),
(2, '', 2),
(3, '19:04:19 - 04/05/2023', 1),
(4, '19:06:43 - 04/05/2023', 1),
(5, '18:13:03 - 04/05/2023', 1),
(6, '18:14:30 - 04/05/2023', 1),
(7, '11:25:13 - 05/05/2023', 2),
(8, '21:52:10 - 06/05/2023', 1),
(9, '17:58:40 - 07/05/2023', 1),
(10, '18:33:53 - 07/05/2023', 1),
(11, '00:02:57 - 10/05/2023', 1),
(12, '00:04:56 - 10/05/2023', 1),
(13, '00:05:32 - 10/05/2023', 1),
(14, '00:06:37 - 10/05/2023', 1),
(15, '00:07:46 - 10/05/2023', 1),
(16, '11:27:56 - 10/05/2023', 1),
(17, '14:42:14 - 10/05/2023', 1),
(18, '14:44:32 - 10/05/2023', 1),
(19, '14:46:57 - 10/05/2023', 1),
(20, '18:13:33 - 10/05/2023', 1),
(21, '23:43:03 - 10/05/2023', 1),
(22, '12:25:42 - 12/05/2023', 1),
(23, '12:29:14 - 12/05/2023', 1),
(24, '12:34:44 - 12/05/2023', 1),
(25, '19:34:03 - 15/05/2023', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `autor`
--

CREATE TABLE `autor` (
  `id` int(11) NOT NULL,
  `img` varchar(5000) NOT NULL,
  `texto` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `autor`
--

INSERT INTO `autor` (`id`, `img`, `texto`) VALUES
(1, 'public/imagensdesktop/conteudo.jpg', '<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet&nbsp;<br><br>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diamvoluptua. At vero es et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos eaccusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diamvoluptua. At vero es et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diamvoluptua. At vero es et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diamvoluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diamvoluptua. At vero es et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.<br><br>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diamvoluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.&nbsp;</p><p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diamvoluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diamvoluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorm ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At ero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>');

-- --------------------------------------------------------

--
-- Estrutura da tabela `carrossel`
--

CREATE TABLE `carrossel` (
  `id` int(11) NOT NULL,
  `imagem_desktop` varchar(2000) NOT NULL,
  `imagem_mobile` varchar(2000) NOT NULL,
  `categoria` varchar(100) DEFAULT NULL,
  `titulo` varchar(500) NOT NULL,
  `descricao` varchar(2000) NOT NULL,
  `data_atualizacao` varchar(500) NOT NULL,
  `posicao` tinyint(4) DEFAULT NULL,
  `link` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `carrossel`
--

INSERT INTO `carrossel` (`id`, `imagem_desktop`, `imagem_mobile`, `categoria`, `titulo`, `descricao`, `data_atualizacao`, `posicao`, `link`) VALUES
(1, 'public/imagensdesktop/cabecalho1.jpg', 'public/imagensmobile/cabecalho1.jpg', 'Novidade', 'Senhora do Amor e Da Guerra', '<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>', '19:09:51 - 11/05/2023', 1, 'http://localhost/sebastiao_alves/livros/1'),
(2, 'public/imagensdesktop/cabecalho2.jpg', 'public/imagensmobile/cabecalho2.jpg', '', 'O Caracol Estrábico', '<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>', '16:58:53 - 08/05/2023', 2, 'http://localhost/sebastiao_alves/livros/2'),
(3, 'public/imagensdesktop/cabecalho3.jpg', 'public/imagensmobile/cabecalho3.jpg', '', 'O Colecionador de Amnésias', '<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>', '22:47:39 - 08/05/2023', 3, ''),
(4, 'public/imagensdesktop/cabecalho4.jpg', 'public/imagensmobile/cabecalho4.jpg', '', 'O Velho Que Pensava Que Fugia', '<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>', '21:12:41 - 08/05/2023', 4, 'http://localhost/sebastiao_alves/livros/3');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contactos`
--

CREATE TABLE `contactos` (
  `id` int(11) NOT NULL,
  `morada` varchar(100) NOT NULL,
  `telefone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `horario` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `contactos`
--

INSERT INTO `contactos` (`id`, `morada`, `telefone`, `email`, `horario`) VALUES
(1, 'Lorem ipsum dolor sit amet,  12<br> 1234-543 Lorem', '+351 123 456 789', 'lorem@lorem.pt', 'De Segunda a Sexta das 00:00h às 00:00h');

-- --------------------------------------------------------

--
-- Estrutura da tabela `destaques`
--

CREATE TABLE `destaques` (
  `id` int(11) NOT NULL,
  `id_livro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `destaques`
--

INSERT INTO `destaques` (`id`, `id_livro`) VALUES
(1, 1),
(2, 4),
(3, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `home`
--

CREATE TABLE `home` (
  `id` int(11) NOT NULL,
  `img_home` varchar(5000) NOT NULL,
  `texto` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `home`
--

INSERT INTO `home` (`id`, `img_home`, `texto`) VALUES
(1, 'public/imagensdesktop/FOTO-editada.jpg', '<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et acusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et acusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et acusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diamv nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>');

-- --------------------------------------------------------

--
-- Estrutura da tabela `imprensa`
--

CREATE TABLE `imprensa` (
  `id` int(11) NOT NULL,
  `titulo` varchar(500) NOT NULL,
  `data_publicacao` varchar(500) NOT NULL,
  `imagem` varchar(5000) NOT NULL,
  `texto` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `imprensa`
--

INSERT INTO `imprensa` (`id`, `titulo`, `data_publicacao`, `imagem`, `texto`) VALUES
(1, 'LANÇAMENTO | SENHORA DO AMOR E DA GUERRA', 'PUBLICADO A 17 JUNHO 2020', 'public/imagensdesktop/imprensa1.jpg', ''),
(2, 'LANÇAMENTO DO LIVRO ', 'PUBLICADO A 6 DEZEMBRO 2017', 'public/imagensdesktop/imprensa2.jpg', '<p>Terá lugar no dia 6 de dezembro, pelas 18h10, no Anfiteatro Abreu Faro, a sessão de lançamento do livro \"O velho que pensava que fugia\", de Sebastiã Alves. Nesta sessão o autor irá ler algumas das passagens do livro. \"Às quatro da madrugada, que faz um homem de oitenta e três anos escondido entre os eucaliptos? De que foge? Que procura? Quem o persegue? Onde irá ele arranjar dinheiro para hotéis, táxis, comboios, autocarros? Porque elege para refúgio esse remoto lugar de romagem onde uma Virgem Negra acolhe peregrinos desde a Idade Média? E que dilema o vem finalmente surpreender, quando pensava ter descoberto a paz e mesmo reencontrado amor?\" \"Sebastião Alves nasceu em Lisboa, em 1954. Formou-se em engenharia química pela Universidade de Birmingham, Reino Unido. Professor no Instituto Superior Técnico, é casado e tem duas filhas. Outras obras publicadas: O caracol estrábico (contos), Chiado Editora, 2011.\"&nbsp;<br><br><br>Notícia de Técnico Lisboa<br>https://tecnico.ulisboa.pt/pt/eventos/lancamento-do-livro-o-velho-que-pensava-que-fugia/</p>'),
(6, 'Exemplo | O Caracol', 'PUBLICADO A 31 FEVEREIRO 2034', 'public/imagensdesktop/imprensa1.jpg', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `livros`
--

CREATE TABLE `livros` (
  `id` int(11) NOT NULL,
  `img_livro` varchar(5000) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `descricao` varchar(10000) NOT NULL,
  `categoria` varchar(100) DEFAULT NULL,
  `sinopse` varchar(1000) DEFAULT NULL,
  `data_atualizacao` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `livros`
--

INSERT INTO `livros` (`id`, `img_livro`, `titulo`, `descricao`, `categoria`, `sinopse`, `data_atualizacao`) VALUES
(1, 'public/imagensdesktop/livro-conteudo.jpg', 'Senhora do Amor e Da Guerra', '<p>Uruk, Mesopotâmia, 3000 a. C. Séculos antes do famoso Gilgamesh, uma bela mulher aparece a comandar os destinos da maior cidade do mundo. Sete extraordinárias plaquetas de barro cozido sugerem a sua história: a inteligência, a coragem, o poder de sedução que a conduzem a poder vencendo todas as adversidades; a luta contra a corrupção dos sacerdotes de Inanna; a vitória sobre os invasores amorritas; e finalmente o dia em que embarca para o reino das trevas, vitimada pela pestilência, após inundações que cobriram a terra como após um dilúvio bíblico...&nbsp;<br><br>As plaquetas chegam-nos assinadas por Zamug, o Coxo, que abandonou a cidade maldita levando consigo os ensinamentos de Nisaba, ou seja, o segredo da escrita.&nbsp;<br><br><br>Edicão: Junho de 2020<br>Dimensões: 150 × 230 × 10 mm<br>Encadernação: Capa mole<br>Páginas: 240<br>&nbsp;</p>', 'Mais Vendido', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.', '19:10:52 - 11/05/2023'),
(2, 'public/imagensdesktop/livro-conteudo3.jpg', 'O Caracol Estrábico', '<p>Xana desistiu por fim de repelir as atenções de um celibatário de meia idade que lhe apareceu na loja. Este não imagina a surpresa que o aguarda... Rodrigo chega a casa angustiado, sabendo que as filhas ficaram sozinhas com a mãe.. Joaquim acorda e descobre que está cego. A sua reacção não é a que seria de esperar... Emigrado em Inglaterra, naturalizado inglês e pouco orgulhoso das suas origens, António tem de deslocar-se à terra onde, certo dia por engano, a cegonha o depositou. O velho professor tenta assegurar-se de que está vivo. Um pai extraviado telefona à filha dias depois de esta receber a herança. Atormentado pelo reumatismo, há dois anos que o velho caçador não pega numa espingarda. Mas no dia do seu nonagésimo aniversário... Vendo a bandeira a meia haste, o presidente do Instituto pergunta quem morreu... Uma esforçada pintora tenta gerir a relação com a sua talentosa mãe. O que poderá impedir um sem-abrigo de atingir a glória? Num lar de terceira idade, a amizade entre um surdo e um mudo é perturbada pela chegada de uma enigmática mulher. Um lovem cientista tem uma inspiração que pode revolucionar a Física Teórica Intelizmente. como a História não se cansa de demonstrar. os verdadeiros génios não são apenas uns incompreendidos. são uma raca a abater. Edição: Agosto de 2011 Dimensões: 143 x 220 × 14 mm Encadernacao Cada mole Páginas: 159</p>', 'Novidade', '', '15:42:38 - 09/05/2023'),
(3, 'public/imagensdesktop/livro-conteudo2.jpg', 'O Colecionador de Amnésias', '<p>Um lapso de memória, um acidente na fábrica... O Eng° Zeferino não tem dúvidas: Só lhe resta demitir-se. Até porque, tem reparado, lapsos destes tendem a ocorrer-lhe. Espaçados, é certo, mas inevitáveis como o pingar de uma torneira avariada... Decide Dois reformar-se e realizar o seu sonho de semore escrever um romance Mas a Ideia não vem e a reforma transforma-se num deserto. Horas, semanas. meses, iguais como graos de areia... Ate ao dia magico em que, numa tabacaria em Pedroucos, repara num livrinho de absurdos com um título extraordinário: Memorias de um amnesico. e embora sinta que o titulo lhe foi roubado. ao mesmo menino e saiuroceucess Agora trabala com metodo. De manna escreve o passado, agulo que ine aconteceu desde o acidente na fabrica. com que se iniciou aguilo a que chama o resto da sua vida. A noite inventa o futuro, pois sabe que não pode dar-se ao luxo de esperar por ele Como hiha e cidacora de uma doente de Azheimer revivi e reyi-me emocionada em multas das situacoes agul narradas, nos momentos de temura, de numor, mas tambem nos momentos de tristeza e solidao que dennem o vercurso deste homem, desde os tempos em que, embora já atingido pela doença, ainda tinha autonomia.. cis uma forma diferente - e comovente - de Talar sobre um doente de Alzheimer. - Manuela Morais, Associação Alzheimer Portugal Os direitos de autor revertem para a Alzheimer Portugal</p>', 'Em Promoção', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.', '00:27:34 - 09/05/2023'),
(4, 'public/imagensdesktop/livro-conteudo4.jpg', 'O Velho Que Pensava que Fugia', '<p>Um homem de 83 anos aparece diante do prédio onde era o seu luxuoso apartamento. E vai-se lembrando. Aos poucos o leitor é levado a perceber que o homem fugiu do lar onde esteve durante 18 meses, encarcerado pela família e controlado por drogas, com o pretexto de ser esquizofrénico e não querer largar o comando dos negócios familiares. O velho sobe ao 8° andar, agora ocupado pelo filho, confronta a família, e vai-se recordando de mais coisas. O leitor fica a saber como foi que ele conseguiu fugir, e quais os planos dele. De madrugada o velho volta a escapar e seguimos com detalhe as peripécias da sua fuga, sempre um passo adiante de perseguidores reais ou imaginários. A fuga trá-lo a uma aldeia turística em França onde se refugia e se apaixona, assombrado por fantasmas e suspeitas. Então... Edicão: Novembro de 2017 Dimensões: 139 x 218 × 13 mm Encadernação: Capa mole Páginas: 168</p>', 'Mais Vendido', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.', '00:27:37 - 09/05/2023');

-- --------------------------------------------------------

--
-- Estrutura da tabela `redessociais`
--

CREATE TABLE `redessociais` (
  `id` int(11) NOT NULL,
  `img_insta` longtext NOT NULL,
  `link_insta` longtext NOT NULL,
  `img_facebook` longtext NOT NULL,
  `link_facebook` longtext NOT NULL,
  `img_linkedin` longtext NOT NULL,
  `link_linkedin` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `redessociais`
--

INSERT INTO `redessociais` (`id`, `img_insta`, `link_insta`, `img_facebook`, `link_facebook`, `img_linkedin`, `link_linkedin`) VALUES
(1, 'public/imagensdesktop/instagram1.svg', 'https://www.instagram.com/', 'public/imagensdesktop/facebook1.svg', 'https://www.facebook.com/', 'public/imagensdesktop/linkedin1.svg', 'https://www.linkedin.com/');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `login` varchar(200) NOT NULL,
  `senha` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `login`, `senha`) VALUES
(1, 'Cristiano Abreu', 'cristiano', '$2y$10$ZpW45qkxdavM59rxQEUY5O4xdsvCCN39fvBbURdIld9liQqzdRHiO'),
(2, 'Jorge Abreu', 'jorge', '$2y$10$zrEMU0kG39I7VyfJjjg8XOI5a/t1zAgIeXCBJBbsx2tSU7uB2l8ti');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `acessos`
--
ALTER TABLE `acessos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `autor`
--
ALTER TABLE `autor`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `carrossel`
--
ALTER TABLE `carrossel`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `contactos`
--
ALTER TABLE `contactos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `destaques`
--
ALTER TABLE `destaques`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `imprensa`
--
ALTER TABLE `imprensa`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `livros`
--
ALTER TABLE `livros`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `redessociais`
--
ALTER TABLE `redessociais`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `acessos`
--
ALTER TABLE `acessos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de tabela `autor`
--
ALTER TABLE `autor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `carrossel`
--
ALTER TABLE `carrossel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `contactos`
--
ALTER TABLE `contactos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `destaques`
--
ALTER TABLE `destaques`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `home`
--
ALTER TABLE `home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `imprensa`
--
ALTER TABLE `imprensa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `livros`
--
ALTER TABLE `livros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `redessociais`
--
ALTER TABLE `redessociais`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
