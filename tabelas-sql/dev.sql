-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2023 at 10:27 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dev`
--

-- --------------------------------------------------------

--
-- Table structure for table `contato`
--

CREATE TABLE `contato` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `assunto` varchar(100) NOT NULL,
  `mensagem` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contato`
--

INSERT INTO `contato` (`id`, `nome`, `email`, `telefone`, `assunto`, `mensagem`) VALUES
(1, 'Maria José', 'josemaria@gmail.com', '(11) 98765-4321', 'Cursos', 'Vocês disseram que em breve a plataforma ofereceria cursos de tecnologia com certificado, onde estão? Quero saber!'),
(2, 'Monique Vitória', 'moniquemota@gmail.com', '(11) 94307-8977', 'Parceria', 'Sou CEO de uma empresa de tecnologia multimilionária. Por se tratar de um grande negócio, os senhores devem entender que o nome da nossa corporação deve se manter em anonimato. Entrem em contato e podemos conversar melhor a respeito da parceria que proponho.');

-- --------------------------------------------------------

--
-- Table structure for table `modo`
--

CREATE TABLE `modo` (
  `fundo` varchar(20) NOT NULL,
  `tema` varchar(20) NOT NULL,
  `imagem` varchar(50) NOT NULL,
  `botao` varchar(20) NOT NULL,
  `fonte` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `modo`
--

INSERT INTO `modo` (`fundo`, `tema`, `imagem`, `botao`, `fonte`) VALUES
('#FFF', 'light', '../images/logo.png', '#0E6EFC', 'black');

-- --------------------------------------------------------

--
-- Table structure for table `modoadmin`
--

CREATE TABLE `modoadmin` (
  `fundo` varchar(20) NOT NULL,
  `tema` varchar(20) NOT NULL,
  `imagem` varchar(50) NOT NULL,
  `botao` varchar(20) NOT NULL,
  `fonte` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `modoadmin`
--

INSERT INTO `modoadmin` (`fundo`, `tema`, `imagem`, `botao`, `fonte`) VALUES
('#1a1a1a', 'dark', '../images/logo-dark.png', 'white', 'white');

-- --------------------------------------------------------

--
-- Table structure for table `noticia`
--

CREATE TABLE `noticia` (
  `id` int(11) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `autor` varchar(50) NOT NULL,
  `imagem` varchar(1000) NOT NULL,
  `resumo` varchar(2000) NOT NULL,
  `texto` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `noticia`
--

INSERT INTO `noticia` (`id`, `titulo`, `autor`, `imagem`, `resumo`, `texto`) VALUES
(2, 'A internet como escape da realidade', 'Sabrina Cristan', 'https://i.pinimg.com/564x/10/7b/9e/107b9edd05f22bb1efe5a8143a0ee9da.jpg', 'No mundo acelerado em que vivemos, a internet se tornou uma parte essencial de nossas vidas. Ela oferece inúmeras vantagens, como acesso instantâneo a informações, conexão com pessoas de diferentes partes do mundo e entretenimento sem fim. Contudo, o uso excessivo da internet pode levar ao vício, especialmente quando utilizada como um escape da realidade. Neste texto, exploraremos os aspectos do vício na internet como uma fuga da realidade.', '<h5>O vício na internet</h5>\r\n<p>&emsp;Nos últimos anos, testemunhamos uma revolução tecnológica que transformou a forma como interagimos com o mundo. A internet, em particular, desempenhou um papel significativo em nossas vidas, proporcionando acesso ilimitado a informações, comunicação instantânea e entretenimento sem fim. No entanto, com essas vantagens também surgiram desafios, e um deles é o vício na internet. Para alguns, a internet se tornou um refúgio da realidade, oferecendo uma fuga temporária das pressões e dificuldades do mundo real.</p>\r\n<h5>Atrativos da internet como escape</h5>\r\n<p>&emsp;Plataformas como Facebook, Instagram e Twitter oferecem a sensação de pertencimento e conexão social, permitindo que as pessoas criem e mantenham relacionamentos virtuais. Essas interações online podem se tornar uma forma de escapismo, substituindo o contato pessoal e a intimidade.</p>\r\n<p>&emsp;Os jogos online e a realidade virtual proporcionam uma experiência imersiva e cativante, permitindo que os usuários se envolvam em mundos virtuais onde podem assumir identidades e papéis diferentes. Essa fuga da realidade pode ser particularmente atraente para aqueles que buscam evitar os desafios da vida cotidiana.</p>\r\n<p>&emsp;A internet oferece um vasto catálogo de filmes, séries, vídeos e música, disponíveis a qualquer momento e em qualquer lugar. Essas formas de entretenimento podem servir como uma maneira conveniente de escapar dos problemas e preocupações da vida real.</p>\r\n<br>\r\n<p>&emsp;Embora a internet tenha se tornado uma ferramenta essencial e benéfica em muitos aspectos, é importante reconhecer os perigos do vício na internet como escape da realidade. É necessário buscar um equilíbrio saudável entre o mundo virtual e o mundo real, reservando tempo para interações pessoais, atividades físicas e enfrentamento adequado dos desafios. A conscientização sobre os efeitos negativos do vício na internet e a busca por ajuda profissional quando necessário podem ajudar a mitigar os impactos negativos e a recuperar um senso de equilíbrio entre o mundo digital.</p>'),
(3, 'Qual é o seu tipo favorito de café?', 'Isabel Vitória', 'https://i.pinimg.com/564x/ce/d3/20/ced3206aba98b5798a5c47dc34fa3070.jpg', 'Existem diversos tipos de café ao redor do mundo, cada um com suas características únicas de sabor, aroma e preparo. Neste artigo, compartilho com vocês alguns dos tipos de café mais populares.', '<p>&emsp;O café é uma das bebidas mais populares e apreciadas em todo o mundo. Com sua rica história e aroma inconfundível, o café se tornou uma parte essencial do cotidiano de milhões de pessoas. Abaixo, apresento alguns dos tipos de café mais populares:</p>\r\n<p>&emsp;<b>Café Arábica</b>: É uma das espécies mais cultivadas e apreciadas em todo o mundo. Os grãos de café arábica têm sabor suave, aroma delicado e uma acidez equilibrada. É geralmente considerado de alta qualidade e é usado como base para muitas bebidas de café.</p>\r\n<p>&emsp;<b>Café Robusta</b>: Outra espécie amplamente cultivada, o café robusta possui um sabor mais forte e amargo em comparação ao café arábica. É frequentemente usado na produção de blends de café, bem como em bebidas de café instantâneo devido à sua alta cafeína e menor custo.</p>\r\n<p>&emsp;<b>Café Espresso</b>: Originário da Itália, o café espresso é preparado através da passagem de água quente sob pressão através de uma pequena quantidade de café moído finamente. O resultado é uma bebida concentrada, com sabor intenso e encorpado. É a base para muitas outras bebidas populares, como cappuccino, latte e macchiato.</p>\r\n<p>&emsp;<b>Café Latte</b>: Feito com uma combinação de café espresso e leite vaporizado, o café latte é uma bebida cremosa e suave. Geralmente é servido em um copo alto e pode ser adoçado com xaropes saborizados, como baunilha ou caramelo.</p>\r\n<p>&emsp;<b>Cappuccino</b>: Uma bebida clássica e popular, o cappuccino consiste em partes iguais de café espresso, leite vaporizado e espuma de leite. É comumente polvilhado com chocolate em pó ou canela. O cappuccino possui um equilíbrio entre o sabor do café e a cremosidade do leite.</p>\r\n<p>&emsp;<b>Café Americano</b>: O café americano é uma bebida diluída feita adicionando água quente ao café espresso, criando uma bebida mais suave e menos concentrada. É semelhante ao café filtrado, mas com um sabor mais encorpado devido à preparação com café espresso.</p>\r\n<p>&emsp;<b>Café Cold Brew</b>: O café cold brew é uma bebida que ganhou popularidade nos últimos anos. É preparado mergulhando grãos de café moídos em água fria por um longo período de tempo, geralmente de 12 a 24 horas. O resultado é uma bebida suave, com menos acidez e um sabor mais doce em comparação ao café tradicional.</p>\r\n<br>\r\n<p>&emsp;Esses são apenas alguns exemplos dos tipos de café mais comuns, mas há uma infinidade de variações e métodos de preparo, permitindo que você explore diferentes sabores e experiências de acordo com suas preferências pessoais.</p>'),
(4, 'OBR: Estimulando a criatividade e a inovação', 'Monique Vitória', 'https://i.pinimg.com/564x/c6/29/23/c629236b18c4a5c293598b83b51900c3.jpg', 'A tecnologia desempenha um papel cada vez mais importante em nossas vidas, influenciando diversos aspectos da sociedade contemporânea. Nesse contexto, a Olimpíada Brasileira de Robótica (OBR) surge como uma iniciativa empolgante, que busca incentivar a criatividade, o pensamento crítico e a inovação tecnológica entre os jovens brasileiros.', '<p>&emsp;A robótica tem conquistado cada vez mais espaço na sociedade moderna, desempenhando um papel fundamental no avanço da tecnologia e no desenvolvimento de soluções inovadoras. Nesse contexto, a Olimpíada Brasileira de Robótica (OBR) surge como uma competição nacional que promove o interesse pela ciência, tecnologia, engenharia e matemática (STEM) e estimula a criatividade e a inovação entre estudantes de todo o país.</p>\r\n<p>&emsp;A OBR tem como objetivo principal difundir a robótica educacional no Brasil, estimulando o interesse dos estudantes pela ciência e tecnologia. A competição busca promover o aprendizado interdisciplinar, o trabalho em equipe, o raciocínio lógico e a resolução de problemas práticos por meio da construção e programação de robôs.</p>\r\n<p>&emsp;A OBR é composta por diferentes modalidades que atendem a diferentes faixas etárias e níveis de conhecimento, como a prática, que envolve a construção de robôs autônomos para cumprir desafios específicos, e a teórica, que abrange questões teóricas e conceituais sobre robótica.</p>\r\n<p>&emsp;A competição desperta a curiosidade e o interesse dos estudantes pelas áreas de ciência, tecnologia, engenharia e matemática. Ao envolver-se na construção e programação de robôs, os participantes têm a oportunidade de explorar conceitos teóricos de forma prática e concreta.</p>'),
(5, 'A realidade é virtual?', 'Monique Vitória', 'https://i.pinimg.com/564x/f7/3a/e5/f73ae58e54226cd4e16d975eec92162d.jpg', 'Desde a popularização da ficção científica, temos nos questionado sobre a natureza da nossa realidade e se há alguma possibilidade de estarmos vivendo em um mundo virtual, semelhante ao retratado no filme \"Matrix\". Neste artigo, exploraremos essa intrigante hipótese, examinando conceitos filosóficos, científicos e tecnológicos que levantam a questão: Será que nossa realidade é, de fato, uma simulação virtual?', '<h5>A Hipótese da Realidade Simulada</h5>\r\n<p>&emsp;À medida que avançamos em tecnologia e capacidade computacional, é possível conceber a criação de simulações cada vez mais complexas e realistas. Se a tecnologia humana é capaz de criar simulações virtuais convincentes, por que não seria possível que uma civilização mais avançada fizesse o mesmo em relação à nossa realidade?</p>\r\n<p>&emsp;O filósofo Nick Bostrom propôs a ideia de que, se uma civilização tecnologicamente avançada existir e tiver interesse em criar simulações, é mais provável que estejamos vivendo em uma delas do que em uma realidade \"base\". Isso se baseia no pressuposto de que haveria um número infinito de simulações possíveis em comparação com apenas uma realidade original.</p>\r\n<h5>Evidências e Argumentos a Favor</h5>\r\n<p>&emsp;Nossa percepção do mundo é baseada em nossos sentidos, que podem ser enganados. Experiências como realidade virtual já demonstraram a capacidade de alterar a percepção e criar ilusões convincentes. Isso levanta a questão de até que ponto podemos confiar em nossos sentidos para determinar a verdadeira natureza da realidade.</p>\r\n<p>&emsp;Alguns argumentam que certas inconsistências e peculiaridades em teorias físicas e matemáticas fundamentais, como a natureza quântica da realidade, podem ser indicativos de uma construção simulada em nível fundamental.</p>\r\n<h5>Limitações e Ceticismo</h5>\r\n<p>&emsp;Apesar dos argumentos e das especulações, até o momento não temos evidências sólidas que comprovem definitivamente que estamos em uma simulação virtual.</p>\r\n<p>&emsp;Criar uma simulação tão complexa e detalhada quanto nossa realidade exigiria uma quantidade colossal de recursos computacionais e conhecimento científico extremamente avançado. Seria difícil conceber como uma civilização poderia alcançar esse nível de capacidade.</p>\r\n<br>\r\n<p>&emsp;A ideia de estarmos vivendo em uma realidade virtual é fascinante e instigante. Embora haja argumentos e especulações a favor dessa possibilidade, ainda não temos provas concretas para confirmá-la. No entanto, a discussão em torno desse conceito nos convida a refletir sobre a natureza da nossa existência e a questionar a realidade que nos cerca. Independentemente de estarmos ou não em uma simulação virtual, nossa busca por conhecimento</p>'),
(6, 'As cidades do futuro', 'Isabel Vitória', 'https://i.pinimg.com/564x/03/81/56/03815635501fe64f9e00bc0b3b97d6d6.jpg', 'À medida que a população mundial continua a crescer rapidamente e os desafios relacionados à urbanização se intensificam, surge a necessidade de repensar e transformar nossas cidades. As cidades do futuro são vistas como espaços urbanos inteligentes, sustentáveis e inovadores, que buscam melhorar a qualidade de vida dos habitantes e enfrentar os desafios ambientais, sociais e tecnológicos. Neste artigo, exploraremos as principais características e tendências que moldam as cidades do futuro.', '<h5>Sustentabilidade e Eficiência Energética</h5>\r\n<p>&emsp;As cidades do futuro são projetadas para aproveitar ao máximo as fontes de energia renováveis, como energia solar, eólica e geotérmica. Isso reduzirá a dependência de combustíveis fósseis e diminuirá as emissões de gases de efeito estufa.</p>\r\n<p>&emsp;Os prédios serão construídos com materiais sustentáveis e eficientes do ponto de vista energético, integrando tecnologias como isolamento térmico, sistemas de captação de água da chuva e telhados verdes.</p>\r\n<p>&emsp;As cidades do futuro promoverão o uso de transporte público eficiente, como ônibus elétricos e sistemas de metrô. Além disso, haverá incentivos para a utilização de meios de transporte não poluentes, como bicicletas e veículos elétricos.</p>\r\n<h5>Tecnologia e Inovação</h5>\r\n<p>&emsp;As cidades serão equipadas com sensores e sistemas de monitoramento que coletarão dados em tempo real para otimizar o uso de recursos, como energia e água, além de melhorar a segurança pública e a gestão de resíduos.</p>\r\n<p>&emsp;O uso de tecnologias de mobilidade inteligente, como veículos autônomos e aplicativos de compartilhamento de transporte, facilitará o deslocamento dos habitantes, reduzindo congestionamentos e emissões de poluentes.</p>\r\n<h5>Planejamento Urbano e Qualidade de Vida</h5>\r\n<p>&emsp;O planejamento urbano será orientado por abordagens integradas que consideram fatores como transporte, habitação, trabalho e serviços, buscando criar comunidades mais equilibradas e acessíveis.</p>\r\n<p>&emsp;As cidades do futuro incentivarão a participação ativa dos cidadãos na tomada de decisões, por meio de plataformas digitais e consultas públicas, para garantir que as necessidades e preferências da comunidade sejam atendidas.</p>\r\n<br>\r\n<p>&emsp;As cidades do futuro representam uma visão promissora de espaços urbanos sustentáveis, inovadores e orientados para a melhoria da qualidade de vida dos habitantes. Com a aplicação de soluções tecnológicas, o planejamento urbano adequado e a busca por uma abordagem mais sustentável, podemos criar ambientes urbanos que sejam resilientes, eficientes e agradáveis de se viver. À medida que avançamos, é essencial que governos, empresas e cidadãos colaborem para tornar essa visão uma realidade, moldando um futuro urbano que beneficie a todos.</p>'),
(7, 'A carreira de designer digital', 'Sabrina Cristan', 'https://i.pinimg.com/564x/96/7f/43/967f430f9ac39da33121a14e97bec046.jpg', 'Nos últimos anos, testemunhamos uma rápida evolução do mundo digital, com a internet se tornando uma parte intrínseca de nossas vidas cotidianas. Nesse cenário, a carreira de designer digital emerge como uma das mais empolgantes e promissoras no campo do design e da tecnologia. Neste texto, vamos explorar essa carreira fascinante, discutir suas principais responsabilidades e perspectivas de futuro.', '<p>O designer digital é responsável por projetar e desenvolver elementos visuais e interativos para plataformas digitais, como websites, aplicativos móveis, interfaces de usuário, jogos, realidade virtual e muito mais. Sua função é criar experiências que sejam esteticamente agradáveis, funcionais e intuitivas para o usuário final. Para isso, eles precisam dominar uma variedade de ferramentas e tecnologias, além de acompanhar as últimas tendências e melhores práticas no design digital.</p>\r\n<p>Uma das habilidades fundamentais de um designer digital é a capacidade de traduzir conceitos e ideias em soluções visuais atraentes. Isso envolve o uso de princípios de design, como layout, tipografia, cores, hierarquia visual e composição, para criar interfaces claras e visualmente atraentes. Além disso, o designer digital também precisa entender a experiência do usuário e se envolver em processos de pesquisa e testes para garantir que suas criações atendam às necessidades e expectativas dos usuários.</p>\r\n<p>No ambiente de trabalho, o designer digital geralmente colabora com uma equipe multidisciplinar, incluindo desenvolvedores, especialistas em UX/UI (Experiência do Usuário/Interface do Usuário) e gerentes de projetos. Essa colaboração é fundamental para garantir a integração harmoniosa entre design e funcionalidade, resultando em produtos digitais de alta qualidade.</p>\r\n<p>Além das habilidades técnicas, o designer digital também precisa ser um pensador criativo e inovador. O campo do design digital está em constante evolução, e novas tecnologias e tendências emergem regularmente. Para se destacar nessa carreira, é importante estar atualizado e ser capaz de explorar novas ideias e abordagens criativas para resolver problemas de design.</p>\r\n<p>Quanto às perspectivas de futuro, a carreira de designer digital está em constante crescimento. Com a crescente demanda por soluções digitais, as empresas estão cada vez mais valorizando profissionais qualificados nessa área. Além disso, a evolução da tecnologia, como inteligência artificial, realidade virtual/aumentada e internet das coisas, abre novas oportunidades e desafios para os designers digitais explorarem.</p>\r\n<p>Em resumo, a carreira de designer digital oferece um campo de atuação emocionante e recompensador para aqueles que são apaixonados por design e tecnologia. Ao unir habilidades criativas com conhecimentos técnicos, os designers digitais têm o poder de transformar o mundo digital, criando experiências memoráveis e impactantes para os usuários. Se você é uma pessoa criativa, orientada para a tecnologia e apaixonada por design, essa pode ser a carreira perfeita para você explorar e se destacar.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `registrado`
--

CREATE TABLE `registrado` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `sobrenome` varchar(200) NOT NULL,
  `email` varchar(300) NOT NULL,
  `dataNasc` date NOT NULL,
  `sexo` varchar(20) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `imagem` varchar(1000) NOT NULL DEFAULT '../images/perfil.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registrado`
--

INSERT INTO `registrado` (`id`, `nome`, `sobrenome`, `email`, `dataNasc`, `sexo`, `senha`, `imagem`) VALUES
(1, 'Maria', 'José', 'josemaria@gmail.com', '2000-12-31', 'Feminino', 'mariajose123', 'https://i.pinimg.com/564x/08/dc/e9/08dce9f79ff0aa5bde98a110bf01785a.jpg'),
(2, 'Monique Vitória', 'Mota', 'moniquemota@gmail.com', '2006-05-24', 'Feminino', 'momo123', 'https://i.pinimg.com/564x/43/ef/34/43ef34791a7a622575dc10855a0e8de2.jpg'),
(3, 'Isabel Vitória', 'Santos', 'isinha@gmail.com', '2006-04-02', 'Feminino', 'isa123', 'https://i.pinimg.com/564x/01/cb/9a/01cb9a66c3a79a2942eadba489190b9c.jpg'),
(4, 'Sabrina', 'Cristan', 'sabrinacristan@gmail.com', '2006-07-13', 'Feminino', 'sasa123', 'https://i.pinimg.com/564x/c9/b1/f8/c9b1f81c9caed813a262fbd9a5677a7d.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `registroatual`
--

CREATE TABLE `registroatual` (
  `id` int(11) DEFAULT NULL,
  `nome` varchar(200) DEFAULT NULL,
  `sobrenome` varchar(200) DEFAULT NULL,
  `email` varchar(300) DEFAULT NULL,
  `dataNasc` date DEFAULT NULL,
  `sexo` varchar(20) DEFAULT NULL,
  `senha` varchar(100) DEFAULT NULL,
  `imagem` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registroatual`
--

INSERT INTO `registroatual` (`id`, `nome`, `sobrenome`, `email`, `dataNasc`, `sexo`, `senha`, `imagem`) VALUES
(4, 'Sabrina', 'Cristan', 'sabrinacristan@gmail.com', '2006-07-13', 'Feminino', 'sasa123', 'https://i.pinimg.com/564x/c9/b1/f8/c9b1f81c9caed813a262fbd9a5677a7d.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contato`
--
ALTER TABLE `contato`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `noticia`
--
ALTER TABLE `noticia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registrado`
--
ALTER TABLE `registrado`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contato`
--
ALTER TABLE `contato`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `noticia`
--
ALTER TABLE `noticia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `registrado`
--
ALTER TABLE `registrado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
