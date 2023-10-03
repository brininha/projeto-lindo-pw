-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2023 at 01:54 PM
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
-- Table structure for table `aula`
--

CREATE TABLE `aula` (
  `idAula` int(11) NOT NULL,
  `tituloAula` varchar(200) NOT NULL,
  `imgAula` varchar(1000) NOT NULL,
  `videoAula` varchar(2000) NOT NULL,
  `textoAula` varchar(10000) NOT NULL,
  `idCurso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `aula`
--

INSERT INTO `aula` (`idAula`, `tituloAula`, `imgAula`, `videoAula`, `textoAula`, `idCurso`) VALUES
(1, 'Apresentação do Python', 'https://i.pinimg.com/564x/1c/86/84/1c8684b06bc7ad1e1f6b7b0099d87300.jpg', '', '<p>Python é uma das linguagens de programação mais populares e influentes do mundo da tecnologia hoje. Conhecida por sua simplicidade e legibilidade, Python é frequentemente apelidada de \"a linguagem que é fácil de aprender e usar\". Mas não se engane pela sua simplicidade - Python também é extremamente poderosa e versátil, encontrando aplicação em uma ampla gama de campos, desde desenvolvimento web até ciência de dados e automação.</p>\r\n<h5>Princípios Fundamentais:</h5>\r\n<ul>\r\n<li>Legibilidade: O Python é conhecido por sua sintaxe limpa e fácil de entender. A ênfase na legibilidade do código é evidente pela obrigatoriedade de indentação, o que força os programadores a escrever código bem estruturado e organizado.</li>\r\n<li>Versatilidade: Python é uma linguagem multiparadigma, o que significa que você pode programar de várias maneiras, seja de forma procedural, orientada a objetos ou funcional. Isso a torna adequada para uma variedade de tarefas.</li>\r\n<li>Comunidade Ativa: Python possui uma das comunidades de desenvolvedores mais ativas e amigáveis do mundo. Isso significa que há uma riqueza de recursos, bibliotecas e frameworks disponíveis para acelerar o desenvolvimento de projetos.</li>\r\n<li>Portabilidade: Python é uma linguagem multiplataforma, o que significa que o código escrito em Python pode ser executado em diversos sistemas operacionais sem a necessidade de grandes alterações.</li>\r\n</ul>\r\n<h5>Aplicações do Python</h5>\r\n<ul>\r\n<li>Desenvolvimento Web: Python é usado em frameworks como Django e Flask para criar aplicativos web robustos e escaláveis.</li>\r\n<li>Ciência de Dados e Análise de Dados: Bibliotecas como Pandas, NumPy e Matplotlib fazem do Python uma escolha popular para cientistas de dados e analistas.</li>\r\n<li>Automação: Python é frequentemente usado para automatizar tarefas repetitivas, desde processamento de arquivos até controle de dispositivos.</li>\r\n<li>Inteligência Artificial e Aprendizado de Máquina: Python é a linguagem preferida para desenvolvimento de modelos de aprendizado de máquina, graças às bibliotecas como TensorFlow e PyTorch.</li>\r\n<li>Jogos e Gráficos: Pygame e outras bibliotecas de gráficos permitem que os desenvolvedores criem jogos e aplicações gráficas interativas.</li>\r\n</ul>', 1),
(3, 'Configuração do ambiente de desenvolvimento', 'https://i.pinimg.com/564x/8f/1c/90/8f1c90f685cd8f56d7a2cfe5de0f099f.jpg', '', '<p>Siga este tutorial passo a passo para configurar seu ambiente de desenvolvimento Python no VSCode:</p>\r\n<h6>Passo 1: Instale o VSCode</h6>\r\n<p>Se você ainda não tem o VSCode instalado, visite o site oficial do Visual Studio Code (https://code.visualstudio.com/) e faça o download do instalador apropriado para o seu sistema operacional.</p>\r\n<h6>Passo 2: Instale o Python</h6>\r\n<p>Baixe a versão mais recente do Python em https://www.python.org/downloads/ de acordo com o seu sistema operacional. Execute o instalador e siga as instruções para instalar o Python em seu sistema.</p>\r\n<p>Verifique se o Python foi instalado corretamente abrindo um terminal ou prompt de comando e digitando:</p>\r\n<pre><code class=\"language-shell\">python --version</code></pre>\r\n<h6>Passo 3: Instale o Visual Studio Code Python Extension</h6>\r\n<ol>\r\n<li>Abra o VSCode após a instalação.</li>\r\n<li>Vá para a seção \"Extensions\" (Extensões) no menu lateral esquerdo ou pressione Ctrl+Shift+X.</li>\r\n<li>Pesquise por \"Python\" na barra de pesquisa e clique em \"Python\" oferecido pela Microsoft. Clique em \"Install\".</li>\r\n</ol>\r\n<h6>Passo 4: Configurar o Ambiente Virtual</h6>\r\n<p>É uma prática recomendada usar ambientes virtuais para seus projetos Python. Isso isola as dependências do projeto e ajuda a manter seu ambiente limpo.</p>\r\n<p>Para isso, abra um terminal ou prompt de comando no VSCode. Depois, use o comando a seguir para criar um ambiente virtual (substitua nome_do_ambiente pelo nome que você desejar):</p>\r\n<pre><code class=\"language-shell\">python -m venv nome_do_ambiente</code></pre>\r\n<p>Para ativar o ambiente virtual no Windows:</p>\r\n<pre><code class=\"language-shell\">.\\nome_do_ambiente\\Scripts\\activate</code></pre>\r\n<p>Para ativar o ambiente virtual no macOS/Linux:</p>\r\n<pre><code class=\"language-shell\">source nome_do_ambiente/bin/activate</code></pre>\r\n<h6>Passo 5: Configurar o VSCode para Usar o Ambiente Virtual</h6>\r\n<ol>\r\n<li>No VSCode, pressione Ctrl+Shift+P para abrir a paleta de comandos.</li>\r\n<li>Digite \"Python: Select Interpreter\" e pressione Enter.</li>\r\n<li>Selecione o ambiente virtual que você criou na lista exibida. Isso garantirá que o VSCode use o interpretador Python correto para o seu projeto.</li>\r\n</ol>\r\n<h6>Passo 6: Crie ou Abra um Projeto Python</h6>\r\n<p>Agora você está pronto para criar um novo projeto Python ou abrir um existente. Crie uma nova pasta para o seu projeto ou vá até a pasta de um projeto existente. Depois, abra essa pasta no VSCode.</p>\r\n<h6>Passo 7: Escreva e Execute Código Python</h6>\r\n<p>Você pode começar a escrever código Python no VSCode. Crie um novo arquivo Python com a extensão .py e comece a programar.</p>\r\n<p>Agora você configurou com sucesso o ambiente de desenvolvimento Python no Visual Studio Code e está pronto para começar a codificar!</p>', 1),
(4, 'Hello World', '', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/Jk4kuuwLThA?si=WI038kpWI6fxRuf0\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', '<p>O \"Hello, World!\" é um ótimo começo para aprender qualquer linguagem de programação, incluindo Python. Diz a lenda que se o seu primeiro programa não for um \"Hello, World!\", você será amaldiçoado e não conseguirá aprender aquela linguagem de programação. Por isso, melhor não arriscar e começar por ele, não é mesmo? Assim sendo, vamos prosseguir com a aula.</p>\r\n<p>Aqui está uma explicação do código abaixo:</p>\r\n<ul>\r\n<li>print(): Esta é uma função incorporada do Python que é usada para imprimir texto na tela.</li>\r\n<li>\"Hello, World!\": Este é o texto que você deseja imprimir. Deve estar dentro de aspas duplas ou aspas simples para indicar que é uma string.</li>\r\n</ul>\r\n<p>Isso deverá imprimir \"Hello, World!\" na tela, indicando que seu programa Python funcionou com sucesso. Parabéns, você acabou de escrever e executar seu primeiro programa em Python!</p>\r\n<pre><code class=\"language-python\">print(\"Hello, World!\")</code></pre>', 1),
(5, 'O que é HTML?', 'https://bloomidea.com/sites/default/files/styles/og_image/public/blog/As%20vantagens%20de%20de%20desenvolver%20com%20HTML%205_0.png?itok=kL0gQc0I', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/rsFCVjr5yxc?si=I6tJwWjllZJM2OMu\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', '<p>HTML, que significa \"Hypertext Markup Language\" (Linguagem de Marcação de Hipertexto), é a linguagem padrão usada para criar páginas da web. Ela é a espinha dorsal de quase todas as páginas da web que você vê na internet. HTML é uma linguagem de marcação, o que significa que é usada para estruturar o conteúdo em uma página da web, indicando ao navegador como exibir esse conteúdo. Aqui estão alguns pontos-chave sobre HTML:</p>\r\n<ul>\r\n<li>Estruturação de Conteúdo: HTML permite que você estruture o conteúdo de uma página web em elementos como títulos, parágrafos, listas, links, imagens e muito mais. Isso é feito usando tags HTML que envolvem o conteúdo e o formatam de acordo com as instruções fornecidas pelas tags.</li>\r\n<li>Hipertexto: HTML permite a criação de links que conectam páginas e recursos da web, permitindo a navegação entre diferentes partes de um site ou entre sites diferentes. Isso é o que torna a web \"hipertextual\", pois você pode clicar em links para acessar informações relacionadas.</li>\r\n<li>Sintaxe de Marcação: HTML usa uma sintaxe de marcação comum, onde as tags são usadas para envolver elementos de conteúdo e são geralmente definidas entre \"<\" e \">\". Por exemplo, <p> é a tag usada para indicar um parágrafo e </p> fecha o parágrafo.</li>\r\n<li>Hierarquia de Elementos: Os elementos HTML podem ser aninhados dentro de outros elementos para criar uma hierarquia de conteúdo. Isso significa que você pode ter um título dentro de um parágrafo, uma lista dentro de outro elemento de lista e assim por diante.</li>\r\n<li>Compatibilidade com Navegadores: HTML é uma linguagem universalmente suportada pelos navegadores web mais populares, como Chrome, Firefox, Safari e Edge. Isso garante que as páginas da web sejam exibidas de forma consistente em diferentes dispositivos e sistemas operacionais.</li>\r\n<li>Versões do HTML: Ao longo dos anos, várias versões do HTML foram lançadas. A versão mais recente é o HTML5, que introduziu muitos recursos modernos, como vídeo e áudio incorporados, elementos semânticos e suporte para aplicativos web avançados.</li>\r\n</ul>', 2),
(6, 'História do HTML', 'https://modalgr.com.br/wp-content/uploads/2022/04/html2_modalgr-1024x575.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/NSmapCNcSyI?si=RBdvbiak6ffqszQQ\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', '<p>A história do HTML (Hypertext Markup Language) está intrinsecamente ligada ao desenvolvimento da World Wide Web (WWW). No início da década de 1990, a web estava emergindo como uma plataforma revolucionária para compartilhamento de informações. No entanto, não havia um padrão uniforme para a criação e exibição de páginas da web. Foi nesse contexto que o HTML surgiu.</p>\r\n<p>O conceito de hipertexto, que permite que documentos estejam interconectados por meio de links, já existia há algum tempo, mas o HTML trouxe uma padronização para a marcação de documentos na web. Em 1991, Tim Berners-Lee, um físico britânico, publicou a primeira especificação do HTML, que continha apenas 18 elementos de marcação. O principal objetivo era criar links hipertexto para conectar informações.</p>\r\n<p>Conforme a web crescia, a necessidade de recursos adicionais se tornava evidente. Surgiram versões subsequentes do HTML, como o HTML+ e o HTML 2.0, que introduziram elementos como tabelas, imagens e formulários. No entanto, as páginas web ainda eram predominantemente textuais.</p>\r\n<p>A virada veio com o HTML 3.0 e o HTML 3.2, que introduziram recursos mais avançados, incluindo suporte a tabelas e formulários mais sofisticados. O HTML 4.0, lançado em 1997, tentou padronizar muitas das inovações introduzidas pelos navegadores, como o Netscape Navigator e o Internet Explorer.</p>\r\n<p>Em 2000, o XHTML (Extensible Hypertext Markup Language) trouxe uma abordagem mais rigorosa à marcação, aplicando os princípios do XML (Extensible Markup Language) ao HTML. Isso incentivou a separação estrita de conteúdo e estilo, promovendo boas práticas de desenvolvimento web.</p>\r\n<p>O marco mais significativo na história do HTML foi o HTML5, lançado em 2008. Ele introduziu uma série de recursos avançados, como elementos semânticos, suporte a multimídia, gráficos vetoriais (SVG) e recursos de arrastar e soltar. O HTML5 possibilitou a criação de aplicativos web mais interativos e ricos em recursos.</p>\r\n<p>Nos anos seguintes, surgiram especificações como HTML5.1 e HTML5.2, que adicionaram melhorias e recursos adicionais à linguagem.</p>\r\n<p>O HTML continua a evoluir, e já se fala em HTML6 e além. O futuro provavelmente envolverá aprimoramentos de desempenho, acessibilidade e recursos avançados para atender às demandas da web moderna.</p>\r\n<p>Em resumo, o HTML é a linguagem fundamental da World Wide Web, uma linguagem de marcação que desempenhou um papel crucial na transformação da internet em uma plataforma rica em conteúdo e interatividade. Desde seus humildes começos até seu estado atual de sofisticação, o HTML continua sendo a base sobre a qual a web é construída.</p>', 2),
(7, 'Criando sua Primeira Página Web', '', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/yCSSsBNBzso?si=fzN4CzSSlITZz-_V\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', '<h6>Passo 1: Preparação</h6>\r\n<p>Antes de começarmos, você precisará de um editor de texto para escrever seu código HTML. Você pode usar qualquer editor de texto que preferir, como o Notepad no Windows, o Visual Studio Code, o Sublime Text ou qualquer outro editor de sua escolha.</p>\r\n<h6>Passo 2: Crie um Novo Arquivo</h6>\r\n<p>Abra seu editor de texto e crie um novo arquivo em branco. Salve-o com a extensão \".html\". Por exemplo, você pode nomeá-lo \"minha-pagina.html\".</p>\r\n<h6>Passo 3: Estrutura Básica HTML</h6>\r\n<p>Agora, vamos começar a criar a estrutura básica de uma página HTML. Copie o código do fim da página em seu arquivo.</p>\r\n<p>Este código representa a estrutura básica de uma página HTML. Aqui está o que cada parte faz:</p>\r\n<ul>\r\n<li>html: A tag html é o elemento raiz que envolve todo o conteúdo da sua página.</li>\r\n<li>head: O elemento head contém metadados sobre a página, como o título que aparece na barra de título do navegador.</li>\r\n<li>title: A tag title define o título da sua página, que é exibido na guia do navegador.</li>\r\n<li>body: O elemento body contém o conteúdo visível da sua página, como texto, imagens e links.</li>\r\n<li>h1: As tags h1 a h6 são usadas para definir cabeçalhos ou títulos. h1 é o título mais importante, e h6 é o menos importante.</li>\r\n<li>p: A tag p é usada para criar parágrafos de texto.</li>\r\n</ul>\r\n<pre><code class=\"language-html\">\r\n&lthtml&gt\r\n&lthead&gt\r\n    &lttitle&gtMinha Primeira Página&lt/title&gt\r\n&lt/head&gt\r\n&ltbody&gt\r\n    &lth1&gtOlá, Mundo!&lt/h1&gt\r\n    &ltp&gtEsta é minha primeira página web.&lt/p&gt\r\n&lt/body&gt\r\n&lt/html&gt\r\n</code></pre>', 2),
(10, 'Evolução do PHP', 'https://i.pinimg.com/564x/44/b2/27/44b2279954f09535527828650a6a2c31.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/TwNmvk-F7E8?si=pOZJx8A10nXCEsjv\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', '<p>O PHP, que originalmente significava \"Personal Home Page\" (Página Pessoal), é uma linguagem de programação amplamente utilizada para o desenvolvimento de aplicativos web. Sua evolução ao longo dos anos transformou-a em uma das linguagens mais populares e influentes da web.</p>\r\n<p>O PHP foi criado por Rasmus Lerdorf em 1994 como uma ferramenta simples para rastrear visitantes em seu site. Inicialmente, era uma linguagem interpretada que executava pequenos scripts no lado do servidor para exibir informações básicas. Com o tempo, sua funcionalidade e versatilidade foram expandidas por meio da contribuição de desenvolvedores de todo o mundo.</p>\r\n<p>Uma das principais mudanças que impulsionaram a evolução do PHP foi a introdução da interpretação orientada a objetos na versão PHP 3, lançada em 1998. Isso permitiu que os desenvolvedores escrevessem código mais estruturado e reutilizável, tornando a linguagem mais robusta e flexível.</p>\r\n<p>Outro marco significativo foi o lançamento do PHP 5 em 2004, que trouxe uma implementação mais madura da programação orientada a objetos e introduziu recursos importantes, como exceções e manipulação de XML. Isso tornou o PHP uma escolha mais atraente para o desenvolvimento de aplicativos empresariais complexos.</p>\r\n<p>Em 2015, o PHP 7 foi lançado, trazendo melhorias significativas de desempenho e eficiência em comparação com versões anteriores. O PHP 7 permitiu que os desenvolvedores criassem aplicativos web mais rápidos e escaláveis.</p>\r\n<p>Além disso, o ecossistema PHP se expandiu com o surgimento de frameworks populares, como Laravel, Symfony e CodeIgniter, que facilitaram o desenvolvimento web estruturado e eficiente. Esses frameworks simplificaram tarefas comuns, como manipulação de banco de dados, autenticação e gerenciamento de sessões.</p>\r\n<p>A comunidade de desenvolvedores PHP também desempenhou um papel vital em sua evolução, contribuindo com bibliotecas, pacotes e plugins que enriqueceram o ecossistema da linguagem.</p>\r\n<p>Hoje, o PHP é usado em milhões de sites e aplicativos em todo o mundo, desde pequenos blogs pessoais até grandes sistemas de comércio eletrônico e redes sociais. Sua evolução contínua e aprimoramentos de desempenho garantem que ele continue sendo uma escolha relevante e poderosa para o desenvolvimento web. Com a chegada das versões mais recentes, como PHP 8, a linguagem continua a se adaptar às crescentes demandas do mundo da web e a capacitar desenvolvedores a criar experiências online cada vez mais sofisticadas.</p>', 5),
(11, 'Elefante do PHP', 'https://i.pinimg.com/564x/61/7d/2e/617d2e25405ef7d872bd0d96a3e843de.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/4kSJOJEi0aQ?si=zaXSy_8EBwwLReyW\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', '<p>O elePHPant é um adorável elefante de pelúcia com um logo do PHP na sua barriga. Embora não tenha uma relação oficial com a linguagem, essa figura ganhou popularidade entre a comunidade de desenvolvedores PHP ao longo dos anos.</p>\r\n<p>Em 2006, Vincent Pontier, um desenvolvedor PHP francês, criou o elePHPant como um presente de Natal para seu amigo Damien Seguy, também um desenvolvedor PHP. O elePHPant foi concebido como uma brincadeira e não como um mascote oficial do PHP. Ele combinou a ideia de um elefante, símbolo de boa sorte em algumas culturas, com o logotipo do PHP para criar essa figura única.</p>\r\n<p>A partir desse ponto, o elePHPant começou a se tornar popular entre a comunidade PHP e foi adotado por muitos desenvolvedores como uma espécie de mascote não oficial e uma representação afetuosa da linguagem. Diversas variações do elePHPant foram criadas ao longo dos anos, com diferentes cores e estilos, tornando-o um objeto de colecionador entre os entusiastas do PHP.</p>\r\n<p>Embora o elePHPant não seja um mascote oficial do PHP, ele simboliza o espírito da comunidade de desenvolvedores PHP, que é conhecida por seu senso de humor e camaradagem. O elePHPant é frequentemente usado em eventos e conferências relacionadas ao PHP, como brindes e decorações, e é uma maneira divertida de demonstrar o amor pela linguagem de programação e pela comunidade que a rodeia.</p>', 5),
(12, 'Software requisitado', '', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/9jWACl9_k54?si=yhKpBnCEHfbL_yF9\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', '<p>Para começar a desenvolver em PHP, você precisará de um conjunto de software básico que inclui:</p>\r\n<ol>\r\n<li>Ambiente de Desenvolvimento Integrado (IDE): Embora não seja estritamente necessário, um bom IDE pode melhorar significativamente sua produtividade. Algumas opções populares para PHP incluem o PhpStorm, Visual Studio Code (com extensões PHP), NetBeans e Eclipse PDT.</li>\r\n<li>Servidor Web: Você precisará de um servidor web local para executar seus scripts PHP durante o desenvolvimento. Ferramentas como XAMPP, WampServer e MAMP (para macOS) são pacotes que incluem um servidor web (Apache), um sistema de gerenciamento de banco de dados (geralmente MySQL) e outras ferramentas úteis para o desenvolvimento web.</li>\r\n<li>PHP: Obviamente, você precisará da própria linguagem PHP. Certifique-se de ter a versão mais recente ou a que seja compatível com o projeto em que está trabalhando. Você pode instalar o PHP separadamente ou como parte dos pacotes mencionados acima, como o XAMPP.</li>\r\n<li>Banco de Dados: Se o seu projeto envolver o uso de um banco de dados, você precisará configurar e executar um sistema de gerenciamento de banco de dados compatível com PHP, como MySQL, PostgreSQL ou SQLite.</li>\r\n<li>Navegador Web: Para testar suas páginas PHP, você precisará de um navegador web. O Google Chrome, Mozilla Firefox, Microsoft Edge e outros navegadores populares são úteis para testar a saída das suas páginas PHP.</li>\r\n<li>Editor de Texto: Mesmo que você use um IDE, é sempre útil ter um bom editor de texto à mão para editar rapidamente seus arquivos PHP. Existem muitos editores disponíveis, como Notepad++ (Windows), Sublime Text, Atom e outros.</li>\r\n</ol>\r\n<p>Lembre-se de que os requisitos podem variar dependendo do projeto específico em que você está trabalhando e das ferramentas que você prefere. Portanto, é importante adaptar seu ambiente de desenvolvimento às necessidades do seu projeto e às melhores práticas recomendadas.</p>', 5),
(13, 'Visão geral do CSS', 'https://i.pinimg.com/564x/97/5d/81/975d81caf984a934dba90bfb844b88ca.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/HtVRRHoASes?si=3mXmNLjrUhulb-Ro\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', '<p>O CSS (Cascading Style Sheets) funciona em conjunto com o HTML (Hypertext Markup Language) para controlar a aparência e o estilo das páginas web. HTML é usado para estruturar o conteúdo e a semântica de uma página, enquanto o CSS é usado para definir como esse conteúdo deve ser apresentado visualmente.</p>\r\n<p>Se você quiser aprender mais sobre HTML, temos um curso aqui na plataforma!</p>\r\n<p>Agora, veremos como os dois funcionam em conjunto:</p>\r\n<p>Estrutura com HTML: Primeiramente, você cria a estrutura e o conteúdo da sua página web usando HTML. O HTML é uma linguagem de marcação que permite que você defina elementos como cabeçalhos, parágrafos, listas, imagens, links e outros elementos de conteúdo.</p>\r\n<pre><code class=\"language-html\">\r\n&lt!DOCTYPE html&gt\r\n&lthtml&gt\r\n&lthead&gt\r\n    &lttitle&gtMinha Página&lt/title&gt\r\n&lt/head&gt\r\n&ltbody&gt\r\n    &lth1&gtTítulo Principal&lt/h1&gt\r\n    &ltp&gtIsso é um parágrafo.&lt/p&gt\r\n    &ltul&gt\r\n        &ltli&gtItem 1&lt/li&gt\r\n        &ltli&gtItem 2&lt/li&gt\r\n    &lt/ul&gt\r\n&lt/body&gt\r\n&lt/html&gt\r\n</code></pre>\r\n<p>Associação de Estilos com CSS: Depois de ter a estrutura HTML básica, você pode criar um arquivo CSS separado ou incorporar estilos diretamente no HTML. O CSS define as regras de estilo que se aplicarão aos elementos HTML. Você seleciona elementos HTML usando seletores CSS e aplica propriedades de estilo a eles.</p>\r\n<pre><code class=\"language-css\">\r\n/* Estilo para o título principal */\r\nh1 {\r\n    color: blue;\r\n    font-size: 24px;\r\n}\r\n\r\n/* Estilo para parágrafos */\r\np {\r\n    font-family: Arial, sans-serif;\r\n    margin-bottom: 10px;\r\n}\r\n\r\n/* Estilo para listas não ordenadas */\r\nul {\r\n    list-style-type: square;\r\n}\r\n</code></pre>\r\n<p>Link ou Incorporação de CSS no HTML: Para que o CSS funcione com o HTML, você deve vincular o arquivo CSS externo ou incorporar o CSS diretamente no documento HTML usando a tag &ltstyle&gt.</p>\r\n<p>Exemplo de vinculação de arquivo CSS externo:</p>\r\n<pre><code class=\"language-html\">\r\n&ltlink rel=\"stylesheet\" type=\"text/css\" href=\"styles.css\"&gt\r\n</code></pre>\r\n<p>Exemplo de incorporação de CSS diretamente no HTML:</p>\r\n<pre><code class=\"language-html\">\r\n&ltstyle&gt\r\n    /* Seus estilos CSS aqui */\r\n&lt/style&gt\r\n</code></pre>\r\n<p>Renderização da Página: O navegador da web lê o HTML e o CSS associado e renderiza a página conforme as regras de estilo definidas. Isso inclui a formatação de texto, cores, tamanhos de fonte, layout de caixas, margens, preenchimentos, etc.</p>\r\n<p>Em resumo, o HTML fornece a estrutura e o conteúdo da página, enquanto o CSS define como essa estrutura deve ser estilizada e apresentada visualmente. Essa separação de conteúdo (HTML) e estilo (CSS) é fundamental para a criação de sites flexíveis, fáceis de manter e visualmente atraentes.</p>', 6),
(14, 'Tipografia', '', '', '<p>A tipografia desempenha um papel crucial na aparência e na legibilidade de um site. Ela se refere ao design e à formatação do texto em uma página web. Vamos explorar alguns conceitos importantes relacionados à tipografia em CSS.</p>\r\n<p>Fontes: O CSS permite especificar as fontes que você deseja usar em seu site. Você pode definir fontes específicas ou usar categorias genéricas, como \"serif\" (com remates), \"sans-serif\" (sem remates) ou \"monospace\" (espaçamento fixo).</p>\r\n<pre><code class=\"language-css\">body {\r\n    font-family: Arial, sans-serif;\r\n}\r\n</code></pre>\r\n<p>Tamanho da Fonte: Você pode controlar o tamanho da fonte usando a propriedade font-size. Isso pode ser definido em unidades como pixels, ems ou porcentagens.</p>\r\n<pre><code class=\"language-css\">p {\r\n    font-size: 16px;\r\n}</code></pre>\r\n<p>Espaçamento entre Linhas: O espaçamento entre linhas (leading) pode ser ajustado com a propriedade line-height. Um valor maior aumenta o espaçamento e melhora a legibilidade.</p>\r\n<pre><code class=\"language-css\">p {\r\n    line-height: 1.5;\r\n}</code></pre>\r\n<p>Estilo da Fonte: O estilo da fonte pode ser definido como \"normal,\" \"italic,\" ou \"oblique\" (inclinado).</p>\r\n<pre><code class=\"language-css\">em {\r\n    font-style: italic;\r\n}</code></pre>\r\n<p>Peso da Fonte: Você pode especificar a espessura da fonte usando a propriedade font-weight. Valores comuns incluem \"normal\" e \"bold.\"</p>\r\n<pre><code class=\"language-css\">strong {\r\n    font-weight: bold;\r\n}</code></pre>\r\n<p>Transformação de Texto: O CSS permite transformar o texto, tornando-o maiúsculo ou minúsculo.</p>\r\n<pre><code class=\"language-css\">.uppercase {\r\n    text-transform: uppercase;\r\n}\r\n\r\n.lowercase {\r\n    text-transform: lowercase;\r\n}\r\n</code></pre>\r\n<p>Decoração de Texto: Você pode adicionar ou remover decorações de texto, como sublinhado ou tachado, com a propriedade text-decoration.</p>\r\n<pre><code class=\"language-css\">a:hover {\r\n    text-decoration: underline;\r\n}\r\n</code></pre>\r\n<p>Lembre-se de que a escolha da tipografia deve ser guiada pela legibilidade e pela estética do seu site, e você pode combinar várias propriedades de CSS para criar estilos de texto únicos e atraentes.</p>', 6);

-- --------------------------------------------------------

--
-- Table structure for table `aulaconcluida`
--

CREATE TABLE `aulaconcluida` (
  `idAulaConcluida` int(11) NOT NULL,
  `idMatricula` int(11) NOT NULL,
  `idAula` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `aulaconcluida`
--

INSERT INTO `aulaconcluida` (`idAulaConcluida`, `idMatricula`, `idAula`) VALUES
(1, 1, 1),
(2, 1, 3),
(3, 4, 5),
(4, 5, 1),
(5, 5, 3),
(6, 5, 4),
(7, 6, 13);

-- --------------------------------------------------------

--
-- Table structure for table `contato`
--

CREATE TABLE `contato` (
  `idContato` int(11) NOT NULL,
  `nomeContato` varchar(50) NOT NULL,
  `emailContato` varchar(50) NOT NULL,
  `telefoneContato` varchar(20) NOT NULL,
  `assuntoContato` varchar(100) NOT NULL,
  `mensagemContato` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contato`
--

INSERT INTO `contato` (`idContato`, `nomeContato`, `emailContato`, `telefoneContato`, `assuntoContato`, `mensagemContato`) VALUES
(1, 'Maria José', 'mariajose@gmail.com', '(11) 98765-4321', 'Cursos', 'Vocês disseram que em breve a plataforma ofereceria cursos de tecnologia com certificado, onde estão? Quero saber!'),
(2, 'Monique Vitória', 'moniquemota@gmail.com', '(11) 94307-8977', 'Parceria', 'Sou CEO de uma empresa de tecnologia multimilionária. Por se tratar de um grande negócio, os senhores devem entender que o nome da nossa corporação deve se manter em anonimato. Entrem em contato e podemos conversar melhor a respeito da parceria que proponho.'),
(4, 'Hater anônimo', 'fodriguinho@gmail.com', '(11) 91234-5678', 'Minha opinião', 'Alura é melhor.'),
(5, 'Júlia', 'juju@gmail.com', '(11) 93485-7126', 'Último artigo', 'Este último artigo sobre expedições espaciais é muito cativante e informativo! Ele nos leva a uma jornada pelo mundo da exploração espacial, desde as primeiras missões até os planos futuros empolgantes. Adorei!');

-- --------------------------------------------------------

--
-- Table structure for table `curso`
--

CREATE TABLE `curso` (
  `idCurso` int(11) NOT NULL,
  `tituloCurso` varchar(200) NOT NULL,
  `profCurso` varchar(200) NOT NULL,
  `imgCurso` varchar(1000) NOT NULL,
  `nivelCurso` varchar(50) NOT NULL,
  `duracaoCurso` varchar(20) NOT NULL,
  `descricaoCurso` varchar(2000) NOT NULL,
  `numAulasCurso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `curso`
--

INSERT INTO `curso` (`idCurso`, `tituloCurso`, `profCurso`, `imgCurso`, `nivelCurso`, `duracaoCurso`, `descricaoCurso`, `numAulasCurso`) VALUES
(1, 'Introdução ao Python', 'Maria José', '../images/curso1.png', 'Iniciante', '4h', 'Este curso de Python para iniciantes é projetado para quem deseja dar os primeiros passos no mundo da programação de computadores. Python é uma linguagem de programação popular, conhecida por sua simplicidade e versatilidade, tornando-a a escolha perfeita para quem está começando a programar. O curso é perfeito para pessoas sem experiência prévia em programação, estudantes, entusiastas de tecnologia e qualquer pessoa interessada em aprender uma linguagem de programação poderosa e versátil.', 3),
(2, 'Primeiros passos com HTML', 'Monique Vitória Mota', '../images/curso2.png', 'Iniciante', '2h', 'Este curso de Fundamentos de HTML para Iniciantes é o ponto de partida perfeito para aqueles que desejam criar seus próprios sites e aprender as bases da linguagem de marcação HTML (Hypertext Markup Language). HTML é a espinha dorsal da web, e compreendê-lo é essencial para qualquer pessoa interessada em desenvolvimento web.', 3),
(5, 'Fundamentos do PHP', 'Sabrina Cristan', '../images/curso3.png', 'Iniciante', '3h', 'Este curso de introdução ao PHP é projetado para iniciantes que desejam entrar no mundo do desenvolvimento web. PHP é uma linguagem de programação amplamente usada para criar sites dinâmicos e interativos, e este curso fornecerá uma base sólida para você começar a desenvolver suas próprias aplicações web.', 3),
(6, 'CSS Principiante', 'Isabel Vitória Santos', '../images/curso4.png', 'Iniciante', '2h', 'Este curso básico de CSS é ideal para iniciantes que desejam aprender a arte da estilização de páginas web. O CSS é uma linguagem fundamental para dar estilo e formato a sites, tornando-os visualmente atraentes e funcionais. Este curso oferece uma introdução abrangente aos princípios essenciais do CSS, permitindo que você transforme suas páginas web em experiências de usuário atraentes.', 2);

-- --------------------------------------------------------

--
-- Table structure for table `matricula`
--

CREATE TABLE `matricula` (
  `idMatricula` int(11) NOT NULL,
  `progresso` decimal(10,0) NOT NULL,
  `dataMatricula` date NOT NULL DEFAULT current_timestamp(),
  `idCurso` int(11) NOT NULL,
  `idRegistro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `matricula`
--

INSERT INTO `matricula` (`idMatricula`, `progresso`, `dataMatricula`, `idCurso`, `idRegistro`) VALUES
(1, '0', '2023-09-09', 1, 4),
(4, '0', '2023-09-09', 2, 4),
(6, '0', '2023-09-10', 6, 10);

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
('#1a1a1a', 'dark', '../images/logo-dark.png', 'white', 'white');

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
('#FFF', 'light', '../images/logo.png', '#0E6EFC', 'black');

-- --------------------------------------------------------

--
-- Table structure for table `noticia`
--

CREATE TABLE `noticia` (
  `idNoticia` int(11) NOT NULL,
  `tituloNoticia` varchar(50) NOT NULL,
  `autorNoticia` varchar(50) NOT NULL,
  `imagemNoticia` varchar(1000) NOT NULL,
  `resumoNoticia` varchar(2000) NOT NULL,
  `textoNoticia` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `noticia`
--

INSERT INTO `noticia` (`idNoticia`, `tituloNoticia`, `autorNoticia`, `imagemNoticia`, `resumoNoticia`, `textoNoticia`) VALUES
(2, 'A internet como escape da realidade', 'Sabrina Cristan', 'https://i.pinimg.com/564x/c1/f1/98/c1f198c3e3a8a1aff8f93e1caade19d0.jpg', 'Neste texto, exploraremos os aspectos do vício na internet como uma fuga da realidade.', '<h5>O vício na internet</h5>\r\n<p> Nos últimos anos, testemunhamos uma revolução tecnológica que transformou a forma como interagimos com o mundo. A internet, em particular, desempenhou um papel significativo em nossas vidas, proporcionando acesso ilimitado a informações, comunicação instantânea e entretenimento sem fim. No entanto, com essas vantagens também surgiram desafios, e um deles é o vício na internet. Para alguns, a internet se tornou um refúgio da realidade, oferecendo uma fuga temporária das pressões e dificuldades do mundo real.</p>\r\n<h5>Atrativos da internet como escape</h5>\r\n<p> Plataformas como Facebook, Instagram e Twitter oferecem a sensação de pertencimento e conexão social, permitindo que as pessoas criem e mantenham relacionamentos virtuais. Essas interações online podem se tornar uma forma de escapismo, substituindo o contato pessoal e a intimidade.</p>\r\n<p> Os jogos online e a realidade virtual proporcionam uma experiência imersiva e cativante, permitindo que os usuários se envolvam em mundos virtuais onde podem assumir identidades e papéis diferentes. Essa fuga da realidade pode ser particularmente atraente para aqueles que buscam evitar os desafios da vida cotidiana.</p>\r\n<p> A internet oferece um vasto catálogo de filmes, séries, vídeos e música, disponíveis a qualquer momento e em qualquer lugar. Essas formas de entretenimento podem servir como uma maneira conveniente de escapar dos problemas e preocupações da vida real.</p>\r\n<br>\r\n<p> Embora a internet tenha se tornado uma ferramenta essencial e benéfica em muitos aspectos, é importante reconhecer os perigos do vício na internet como escape da realidade. É necessário buscar um equilíbrio saudável entre o mundo virtual e o mundo real, reservando tempo para interações pessoais, atividades físicas e enfrentamento adequado dos desafios. A conscientização sobre os efeitos negativos do vício na internet e a busca por ajuda profissional quando necessário podem ajudar a mitigar os impactos negativos e a recuperar um senso de equilíbrio entre o mundo digital.</p>'),
(3, 'Qual é o seu tipo favorito de café?', 'Isabel Vitória', 'https://i.pinimg.com/564x/20/7c/23/207c2399e38fb02cef05675d837f0318.jpg', 'Existem diversos tipos de café ao redor do mundo, cada um com suas características únicas de sabor, aroma e preparo.', '<p> O café é uma das bebidas mais populares e apreciadas em todo o mundo. Com sua rica história e aroma inconfundível, o café se tornou uma parte essencial do cotidiano de milhões de pessoas. Abaixo, apresento alguns dos tipos de café mais populares:</p>\r\n<p> <b>Café Arábica</b>: É uma das espécies mais cultivadas e apreciadas em todo o mundo. Os grãos de café arábica têm sabor suave, aroma delicado e uma acidez equilibrada. É geralmente considerado de alta qualidade e é usado como base para muitas bebidas de café.</p>\r\n<p> <b>Café Robusta</b>: Outra espécie amplamente cultivada, o café robusta possui um sabor mais forte e amargo em comparação ao café arábica. É frequentemente usado na produção de blends de café, bem como em bebidas de café instantâneo devido à sua alta cafeína e menor custo.</p>\r\n<p> <b>Café Espresso</b>: Originário da Itália, o café espresso é preparado através da passagem de água quente sob pressão através de uma pequena quantidade de café moído finamente. O resultado é uma bebida concentrada, com sabor intenso e encorpado. É a base para muitas outras bebidas populares, como cappuccino, latte e macchiato.</p>\r\n<p> <b>Café Latte</b>: Feito com uma combinação de café espresso e leite vaporizado, o café latte é uma bebida cremosa e suave. Geralmente é servido em um copo alto e pode ser adoçado com xaropes saborizados, como baunilha ou caramelo.</p>\r\n<p> <b>Cappuccino</b>: Uma bebida clássica e popular, o cappuccino consiste em partes iguais de café espresso, leite vaporizado e espuma de leite. É comumente polvilhado com chocolate em pó ou canela. O cappuccino possui um equilíbrio entre o sabor do café e a cremosidade do leite.</p>\r\n<p> <b>Café Americano</b>: O café americano é uma bebida diluída feita adicionando água quente ao café espresso, criando uma bebida mais suave e menos concentrada. É semelhante ao café filtrado, mas com um sabor mais encorpado devido à preparação com café espresso.</p>\r\n<p> <b>Café Cold Brew</b>: O café cold brew é uma bebida que ganhou popularidade nos últimos anos. É preparado mergulhando grãos de café moídos em água fria por um longo período de tempo, geralmente de 12 a 24 horas. O resultado é uma bebida suave, com menos acidez e um sabor mais doce em comparação ao café tradicional.</p>\r\n<br>\r\n<p> Esses são apenas alguns exemplos dos tipos de café mais comuns, mas há uma infinidade de variações e métodos de preparo, permitindo que você explore diferentes sabores e experiências de acordo com suas preferências pessoais.</p>'),
(4, 'OBR: Estimulando a criatividade e a inovação', 'Monique Vitória', 'https://www.speedgoat.com/Portals/0/adam/Content/aDHBf5ROvEGtEZ1ZC5cLIQ/Image/Research_C_5_shutterstock_1071703298.jpg?w=690&h=450&quality=70&mode=crop&scale=both', 'Conheça a Olímpiada Brasileira de Robótica, uma competição que promove o interesse pela ciência.', '<p> A robótica tem conquistado cada vez mais espaço na sociedade moderna, desempenhando um papel fundamental no avanço da tecnologia e no desenvolvimento de soluções inovadoras. Nesse contexto, a Olimpíada Brasileira de Robótica (OBR) surge como uma competição nacional que promove o interesse pela ciência, tecnologia, engenharia e matemática (STEM) e estimula a criatividade e a inovação entre estudantes de todo o país.</p>\r\n<p> A OBR tem como objetivo principal difundir a robótica educacional no Brasil, estimulando o interesse dos estudantes pela ciência e tecnologia. A competição busca promover o aprendizado interdisciplinar, o trabalho em equipe, o raciocínio lógico e a resolução de problemas práticos por meio da construção e programação de robôs.</p>\r\n<p> A OBR é composta por diferentes modalidades que atendem a diferentes faixas etárias e níveis de conhecimento, como a prática, que envolve a construção de robôs autônomos para cumprir desafios específicos, e a teórica, que abrange questões teóricas e conceituais sobre robótica.</p>\r\n<p> A competição desperta a curiosidade e o interesse dos estudantes pelas áreas de ciência, tecnologia, engenharia e matemática. Ao envolver-se na construção e programação de robôs, os participantes têm a oportunidade de explorar conceitos teóricos de forma prática e concreta.</p>'),
(5, 'A realidade é virtual?', 'Monique Vitória', 'https://i.pinimg.com/564x/8f/d9/ac/8fd9ac9611d1f074840808a781f0eb87.jpg', 'Desde a popularização da ficção científica, nos questionamos sobre a realidade e se há a possibilidade de estarmos vivendo em um mundo virtual, semelhante ao retratado no filme \"Matrix\".', '<h5>A Hipótese da Realidade Simulada</h5>\r\n<p> À medida que avançamos em tecnologia e capacidade computacional, é possível conceber a criação de simulações cada vez mais complexas e realistas. Se a tecnologia humana é capaz de criar simulações virtuais convincentes, por que não seria possível que uma civilização mais avançada fizesse o mesmo em relação à nossa realidade?</p>\r\n<p> O filósofo Nick Bostrom propôs a ideia de que, se uma civilização tecnologicamente avançada existir e tiver interesse em criar simulações, é mais provável que estejamos vivendo em uma delas do que em uma realidade \"base\". Isso se baseia no pressuposto de que haveria um número infinito de simulações possíveis em comparação com apenas uma realidade original.</p>\r\n<h5>Evidências e Argumentos a Favor</h5>\r\n<p> Nossa percepção do mundo é baseada em nossos sentidos, que podem ser enganados. Experiências como realidade virtual já demonstraram a capacidade de alterar a percepção e criar ilusões convincentes. Isso levanta a questão de até que ponto podemos confiar em nossos sentidos para determinar a verdadeira natureza da realidade.</p>\r\n<p> Alguns argumentam que certas inconsistências e peculiaridades em teorias físicas e matemáticas fundamentais, como a natureza quântica da realidade, podem ser indicativos de uma construção simulada em nível fundamental.</p>\r\n<h5>Limitações e Ceticismo</h5>\r\n<p> Apesar dos argumentos e das especulações, até o momento não temos evidências sólidas que comprovem definitivamente que estamos em uma simulação virtual.</p>\r\n<p> Criar uma simulação tão complexa e detalhada quanto nossa realidade exigiria uma quantidade colossal de recursos computacionais e conhecimento científico extremamente avançado. Seria difícil conceber como uma civilização poderia alcançar esse nível de capacidade.</p>\r\n<br>\r\n<p> A ideia de estarmos vivendo em uma realidade virtual é fascinante e instigante. Embora haja argumentos e especulações a favor dessa possibilidade, ainda não temos provas concretas para confirmá-la. No entanto, a discussão em torno desse conceito nos convida a refletir sobre a natureza da nossa existência e a questionar a realidade que nos cerca. Independentemente de estarmos ou não em uma simulação virtual, nossa busca por conhecimento e pela compreensão da realidade continuará a moldar nossa compreensão do mundo ao nosso redor.</p>'),
(6, 'As cidades do futuro', 'Isabel Vitória', 'https://i.pinimg.com/564x/d9/0e/4d/d90e4d85cad79bec1d9da30000a64883.jpg', 'Neste artigo, exploraremos as principais características e tendências que moldam as cidades do futuro.', '<h5>Sustentabilidade e Eficiência Energética</h5>\r\n<p> As cidades do futuro são projetadas para aproveitar ao máximo as fontes de energia renováveis, como energia solar, eólica e geotérmica. Isso reduzirá a dependência de combustíveis fósseis e diminuirá as emissões de gases de efeito estufa.</p>\r\n<p> Os prédios serão construídos com materiais sustentáveis e eficientes do ponto de vista energético, integrando tecnologias como isolamento térmico, sistemas de captação de água da chuva e telhados verdes.</p>\r\n<p> As cidades do futuro promoverão o uso de transporte público eficiente, como ônibus elétricos e sistemas de metrô. Além disso, haverá incentivos para a utilização de meios de transporte não poluentes, como bicicletas e veículos elétricos.</p>\r\n<h5>Tecnologia e Inovação</h5>\r\n<p> As cidades serão equipadas com sensores e sistemas de monitoramento que coletarão dados em tempo real para otimizar o uso de recursos, como energia e água, além de melhorar a segurança pública e a gestão de resíduos.</p>\r\n<p> O uso de tecnologias de mobilidade inteligente, como veículos autônomos e aplicativos de compartilhamento de transporte, facilitará o deslocamento dos habitantes, reduzindo congestionamentos e emissões de poluentes.</p>\r\n<h5>Planejamento Urbano e Qualidade de Vida</h5>\r\n<p> O planejamento urbano será orientado por abordagens integradas que consideram fatores como transporte, habitação, trabalho e serviços, buscando criar comunidades mais equilibradas e acessíveis.</p>\r\n<p> As cidades do futuro incentivarão a participação ativa dos cidadãos na tomada de decisões, por meio de plataformas digitais e consultas públicas, para garantir que as necessidades e preferências da comunidade sejam atendidas.</p>\r\n<br>\r\n<p> As cidades do futuro representam uma visão promissora de espaços urbanos sustentáveis, inovadores e orientados para a melhoria da qualidade de vida dos habitantes. Com a aplicação de soluções tecnológicas, o planejamento urbano adequado e a busca por uma abordagem mais sustentável, podemos criar ambientes urbanos que sejam resilientes, eficientes e agradáveis de se viver. À medida que avançamos, é essencial que governos, empresas e cidadãos colaborem para tornar essa visão uma realidade, moldando um futuro urbano que beneficie a todos.</p>'),
(7, 'A carreira de designer digital', 'Sabrina Cristan', 'https://i.pinimg.com/564x/44/1d/2e/441d2ebd65a8cc4eaf9d610a9c1f0cc7.jpg', 'Neste texto, vamos explorar essa carreira fascinante, discutir suas principais responsabilidades e perspectivas de futuro.', '<p>O designer digital é responsável por projetar e desenvolver elementos visuais e interativos para plataformas digitais, como websites, aplicativos móveis, interfaces de usuário, jogos, realidade virtual e muito mais. Sua função é criar experiências que sejam esteticamente agradáveis, funcionais e intuitivas para o usuário final. Para isso, eles precisam dominar uma variedade de ferramentas e tecnologias, além de acompanhar as últimas tendências e melhores práticas no design digital.</p>\r\n<p>Uma das habilidades fundamentais de um designer digital é a capacidade de traduzir conceitos e ideias em soluções visuais atraentes. Isso envolve o uso de princípios de design, como layout, tipografia, cores, hierarquia visual e composição, para criar interfaces claras e visualmente atraentes. Além disso, o designer digital também precisa entender a experiência do usuário e se envolver em processos de pesquisa e testes para garantir que suas criações atendam às necessidades e expectativas dos usuários.</p>\r\n<p>No ambiente de trabalho, o designer digital geralmente colabora com uma equipe multidisciplinar, incluindo desenvolvedores, especialistas em UX/UI (Experiência do Usuário/Interface do Usuário) e gerentes de projetos. Essa colaboração é fundamental para garantir a integração harmoniosa entre design e funcionalidade, resultando em produtos digitais de alta qualidade.</p>\r\n<p>Além das habilidades técnicas, o designer digital também precisa ser um pensador criativo e inovador. O campo do design digital está em constante evolução, e novas tecnologias e tendências emergem regularmente. Para se destacar nessa carreira, é importante estar atualizado e ser capaz de explorar novas ideias e abordagens criativas para resolver problemas de design.</p>\r\n<p>Quanto às perspectivas de futuro, a carreira de designer digital está em constante crescimento. Com a crescente demanda por soluções digitais, as empresas estão cada vez mais valorizando profissionais qualificados nessa área. Além disso, a evolução da tecnologia, como inteligência artificial, realidade virtual/aumentada e internet das coisas, abre novas oportunidades e desafios para os designers digitais explorarem.</p>\r\n<p>Em resumo, a carreira de designer digital oferece um campo de atuação emocionante e recompensador para aqueles que são apaixonados por design e tecnologia. Ao unir habilidades criativas com conhecimentos técnicos, os designers digitais têm o poder de transformar o mundo digital, criando experiências memoráveis e impactantes para os usuários. Se você é uma pessoa criativa, orientada para a tecnologia e apaixonada por design, essa pode ser a carreira perfeita para você explorar e se destacar.</p>'),
(12, 'Rompendo as barreiras temporais', 'Sabrina Cristan', 'https://i.pinimg.com/564x/86/ed/82/86ed8246db980a48e812e1c3298dcb74.jpg', 'Neste artigo, exploraremos a possibilidade de o tempo não ser linear, abordando teorias científicas, concepções filosóficas e as implicações dessa perspectiva.', '<p>Desde os primórdios da humanidade, o conceito de tempo tem sido uma constante na nossa compreensão do mundo. No entanto, à medida que a ciência avança e as teorias sobre o universo se expandem, surgem questionamentos cada vez mais intrigantes sobre a natureza do tempo.</p>\r\n<h5>A Concepção Linear do Tempo</h5>\r\n<p>A maioria de nós cresceu com a ideia de que o tempo é uma linha reta, onde o passado precede o presente, e este precede o futuro. Essa visão linear do tempo é uma parte fundamental de como percebemos a realidade.</p>\r\n<p>A concepção linear está ligada à ideia de uma \"flecha do tempo\", onde eventos ocorrem em uma sequência irreversível, avançando do passado para o futuro.</p>\r\n<h5>A Relatividade e a Curvatura do Tempo</h5>\r\n<p>A teoria da relatividade de Einstein mostrou que o tempo não é absoluto, mas sim relativo à velocidade e à gravidade. Isso significa que o tempo pode passar mais devagar ou mais rápido em diferentes pontos do espaço.</p>\r\n<p>A gravidade curva o espaço-tempo, criando uma relação entre espaço e tempo. Essa curvatura pode influenciar a forma como percebemos o tempo e sua linearidade.</p>\r\n<h5>Teorias Não Lineares do Tempo</h5>\r\n<p>De acordo com a teoria dos mundos paralelos, múltiplos universos existem em simultâneo, cada um com sua própria linha temporal. Isso implica na existência de realidades não lineares.</p>\r\n<p>Alguns físicos teorizam que o tempo pode ser cíclico, onde eventos se repetem em um ciclo infinito. Essa concepção não linear desafia a ideia de uma linha reta temporal.</p>\r\n<p>A possibilidade de um tempo não linear desafia nossas percepções fundamentais e expande as fronteiras do conhecimento humano. Enquanto as teorias científicas continuam a evoluir, a questão da natureza do tempo permanece em aberto. Independentemente da resposta, a exploração dessas possibilidades nos convida a reconsiderar nossas concepções sobre o mundo e a abraçar a complexidade que envolve a nossa compreensão do tempo.</p>'),
(13, 'Na busca pelo desconhecido', 'Monique Vitória', 'https://i.pinimg.com/564x/d0/71/0a/d0710a3e2f2abd00d1f3fb16707fe572.jpg', 'Neste artigo, mergulharemos nas diferentes perspectivas e abordagens para a busca por alienígenas, enquanto nos perguntamos: estamos sozinhos no universo?', '<h5>A Busca Científica por Vida Extraterrestre</h5>\r\n<p>A descoberta de milhares de exoplanetas (planetas fora do nosso sistema solar) trouxe à tona a possibilidade de existência de mundos semelhantes à Terra, onde as condições para a vida podem estar presentes.</p>\r\n<p>A busca por vida extraterrestre foca especialmente na \"zona habitável\" de um sistema planetário, onde as condições de temperatura permitiriam a existência de água líquida, um elemento vital para a vida como a conhecemos.</p>\r\n<h5>O Paradoxo de Fermi e a Teoria da Grande Filtro</h5>\r\n<p>Se há tantas estrelas e possíveis planetas habitáveis na galáxia, por que não encontramos evidências de civilizações extraterrestres? Essa questão é conhecida como o Paradoxo de Fermi.</p>\r\n<p>Algumas teorias sugerem que existe um \"filtro\" no caminho da evolução de uma civilização, seja em estágios iniciais ou avançados. Isso poderia explicar a aparente ausência de contatos.</p>\r\n<h5>Sinais e Evidências</h5>\r\n<p>A busca por comunicações alienígenas inclui a observação de sinais de rádio vindos do espaço. Iniciativas como o Projeto SETI (Search for Extraterrestrial Intelligence) buscam identificar padrões que possam ser originados por outras civilizações.</p>\r\n<p>Relatos de avistamentos de OVNIs (objetos voadores não identificados) e encontros com seres alienígenas têm sido um tema recorrente na cultura popular. Esses relatos variam de experiências verídicas a mitos urbanos.</p>\r\n<h5>A Cultura Popular e a Imagem dos Alienígenas</h5>\r\n<p>A cultura popular moldou a imagem dos alienígenas como seres humanoides de cabeças grandes e olhos grandes. Isso reflete tanto a imaginação quanto a influência da mídia em nossas percepções.</p>\r\n<p>As histórias sobre alienígenas influenciam a forma como pensamos sobre o desconhecido, o futuro da humanidade e nosso lugar no cosmos.</p>\r\n<br>\r\n<p>A busca por vida extraterrestre é um empreendimento complexo e multifacetado, envolvendo tanto a ciência quanto a imaginação. Embora ainda não tenhamos encontrado evidências conclusivas de civilizações alienígenas, a exploração do fenômeno alienígena continua a inspirar a ciência, a cultura e a criatividade humana. A questão sobre a existência de alienígenas permanece em aberto, mas a jornada para descobrir a verdade e explorar o desconhecido é, em si, uma aventura digna de nossa busca incessante por respostas.</p>'),
(14, 'Alimentando o conhecimento', 'Isabel Vitória', 'https://i.pinimg.com/564x/dc/d4/7f/dcd47fbe79d3f2701f3bdf3769a429f5.jpg', 'ETEC de Guaianazes dá um passo significativo ao introduzir um programa de merenda escolar.', '<h5>Nutrição para o Sucesso</h5>\r\n<p>A merenda escolar é mais do que uma refeição; é um investimento no sucesso educacional dos alunos. Estudos mostram que a alimentação adequada afeta diretamente o desempenho cognitivo, a concentração e a capacidade de aprendizado. Ao oferecer uma merenda escolar balanceada, a ETEC de Guaianazes contribui para criar um ambiente que promove a excelência acadêmica.</p>\r\n<h5>Combate à Fome e Melhoria da Atenção</h5>\r\n<p>Para muitos alunos, a jornada escolar pode ser longa e desgastante. A falta de alimentação adequada pode resultar em fome, que, por sua vez, afeta a capacidade de concentração e aprendizado. Com a merenda escolar, a escola garante que os alunos tenham a energia necessária para enfrentar os desafios acadêmicos e extracurriculares.</p>\r\n<h5>Promovendo Hábitos Alimentares Saudáveis</h5>\r\n<p>A educação não se limita à sala de aula; também envolve a formação de hábitos saudáveis que durarão por toda a vida. Ao expor os alunos a refeições equilibradas desde cedo, a ETEC de Guaianazes contribui para a formação de hábitos alimentares saudáveis que poderão beneficiar a saúde deles no futuro.</p>\r\n<h5>Inclusão e Igualdade de Oportunidades</h5>\r\n<p>A disponibilidade de uma merenda escolar também pode desempenhar um papel importante na promoção da igualdade de oportunidades. Para muitos estudantes, a merenda escolar pode ser a única refeição adequada do dia. Ao oferecer essa refeição, a escola está contribuindo para garantir que todos os alunos tenham acesso a uma educação de qualidade, independentemente de suas circunstâncias financeiras.</p>\r\n<h5>Promovendo um Ambiente Positivo</h5>\r\n<p>A introdução da merenda escolar não é apenas sobre nutrição física; é sobre promover um ambiente positivo e favorável ao aprendizado. A hora da refeição pode ser um momento para os alunos relaxarem, interagirem com seus colegas e recarregarem suas energias para o restante do dia escolar.</p>\r\n<br>\r\n<p>A decisão da ETEC de Guaianazes de introduzir a merenda escolar é um testemunho do compromisso da escola com o bem-estar e o sucesso acadêmico de seus alunos. Essa iniciativa não apenas atende às necessidades nutricionais dos estudantes, mas também reflete a compreensão de que uma educação de qualidade abrange vários aspectos da vida dos alunos. Ao fornecer uma alimentação adequada, a ETEC de Guaianazes está investindo no crescimento intelectual e no futuro de seus alunos.</p>'),
(15, 'Programa de intercâmbio da ETEC', 'Sabrina Cristan', 'https://i.pinimg.com/564x/09/b8/05/09b805954a27322a9a47ec2726cb696a.jpg', 'Vamos explorar como o programa não apenas enriquece a educação dos alunos, mas também os prepara para um mundo cada vez mais interconectado.', '<h5>Uma Janela para o Mundo</h5>\r\n<p>O programa de intercâmbio da ETEC é uma oportunidade única para os alunos mergulharem em culturas diferentes, explorarem novos ambientes e expandirem seus horizontes. Ao participar de um intercâmbio, os estudantes não apenas aprendem sobre um novo país, mas também sobre si mesmos, suas capacidades de adaptação e sua capacidade de lidar com desafios.</p>\r\n<h5>Aprendizado Além das Fronteiras</h5>\r\n<p>O programa de intercâmbio oferece uma abordagem de aprendizado que vai além das aulas tradicionais. Os alunos têm a oportunidade de vivenciar sistemas educacionais diferentes, o que os ajuda a desenvolver uma compreensão mais profunda das abordagens pedagógicas e a ganhar uma nova perspectiva sobre as áreas de estudo que estão explorando.</p>\r\n<h5>Crescimento Pessoal e Cultural</h5>\r\n<p>O intercâmbio é uma oportunidade de crescimento pessoal e cultural. Os alunos vivenciam a vida cotidiana em um ambiente estrangeiro, o que os ajuda a desenvolver habilidades de comunicação, resiliência e empatia. Eles aprendem a compreender e apreciar as diferenças culturais, enriquecendo assim sua própria identidade.</p>\r\n<h5>Aprimoramento das Habilidades Linguísticas</h5>\r\n<p>Uma das vantagens mais valiosas do programa de intercâmbio é a melhoria das habilidades linguísticas. Os alunos são imersos em um ambiente onde o idioma local é falado, o que acelera o aprendizado da língua e aumenta a confiança na comunicação em situações do dia a dia.</p>\r\n<h5>Construindo Relações Internacionais</h5>\r\n<p>O programa de intercâmbio não se trata apenas de estudar em outro país, mas também de construir conexões globais. Os alunos têm a oportunidade de fazer amizades duradouras com estudantes de todo o mundo, expandindo sua rede de contatos e estabelecendo relacionamentos que podem ser valiosos em suas futuras carreiras.</p>\r\n<h5>Preparando para o Futuro Global</h5>\r\n<p>Em um mundo cada vez mais globalizado, a capacidade de compreender e colaborar com indivíduos de diferentes culturas é essencial. O programa de intercâmbio da ETEC prepara os alunos para enfrentar os desafios e oportunidades desse ambiente diversificado, desenvolvendo habilidades de pensamento crítico, respeito cultural e adaptabilidade.</p>'),
(16, 'Além dos Limites Terrestres', 'Monique Vitória', 'https://i.pinimg.com/564x/4d/e6/ea/4de6eac037442e99a886944ef40b0117.jpg', 'A exploração espacial sempre cativou a imaginação humana, inspirando avanços científicos e tecnológicos que transformaram a forma como compreendemos o universo.', '<h5>A Corrida Espacial</h5>\r\n<p>As expedições espaciais têm suas raízes na histórica corrida espacial entre Estados Unidos e União Soviética durante a Guerra Fria. O lançamento do Sputnik 1 em 1957 marcou o início da exploração espacial humana, culminando com a Apollo 11 em 1969, quando a humanidade pisou na Lua pela primeira vez. Esses feitos históricos não apenas demonstraram o poder da tecnologia, mas também destacaram a capacidade da colaboração humana em direção a objetivos audaciosos.</p>\r\n<h5>A Exploração Robótica</h5>\r\n<p>Além das missões tripuladas, a exploração espacial também envolve sondas e robôs que nos permitem explorar lugares distantes sem colocar vidas humanas em risco. Missões como a Voyager e as sondas Mars rovers revelaram detalhes fascinantes sobre planetas, luas e até mesmo o espaço interestelar, ampliando nosso entendimento sobre o cosmos e a possibilidade de vida extraterrestre.</p>\r\n<h5>A Era Internacional da Estação Espacial</h5>\r\n<p>A Estação Espacial Internacional (ISS) é uma maravilha tecnológica que representa a cooperação internacional em um nível sem precedentes. Esta plataforma de pesquisa tem sido crucial para o estudo de efeitos da microgravidade no corpo humano, a pesquisa de materiais em ambientes espaciais e a observação da Terra a partir de uma perspectiva única.</p>\r\n<h5>Exploração Futura</h5>\r\n<p>As expedições espaciais não estão limitadas ao passado e ao presente; há planos ambiciosos para o futuro. Missões para Marte, como a NASA´s Artemis e projetos de colonização lunar, além de explorações de asteroides, são exemplos de como a exploração espacial continua evoluindo. Com o desenvolvimento de tecnologias inovadoras, como foguetes reutilizáveis e sistemas de propulsão avançados, o espaço está mais acessível do que nunca.</p>\r\n<h5>Impactos na Terra e Além</h5>\r\n<p>As expedições espaciais não apenas ampliaram nossos horizontes cósmicos, mas também trouxeram benefícios tangíveis para a vida na Terra. Tecnologias desenvolvidas para o espaço, como GPS, materiais avançados e sistemas de purificação de água, têm aplicações diretas em nosso cotidiano. Além disso, a exploração espacial estimula o interesse pela ciência, tecnologia, engenharia e matemática (STEM), inspirando gerações futuras de cientistas e exploradores.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `registrado`
--

CREATE TABLE `registrado` (
  `idRegistro` int(11) NOT NULL,
  `nomeRegistro` varchar(200) NOT NULL,
  `sobrenomeRegistro` varchar(200) NOT NULL,
  `emailRegistro` varchar(300) NOT NULL,
  `dataNascRegistro` date NOT NULL,
  `sexoRegistro` varchar(20) NOT NULL,
  `senhaRegistro` varchar(100) NOT NULL,
  `imagemRegistro` varchar(1000) NOT NULL DEFAULT '../images/perfil.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registrado`
--

INSERT INTO `registrado` (`idRegistro`, `nomeRegistro`, `sobrenomeRegistro`, `emailRegistro`, `dataNascRegistro`, `sexoRegistro`, `senhaRegistro`, `imagemRegistro`) VALUES
(2, 'Monique Vitória', 'Mota', 'moniquemota@gmail.com', '2006-05-24', 'Feminino', 'momo123', 'https://i.pinimg.com/564x/43/ef/34/43ef34791a7a622575dc10855a0e8de2.jpg'),
(3, 'Isabel Vitória', 'Santos', 'isinha@gmail.com', '2006-04-02', 'Feminino', 'isa123', 'https://i.pinimg.com/564x/01/cb/9a/01cb9a66c3a79a2942eadba489190b9c.jpg'),
(4, 'Sabrina', 'Cristan', 'sabrina@gmail.com', '2006-07-13', 'Feminino', 'sasa123', 'https://i.pinimg.com/564x/c9/b1/f8/c9b1f81c9caed813a262fbd9a5677a7d.jpg'),
(6, 'Ludimyla', 'Brito', 'ludi@yahoo.com.br', '2006-12-31', 'Feminino', 'ludi123', 'https://i.pinimg.com/564x/77/53/74/77537402bbcc2843160a06e640c21541.jpg'),
(7, 'Larissa', 'Matos', 'larissinha@hotmail.com', '2006-08-17', 'Feminino', 'lari123', 'https://i.pinimg.com/564x/58/b9/12/58b91260ecded995375ade229e2ac1d0.jpg'),
(8, 'Dandara', 'Ramos', 'danda@gmail.com', '2006-05-20', 'Feminino', 'dan123', 'https://i.pinimg.com/564x/27/9f/ae/279fae3207e0f7fd5e6b8ecd4c7bffbc.jpg'),
(9, 'Karina', 'Ferreira', 'kari@gmail.com.br', '1998-04-02', 'Feminino', 'ka123', 'https://i.pinimg.com/564x/91/c5/ef/91c5efd4390552859ebd00217e8d5ed4.jpg'),
(10, 'Maria', 'José', 'mariajose@gmail.com', '2004-02-29', 'Feminino', 'maria123', 'https://i.pinimg.com/564x/08/dc/e9/08dce9f79ff0aa5bde98a110bf01785a.jpg'),
(11, 'Fodrigo', 'Raro', 'fodriguinho@gmail.com', '1973-10-20', 'Masculino', 'raro123', 'https://tvnewsbrasilcom.files.wordpress.com/2018/01/images-9.jpeg');

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
(10, 'Maria', 'José', 'mariajose@gmail.com', '2004-02-29', 'Feminino', 'maria123', 'https://i.pinimg.com/564x/08/dc/e9/08dce9f79ff0aa5bde98a110bf01785a.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aula`
--
ALTER TABLE `aula`
  ADD PRIMARY KEY (`idAula`);

--
-- Indexes for table `aulaconcluida`
--
ALTER TABLE `aulaconcluida`
  ADD PRIMARY KEY (`idAulaConcluida`);

--
-- Indexes for table `contato`
--
ALTER TABLE `contato`
  ADD PRIMARY KEY (`idContato`);

--
-- Indexes for table `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`idCurso`);

--
-- Indexes for table `matricula`
--
ALTER TABLE `matricula`
  ADD PRIMARY KEY (`idMatricula`);

--
-- Indexes for table `noticia`
--
ALTER TABLE `noticia`
  ADD PRIMARY KEY (`idNoticia`);

--
-- Indexes for table `registrado`
--
ALTER TABLE `registrado`
  ADD PRIMARY KEY (`idRegistro`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aula`
--
ALTER TABLE `aula`
  MODIFY `idAula` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `aulaconcluida`
--
ALTER TABLE `aulaconcluida`
  MODIFY `idAulaConcluida` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contato`
--
ALTER TABLE `contato`
  MODIFY `idContato` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `curso`
--
ALTER TABLE `curso`
  MODIFY `idCurso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `matricula`
--
ALTER TABLE `matricula`
  MODIFY `idMatricula` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `noticia`
--
ALTER TABLE `noticia`
  MODIFY `idNoticia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `registrado`
--
ALTER TABLE `registrado`
  MODIFY `idRegistro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
