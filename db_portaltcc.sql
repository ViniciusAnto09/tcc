-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 14-Nov-2015 às 09:02
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_portaltcc`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_colaboracao`
--

CREATE TABLE IF NOT EXISTS `tb_colaboracao` (
  `id_colaboracao` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` text COLLATE latin1_general_ci NOT NULL,
  `dataCriacao` datetime NOT NULL,
  `dataAceite` datetime DEFAULT NULL,
  `status` char(1) COLLATE latin1_general_ci NOT NULL,
  `id_usuario` int(10) NOT NULL,
  `id_trabalho` int(10) NOT NULL,
  PRIMARY KEY (`id_colaboracao`),
  KEY `FKtb_colabor667850` (`id_usuario`,`id_trabalho`),
  FULLTEXT KEY `status` (`status`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=57 ;

--
-- Extraindo dados da tabela `tb_colaboracao`
--

INSERT INTO `tb_colaboracao` (`id_colaboracao`, `descricao`, `dataCriacao`, `dataAceite`, `status`, `id_usuario`, `id_trabalho`) VALUES
(49, '<p>Nunc at ante et quam rutrum tincidunt. Aenean pretium nisi et egestas egestas. Donec aliquet ac metus eu rutrum. Nunc tempus purus eu feugiat pulvinar. Duis feugiat nunc eu nulla congue faucibus. Morbi metus nunc, vulputate ut turpis eu, efficitur porta odio. Sed a odio eget leo vestibulum sollicitudin. Nam fermentum odio et porta finibus. Phasellus vulputate id ligula eget pharetra. Maecenas tincidunt fermentum maximus. Ut cursus erat id molestie sagittis. Vestibulum fringilla dolor ipsum? Nunc elementum id eros volutpat euismod. Pellentesque volutpat arcu nec est luctus condimentum. Cras vitae magna at arcu rhoncus malesuada ut sit amet nisi. Maecenas eget bibendum neque.<br /><br />Maecenas at vulputate lacus, sed efficitur purus? Integer lobortis dictum sem id sollicitudin. Nullam eleifend sollicitudin luctus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Fusce faucibus leo eu erat ornare, non vulputate est luctus. Nam gravida eros bibendum facilisis sollicitudin. Sed posuere dapibus enim eu congue. Sed in arcu dolor? Ut elementum enim faucibus mi suscipit condimentum. Nunc porttitor suscipit ante eu sodales.<br /><br />Aenean sodales enim sit amet quam cursus; eget pretium elit varius. Nulla luctus libero et nisl ultrices, sed posuere odio tempus. Nam cursus justo eget nisl finibus, quis porta mauris porta. Maecenas a auctor erat, eu aliquet massa. Proin id ipsum eu odio rhoncus scelerisque eget nec dui. Sed massa lorem, efficitur ac efficitur sed, vulputate et purus. Aenean elementum sed turpis quis porta. Fusce molestie condimentum velit, sit amet suscipit augue aliquam eu. Nunc sed urna euismod, dictum neque ut, vestibulum elit. Nunc imperdiet, arcu tempus euismod aliquam, elit nisl maximus massa, eu auctor magna est nec enim? Vivamus eleifend vel neque et porta.</p>', '2015-11-14 03:08:22', NULL, 'O', 4, 19),
(50, '<p>Vestibulum egestas hendrerit odio vel maximus. Quisque lacus odio; fermentum non augue quis, congue blandit odio? Curabitur gravida ullamcorper purus vel commodo? Aenean congue feugiat tortor, eu auctor elit eleifend sed. Aliquam gravida diam vel ex porttitor commodo. Morbi a placerat sem. Aliquam vel faucibus felis. Curabitur at sapien a tortor venenatis maximus vitae ut quam.<br /><br />Cras vitae quam malesuada, feugiat eros eu, volutpat nisl. Nulla facilisi. Pellentesque eu faucibus diam, efficitur euismod magna. Nunc nec tellus mollis, sodales ipsum quis, eleifend diam. Proin risus nulla, dignissim sit amet mauris eget, vehicula bibendum odio. Ut rutrum dapibus est sit amet lacinia. Duis luctus erat mauris, vitae posuere elit porta eget. Ut in sem diam. Nam rutrum, velit eu semper volutpat, elit erat sagittis elit, consequat condimentum quam urna faucibus massa. Praesent venenatis dui sodales mauris porta, scelerisque aliquet ex volutpat. Maecenas velit dui, viverra eget metus vitae, eleifend posuere ligula! Nullam sed mattis est, suscipit varius libero. Praesent ullamcorper purus vel metus facilisis; sed vulputate velit maximus. Cras id ex ullamcorper, aliquam ipsum eu, cursus nisl.<br /><br />Praesent congue est et luctus auctor. Donec faucibus hendrerit arcu id dignissim? Sed a odio ut turpis mollis convallis. Cras nec lorem at metus placerat placerat suscipit vel turpis. Sed eu nibh ultricies, convallis ante nec, facilisis neque. Etiam sollicitudin ligula non orci laoreet tempus. Nullam mauris odio, rutrum ac ex in, iaculis tincidunt nunc. Quisque eu sollicitudin tortor. Mauris sollicitudin orci vitae lorem mattis, vitae tincidunt tellus egestas. Phasellus fringilla volutpat eros, id iaculis velit iaculis ut. Praesent justo leo, semper ut tristique non, viverra a sapien. Vestibulum risus justo, commodo eu mi eget, aliquam scelerisque lectus. Vestibulum quam risus, faucibus quis hendrerit in, ornare imperdiet lorem. Cras rhoncus et ipsum ac dapibus. Donec tristique hendrerit lacus, eleifend tempor quam faucibus ac. Donec lobortis nisl ipsum, nec malesuada leo dignissim commodo.</p>', '2015-11-14 03:09:19', NULL, 'A', 4, 20),
(51, '<p>Praesent semper vestibulum leo. Aenean ornare efficitur feugiat. Nulla pharetra neque id ipsum auctor malesuada? Integer vitae nunc id tortor interdum varius. Quisque finibus erat nunc, vel ultrices diam commodo venenatis. Morbi nec ultrices erat, sit amet pharetra lacus? Praesent sed nibh tempus, ornare neque ac, mollis eros? Suspendisse convallis, augue eu tincidunt lacinia, eros nulla sagittis dolor, nec consectetur ante augue sit amet elit. Duis malesuada lectus vitae metus lacinia tincidunt? Aliquam justo orci, auctor id ullamcorper et, malesuada ac odio.<br /><br />Curabitur elementum augue risus. Maecenas lectus mauris, pretium quis dictum nec, dapibus id lacus. Sed varius nulla quis tortor tincidunt eleifend. Duis id ipsum quis dui auctor semper a ut sem. Nullam viverra vehicula nulla? Nullam sodales rhoncus magna. Vivamus maximus justo magna, vel rutrum ipsum imperdiet ut. Integer eu nisl et arcu porta aliquam in eu eros! Proin vitae ipsum leo. Donec vel tempus odio. Suspendisse potenti. Nulla euismod sit amet ex vitae mattis. Aenean eu nulla porta, faucibus tellus id, rutrum eros. Pellentesque pulvinar massa at dolor pretium dictum. Duis erat orci, posuere id neque in, ullamcorper malesuada ligula.<br /><br />Mauris molestie semper nisi eu cursus. Nulla fringilla eros ac blandit accumsan. Maecenas ornare efficitur maximus. Proin vel tortor ullamcorper, consequat felis vel, scelerisque nulla? Morbi tincidunt orci vehicula dolor semper, id ultricies nisi pharetra. In sed scelerisque metus. Phasellus pulvinar urna ut massa tincidunt laoreet. Sed aliquam, purus sit amet elementum mollis, elit magna eleifend magna, placerat feugiat orci urna sodales metus? Curabitur eget finibus felis. Donec accumsan rhoncus eros eu faucibus. Praesent eget viverra enim. Proin tristique non mauris vel aliquet. Aliquam eget enim vitae quam pretium feugiat in vitae ex.</p>', '2015-11-14 03:10:50', NULL, 'A', 4, 20),
(52, '<p>Vivamus nec consequat massa, eu gravida eros. Nulla facilisi. Integer scelerisque pretium arcu, id viverra lorem sagittis eget. Cras dignissim nibh et ligula posuere, viverra mattis nunc euismod. Aliquam erat volutpat. Donec sem libero, imperdiet sit amet nibh vel, ornare efficitur nibh. Nunc accumsan nisl eu nulla porta dignissim. Duis accumsan, nibh et venenatis semper, eros arcu hendrerit ante, nec tempor augue tortor sed metus. Nam condimentum ipsum vitae mauris imperdiet, eget blandit libero mattis!<br /><br />Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Etiam in dignissim sapien. In hac habitasse platea dictumst. Nulla rhoncus sit amet ex quis eleifend. Fusce facilisis ut nisl id hendrerit. In ac bibendum felis! Sed id erat et nibh sodales porttitor a sed justo. Proin non erat felis. Vivamus vel dapibus erat. Vivamus pretium tincidunt magna nec euismod. Nam viverra elit in nulla tincidunt, at dictum eros vestibulum. Vivamus viverra lobortis nulla quis ornare. Curabitur a dignissim nisl. Integer semper erat at neque feugiat, sed mattis enim aliquet? Nam varius luctus metus.<br /><br />Pellentesque lacinia sapien in porttitor suscipit. Pellentesque a sagittis nulla. Aliquam erat volutpat. Phasellus auctor ipsum dapibus, fringilla tellus id, fringilla metus. Pellentesque at viverra ex. Maecenas sed felis at nunc blandit finibus. Donec vitae faucibus tellus. Donec semper leo sed arcu tincidunt luctus. Suspendisse nec diam vel lectus pretium mattis. Sed sed sapien turpis. Aenean pulvinar facilisis convallis. Donec a arcu velit. Pellentesque efficitur volutpat nisi pellentesque mollis.</p>', '2015-11-14 03:45:55', NULL, 'O', 3, 20),
(53, '<p>In hac habitasse platea dictumst. Nunc tempus efficitur elit, vel imperdiet lorem. Integer porta lacus quis urna fringilla, pellentesque facilisis ante scelerisque. Praesent finibus purus et aliquet mattis. Integer commodo tortor a maximus tincidunt. Maecenas ac magna rutrum, convallis orci vel, mollis risus. Mauris eleifend vulputate risus, id interdum ante placerat sed! Praesent dapibus massa nunc, at egestas velit maximus id! Ut ultrices aliquam urna, vel vulputate ipsum facilisis sit amet. Curabitur nisi elit, commodo nec venenatis non, dictum scelerisque leo!<br /><br />Suspendisse convallis tempus sagittis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vestibulum interdum ornare purus, nec viverra sem scelerisque vel. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur erat dui, pellentesque et dui sit amet; aliquam laoreet sem. Sed sit amet lacus ultricies, dictum enim id, ultricies lorem. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nunc ut eros neque. Suspendisse lorem diam; dictum suscipit pulvinar eu, maximus ut sapien. Cras est elit, tempor a accumsan eget, lacinia non nulla. Nunc ut ornare diam, eget suscipit arcu. Curabitur dictum nisl sed rhoncus eleifend. Pellentesque at blandit metus. Nullam a eleifend felis, eget mattis elit.<br /><br />Morbi maximus suscipit lorem at rutrum. Nulla varius, augue eu facilisis vulputate, ante massa malesuada tortor, sed feugiat diam sapien id ex. Pellentesque vulputate risus urna, at tincidunt eros rhoncus in. Aenean magna magna; iaculis id mollis vel, finibus ut tortor. Cras tortor mauris, blandit eget odio id; vestibulum rutrum lacus. Fusce pulvinar in orci vel vestibulum! Aliquam diam magna, tincidunt ut commodo eget, placerat sit amet justo. Pellentesque quis volutpat felis. Suspendisse vestibulum purus est, feugiat vehicula neque placerat eu. Etiam id mauris ac augue ultricies dapibus in et ex. Interdum et malesuada fames ac ante ipsum primis in faucibus. Proin facilisis convallis orci, nec commodo erat venenatis quis. In hac habitasse platea dictumst.</p>', '2015-11-14 03:47:28', NULL, 'O', 3, 21),
(54, '<p>In hac habitasse platea dictumst. Nunc tempus efficitur elit, vel imperdiet lorem. Integer porta lacus quis urna fringilla, pellentesque facilisis ante scelerisque. Praesent finibus purus et aliquet mattis. Integer commodo tortor a maximus tincidunt. Maecenas ac magna rutrum, convallis orci vel, mollis risus. Mauris eleifend vulputate risus, id interdum ante placerat sed! Praesent dapibus massa nunc, at egestas velit maximus id! Ut ultrices aliquam urna, vel vulputate ipsum facilisis sit amet. Curabitur nisi elit, commodo nec venenatis non, dictum scelerisque leo!<br /><br />Suspendisse convallis tempus sagittis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vestibulum interdum ornare purus, nec viverra sem scelerisque vel. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur erat dui, pellentesque et dui sit amet; aliquam laoreet sem. Sed sit amet lacus ultricies, dictum enim id, ultricies lorem. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nunc ut eros neque. Suspendisse lorem diam; dictum suscipit pulvinar eu, maximus ut sapien. Cras est elit, tempor a accumsan eget, lacinia non nulla. Nunc ut ornare diam, eget suscipit arcu. Curabitur dictum nisl sed rhoncus eleifend. Pellentesque at blandit metus. Nullam a eleifend felis, eget mattis elit.<br /><br />Morbi maximus suscipit lorem at rutrum. Nulla varius, augue eu facilisis vulputate, ante massa malesuada tortor, sed feugiat diam sapien id ex. Pellentesque vulputate risus urna, at tincidunt eros rhoncus in. Aenean magna magna; iaculis id mollis vel, finibus ut tortor. Cras tortor mauris, blandit eget odio id; vestibulum rutrum lacus. Fusce pulvinar in orci vel vestibulum! Aliquam diam magna, tincidunt ut commodo eget, placerat sit amet justo. Pellentesque quis volutpat felis. Suspendisse vestibulum purus est, feugiat vehicula neque placerat eu. Etiam id mauris ac augue ultricies dapibus in et ex. Interdum et malesuada fames ac ante ipsum primis in faucibus. Proin facilisis convallis orci, nec commodo erat venenatis quis. In hac habitasse platea dictumst.</p>', '2015-11-14 03:47:51', NULL, 'O', 3, 21),
(55, '<p>Proin eget tortor non nunc pellentesque rutrum vitae a urna. Duis nec sem sed odio molestie malesuada quis quis dolor! Phasellus vestibulum consequat tincidunt. Interdum et malesuada fames ac ante ipsum primis in faucibus. Maecenas ut nisi dui. Etiam id sem a velit dictum fringilla vitae consequat est. Mauris eget lectus ac elit lacinia pellentesque ut blandit turpis. Sed urna lorem, faucibus at volutpat in, pellentesque et nunc?<br /><br />Praesent sed purus id magna rutrum feugiat! Fusce porttitor arcu nunc, sed imperdiet libero auctor vitae. Sed tortor urna, cursus vel dui vel, vestibulum suscipit massa. Sed consequat arcu nisl. Fusce semper nibh vel est semper, ac pulvinar felis gravida. Ut sollicitudin ante purus, vel pretium nulla consequat sit amet. Ut vulputate malesuada odio, non feugiat turpis varius quis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.<br /><br />Vivamus urna arcu; scelerisque sed purus a, imperdiet malesuada nisl. Ut non sollicitudin purus, in ultricies enim. Aliquam erat volutpat. Maecenas ut lorem arcu. Donec quis porttitor purus, vitae elementum arcu. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut lobortis, mi interdum laoreet blandit, lectus neque laoreet dolor, sed dignissim dolor erat sed velit. Nullam ligula lectus, pellentesque eget tincidunt pretium, elementum ac elit. Vestibulum sed lectus arcu. Morbi condimentum dui vitae dui sodales ullamcorper. Nullam non tempus felis. Quisque bibendum enim vitae dui ullamcorper, a facilisis metus faucibus. Integer elit enim, vehicula vel posuere quis, pulvinar ut nisl. Nullam non metus id ante molestie malesuada.</p>', '2015-11-14 04:06:58', NULL, 'A', 3, 19),
(56, '<p>Integer massa lorem, venenatis sed magna et, imperdiet mattis purus. Integer tincidunt condimentum nisi ut fermentum. Nam porttitor metus id tincidunt efficitur. Nam pulvinar arcu sed placerat finibus? Praesent erat lacus, lobortis sit amet finibus et, elementum ac dolor. Pellentesque sapien est, sollicitudin ut lacus vitae, porta mattis ex. Curabitur facilisis, est ac fermentum consectetur, odio elit varius tortor, vestibulum faucibus lacus tortor ac ligula. Cras in mollis odio! Phasellus turpis erat, sagittis ut augue quis, tempus tincidunt risus. Aenean fermentum, nunc sed sollicitudin luctus, massa leo aliquet magna, eu maximus leo metus in dolor. Proin dignissim sapien iaculis felis pulvinar, at semper enim malesuada. Sed quis interdum sapien. Nulla ut nisl ipsum. Vivamus facilisis lectus nec lectus eleifend rhoncus? Maecenas eget diam ornare, placerat lectus eu, ultrices tellus.<br /><br />Nunc in metus eget odio malesuada suscipit. Sed ut ultrices ipsum. In quis turpis vitae justo feugiat sodales? Fusce quis augue vel felis elementum luctus at sit amet ante. Vivamus laoreet vitae nunc a sagittis. Donec auctor ullamcorper tellus vel sollicitudin. In hac habitasse platea dictumst. Duis viverra, neque id vestibulum mattis, ipsum nunc tristique felis, non posuere tellus magna a urna. Vestibulum vel metus ac felis tempor aliquet sed eget felis. Maecenas gravida diam nulla, pharetra pharetra est dapibus id. Vivamus sit amet nunc nibh. Vivamus scelerisque tempus tincidunt. Nam ut feugiat ligula. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Morbi vulputate dolor mi, id auctor diam tristique non.<br /><br />Fusce sit amet euismod ipsum. Nam sed felis ipsum. Mauris fermentum id diam nec feugiat! Aliquam sed accumsan dui. Vestibulum blandit nulla sit amet dui varius, non mollis dui tincidunt? Proin turpis mauris, malesuada vel enim ac, volutpat mollis justo. Curabitur tellus ligula, condimentum id turpis ac, aliquet finibus sem. Nunc et venenatis nibh; id molestie quam. Morbi dignissim cursus velit, blandit accumsan nisi ullamcorper vel. Pellentesque eleifend tincidunt justo eget pretium?</p>', '2015-11-14 04:08:00', NULL, 'O', 3, 21);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_trabalho`
--

CREATE TABLE IF NOT EXISTS `tb_trabalho` (
  `id_trabalho` int(10) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(10) NOT NULL,
  `nome` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `descricao` text COLLATE latin1_general_ci NOT NULL,
  `token` varchar(10) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id_trabalho`),
  UNIQUE KEY `token` (`token`),
  KEY `FKtb_trabalh834859` (`id_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=25 ;

--
-- Extraindo dados da tabela `tb_trabalho`
--

INSERT INTO `tb_trabalho` (`id_trabalho`, `id_usuario`, `nome`, `descricao`, `token`) VALUES
(19, 4, 'Nullam in scelerisque neque', '<p>Nullam in scelerisque neque. Cras vestibulum lorem at mauris pulvinar facilisis. Sed eget enim sit amet ante vulputate aliquet vitae et risus. Nulla ut efficitur sapien. Ut vitae sem et ligula lobortis pellentesque. Proin fringilla lorem metus, a volutpat augue cursus eget. Sed sit amet elementum leo, vitae condimentum odio. Donec posuere bibendum tellus; non finibus felis faucibus ac. Suspendisse sed ante lobortis, elementum est et, dapibus neque. In pellentesque; orci condimentum cursus condimentum, ligula eros lobortis massa, laoreet condimentum lorem ante vitae ipsum. Mauris bibendum eleifend varius. Morbi blandit efficitur orci; in rutrum diam pharetra ac. Fusce id tempus augue! Cras risus mauris, varius sed erat ut; pulvinar rhoncus nisi.<br /><br />Integer et lorem finibus, hendrerit ipsum auctor, pellentesque orci! Duis aliquet mauris nec pretium aliquet! Aliquam vitae lobortis quam, blandit cursus mi! Suspendisse et vehicula neque, sed tincidunt est. In eu enim porta, facilisis neque vitae, commodo magna. Ut ultrices fringilla dictum. Suspendisse cursus lobortis commodo. Praesent sed bibendum turpis; sit amet sodales eros?<br /><br />Nunc imperdiet, velit at imperdiet dapibus, tellus magna pellentesque lorem, quis finibus purus justo quis mauris. Donec nec ultricies sem. Nulla posuere nibh in urna auctor, in interdum neque vulputate. Duis id nisl ac mauris vulputate placerat id in orci! Nunc sagittis iaculis libero, vitae maximus risus malesuada a. Aliquam ullamcorper in felis at finibus. Etiam elementum ac sapien rutrum maximus. Nullam sit amet pretium est. Vestibulum viverra libero nec massa vehicula rhoncus. Vivamus molestie non odio ut lacinia. In hac habitasse platea dictumst. Aliquam pharetra nisl id ex pharetra congue.</p>', 'CsffJNvZ8w'),
(20, 3, 'Vivamus at consequat lacus', '<p>Vivamus at consequat lacus. Curabitur lacinia elit lorem, ut tincidunt erat pretium non. Suspendisse pharetra congue urna, ut venenatis ligula pharetra sed. Nulla et enim vel dui bibendum convallis vel id felis. Suspendisse bibendum a mauris sed imperdiet. Aliquam erat volutpat. Pellentesque faucibus nibh lacus, id ornare sapien vulputate ut. Cras bibendum efficitur ultricies. Aenean tristique lectus non sollicitudin pulvinar. Pellentesque ullamcorper arcu at diam bibendum, maximus dapibus lorem feugiat.<br /><br />Nam quis odio id mi interdum accumsan et ut nisl. Ut quam enim, imperdiet nec luctus molestie, tempor et leo. Ut lectus massa, molestie et feugiat at, bibendum ut est. Praesent quam ante, condimentum ac pulvinar auctor, iaculis et nunc. Integer at ante id eros auctor bibendum. Quisque imperdiet hendrerit quam, gravida ullamcorper quam mollis non. Cras nec malesuada massa, non lacinia mi. In sollicitudin blandit scelerisque. Donec feugiat porttitor tortor, sed pellentesque arcu pulvinar pharetra. Nullam in cursus orci. Curabitur volutpat; elit vel pulvinar elementum, ligula eros cursus nisi, ut vehicula lectus ligula eget sem? Aenean vitae purus tristique eros accumsan porttitor! Cras interdum tristique quam in consectetur. Praesent commodo tempor placerat. Mauris congue volutpat nulla, sed pharetra nisl tincidunt eu. Nullam sit amet ex lobortis, lacinia tellus et, viverra elit.<br /><br />Proin et sapien sed enim sagittis scelerisque. Nam rutrum lectus elit; nec vestibulum nibh porta in. Sed condimentum massa at odio sodales elementum. Vestibulum laoreet orci ut magna accumsan, vel vulputate risus commodo. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur vitae ante suscipit, maximus orci vitae, congue felis. Praesent nec augue scelerisque magna venenatis elementum. Morbi in mi vel urna finibus luctus tristique consectetur mi.</p>', 'oqyelB6Em8'),
(21, 3, 'Suspendisse non ullamcorper nisi', '<p>Suspendisse non ullamcorper nisi, ut faucibus lacus. Nullam eleifend augue sed dolor porta fringilla. Aenean sagittis at justo eget porttitor. Nam suscipit, nunc in aliquet venenatis, augue ante faucibus lacus, sit amet imperdiet est libero sit amet justo. Etiam pharetra leo vel commodo tempor. Cras placerat libero sed est tincidunt imperdiet. Donec eu velit nisl! Nam placerat quam quis pulvinar placerat. Quisque lorem mi, tincidunt vitae dignissim non, ultrices non turpis. Donec at erat id lorem rutrum gravida.<br /><br />Nulla tincidunt, metus id finibus placerat, lectus ligula finibus turpis, in fermentum velit nulla vitae urna. Maecenas vel accumsan quam, quis congue urna. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Suspendisse finibus, mi vel pretium condimentum, justo nunc commodo ipsum, vel posuere odio arcu sed orci. Donec sed dolor sit amet est porta rutrum. Pellentesque ullamcorper ligula dapibus, aliquam nulla quis, gravida dolor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus varius posuere sagittis. Maecenas vestibulum fringilla auctor.<br /><br />Aliquam eu diam non nunc lobortis efficitur. Sed vel eleifend sem? Nullam dictum laoreet metus quis efficitur? Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean id elit nunc. In quis odio at dolor mollis malesuada auctor nec erat! Lorem ipsum dolor sit amet, consectetur adipiscing elit. In posuere cursus eleifend. Suspendisse potenti. Vestibulum ornare leo mi, varius gravida urna aliquet at? Quisque pretium viverra semper. Suspendisse in mi nunc! Nullam ipsum turpis, euismod sed auctor vitae, venenatis ac sapien. Vivamus varius interdum purus, quis lobortis nibh tincidunt ac! Duis sagittis ex a orci dapibus ullamcorper.</p>', '7F9mze00lt'),
(22, 3, 'Donec eu ipsum at quam ornare interdum', '<p>Donec eu ipsum at quam ornare interdum vel sit amet urna. Ut eu est eu nulla ultricies viverra sit amet a ipsum. Maecenas ut justo elit. Mauris non odio quis elit placerat consectetur eget eget lorem. Nunc id justo tortor. Fusce at metus auctor; aliquet sem at, sodales eros. Cras in hendrerit odio, non egestas lacus? Pellentesque euismod ut neque quis fringilla. Curabitur ornare rutrum ligula eu sodales. Aliquam erat volutpat.<br /><br />Ut sagittis orci a turpis maximus laoreet nec sit amet nisi? Nunc quam felis, pulvinar non tincidunt eu, vestibulum egestas velit. Curabitur luctus neque non ligula ornare, eget accumsan ex interdum. Integer posuere tortor a odio sagittis, sit amet eleifend sem molestie. Donec non enim augue. Suspendisse potenti. Nulla lacinia felis ac massa mattis ultricies. Phasellus sed justo at ex lacinia semper et ac diam. Quisque tincidunt vehicula leo, ac vulputate nisl fermentum sit amet? Aliquam eu lectus posuere, faucibus ante at, tincidunt enim.<br /><br />Ut iaculis tellus eget nibh fermentum tempus. Sed interdum purus vel bibendum pellentesque. Fusce sed risus ut dolor varius suscipit nec ut velit. Mauris tempor, risus tincidunt consequat accumsan, tellus purus convallis risus, eget porttitor sem elit at felis. Fusce facilisis velit vel elementum fermentum. Maecenas laoreet nisl augue, vitae maximus elit condimentum et. Vestibulum pellentesque gravida velit, gravida lobortis felis volutpat in. Quisque faucibus lorem et cursus faucibus. Aliquam pellentesque, nulla non imperdiet consectetur, orci ipsum dapibus ipsum, a auctor felis nisl ac lacus. Curabitur consectetur eros non velit efficitur tempor. Nam volutpat lectus libero; quis hendrerit massa semper sed. Mauris facilisis nibh ut facilisis condimentum. Mauris imperdiet tellus nulla, sit amet maximus neque facilisis eu.</p>', '2FOlApbyIJ'),
(23, 4, 'Sed id eleifend ipsum', '<p>Sed at rhoncus ex. Sed id eleifend ipsum. Fusce tempor in diam nec fringilla! Donec et justo luctus lacus fringilla viverra. Nullam ornare lacus eget libero varius, ut vestibulum libero scelerisque. Nullam nec libero in enim congue maximus. Aliquam eu sodales metus, non commodo metus. In lobortis dignissim posuere. Suspendisse dapibus, leo at ornare aliquam, dolor eros efficitur metus, sed tincidunt justo magna et libero. Praesent ex quam, blandit ac lacinia non; feugiat in odio! Morbi ultrices elit pretium ipsum vehicula, non auctor nisi vehicula! Quisque felis nulla, mattis vel est nec, consequat dignissim lorem. Nam tempus eros eget elit ultrices maximus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nam in viverra lectus, ultricies pellentesque ex? Pellentesque iaculis sit amet mauris sit amet rhoncus.</p>', 'hAsyZPgtfK'),
(24, 3, 'Proin nec dapibus nisi', '<p>Proin nec dapibus nisi, sit amet pretium felis. Vestibulum id enim quis leo mollis mattis vel vitae nulla. Morbi imperdiet purus quis lacus suscipit pharetra. Donec hendrerit ultrices nunc, et imperdiet sapien finibus a. Sed egestas dignissim metus at pharetra. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae justo dolor. Proin cursus nisi in metus efficitur varius. Mauris pretium diam quam, vitae vulputate ligula eleifend ut. Mauris sit amet facilisis ante. Curabitur rutrum laoreet rutrum. Vestibulum id felis posuere, pulvinar ante eget; scelerisque massa. Aliquam in molestie nisi. Donec fermentum feugiat lacus vel finibus.<br /><br />Duis feugiat, leo vitae pharetra ultrices, odio ante euismod tortor, quis pulvinar eros libero id nunc. Donec vel tempor tellus, id elementum urna. Praesent euismod lectus id sapien pellentesque pretium. Suspendisse eget augue sollicitudin orci pellentesque bibendum quis a lorem. Aliquam rhoncus sapien et nunc sagittis tristique. Vivamus ante mauris, tincidunt bibendum ligula quis, bibendum gravida felis. Nullam tincidunt dignissim fringilla. Proin tristique sapien eros, at imperdiet massa fringilla et. Mauris lacinia vehicula sapien ut pretium. Donec mollis nunc ex, ut aliquet nulla tristique vel! Cras et enim non mauris condimentum commodo et eget ipsum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.<br /><br />Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Suspendisse potenti. Pellentesque porttitor, nisl ut rutrum dapibus, est nisl luctus tellus, nec iaculis velit felis quis quam. Aenean fringilla luctus euismod. Cras quis fringilla elit, sit amet consectetur leo? Sed vitae ante nisl. Cras imperdiet purus nec mollis mattis. Ut id ipsum nisi.</p>', 'fDptuCXhoM');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuario`
--

CREATE TABLE IF NOT EXISTS `tb_usuario` (
  `id_usuario` int(10) NOT NULL AUTO_INCREMENT,
  `nome` varchar(40) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(40) COLLATE latin1_general_ci NOT NULL,
  `telefone` varchar(15) COLLATE latin1_general_ci DEFAULT NULL,
  `senha` varchar(40) COLLATE latin1_general_ci NOT NULL,
  `imagem` varchar(200) COLLATE latin1_general_ci DEFAULT NULL,
  `bio` text COLLATE latin1_general_ci,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `tb_usuario`
--

INSERT INTO `tb_usuario` (`id_usuario`, `nome`, `email`, `telefone`, `senha`, `imagem`, `bio`) VALUES
(3, 'Vinícius Antônio', 'viniciusanto09@gmail.com', '', 'd033e22ae348aeb5660fc2140aec35850c4da997', '../../assets/img/uploads/d8159edc3d87a554a1118e0c0b594443.jpg', ''),
(4, 'Carlos Augusto', 'carlostwmf@gmail.com', '(34) 9174-8856', 'd033e22ae348aeb5660fc2140aec35850c4da997', '../../assets/img/uploads/a9cc0040c24dddfd384019a9477f680f.png', 'Aenean auctor eros sem, non faucibus enim vestibulum non. Maecenas bibendum pulvinar nulla, quis eleifend ante imperdiet at? Duis finibus justo a augue auctor eleifend. Pellentesque blandit sapien enim, id sagittis eros tempor eu. Suspendisse ullamcorper mollis ex, vitae ultrices urna malesuada sed. Aenean semper, sem eget bibendum varius, est leo dapibus leo, a finibus lorem sem ut lorem. Etiam sit amet nisl venenatis, sagittis justo vitae, volutpat velit. Vivamus in ante et est rutrum ultricies et ac ligula. In eget varius leo. Vivamus eleifend tempor enim malesuada viverra. Pellentesque ut malesuada mauris. In hac habitasse platea dictumst. Duis maximus euismod libero eu interdum.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuario_trabalho`
--

CREATE TABLE IF NOT EXISTS `tb_usuario_trabalho` (
  `id_usuario` int(10) NOT NULL,
  `id_trabalho` int(10) NOT NULL,
  PRIMARY KEY (`id_usuario`,`id_trabalho`),
  KEY `FKtb_usuario392215` (`id_usuario`),
  KEY `FKtb_usuario953120` (`id_trabalho`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Extraindo dados da tabela `tb_usuario_trabalho`
--

INSERT INTO `tb_usuario_trabalho` (`id_usuario`, `id_trabalho`) VALUES
(3, 19),
(3, 20),
(3, 21),
(3, 22),
(3, 23),
(3, 24),
(4, 19),
(4, 20),
(4, 21),
(4, 23),
(4, 24);

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `tb_colaboracao`
--
ALTER TABLE `tb_colaboracao`
  ADD CONSTRAINT `FKtb_colabor667850` FOREIGN KEY (`id_usuario`, `id_trabalho`) REFERENCES `tb_usuario_trabalho` (`id_usuario`, `id_trabalho`);

--
-- Limitadores para a tabela `tb_trabalho`
--
ALTER TABLE `tb_trabalho`
  ADD CONSTRAINT `FKtb_trabalh834859` FOREIGN KEY (`id_usuario`) REFERENCES `tb_usuario` (`id_usuario`);

--
-- Limitadores para a tabela `tb_usuario_trabalho`
--
ALTER TABLE `tb_usuario_trabalho`
  ADD CONSTRAINT `FKtb_usuario392215` FOREIGN KEY (`id_usuario`) REFERENCES `tb_usuario` (`id_usuario`),
  ADD CONSTRAINT `FKtb_usuario953120` FOREIGN KEY (`id_trabalho`) REFERENCES `tb_trabalho` (`id_trabalho`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
