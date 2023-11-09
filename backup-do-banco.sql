/*
SQLyog Community v13.2.0 (64 bit)
MySQL - 11.1.2-MariaDB : Database - juventudemaromba
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`juventudemaromba` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */;

USE `juventudemaromba`;

/*Table structure for table `estimulo_muscular` */

DROP TABLE IF EXISTS `estimulo_muscular`;

CREATE TABLE `estimulo_muscular` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_exercicio` int(11) NOT NULL,
  `id_musculo` int(11) NOT NULL,
  `nivel` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_exercicio_estimulo_muscular` (`id_exercicio`),
  KEY `fk_musculo_estimulo_muscular` (`id_musculo`),
  CONSTRAINT `fk_exercicio_estimulo_muscular` FOREIGN KEY (`id_exercicio`) REFERENCES `exercicio` (`id`),
  CONSTRAINT `fk_musculo_estimulo_muscular` FOREIGN KEY (`id_musculo`) REFERENCES `musculo_alvo` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `estimulo_muscular` */

/*Table structure for table `exercicio` */

DROP TABLE IF EXISTS `exercicio`;

CREATE TABLE `exercicio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `imagem` varchar(1000) DEFAULT NULL,
  `descricao` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `exercicio` */

insert  into `exercicio`(`id`,`nome`,`imagem`,`descricao`) values 
(1,Elevação Lateral,/img/imagem/elevacaolateral.png,A elevação lateral com halter é um exercício para fortalecer os músculos dos ombros. Para executá-lo, fique em pé com os pés afastados na largura dos ombros, segure um halter em cada mão e levante os halteres lentamente para os lados até que os braços estejam paralelos ao chão. Mantenha a forma correta e evite balançar o corpo.),
(2,Coice,/img/imagem/coice.png,1. Fique em pé, segurando um haltere com uma das mãos.
2. Dobre o tronco para frente, mantendo as costas retas.
3. Mantenha o braço que segura o haltere próximo ao corpo, com o cotovelo flexionado e o antebraço apontando para baixo.
4. Estenda o antebraço para trás, levando o haltere em direção ao glúteo.
5. Retorne à posição inicial de forma controlada.
6. Repita o movimento de acordo com a série e repetições desejadas.
Certifique-se de realizar o exercício com técnica adequada e evite movimentos bruscos ou excesso de carga.),
(3,Prancha,/img/imagem/prancha.png,A prancha é um exercício que fortalece os músculos do core. Para executá-la, apoie os cotovelos alinhados com os ombros e os antebraços no chão, levante o corpo para fora do chão, formando uma linha reta da cabeça aos calcanhares. Mantenha o abdômen contraído e os glúteos apertados. Mantenha a posição por um período de tempo determinado ou para um número desejado de repetições. Mantenha a forma correta, evite levantar os quadris ou abaixar a parte inferior das costas. Aumente gradualmente o tempo ou o número de repetições à medida que ganha força.),
(4,Abdominal Lateral,/img/imagem/abdominallateral.png,1. Fique de pé com os pés afastados na largura dos ombros.
2. Incline o corpo para o lado, levando o braço em direção ao joelho oposto.
3. Sinta a contração na região lateral do abdômen.
4. Retorne à posição inicial e repita do outro lado),
(5,Cerrote,/img/imagem/Cerrote.png,1. Comece na posição de prancha, com os antebraços apoiados no chão e os pés estendidos para trás.
2. Mantenha o corpo alinhado, contraindo o abdômen e os glúteos.
3. Em seguida, leve um dos cotovelos em direção ao quadril oposto, girando o tronco e ativando os músculos oblíquos.
4. Retorne à posição inicial e repita do outro lado.),
(6,Flexão Aberto,/img/imagem/Flexaoaberta.png,A flexão aberta, também conhecida como flexão diamante, é uma variação da flexão de braço que trabalha os músculos do peito, ombros e tríceps de uma forma mais intensa. Para realizá-la, comece em posição de flexão de braço com as mãos em forma de diamante e abaixe o corpo lentamente até que o peito toque as mãos, em seguida empurre o corpo de volta à posição inicial, mantendo a forma correta. É importante manter a postura correta e evitar que os cotovelos se afastem do corpo durante o movimento. Comece com um número menor de repetições e aumente gradualmente à medida que ganha força.),
(7,Rosca Direta,/img/imagem/rosca direta.png,A rosca direta é um exercício de musculação que trabalha principalmente os músculos do bíceps braquial. Para executar o movimento, é necessário segurar uma barra ou halteres com as mãos na posição de supinação, flexionando os braços e contraindo os músculos do bíceps ao levantar a barra ou halteres em direção ao peito. É importante manter a postura correta e evitar balançar o corpo durante o movimento. A rosca direta é um exercício eficaz para fortalecer e tonificar os músculos do braço, podendo ser realizado em diferentes ambientes com o uso de equipamentos adequados.),
(8,Abdominal escalada,/img/imagem/abdominalescalada.png,1. Comece na posição de prancha alta, com as mãos apoiadas no chão, diretamente abaixo dos ombros, e os pés estendidos para trás.
2. Mantenha o corpo alinhado, contraindo o abdômen e os glúteos.
3. Em seguida, dobre um dos joelhos e leve-o em direção ao peito, enquanto mantém a outra perna estendida.
4. Alterne rapidamente as pernas, movendo-se como se estivesse escalando.
5. Continue alternando as pernas o mais rápido que puder durante um minuto.
 
Lembre-se de manter a forma correta e o ritmo constante durante todo o exercício.),
(9,Frances,/img/imagem/Frances.png,Deite-se em um banco, segure uma barra reta ou halter acima do peito com os braços estendidos, dobre os cotovelos e abaixe o peso em direção à testa, estendendo os braços de volta à posição inicial.),
(10,Abdominal,/img/imagem/abdominal.png,o abdominal é um exercício que trabalha a região abdominal, sendo realizado no solo ou em equipamentos específicos, como a bola suíça. É importante realizar cada exercício com a postura correta e o número adequado de repetições para obter os melhores resultados.),
(11,Rosca Scoot,/img/imagem/RoscaScoot.png,Sente-se no banco Scott, segure a barra EZ ou halteres com as palmas voltadas para cima e realize flexões de cotovelo, elevando o peso em direção aos ombros.),
(12,Tríceps Testa,/img/imagem/tricepistesta.png,Deite-se em um banco, segure uma barra reta ou halter acima do peito com os braços estendidos, dobre os cotovelos e abaixe o peso em direção à testa, estendendo os braços de volta à posição inicial.),
(13,Rosca Martelo,/img/imagem/RoscaMartelo.png,Em pé, segure um halter em cada mão com as palmas voltadas para dentro e realize flexões de cotovelo, elevando os halteres em direção aos ombros.),
(14,Abdominalbicicleta,/img/imagem/abdominalbicicleta.png,abdominais bicicleta
 
1. Deite-se de costas no chão, com as pernas estendidas.
2. Coloque as mãos atrás da cabeça, com os cotovelos abertos.
3. Levante as pernas do chão, dobrando os joelhos em um ângulo de 90 graus.
4. Simultaneamente, leve o cotovelo direito em direção ao joelho esquerdo, enquanto estende a perna direita.
5. Em seguida, alterne trazendo o cotovelo esquerdo em direção ao joelho direito, enquanto estende a perna esquerda.
6. Continue alternando os movimentos de forma contínua, como se estivesse pedalando uma bicicleta.
7. Mantenha o abdômen contraído e o movimento controlado durante todo o exercício.),
(15,Desenvolvimento,/img/imagem/desenvolvimento.png,No desenvolvimento com halteres, sente-se em um banco, segure um halter em cada mão na altura dos ombros e empurre-os para cima até estender os braços, depois abaixe os halteres de volta aos ombros.),
(16,Abdominalcanivete,/img/imagem/abdominalcanivete (2).png,abdominais bicicleta
 
1. Deite-se de costas no chão, com as pernas estendidas.
2. Coloque as mãos atrás da cabeça, com os cotovelos abertos.
3. Levante as pernas do chão, dobrando os joelhos em um ângulo de 90 graus.
4. Simultaneamente, leve o cotovelo direito em direção ao joelho esquerdo, enquanto estende a perna direita.
5. Em seguida, alterne trazendo o cotovelo esquerdo em direção ao joelho direito, enquanto estende a perna esquerda.
6. Continue alternando os movimentos de forma contínua, como se estivesse pedalando uma bicicleta.
7. Mantenha o abdômen contraído e o movimento controlado durante todo o exercício.),
(17,Agachamento,/img/imagem/Agachamentof.png,Fique em pé, com os pés na largura dos ombros, dobre os joelhos e quadris, abaixando o corpo até as coxas ficarem paralelas ao chão, depois retorne à posição inicial.),
(18,Abdominal,/img/imagem/Abdomina.png,Deite-se de costas, dobre os joelhos, mantenha os pés no chão, mãos atrás da cabeça, e levante o tronco em direção aos joelhos, contraindo os músculos abdominais.),
(19,Abdominalremador,/img/imagem/abdremador.png,),
(20,panturilha,/img/imagem/panturilha.png,Ficar de pé, com os pés na largura dos ombros, e levantar os calcanhares o mais alto possível, contraindo os músculos da panturrilha),
(21,Flexão de Braços,/img/imagem/flexao.png,Deite-se com a barriga para baixo e apoie mãos e pés no chão. Se você for iniciante, use os joelhos para apoiar. Afaste as mãos em uma distância maior do que a dos ombros. Com as costas alinhadas, flexione os braços e desça o corpo sem tocar o peito no chão.),
(22,Elevaçao Frontal,/img/imagem/Elevacaofrontal.png,Elevação frontal: exercício de musculação que trabalha principalmente os músculos do ombro. Realizado com o auxílio de halteres ou uma barra, na qual o praticante levanta os braços à frente do corpo até a altura dos ombros.),
(23,Elevacaolateralsentado,/img/imagem/elevacaolateralsentado.png,A execução da elevação lateral sentado em uma linha é feita da seguinte forma: sente-se em um banco ou cadeira com os pés apoiados no chão, segure os halteres ou pesos nas mãos com os braços estendidos ao lado do corpo, levante os braços para os lados até a altura dos ombros e depois abaixe-os lentamente. Repita o movimento de acordo com a série e repetições desejadas.),
(24,Elevacaopelvica,/img/imagem/elevacaopelvica.png,A elevação pélvica é um exercício para os músculos glúteos e posteriores da coxa. Para executá-lo em uma linha, deite-se de costas com os joelhos flexionados e os pés apoiados no chão. Em seguida, levante os quadris do chão, contraindo os glúteos, até formar uma linha reta dos ombros aos joelhos. Abaixe os quadris lentamente e repita o movimento.),
(25,Mergulho no Banco,/imagens/Mergulho-no-banco.jpg,Com apenas um banco (cadeira ou sofá) você consegue desenvolver esta atividade física. Ele servirá de ponto de apoio para você desenvolver este exercício. Dessa maneira, sentado sobre o banco, você vai levar as pernas à frente, esticadas e com o apoio no calcanhar. Posicione as mãos sobre o banco de acordo com a amplitude desejada, lembrando que os braços serão o principal apoio para você. Assim mantenha a coluna ereta e direcione o corpo ao chão (como se fosse sentar no chão).),
(26,Tricepscadeira,/img/imagem/tricepscadeira.png,O tríceps na cadeira é um exercício para os músculos do tríceps. Para executá-lo em uma linha, sente-se em uma cadeira com as mãos apoiadas na borda do assento ao lado dos quadris. Em seguida, deslize o corpo para frente da cadeira, mantendo as pernas estendidas e os calcanhares apoiados no chão. Flexione os cotovelos e abaixe o corpo em direção ao chão, mantendo os cotovelos próximos ao corpo. Empurre o corpo de volta à posição inicial estendendo os cotovelos.),
(27,Polichinelo,/img/imagem/polichinelo.png,O polichinelo se realiza unindo as mãos sobre a cabeça enquanto se afasta os pés. Em seguida, unindo os pés quando se abaixa as mãos até tocar os lados do corpo. Por fim, o movimento se repete e para poder mover os dois pés ao mesmo tempo, acrescenta-se pequenos pulos (para juntar e afastar os pés).),
(28,PassoAfundo,/img/imagem/passoafundo.png,O passo a fundo é um exercício para as pernas e glúteos. Para executá-lo em uma linha, fique em pé com os pés afastados na largura dos ombros. Dê um passo para frente com uma perna, flexionando o joelho até que a coxa fique paralela ao chão. Mantenha o tronco ereto e empurre o corpo de volta à posição inicial, levando a perna de trás para a frente. Repita o movimento alternando as pernas.),
(29,AgachamentoBulgaro,/img/imagem/agachamentobulgaro.png,O agachamento búlgaro é um exercício para as pernas e glúteos. Para executá-lo em uma linha, fique de pé com um pé apoiado em um banco ou plataforma elevada atrás de você. Mantenha a outra perna estendida à frente do corpo. Flexione o joelho da perna de trás, descendo o corpo em um agachamento até que a coxa fique paralela ao chão. Mantenha o tronco ereto e empurre o corpo de volta à posição inicial, estendendo o joelho. Repita o movimento alternando as pernas.),
(30,Encolhimento,/img/imagem/encolhimento.png,No exercício de encolhimento de ombros para o trapézio, levante os ombros em direção às orelhas e retorne à posição inicial.),
(31,AgachamentoLateral,/img/imagem/agachamentolateral.png,),
(32,Rosca Scott,/img/imagem/rosca scott feminino.png,Sente-se no banco Scott, segure a barra EZ ou halteres com as palmas voltadas para cima e realize flexões de cotovelo, elevando o peso em direção aos ombros.),
(60,Elevação lateral,/img/imagem/elevacao lateral Sentado J.png,NULL);

/*Table structure for table `exercicio_treino` */

DROP TABLE IF EXISTS `exercicio_treino`;

CREATE TABLE `exercicio_treino` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_treino` int(11) NOT NULL,
  `id_exercicio` int(11) NOT NULL,
  `series` int(255) DEFAULT NULL,
  `repeticoes` int(255) DEFAULT NULL,
  `descanso` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_treino_exercicio_treino` (`id_treino`),
  KEY `fk_exercicio_exercicio_treino` (`id_exercicio`),
  CONSTRAINT `fk_exercicio_exercicio_treino` FOREIGN KEY (`id_exercicio`) REFERENCES `exercicio` (`id`),
  CONSTRAINT `fk_treino_exercicio_treino` FOREIGN KEY (`id_treino`) REFERENCES `treino` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `exercicio_treino` */

insert  into `exercicio_treino`(`id`,`id_treino`,`id_exercicio`,`series`,`repeticoes`,`descanso`) values 
(1,1,4,3,15,60),
(2,1,14,4,30,60),
(3,1,10,3,15,90),
(4,2,7,4,8,60),
(5,4,1,4,12,60),
(6,4,15,4,12,60),
(7,4,22,4,15,60),
(8,4,23,4,15,60),
(9,1,3,2,2,120),
(10,1,8,4,30,30),
(11,2,11,4,15,60),
(12,2,21,5,15,60),
(13,2,13,4,15,60),
(14,2,6,5,15,60),
(15,3,17,4,15,30),
(16,3,20,5,15,60),
(17,3,29,4,20,30),
(18,3,28,4,15,45),
(19,3,27,5,30,30),
(20,4,30,4,12,45),
(21,3,31,4,15,30),
(22,1,4,4,15,30),
(23,1,10,5,15,60),
(24,1,14,4,30,60),
(25,1,16,4,30,30),
(26,1,19,4,12,45),
(27,4,60,5,15,30);

/*Table structure for table `musculo_alvo` */

DROP TABLE IF EXISTS `musculo_alvo`;

CREATE TABLE `musculo_alvo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) DEFAULT NULL,
  `descricao` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `musculo_alvo` */

insert  into `musculo_alvo`(`id`,`nome`,`descricao`) values 
(1,traps,Trapézio),
(2,shoulders,Ombros),
(3,chest,Peitoral),
(4,biceps,Bíceps),
(5,forearms,Antebraço),
(6,obliques,Oblíquios),
(7,abdominals,Abdômem),
(8,quads,Quadríceps),
(9,calves,Panturrilha),
(10,lats,Dorsais),
(11,traps_middle,Trapézio Descendente),
(12,lowerback,Lombar),
(13,glutes,Glúteos),
(14,hamstrings,Posterior de Coxa);

/*Table structure for table `treino` */

DROP TABLE IF EXISTS `treino`;

CREATE TABLE `treino` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `imagem` varchar(1000) DEFAULT NULL,
  `descricao` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `treino` */

insert  into `treino`(`id`,`nome`,`imagem`,`descricao`) values 
(1,Abdomen de Aço,/img/banners/abdomem.jpg,NULL),
(2,Fábrica de Bíceps,/img/banners/biceps.jpg,NULL),
(3,Pernas de Atletas,/img/banners/pernas.jpg,NULL),
(4,Ombros do Hércules,/img/banners/picosdeombro.png,NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
