-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           8.0.30 - MySQL Community Server - GPL
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              12.4.0.6659
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Copiando estrutura para tabela modelo-2.app_config
CREATE TABLE IF NOT EXISTS `app_config` (
  `id` int NOT NULL AUTO_INCREMENT,
  `campo` varchar(300) CHARACTER SET latin1 DEFAULT NULL,
  `label` varchar(300) CHARACTER SET latin1 DEFAULT NULL,
  `instrucao` varchar(300) CHARACTER SET latin1 DEFAULT NULL,
  `valor` text CHARACTER SET latin1,
  PRIMARY KEY (`id`),
  KEY `app_config_campo_index` (`campo`)
) ENGINE=InnoDB AUTO_INCREMENT=74 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Copiando dados para a tabela modelo-2.app_config: ~7 rows (aproximadamente)
INSERT IGNORE INTO `app_config` (`id`, `campo`, `label`, `instrucao`, `valor`) VALUES
	(1, 'titulo_home', 'Título Página Inicial', 'Esse título estará apenas na página inicial', '"Nome do Site"'),
	(2, 'titulo_site', 'Nome do site', 'Esse título estará em todas as páginas do site logo após o título principal (ex: Blog | Nome do site)', '"Nome do Site"'),
	(3, 'image_logo', 'Logo Principal', 'Logo principal do site', '{"url":"","status":true}'),
	(4, 'image_rodape', 'Logo Rodapé', 'Logo do rodapé', '{"url":"","status":true}'),
	(5, 'image_email', 'Logo E-mail', 'Logo para e-mails enviados', '{"url":"","status":true}'),
	(6, 'favicon', 'Favicon', 'Ícone na aba do navegador', '{"url":"","status":true}'),
	(7, 'description', 'Description', 'Description padrão do site', ''),
	(26, 'telefones', 'Telefone(s) e WhatsApp(s)', '', '[{"label":"Fale conosco","tipo":"ddd","destino":"telefone","mensagem":"","exibir":"N\\u00famero com DDD","exibir2":"Liga\\u00e7\\u00e3o","number":"(62) 00000-0000"},{"label":"WhatsApp","tipo":"ddd","destino":"whatsapp","mensagem":"","exibir":"N\\u00famero com DDD","exibir2":"WhatsApp","number":"(62) 00000-0000"}]'),
	(27, 'redes', 'Canais e redes sociais', '', '[{"titulo":"Facebook","valor":"#"},{"titulo":"Instagram","valor":"#"},{"titulo":"Email","valor":"email@contato.com.br"},{"titulo":"Funcionamento","valor":"#"}]'),
	(28, 'unidades', 'Unidades', '', '[{"unidade":"Nome do Site","valor":{"telefones":{"value":{"valor":[{"label":"Contato","tipo":"ddd","destino":"telefone","mensagem":"","exibir":"N\\u00famero com DDD","exibir2":"Liga\\u00e7\\u00e3o","number":"(62) 0000-0000"}]},"internal":true}},"endereco":"Av. Lorem Ipsum","link":"https:\\/\\/goo.gl\\/maps\\/ysXw7FGA9t8QQizb8","iframe":"<iframe src=\\"https:\\/\\/www.google.com\\/maps\\/embed?pb=!1m18!1m12!1m3!1d31797723.633758873!2d-73.07984543140536!3d-13.377733535226401!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9c59c7ebcc28cf%3A0x295a1506f2293e63!2sBrasil!5e0!3m2!1spt-BR!2sbr!4v1691115514164!5m2!1spt-BR!2sbr\\" width=\\"600\\" height=\\"450\\" style=\\"border:0;\\" allowfullscreen=\\"\\" loading=\\"lazy\\" referrerpolicy=\\"no-referrer-when-downgrade\\"><\\/iframe>","cidade":"Goi\\u00e2nia","estado":"Goi\\u00e1s","cep":"0000-000"}]'),
	(29, 'formularios', 'Formulários', '', '[{"descricao":"Contato WhatsApp","assunto":"Contato WhatsApp","form_name":"whatsapp_modal","template":"<p>Ol&aacute;, %%nome%%!<br \\/>\\nRecebemos seu contato e retornaremos em breve.<\\/p>\\n","emails":[]},{"descricao":"Trabalhe Conosco","assunto":"Trabalhe Conosco","form_name":"trabalhe","template":"<p>Ol&aacute;, %%nome%%!<br \\/>\\nRecebemos seu contato e retornaremos em breve.<\\/p>\\n","emails":[]},{"descricao":"Fale Conosco","assunto":"Fale Conosco","form_name":"fale_conosco","template":"<p>Ol&aacute;, %%nome%%!<br \\/>\\nRecebemos seu contato e retornaremos em breve.<\\/p>\\n","emails":[]},{"descricao":"Or\\u00e7amento","assunto":"Or\\u00e7amento","form_name":"orcamento","template":"<p>Ol&aacute;, %%nome%%!<br \\/>\\nRecebemos seu contato e retornaremos em breve.<\\/p>\\n","emails":[]},{"descricao":"Duvidas","assunto":"Duvidas","form_name":"duvidas","template":"<p>Ol&aacute;, %%nome%%!<br \\/>\\nRecebemos seu contato e retornaremos em breve.<\\/p>\\n","emails":[]}]'),
	(30, 'emails', 'E-mails que receberão os formulários', 'Estes e-mails receberão todos os formulários de contato do site', '["joe@raddar.com.br"]'),
	(31, 'tagHead', 'Tag Manager (Head)', 'Google Tag Manager (Cabeçalho)', ''),
	(33, 'tagBody', 'Tag Manager (Body)', 'Google Tag Manager (Corpo)', ''),
	(34, 'smtp_host', 'Host', 'Host SMTP de disparo de e-mails', '"raddar.com.br"'),
	(35, 'smtp_email', 'E-mail', 'E-mail de disparo', '"git@raddar.com.br"'),
	(36, 'smtp_senha', 'Senha', 'Senha do E-mail', '"trocarsenha"'),
	(37, 'smtp_porta', 'Porta', 'Porta do Host, Ex: 587', '"465"'),
	(38, 'smtp_certificado', 'Certificado', 'Selecione o Certificado para uso no disparo', '"ssl"'),
	(46, 'keywords', 'Keywords', 'Keywords padrão do site, separe as palavras-chave com vírgulas', ''),
	(49, 'smtp_nome', 'Nome', 'Nome de exibição para envio', '"Nome do Site"'),
	(52, 'menu', 'Menu', '', '[{"titulo":"P\\u00e1gina Inicial","page":null,"tipo":"editar","icone":"home","filhos":[{"titulo":"Conte\\u00fado","page":60,"tipo":"editar","icone":"edit","filhos":[],"exibir2":"Editar","busca":"p\\u00e1gina","exibir":"P\\u00e1gina Inicial"},{"titulo":"Depoimentos","page":62,"tipo":"listar","icone":"list","filhos":[],"exibir2":"Listar","busca":"depo","exibir":"Depoimentos"}],"exibir2":"Editar"},{"titulo":"Sobre","page":109,"tipo":"editar","icone":"info","filhos":[],"exibir2":"Editar","busca":"sobre","exibir":"Sobre nos"},{"titulo":"Produtos","page":null,"tipo":"editar","icone":"dashboard","filhos":[{"titulo":"Conte\\u00fado","page":127,"tipo":"editar","icone":"edit","filhos":[],"exibir2":"Editar","busca":"prod","exibir":"Produtos"},{"titulo":"Listagem","page":127,"tipo":"listar","icone":"list","filhos":[],"exibir2":"Listar","exibir":"Produtos"},{"titulo":"Marcas","page":669,"tipo":"listar","icone":"category","link":null,"filhos":[],"exibir2":"Listar","exibir":"Marcas Dos Produtos"}],"exibir2":"Editar"},{"titulo":"D\\u00favidas","page":null,"tipo":"editar","icone":"help","filhos":[{"titulo":"Conte\\u00fado","page":119,"tipo":"editar","icone":"edit","filhos":[],"exibir2":"Editar","busca":"d\\u00favi","exibir":"D\\u00favidas"},{"titulo":"Listagem","page":119,"tipo":"listar","icone":"list","filhos":[],"exibir2":"Listar","exibir":"D\\u00favidas"}],"exibir2":"Editar"},{"titulo":"Blog","page":null,"tipo":"editar","icone":"rss_feed","filhos":[{"titulo":"Blog","page":30,"tipo":"editar","icone":"edit","filhos":[],"exibir2":"Editar","busca":"blog","exibir":"Blog"},{"titulo":"Listagem","page":30,"tipo":"listar","icone":"list","filhos":[],"exibir2":"Listar","exibir":"Blog"},{"titulo":"Categorias","page":26,"tipo":"listar","icone":"category","filhos":[],"exibir2":"Listar","exibir":"Blog Categorias"}],"exibir2":"Editar"},{"titulo":"Fale Conosco","page":74,"tipo":"editar","icone":"call","filhos":[],"exibir2":"Editar","busca":"fa","exibir":"Fale Conosco"},{"titulo":"Trabalhe Conosco","page":null,"tipo":"editar","icone":"group","link":null,"filhos":[{"titulo":"Conteudo","page":680,"tipo":"editar","icone":"edit","link":null,"filhos":[],"exibir2":"Editar","exibir":"Trabalhe Conosco"},{"titulo":"Vagas","page":680,"tipo":"listar","icone":"list","link":null,"filhos":[],"exibir2":"Listar","busca":"traba","exibir":"Trabalhe Conosco"}],"exibir2":"Editar"},{"titulo":"Pol\\u00edtica de Privacidade","page":51,"tipo":"editar","icone":"gavel","filhos":[],"exibir2":"Editar","busca":"pol","exibir":"Pol\\u00edtica de Privacidade"},{"titulo":"Termos de Uso","page":52,"tipo":"editar","icone":"gavel","filhos":[],"exibir2":"Editar","busca":"ter","exibir":"Termos de Uso"}]'),
	(53, 'smtp_usuario', 'Usuário', 'Usuário do Servidor SMTP', '"git@raddar.com.br"'),
	(54, 'emails_raddar', 'E-mails Raddar', 'Estes e-mails receberão cópias dos formulários de contato do site (sem confirmação de leitura)', ''),
	(55, 'cor_email', 'Cor E-mail', 'Cor de destaque do e-mail', '"#ffffff"'),
	(56, 'crm', 'Habilitar CRM', 'Essa função ativa o módulo de CRM no site', ''),
	(57, 'emails_rodizio', 'E-mails que receberão os formulários em rodízio', 'Estes e-mails receberão todos os formulários do site em rodízio', ''),
	(58, 'emails_rodizio_registro', 'E-mails que já receberam no ciclo do rodízio', 'Estes e-mails já receberam e-mails no ciclo do rodízio', '[]'),
	(59, 'rd_habilitar', 'Habilitar CRM RD Station', 'Essa função ativa a integração com o CRM RD Station', ''),
	(60, 'rd_empresa_telefone', 'Campo Empresa Telefone', 'ID do campo Empresa Telefone', ''),
	(61, 'rd_empresa_email', 'Campo Empresa E-mail', 'ID do campo Empresa E-mail', ''),
	(62, 'rd_oportunidade_mensagem', 'Campo Oportunidade Mensagem', 'ID do campo Oportunidade Mensagem', ''),
	(63, 'rd_oportunidade_formulario', 'Campo Oportunidade Formulário', 'ID do campo Oportunidade Formulário', ''),
	(64, 'rd_oportunidade_email', 'Campo Oportunidade Telefone', 'Campo Oportunidade E-mail', ''),
	(65, 'rd_oportunidade_email', 'Campo Oportunidade Telefone', 'Campo Oportunidade E-mail', ''),
	(66, 'rd_fonte_oportunidade', 'Fonte Oportunidade', 'ID da fonte de oportunidades vindas da integração', ''),
	(67, 'crm_token', 'Token', 'Token de integração', ''),
	(68, 'rd_reabrir', 'Reabrir Oportunidades', 'Reabrir oportunidades fechadas ao receber novas interações do mesmo contato', ''),
	(69, 'crm_token', 'Token', 'Token de integração', ''),
	(70, 'nectar_habilitar', 'Habilitar CRM Nectar', 'Essa função ativa a integração com o CRM Nectar', ''),
	(71, 'nectar_token', 'Token', 'Token de integração com o CRM Nectar', ''),
	(72, 'nectar_campos_oportunidade', 'Campos Personalizados - Oportunidade', 'Use o campo "valor" para definir o valor padrão caso esteja vazio vindo do formulário', ''),
	(73, 'nectar_campos_contato', 'Campos Personalizados - Contato', 'Use o campo "valor" para definir o valor padrão caso esteja vazio vindo do formulário', '');

-- Copiando estrutura para tabela modelo-2.app_conteudo
CREATE TABLE IF NOT EXISTS `app_conteudo` (
  `id` int NOT NULL AUTO_INCREMENT,
  `pai_id` int DEFAULT NULL,
  `status` tinyint DEFAULT NULL,
  `conf_pagina` tinyint DEFAULT NULL,
  `conf_internas` tinyint DEFAULT NULL,
  `conf_bloquear` tinyint DEFAULT NULL,
  `conf_nao_excluir` tinyint DEFAULT NULL,
  `filho_pagina` tinyint DEFAULT NULL,
  `filho_internas` tinyint DEFAULT NULL,
  `filho_nao_excluir` tinyint DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `ordem` int DEFAULT '999',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=708 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Copiando dados para a tabela modelo-2.app_conteudo: ~56 rows (aproximadamente)
INSERT IGNORE INTO `app_conteudo` (`id`, `pai_id`, `status`, `conf_pagina`, `conf_internas`, `conf_bloquear`, `conf_nao_excluir`, `filho_pagina`, `filho_internas`, `filho_nao_excluir`, `updated_at`, `created_at`, `ordem`) VALUES
	(26, NULL, 1, 1, 1, 1, 1, 1, 0, 0, '2023-08-04 23:41:13', '2021-04-01 15:45:35', 9),
	(30, NULL, 1, 1, 1, 0, 1, 1, 0, 0, '2023-08-04 23:41:13', '2021-04-01 15:50:23', 8),
	(51, NULL, 1, 1, 0, 1, 1, 0, 0, 0, '2023-08-04 23:41:13', '2021-04-07 11:29:35', 12),
	(52, NULL, 1, 1, 0, 1, 1, 0, 0, 0, '2023-08-04 23:41:13', '2021-04-07 11:30:03', 13),
	(60, NULL, 1, 0, 0, 1, 1, 0, 0, 0, '2023-08-04 23:41:13', '2021-04-27 08:31:15', 0),
	(62, NULL, 1, 0, 1, 1, 1, 0, 0, 0, '2023-08-04 23:41:13', '2021-04-27 11:12:23', 5),
	(74, NULL, 1, 1, 0, 0, 0, 0, 0, 0, '2023-08-04 23:41:13', '2021-04-28 10:39:31', 10),
	(103, 26, 1, 1, 0, 0, 0, 0, 0, 0, '2021-08-19 09:41:58', '2021-06-21 17:03:15', 999),
	(106, 30, 1, 1, 0, 0, 0, 0, 0, 0, '2021-09-29 15:51:01', '2021-06-21 17:15:59', 999),
	(109, NULL, 1, 1, 0, 0, 0, 0, 0, 0, '2023-08-04 23:41:13', '2021-06-22 17:11:33', 1),
	(119, NULL, 1, 1, 1, 0, 0, 0, 0, 0, '2023-08-04 23:41:13', '2021-09-21 16:32:44', 6),
	(127, NULL, 1, 1, 1, 0, 0, 1, 0, 0, '2023-08-04 23:41:13', '2021-09-24 14:38:08', 2),
	(131, 30, 1, 1, 0, 0, 0, 0, 0, 0, '2023-01-19 09:29:40', '2021-09-29 10:43:18', 999),
	(153, 62, 1, 0, 0, 0, 0, 0, 0, 0, '2022-08-08 10:24:52', '2022-07-11 14:49:24', 999),
	(154, 62, 1, 0, 0, 0, 0, 0, 0, 0, '2022-08-08 10:25:30', '2022-07-11 14:49:29', 999),
	(155, 62, 1, 0, 0, 0, 0, 0, 0, 0, '2022-08-08 10:24:16', '2022-07-11 14:49:38', 999),
	(160, 62, 1, 0, 0, 0, 0, 0, 0, 0, '2022-08-08 10:25:39', '2022-08-08 10:25:39', 999),
	(162, 26, 1, 1, 0, 0, 0, 0, 0, 0, '2022-09-19 15:26:48', '2022-08-08 16:13:11', 999),
	(189, 119, 1, 0, 0, 0, 0, 0, 0, 0, '2022-08-19 17:37:49', '2022-08-19 16:42:51', 999),
	(194, 119, 1, 0, 0, 0, 0, 0, 0, 0, '2022-09-20 10:27:03', '2022-08-19 17:36:42', 999),
	(357, 119, 1, 0, 0, 0, 0, 0, 0, 0, '2022-01-20 15:37:31', '2022-01-20 15:36:44', 999),
	(376, 372, 1, 0, 0, 0, 0, 0, 0, 0, '2022-05-25 01:49:21', '2022-05-25 01:46:34', 999),
	(380, 379, 1, 0, 0, 0, 0, 0, 0, 0, '2022-05-25 01:58:17', '2022-05-25 01:58:17', 999),
	(382, 381, 1, 0, 0, 0, 0, 0, 0, 0, '2022-05-25 01:59:46', '2022-05-25 01:59:46', 999),
	(384, 383, 1, 0, 0, 0, 0, 0, 0, 0, '2022-05-25 02:00:34', '2022-05-25 02:00:34', 999),
	(408, 407, 1, 0, 0, 0, 0, 0, 0, 0, '2022-07-05 02:45:59', '2022-07-05 02:45:59', 999),
	(410, 409, 1, 0, 0, 0, 0, 0, 0, 0, '2022-07-05 02:47:10', '2022-07-05 02:47:10', 999),
	(412, 411, 1, 0, 0, 0, 0, 0, 0, 0, '2022-07-05 02:47:53', '2022-07-05 02:47:53', 999),
	(490, 119, 1, 0, 0, 0, 0, 0, 0, 0, '2022-12-22 15:21:12', '2022-07-21 11:08:22', 999),
	(644, 30, 1, 1, 0, 0, 0, 0, 0, 0, '2022-12-06 11:09:45', '2022-12-06 11:09:45', 999),
	(649, 30, 1, 1, 0, 0, 0, 0, 0, 0, '2022-12-06 11:10:12', '2022-12-06 11:10:12', 999),
	(653, 127, 1, 1, 0, 0, 0, 0, 0, 0, '2023-01-23 15:06:57', '2023-01-23 14:49:04', 999),
	(654, 127, 1, 1, 0, 0, 0, 0, 0, 0, '2023-01-23 15:07:31', '2023-01-23 14:49:17', 999),
	(668, 26, 1, 1, 0, 0, 0, 0, 0, 0, '2023-07-15 14:41:54', '2023-03-09 14:34:17', 999),
	(669, NULL, 1, 1, 1, 1, 0, 1, 0, 0, '2023-08-04 23:41:13', '2023-03-13 12:21:00', 3),
	(670, 669, 1, 1, 0, 0, 0, 0, 0, 0, '2023-07-15 15:15:56', '2023-03-13 12:21:31', 999),
	(671, 669, 1, 1, 0, 0, 0, 0, 0, 0, '2023-07-15 15:16:03', '2023-03-13 12:22:09', 999),
	(672, 669, 1, 1, 0, 0, 0, 0, 0, 0, '2023-07-15 15:16:09', '2023-03-13 12:22:24', 999),
	(678, NULL, 1, 1, 0, 0, 0, 0, 0, 0, '2023-08-04 23:41:13', '2023-03-15 09:10:12', 4),
	(680, NULL, 1, 1, 1, 0, 0, 0, 0, 0, '2023-08-04 23:41:13', '2023-07-07 09:42:01', 11),
	(682, 680, 1, 0, 0, NULL, 0, NULL, NULL, NULL, '2023-07-12 11:17:29', '2023-07-12 11:17:29', 999),
	(683, 680, 1, 0, 0, NULL, 0, NULL, NULL, NULL, '2023-07-12 11:17:37', '2023-07-12 11:17:37', 999),
	(684, 680, 1, 0, 0, NULL, 0, NULL, NULL, NULL, '2023-07-12 11:17:40', '2023-07-12 11:17:40', 999),
	(694, 30, 1, 1, 0, 0, 0, 0, 0, 0, '2023-07-13 00:15:11', '2023-07-13 00:15:11', 999),
	(696, 127, 1, 1, 0, 0, 0, 0, 0, 0, '2023-07-15 16:32:31', '2023-07-15 16:32:31', 999),
	(697, 127, 1, 1, 0, 0, 0, 0, 0, 0, '2023-07-15 16:32:41', '2023-07-15 16:32:41', 999),
	(698, 127, 1, 1, 0, 0, 0, 0, 0, 0, '2023-07-15 16:32:47', '2023-07-15 16:32:47', 999),
	(699, 127, 1, 1, 0, 0, 0, 0, 0, 0, '2023-07-15 16:58:29', '2023-07-15 16:58:29', 999),
	(700, 127, 1, 1, 0, 0, 0, 0, 0, 0, '2023-07-15 16:58:34', '2023-07-15 16:58:34', 999),
	(701, 127, 1, 1, 0, 0, 0, 0, 0, 0, '2023-07-15 16:58:37', '2023-07-15 16:58:37', 999),
	(703, 669, 1, 1, 0, 0, 0, 0, 0, 0, '2023-08-03 23:07:33', '2023-07-15 19:36:13', 999),
	(704, NULL, 1, 1, 1, 0, 0, 1, 0, 0, '2023-08-04 23:41:13', '2023-08-02 22:55:01', 7),
	(705, 704, 1, 1, 0, 0, 0, 0, 0, 0, '2023-08-03 23:15:09', '2023-08-02 22:55:17', 999),
	(706, 704, 1, 1, 0, 0, 0, 0, 0, 0, '2023-08-03 23:15:14', '2023-08-02 22:55:29', 999),
	(707, 704, 1, 1, 0, 0, 0, 0, 0, 0, '2023-08-03 23:15:20', '2023-08-02 22:55:36', 999);

-- Copiando estrutura para tabela modelo-2.app_conteudo_campos
CREATE TABLE IF NOT EXISTS `app_conteudo_campos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `conteudo_id` int DEFAULT NULL,
  `filho` int DEFAULT NULL,
  `type` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `rel` int DEFAULT NULL,
  `options` text CHARACTER SET latin1,
  `label` varchar(250) CHARACTER SET latin1 DEFAULT NULL,
  `name` varchar(250) CHARACTER SET latin1 DEFAULT NULL,
  `seo` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `default_value` text CHARACTER SET latin1,
  `instruction` text CHARACTER SET latin1,
  `ordem` int DEFAULT NULL,
  `status` int DEFAULT NULL,
  `limite` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1529 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Copiando dados para a tabela modelo-2.app_conteudo_campos: ~45 rows (aproximadamente)
INSERT IGNORE INTO `app_conteudo_campos` (`id`, `conteudo_id`, `filho`, `type`, `rel`, `options`, `label`, `name`, `seo`, `default_value`, `instruction`, `ordem`, `status`, `limite`) VALUES
	(60, 30, 1, 'image', NULL, '', 'Imagem', 'imagem', 'image', '', '', 1, 1, NULL),
	(61, 30, 1, 'editor', NULL, '', 'Texto', 'texto', NULL, '', '', 5, 1, NULL),
	(62, 30, 1, 'textarea', NULL, '', 'Resumo', 'resumo', 'description', '', '', 2, 1, NULL),
	(86, 30, 1, 'relationship', 26, '', 'Categoria', 'category', NULL, '', '', 0, 1, NULL),
	(90, 52, NULL, 'editor', NULL, '', 'Texto', 'text', NULL, '', '', 1, 1, NULL),
	(124, 62, 1, 'textarea', NULL, '', 'Depoimento', 'depoimento', 'description', '', '', 0, 1, NULL),
	(492, 119, 1, 'textarea', NULL, '', 'Resposta', 'resposta', NULL, '', '', 0, 1, NULL),
	(493, 119, 1, 'relationship', 704, '', 'Categoria', 'category', NULL, '', '', 1, 1, NULL),
	(630, 109, NULL, 'image', NULL, '', 'Banner', 'banner', 'description', '', '', 0, 1, NULL),
	(750, 60, NULL, 'repeaterPersonalizado', NULL, '[{"label":"Banner Desktop","type":"image","name":"banner-desktop","typeLabel":"Imagem"},{"label":"Texto","type":"editor","name":"text","typeLabel":"Editor de Texto"},{"label":"Banner Mobile","type":"image","name":"banner-mobile","typeLabel":"Imagem"}]', 'Banner', 'banner-home', NULL, '', 'Banners Desktops e Banners Mobiles', 1, 1, NULL),
	(1002, 60, NULL, 'separator', NULL, '', 'Banners', 'banners', NULL, '', '', 0, 1, NULL),
	(1098, 60, NULL, 'separator', NULL, '', '---------------------------', '', NULL, '', '', 2, 1, NULL),
	(1223, 30, 1, 'separator', NULL, '', 'Interna', '', NULL, '', '', 3, 1, NULL),
	(1224, 30, 1, 'image', NULL, '', 'Imagem Interna', 'imagem-interna', NULL, '', '', 4, 1, NULL),
	(1226, 109, NULL, 'editor', NULL, '', 'Texto', 'banner-text', NULL, '', '', 1, 1, NULL),
	(1243, 52, NULL, 'separator', NULL, '', 'Geral', '', NULL, '', '', 0, 1, NULL),
	(1249, 74, NULL, 'editor', NULL, '', 'Texto', 'banner-text', NULL, '', '', 1, 1, NULL),
	(1250, 74, NULL, 'image', NULL, '', 'Banner', 'banner', NULL, '', '', 0, 1, NULL),
	(1258, 51, NULL, 'separator', NULL, '', 'Geral', '', NULL, '', '', 0, 1, NULL),
	(1263, 51, NULL, 'editor', NULL, '', 'Texto', 'text', NULL, '', '', 1, 1, NULL),
	(1445, 680, NULL, 'image', NULL, '', 'Banner', 'banner', NULL, '', '', 0, 1, NULL),
	(1446, 680, NULL, 'editor', NULL, '', 'Texto - Banner', 'banner-text', NULL, '', '', 1, 1, NULL),
	(1472, 30, NULL, 'image', NULL, '', 'Banner', 'banner', NULL, '', '', 0, 1, NULL),
	(1473, 30, NULL, 'editor', NULL, '', 'Text', 'banner-text', NULL, '', '', 1, 1, NULL),
	(1490, 62, 1, 'image', NULL, '', 'Imagem', 'image', NULL, '', '', 1, 1, NULL),
	(1508, 127, NULL, 'image', NULL, '', 'Banner', 'banner', NULL, '', '', 0, 1, NULL),
	(1509, 127, NULL, 'editor', NULL, '', 'Texto', 'banner-text', NULL, '', '', 1, 1, NULL),
	(1510, 127, 1, 'relationship', 669, '', 'Categoria', 'category', NULL, '', '', 0, 1, NULL),
	(1511, 127, 1, 'truefalse', NULL, '', 'Destaque / Pielsana', 'highlight', NULL, '', '', 1, 1, NULL),
	(1512, 127, 1, 'image', NULL, '', 'Imagem', 'image', NULL, '', '', 2, 1, NULL),
	(1513, 127, 1, 'gallery', NULL, '', 'Galeria', 'gallery', NULL, '', '', 3, 1, NULL),
	(1514, 127, 1, 'textarea', NULL, '', 'Resum', 'resum', NULL, '', '', 4, 1, NULL),
	(1526, 119, NULL, 'image', NULL, '', 'Banner', 'banner', NULL, '', '', 0, 1, NULL),
	(1527, 119, NULL, 'editor', NULL, '', 'Texto', 'banner-text', NULL, '', '', 1, 1, NULL);

-- Copiando estrutura para tabela modelo-2.app_conteudo_idioma
CREATE TABLE IF NOT EXISTS `app_conteudo_idioma` (
  `id` int NOT NULL AUTO_INCREMENT,
  `conteudo_id` int DEFAULT NULL,
  `titulo` varchar(250) CHARACTER SET latin1 DEFAULT NULL,
  `uri` varchar(250) CHARACTER SET latin1 DEFAULT NULL,
  `idioma_id` int DEFAULT NULL,
  `seo_description_manual` tinyint DEFAULT NULL,
  `seo_description` varchar(250) CHARACTER SET latin1 DEFAULT NULL,
  `seo_image_manual` tinyint DEFAULT NULL,
  `seo_image` varchar(250) CHARACTER SET latin1 DEFAULT NULL,
  `seo_keywords` text CHARACTER SET latin1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=708 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Copiando dados para a tabela modelo-2.app_conteudo_idioma: ~56 rows (aproximadamente)
INSERT IGNORE INTO `app_conteudo_idioma` (`id`, `conteudo_id`, `titulo`, `uri`, `idioma_id`, `seo_description_manual`, `seo_description`, `seo_image_manual`, `seo_image`, `seo_keywords`) VALUES
	(26, 26, 'Categorias / Blog', 'blog-categorias', 1, 0, '', 0, '', ''),
	(30, 30, 'Blog', 'blog', 1, 0, ' Blog ', 0, '', ''),
	(51, 51, 'Política de Privacidade', 'politica-de-privacidade', 1, 0, 'Política de Privacidade', 0, '', ''),
	(52, 52, 'Termos de Uso', 'termos-de-uso', 1, 0, 'Termos de Uso', 0, '', ''),
	(60, 60, 'Página Inicial', 'pagina-inicial', 1, 0, '', 0, '', ''),
	(62, 62, 'Depoimentos', 'depoimentos', 1, 0, '', 0, '', ''),
	(74, 74, 'Fale Conosco', 'fale-conosco', 1, 0, ' Fale Conosco ', 0, '', ''),
	(103, 103, 'Categoria 1', 'categoria-1', 1, 0, '', 0, '', ''),
	(106, 106, 'Post 4', 'post-4', 1, 0, '', 0, '', ''),
	(109, 109, 'Sobre nos', 'sobre-nos', 1, 1, 'Sobre', 0, '', ''),
	(119, 119, 'Dúvidas', 'duvidas', 1, 0, ' Dúvidas ', 0, '', ''),
	(127, 127, 'Produtos', 'produtos', 1, 1, 'Produtos', 0, '', ''),
	(131, 131, 'Post 3', 'post-3', 1, 0, '', 0, '', ''),
	(153, 153, 'Maria Oliveira', 'b-a', 1, 0, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ac eros eu diam iaculis iaculis.', 0, '', ''),
	(154, 154, 'João Santos', 'l-m', 1, 0, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ac eros eu diam iaculis iaculis.', 0, '', ''),
	(155, 155, 'Maria Silva', 'a-g', 1, 0, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ac eros eu diam iaculis iaculis.', 0, '', ''),
	(160, 160, 'Nathan Queiroz', 'b-a', 1, 0, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ac eros eu diam iaculis iaculis.', 0, '', ''),
	(162, 162, 'Categoria 2', 'categoria-2', 1, 0, '', 0, '', ''),
	(189, 189, 'Duvida 04', 'quais-os-tipos-de-manutencao-com-as-quais-voce-trabalha-', 1, 0, '', 0, '', ''),
	(194, 194, 'Duvida 01', 'as-miniescavadeiras-sao-indicadas-para-reformas-', 1, 0, '', 0, '', ''),
	(357, 357, 'Duvida 02', 'como-e-feito-o-calculo-das-despesas-', 1, 0, '', 0, '', ''),
	(376, 376, 'Bolas de Sinuca', 'bolas-de-sinuca', 1, 0, '', 0, '', ''),
	(380, 380, 'Bolas de Sinuca', 'bolas-de-sinuca', 1, 0, '', 0, '', ''),
	(382, 382, 'Bolas de Sinuca', 'bolas-de-sinuca', 1, 0, '', 0, '', ''),
	(384, 384, 'Bolas de Sinuca', 'bolas-de-sinuca', 1, 0, '', 0, '', ''),
	(408, 408, 'Bolas de Sinuca', 'bolas-de-sinuca', 1, 0, '', 0, '', ''),
	(410, 410, 'Bolas de Sinuca', 'bolas-de-sinuca', 1, 0, '', 0, '', ''),
	(412, 412, 'Bolas de Sinuca', 'bolas-de-sinuca', 1, 0, '', 0, '', ''),
	(490, 490, 'Duvida 03', 'como-faco-para-saber-o-valor-da-minha-compra-', 1, 0, '', 0, '', ''),
	(644, 644, 'Post 2', 'post-2', 1, 1, '', 1, '', ''),
	(649, 649, 'Post 1', 'post-1', 1, 1, '', 1, '', ''),
	(653, 653, 'Produto 1', 'produto-1', 1, 0, '', 0, '', ''),
	(654, 654, 'Produto 2', 'produto-2', 1, 0, '', 0, '', ''),
	(668, 668, 'Categoria 3', 'categoria-3', 1, 0, '', 0, '', ''),
	(669, 669, 'Categorias / Produtos', 'produtos-categorias', 1, 0, '', 0, '', ''),
	(670, 670, 'Categoria 1', 'categoria-1', 1, 0, '', 0, '', ''),
	(671, 671, 'Categoria 2', 'categoria-2', 1, 0, '', 0, '', ''),
	(672, 672, 'Categoria 3', 'categoria-3', 1, 0, '', 0, '', ''),
	(678, 678, 'Carrinho', 'carrinho', 1, 0, '', 0, '', ''),
	(680, 680, 'Trabalhe Conosco', 'trabalhe-conosco', 1, 0, 'Trabalhe Conosco', 0, '', ''),
	(682, 682, 'vaga 1', 'vaga-1', 1, 0, '', 0, '', ''),
	(683, 683, 'vaga 2', 'vaga-2', 1, 0, '', 0, '', ''),
	(684, 684, 'vaga 3', 'vaga-3', 1, 0, '', 0, '', ''),
	(694, 694, 'Post 5', 'post-5', 1, 0, '', 0, '', ''),
	(696, 696, 'Produto 3', 'produto-3', 1, 0, '', 0, '', ''),
	(697, 697, 'Produto 4', 'produto-4', 1, 0, '', 0, '', ''),
	(698, 698, 'Produto 5', 'produto-5', 1, 0, '', 0, '', ''),
	(699, 699, 'Produto 6', 'produto-6', 1, 0, '', 0, '', ''),
	(700, 700, 'Produto 7', 'produto-7', 1, 0, '', 0, '', ''),
	(701, 701, 'Produto 8', 'produto-8', 1, 0, '', 0, '', ''),
	(703, 703, 'Categoria 4', 'categoria-4', 1, 0, '', 0, '', ''),
	(704, 704, 'Categorias - Duvidas', 'duvidas-categorias', 1, 0, '', 0, '', ''),
	(705, 705, 'Categoria 1', 'categoria-1', 1, 0, '', 0, '', ''),
	(706, 706, 'Categoria 2', 'categoria-2', 1, 0, '', 0, '', ''),
	(707, 707, 'Categoria 3', 'categoria-3', 1, 0, '', 0, '', '');

-- Copiando estrutura para tabela modelo-2.app_conteudo_valor
CREATE TABLE IF NOT EXISTS `app_conteudo_valor` (
  `id` int NOT NULL AUTO_INCREMENT,
  `idioma_id` int NOT NULL,
  `conteudo_id` int DEFAULT NULL,
  `configuracao_id` int DEFAULT NULL,
  `valor` longtext CHARACTER SET latin1,
  `ordem_valor` int DEFAULT NULL,
  PRIMARY KEY (`id`,`idioma_id`)
) ENGINE=InnoDB AUTO_INCREMENT=1104 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Copiando dados para a tabela modelo-2.app_conteudo_valor: ~0 rows (aproximadamente)
INSERT IGNORE INTO `app_conteudo_valor` (`id`, `idioma_id`, `conteudo_id`, `configuracao_id`, `valor`, `ordem_valor`) VALUES
	(28, 1, 60, 1002, '', 1),
	(29, 1, 60, 750, '[[{"label":"Banner Desktop","name":"banner-desktop","options":[],"value":{"valor":{"url":"","status":true}},"type":"image"},{"label":"Texto","name":"text","options":[],"value":{"valor":""},"type":"editor"},{"label":"Banner Mobile","name":"banner-mobile","options":[],"value":{"valor":{"url":"","status":true}},"type":"image"}]]', 1),
	(75, 1, 109, 630, '{"url":"","status":true}', 1),
	(90, 1, 106, 86, '103', 1),
	(91, 1, 106, 60, '{"url":"","status":true}', 1),
	(92, 1, 106, 62, '', 1),
	(93, 1, 106, 61, '', 1),
	(94, 1, 131, 86, '668', 1),
	(95, 1, 131, 60, '{"url":"","status":true}', 1),
	(96, 1, 131, 62, '', 1),
	(97, 1, 131, 61, '', 1),
	(102, 1, 153, 124, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ac eros eu diam iaculis iaculis.', 1),
	(103, 1, 160, 124, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ac eros eu diam iaculis iaculis.', 1),
	(104, 1, 155, 124, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ac eros eu diam iaculis iaculis.', 1),
	(105, 1, 154, 124, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ac eros eu diam iaculis iaculis.', 1),
	(123, 1, 644, 86, '668', 1),
	(124, 1, 644, 60, '{"url":"","status":true}', 1),
	(125, 1, 644, 62, '', 1),
	(126, 1, 644, 61, '<p>Em primeiro lugar, precisamos esclarecer que, embora pare&ccedil;am iguais, os conceitos de Agricultura de Precis&atilde;o e de Agricultura Digital ou Agricultura 4.0 n&atilde;o s&atilde;o os mesmos. O uso de imagens e tecnologias como GPS, sensoriamento remoto, geoprocessamento, e sua aplica&ccedil;&atilde;o para um melhor gerenciamento agr&iacute;cola, j&aacute; s&atilde;o consideradas t&eacute;cnicas consolidadas no agroneg&oacute;cio e englobam a Agricultura de Precis&atilde;o. A Agricultura de Precis&atilde;o no Brasil teve in&iacute;cio nos anos 90 e consolidou a chamada terceira revolu&ccedil;&atilde;o agr&iacute;cola.</p>\n\n<p>J&aacute; essa nova era digital pela qual o agroneg&oacute;cio vem passando &eacute; considerada a quarta revolu&ccedil;&atilde;o agr&iacute;cola, e por isso &eacute; chamada de Agricultura 4.0.</p>\n\n<p>A Agricultura 4.0 incorpora os princ&iacute;pios e as ferramentas da Agricultura de Precis&atilde;o integradas &agrave;s novas tecnologias de an&aacute;lise de dados, intelig&ecirc;ncia artificial e Internet das coisas.</p>\n\n<p>Essas tecnologias, que surgiram na chamada quarta revolu&ccedil;&atilde;o industrial, conectam dados, m&aacute;quinas inteligentes, sistemas automatizados e conceitos de gest&atilde;o administrativa nas tomadas de decis&atilde;o.</p>\n\n<p>Quais tecnologias s&atilde;o utilizadas na Agricultura 4.0?<br />\nEntre as tecnologias aplicadas na nova era digital agr&iacute;cola n&oacute;s temos principalmente os drones, a Internet das Coisas, Big Data, Blockchain e Intelig&ecirc;ncia Artificial. Vamos conhecer cada um de forma simplificada:</p>\n\n<ul>\n	<li>Drone &eacute; um Ve&iacute;culo A&eacute;reo N&atilde;o Tripulado (VANT), controlado remotamente.</li>\n	<li>Na agricultura eles s&atilde;o equipados com tecnologia de Infravermelho, auxiliando no monitoramento do &iacute;ndice vegetativo das lavouras.</li>\n	<li>Internet das Coisas (Internet of Things &ndash; IoT) &eacute; o conceito da conex&atilde;o entre os sensores e softwares, a coleta e processamento de dados e seus usu&aacute;rios, como o objetivo de integrar ferramentas e simplificar a tomada de decis&otilde;es.</li>\n	<li>Big Data nada mais &eacute; do que a an&aacute;lise de uma grande variedade de dados da lavoura e a combina&ccedil;&atilde;o desses dados com outras informa&ccedil;&otilde;es, como hist&oacute;rico da &aacute;rea e dados clim&aacute;ticos, para otimizar os processos.</li>\n	<li>Esses dados podem ser obtidos atrav&eacute;s de ferramentas como dados de coleta de solo, imagens de sat&eacute;lite, ou informa&ccedil;&otilde;es adicionadas &agrave; plataforma pelo pr&oacute;prio produtor ou consultor.</li>\n	<li>Blockchain &eacute; o conceito do monitoramento e armazenamento na nuvem das informa&ccedil;&otilde;es dos produtos desde sua produ&ccedil;&atilde;o at&eacute; sua comercializa&ccedil;&atilde;o.</li>\n	<li>Esse sistema permiteaumentar a rastreabilidade do produto, o que pode facilitar a obten&ccedil;&atilde;o de certifica&ccedil;&otilde;es, por exemplo.</li>\n	<li>Intelig&ecirc;ncia Artificial e rob&oacute;tica s&atilde;o aplicadas a agricultura principalmente na interpreta&ccedil;&atilde;o de dados, como para aplica&ccedil;&atilde;o de taxa vari&aacute;vel de fertilizantes no campo.</li>\n</ul>\n', 1),
	(143, 1, 649, 86, '668', 1),
	(144, 1, 649, 60, '{"url":"","status":true}', 1),
	(145, 1, 649, 62, 'Vitae adipiscing tu enean ligula nibhmolestie id viverra dapilo eleifend Aliquam sem conubia. Vitae adipiscing tu enean ligula nibhmolestie id viverra dapilo eleifend Aliquam sem conubia. Vitae adipiscing tu enean ligula nibhmolestie id viverra dapilo eleifend Aliquam sem conubia.', 1),
	(146, 1, 649, 61, '', 1),
	(154, 1, 60, 1098, '', 1),
	(520, 1, 490, 492, 'Lorem ipsum...', 1),
	(521, 1, 490, 493, '', 1),
	(522, 1, 189, 492, 'Lorem ipsum...', 1),
	(523, 1, 189, 493, '', 1),
	(524, 1, 194, 492, 'lorem ipsum dolor ammet', 1),
	(525, 1, 194, 493, '', 1),
	(526, 1, 357, 492, 'Lorem ipsum...', 1),
	(527, 1, 357, 493, '', 1),
	(529, 1, 644, 1223, '', 1),
	(530, 1, 644, 1224, '{"url":"","status":true}', 1),
	(532, 1, 109, 1226, '<h1>Sobre</h1>\n', 1),
	(549, 1, 52, 90, '<h4>IMPORTANTE! ESSES TERMOS DE SERVI&Ccedil;O REGULAM O USO DESTE SITE DISPONIBILIZADO PELA Nome do Site. AO ACESSAR A ESSE SITE, VOC&Ecirc; ATESTA SEU CONHECIMENTO E CONCORD&Acirc;NCIA COM ESSES TERMOS DE USO.</h4>\n\n<h4>ESSES TERMOS DE USO PODEM SER ALTERADOS A QUALQUER TEMPO E SEM AVISO. AS UTILIZA&Ccedil;&Otilde;ES DESTE SITE AP&Oacute;S TAIS ALTERA&Ccedil;&Otilde;ES ENTREM EM VIGOR CONSTITUI SEU CONHECIMENTO E ACEITA&Ccedil;&Atilde;O DAS MUDAN&Ccedil;AS.</h4>\n\n<h4>POR FAVOR, CONSULTE OS TERMOS DE USO ANTES DE CADA USO PARA AVERIGUAR MODIFICA&Ccedil;&Otilde;ES.</h4>\n\n<h3>Acesso ao site</h3>\n\n<p>Para acessar a esse site ou alguns dos recursos que ele oferece, pode ser requerido que voc&ecirc; forne&ccedil;a alguns detalhes para inscri&ccedil;&atilde;o ou outras informa&ccedil;&otilde;es. &Eacute; uma condi&ccedil;&atilde;o de uso deste site que toda a informa&ccedil;&atilde;o que voc&ecirc; forne&ccedil;a seja correta, atualizada e completa.<br />\nSe a Empresa acreditar que a informa&ccedil;&atilde;o que a informa&ccedil;&atilde;o fornecida n&atilde;o &eacute; correta, atualizada ou completa, temos o direito de recusar o seu acesso a esse site ou qualquer um de seus servi&ccedil;os e tamb&eacute;m de cancelar ou suspender seu acesso a qualquer tempo sem notifica&ccedil;&atilde;o pr&eacute;via.</p>\n\n<h3>Restri&ccedil;&otilde;es de uso</h3>\n\n<p>Voc&ecirc; pode utilizar esse site para prop&oacute;sitos expressamente permitidos por esse site. Voc&ecirc; n&atilde;o pode utiliz&aacute;-lo em qualquer outro objetivo, incluindo prop&oacute;sitos comerciais, sem o consentimento pr&eacute;vio expresso e escrito da nossa Empresa. Por exemplo, voc&ecirc; n&atilde;o pode (e tampouco pode autorizar a terceiros) a (i) associar a marca da nossa Empresa a nenhuma outra, ou (ii) fazer um frame deste site em outro ou (iii) fazer um hiperlink para este site sem a autoriza&ccedil;&atilde;o expressa pr&eacute;via e escrita de um representante da nossa Empresa.<br />\nPara efeitos deste termo de uso desses Termos de Uso, &ldquo;associar a marca da nossa Empresa&rdquo; significa expor nome, logo, marca comercial ou outros meios de atribui&ccedil;&atilde;o ou identifica&ccedil;&atilde;o em fonte de maneira que d&ecirc; ao usu&aacute;rio a impress&atilde;o de que tal fonte tem o direito de expor, publicar ou distribuir este site ou o conte&uacute;do disponibilizado por ele.<br />\nVoc&ecirc; concorda em cooperar com a Empresa para cessar qualquer associa&ccedil;&atilde;o, frame ou hiperlink n&atilde;o autorizados. Propriedade da Informa&ccedil;&atilde;o, o material e conte&uacute;do (referido nesse documento como &ldquo;conte&uacute;do&rdquo;) acess&iacute;veis neste site e qualquer outro web site de propriedade, licenciado ou controlado pela nossa Empresa pertence &agrave; Empresa ou da fonte que forneceu o conte&uacute;do &agrave; nossa Empresa, e nossa Empresa ou a fonte em quest&atilde;o det&eacute;m todo o direito, t&iacute;tulo e proveito no Conte&uacute;do.<br />\nDa mesma forma, o conte&uacute;do n&atilde;o pode ser copiado, distribu&iacute;do, republicado, carregado, postado ou transmitido por qualquer meio sem o consentimento pr&eacute;vio escrito de nossa Empresa, ou ao menos que esteja autorizado de forma escrita no nosso site, exceto quando voc&ecirc; imprime uma c&oacute;pia para seu uso pessoal somente. Ao fazer isso, voc&ecirc; n&atilde;o pode remover, alterar ou causar remo&ccedil;&atilde;o ou altera&ccedil;&atilde;o em qualquer copyright, marca comercial, nome comercial, marca de servi&ccedil;o ou qualquer outro aviso de propriedade no Conte&uacute;do.<br />\nModifica&ccedil;&atilde;o ou uso do Conte&uacute;do em qualquer outra forma que n&atilde;o as expressamente descritas nesse Termo de Uso, viola os direitos de propriedade intelectual de nossa Empresa.<br />\nNem autoria nem a propriedade intelectual s&atilde;o transferidas para voc&ecirc; ao acessar esse site.</p>\n\n<h3>Hiperlinks</h3>\n\n<p>Este site pode conter links para outros websites que n&atilde;o s&atilde;o mantidos ou mesmo relacionados &agrave; nossa Empresa. Hiperlinks para tais sites s&atilde;o providos como um servi&ccedil;o para usu&aacute;rios e n&atilde;o s&atilde;o afiliados a este site ou &agrave; nossa Empresa.<br />\nNossa Empresa n&atilde;o revisa todos ou mesmo nenhum desses sites e n&atilde;o &eacute; respons&aacute;vel pelo conte&uacute;do deles. O usu&aacute;rio assume o risco ao acessar esses hiperlinks e nossa Empresa n&atilde;o faz nenhuma representa&ccedil;&atilde;o ou d&aacute; garantias sobre a plenitude ou precis&atilde;o dos hiperlinks e os sites ao quais eles direcionam. Finalmente, a conclus&atilde;o de qualquer hiperlink para um site de terceiro n&atilde;o necessariamente implica endosso da nossa Empresa para esse site.</p>\n\n<h3>Envios</h3>\n\n<p>Por este termo, voc&ecirc; garante &agrave; nossa Empresa o direito e licen&ccedil;a royalty-free, perp&eacute;tuo, irrevoc&aacute;vel, global n&atilde;o exclusivo de usar, reproduzir, modificar, adaptar, publicar, traduzir, criar trabalhos derivados, distribuir, representar e expor todo o conte&uacute;do, observa&ccedil;&otilde;es, sugest&otilde;es, id&eacute;ias, desenhos ou outras informa&ccedil;&otilde;es comunicadas &agrave; nossa Empresa por esse site (juntos, denominados agora como &ldquo;Envios&rdquo;), e incorporar qualquer Envio em outros trabalhos em qualquer formato, m&iacute;dia ou tecnologia conhecida hoje ou ainda a ser desenvolvida.</p>\n\n<p>Nossa Empresa n&atilde;o ser&aacute; obrigada a tratar nenhum Envio como confidencial e pode usar qualquer Envio em seu neg&oacute;cio (incluindo e n&atilde;o se limitando a produtos ou propaganda) sem ser imputada nenhuma responsabilidade por royalties ou qualquer outra considera&ccedil;&atilde;o de qualquer tipo e como resultado n&atilde;o fica respons&aacute;vel por qualquer similaridade que possa aparecer em opera&ccedil;&otilde;es futuras da Empresa.<br />\nNossa Empresa tratar&aacute; qualquer informa&ccedil;&atilde;o pessoal que voc&ecirc; submeter por esse site de acordo com as Pol&iacute;ticas de Privacidade do site.</p>\n\n<p>&nbsp;</p>\n\n<h3>Aviso Legal:</h3>\n\n<p>Voc&ecirc; entende que nossa Empresa n&atilde;o pode e n&atilde;o garante que arquivos dispon&iacute;veis para download da Internet estejam livres de v&iacute;rus, worms, cavalos de Tr&oacute;ia ou outro c&oacute;digo que possa manifestar propriedades contaminadoras ou destrutivas.<br />\nVoc&ecirc; &eacute; respons&aacute;vel por implementar procedimentos e checkpoints suficientes para satisfazer seus requisitos de seguran&ccedil;a e por manter meios externos a este site para reconstru&ccedil;&atilde;o de qualquer dado perdido.<br />\nNossa Empresa n&atilde;o assume nenhuma responsabilidade ou risco pelo uso da internet.<br />\nO Conte&uacute;do n&atilde;o &eacute; necessariamente completo e atualizado e n&atilde;o deve ser usado para substituir quaisquer relat&oacute;rios, declara&ccedil;&otilde;es ou avisos dados pela Empresa.<br />\nInvestidores, colaboradores e outros devem usar o Conte&uacute;do da mesma maneira que qualquer outro ambiente educacional e n&atilde;o deve confiar somente no Conte&uacute;do em detrimento de seu pr&oacute;prio julgamento profissional.<br />\nA informa&ccedil;&atilde;o obtida ao usar este site n&atilde;o &eacute; completa e n&atilde;o cobre todas as quest&otilde;es, t&oacute;picos ou fatos que possam ser relevantes para seus objetivos.</p>\n\n<h4>O USO DESTE SITE &Eacute; DE SUA TOTAL RESPONSABILIDADE. O CONTE&Uacute;DO &Eacute; OFERECIDO COMO EST&Aacute; E SEM GARANTIAS DE QUALQUER TIPO, EXPRESSAS OU IMPL&Iacute;CITAS.<br />\nNOSSA EMPRESA N&Atilde;O GARANTE QUE AS FUN&Ccedil;&Otilde;ES OU CONTE&Uacute;DO PRESENTE NESTE SITE SER&Aacute; CONT&Iacute;NUO, LIVRE DE ERROS, QUE FALHAS SER&Atilde;O CORRIGIDAS OU QUE ESTE SITE E SERVIDOR QUE O TORNA DISPON&Iacute;VEL EST&Atilde;O LIVRES DE V&Iacute;RUS OU OUTROS COMPONENTES DESTRUTIVOS.<br />\nNOSSA EMPRESA N&Atilde;O GARANTE OU FAZ QUALQUER REPRESENTA&Ccedil;&Atilde;O RELACIONADA AO USO OU RESULTADOS DO USO DO CONTE&Uacute;DO EM TERMOS DE PRECIS&Atilde;O, CONFIABILIDADE OU OUTROS.<br />\nO CONTE&Uacute;DO PODE INCLUIR IMPRECIS&Otilde;ES T&Eacute;CNICAS OU ERROS TIPOGR&Aacute;FICOS E A EMPRESA PODE FAZER MUDAN&Ccedil;AS OU MELHORIAS A QUALQUER MOMENTO. VOC&Ecirc;, E N&Atilde;O A NOSSA EMPRESA, ASSUME O CUSTO DE QUALQUER SERVI&Ccedil;O, REPARO OU CORRE&Ccedil;&Atilde;O NECESS&Aacute;RIOS NO CASO DE QUALQUER PERDA OU DANO CONSEQUENTE DO USO DESTE SITE OU SEU CONTE&Uacute;DO.<br />\nNOSSA EMPRESA N&Atilde;O OFERECE GARANTIA QUE O USO DESTE CONTE&Uacute;DO N&Atilde;O INFRINGIR O DIREITO DE OUTRO E N&Atilde;O ASSUMEM QUALQUER RESPONSABILIDADE POR ERROS OU OMISS&Otilde;ES EM TAL CONTE&Uacute;DO.</h4>\n\n<p>Toda informa&ccedil;&atilde;o neste site seja de natureza hist&oacute;rica ou prospectivas &eacute; v&aacute;lida somente para a data que foi publicada no site e a Empresa n&atilde;o se compromete com nenhuma obriga&ccedil;&atilde;o de atualizar tal informa&ccedil;&atilde;o depois que &eacute; publicada ou remover tal informa&ccedil;&atilde;o deste site caso ela n&atilde;o seja (mais) precisa ou completa.</p>\n\n<h3>Limita&ccedil;&atilde;o de responsabilidade</h3>\n\n<h4>A EMPRESA, SUAS FILIAIS, AFILIADOS, LICENCIANTES, PROVEDORES DE SERVI&Ccedil;O, PROVEDORES DE CONTE&Uacute;DO, EMPREGADOS, AGENTES, ADMINISTRADORES E DIRETORES N&Atilde;O SER&Atilde;O RESPONS&Aacute;VEIS POR QUALQUER DANO EVENTUAL, DIRETO, INDIRETO, PUNITIVO, REAL, CONSEQUENTE, ESPECIAL, EXEMPLAR OU DE QUALQUER OUTRO TIPO, INCLUINDO PERDA DE RECEITA OU RENDA, DOR E SOFRIMENTO, ESTRESSE EMOCIONAL OU SIMILARES MESMO QUE A EMPRESA TENHA ACONSELHADO SOBRE A POSSIBILIDADE DE TAIS DANOS.</h4>\n\n<h4>DE NENHUMA FORMA A RESPONSABILIDADE COLETIVA DA EMPRESA E SUAS FILIAIS, AFILIADOS, LICENCIANTES, PROVEDORES DE SERVI&Ccedil;O, PROVEDORES DE CONTE&Uacute;DO, EMPREGADOS, AGENTES, ADMINISTRADORES E DIRETORES EM RELA&Ccedil;&Atilde;O A TERCEIROS (INDEPENDENTE DO TIPO DE A&Ccedil;&Atilde;O, SEJA POR CONTRATO OU QUALQUER OUTRO) EXCEDER&Aacute; A QUANTIA DE R$100 OU O VALOR PAGO &Agrave; EMPRESA POR TAL CONTE&Uacute;DO, PRODUTO OU SERVI&Ccedil;O DO QUAL A QUEST&Atilde;O TENHA SIDO LEVANTADA.</h4>\n\n<h3>Indeniza&ccedil;&atilde;o</h3>\n\n<p>Voc&ecirc; vai indenizar e isentar a Empresa, suas filiais, afiliados, licenciantes, provedores de servi&ccedil;o, provedores de conte&uacute;do, empregados, agentes, administradores e diretores (referidas agora como Partes Isentas) de qualquer viola&ccedil;&atilde;o desse Termo de Uso por voc&ecirc;, incluindo o uso do Conte&uacute;do diferente do expresso aqui.<br />\nVoc&ecirc; concorda que as Partes Isentas n&atilde;o t&ecirc;m responsabilidade ou conex&atilde;o com qualquer viola&ccedil;&atilde;o ou uso n&atilde;o autorizado e voc&ecirc; concorda em remediar toda e qualquer perda, dano, julgamento, pr&ecirc;mios, custo, despesas e honor&aacute;rios advocat&iacute;cios das Partes Isentas ligadas a viola&ccedil;&atilde;o.<br />\nVoc&ecirc; tamb&eacute;m indenizar&aacute; e isentar&aacute; as Partes Isentas de qualquer reivindica&ccedil;&atilde;o de terceiros resultante do uso da informa&ccedil;&atilde;o contida neste site.</p>\n\n<h3>Marcas Registradas</h3>\n\n<p>Marcas e logos presentes neste site s&atilde;o propriedade da Empresa ou da parte que as disponibilizaram para a Empresa.<br />\nA Empresa e as partes que disponibilizaram a marca e logo det&eacute;m todos os direitos sobre as mesmas.<br />\nInforma&ccedil;&atilde;o provida pelo usu&aacute;rio</p>\n\n<p>&nbsp;</p>\n\n<p>Voc&ecirc; n&atilde;o pode publicar enviar, apresentar ou fazer conex&atilde;o a esse site qualquer material que: voc&ecirc; n&atilde;o tenha o direito de postar, incluindo material de propriedade de terceiros defenda atividade ilegal ou discutir a inten&ccedil;&atilde;o de fazer algo ilegal; seja vulgar, obsceno, pornogr&aacute;fico ou indecente n&atilde;o diga respeito diretamente a este site; possa amea&ccedil;ar ou insultar outros, difamar, caluniar, invadir privacidade, perseguir, ser obsceno, pornogr&aacute;fico, racista, assediar ou ofender; busca explorar ou prejudicar crian&ccedil;as expondo-as a conte&uacute;do inapropriado, perguntar sobre informa&ccedil;&otilde;es pessoais ou qualquer outro do tipo; infrinja qualquer propriedade intelectual ou outro direito de pessoa ou entidade, incluindo viola&ccedil;&otilde;es de direitos autorais, marca registrada ou direitos de publicidade; violam qualquer lei ou podem ser considerados para violar a lei; personifique ou deturpar sua conex&atilde;o com qualquer entidade ou pessoa; ou ainda manipula t&iacute;tulos ou identificadores para encobrir a origem do conte&uacute;do promova qualquer empreendimento comercial (ex: oferecer produtos ou servi&ccedil;os em promo&ccedil;&atilde;o) ou que engaje de qualquer forma em uma atividade comercial (ex: realizar sorteios ou concursos, expor banners patrocinadores e/ou solicitar bens e servi&ccedil;os) exceto que especificamente autorizado neste site; solicitar fundos, divulga&ccedil;&otilde;es ou patrocinadores; inclua programas com v&iacute;rus, worms e/ou Cavalos de Tr&oacute;ia ou qualquer outro c&oacute;digo, arquivo ou programa de computador destinado a interromper, destruir ou limitar a funcionalidade de qualquer software ou hardware de computador ou telecomunica&ccedil;&otilde;es; interrompa o fluxo normal da conversa, fa&ccedil;a com que a tela &ldquo;role&rdquo; mais r&aacute;pido que os os outros usu&aacute;rios conseguem acompanhar ou mesmo agir de modo a afetar a habilidade de outras pessoas de se engajar em atividades em tempo real neste site; inclua arquivos em formato MP3 desobede&ccedil;a qualquer pol&iacute;tica ou regra estabelecida de tempos em tempos para o uso desse site ou qualquer rede conectada a ele; ou contenha hiperlinks para sites que contenham conte&uacute;do que se enquadrem nas descri&ccedil;&otilde;es acima.</p>\n\n<p>Mesmo sem a obriga&ccedil;&atilde;o de faz&ecirc;-lo, nossa Empresa reserva o direito de monitorar o uso deste site para determinar o cumprimento desse Termo de Uso assim como o de remover ou vetar qualquer informa&ccedil;&atilde;o por qualquer raz&atilde;o.<br />\nDe qualquer forma voc&ecirc; &eacute; completamente respons&aacute;vel pelo conte&uacute;do de seus envios.<br />\nVoc&ecirc; sabe e concorda que nem a Empresa ou qualquer terceiro provendo conte&uacute;do para a Empresa assumir&aacute; qualquer responsabilidade por nenhuma a&ccedil;&atilde;o ou ina&ccedil;&atilde;o da Empresa ou referido terceiro a respeito de qualquer envio.</p>\n\n<h3>Seguran&ccedil;a</h3>\n\n<p>Toda senha usada para este site &eacute; somente para uso individual.<br />\nVoc&ecirc; &eacute; respons&aacute;vel pela seguran&ccedil;a de sua senha (se for o caso).<br />\nA Empresa tem o direito de monitorar a seguran&ccedil;a de sua senha e ao seu crit&eacute;rio pode pedir que voc&ecirc; a mude.<br />\nSe voc&ecirc; usar qualquer senha que a Empresa considere insegura, a Empresa tem o direito de requisitar que a senha seja modificada e/ou cancelar a sua conta.<br />\n&Eacute; proibido usar qualquer servi&ccedil;o ou ferramenta conectada a este site para comprometer a seguran&ccedil;a ou mexer com os recursos do sistema e/ou contas.<br />\nO uso ou distribui&ccedil;&atilde;o de ferramentas destinadas para comprometer a seguran&ccedil;a (ex: programas para descobrir senha, ferramentas de crack ou de sondagem da rede) s&atilde;o estritamente proibidos.<br />\nSe voc&ecirc; estiver envolvido em qualquer viola&ccedil;&atilde;o da seguran&ccedil;a do sistema, a Empresa se reserva o direito de fornecer suas informa&ccedil;&otilde;es para os administradores de sistema de outros sites para ajud&aacute;-los a resolver incidentes de seguran&ccedil;a.<br />\nA Empresa se reserva o direito de investigar potenciais viola&ccedil;&otilde;es a esse Termo de Uso.<br />\nA Empresa se reserva o direito de cooperar totalmente com as autoridades competentes ou pedidos da justi&ccedil;a para que a Empresa revele a identidade de qualquer pessoa que publique e-mail, mensagem ou disponibilize qualquer material que possa violar esse Termo de Uso.</p>\n\n<h3><strong>AO ACEITAR ESSE ACORDO VOC&Ecirc; ISENTA A EMPRESA DE QUALQUER CONSEQU&Ecirc;NCIA RESULTANTE DE QUALQUER A&Ccedil;&Atilde;O DA EMPRESA DURANTE OU COMO RESULTADO DE SUAS INVESTIGA&Ccedil;&Otilde;ES E/OU DE A&Ccedil;&Otilde;ES TOMADAS RESULTANTES DE INVESTIGA&Ccedil;OES TANTO DA EMPRESA QUANTO DAS AUTORIDADES DE JUSTI&Ccedil;A COMPETENTES.</strong></h3>\n', 1),
	(550, 1, 52, 1243, '', 1),
	(555, 1, 649, 1223, '', 1),
	(556, 1, 649, 1224, '{"url":"","status":true}', 1),
	(557, 1, 106, 1223, '', 1),
	(558, 1, 106, 1224, '{"url":"","status":true}', 1),
	(559, 1, 131, 1223, '', 1),
	(560, 1, 131, 1224, '{"url":"","status":true}', 1),
	(562, 1, 74, 1249, '<h1>Contato</h1>\n', 1),
	(563, 1, 74, 1250, '{"url":"","status":true}', 1),
	(571, 1, 51, 1258, '', 1),
	(576, 1, 51, 1263, '<p>Nome Do Site tem total compromisso com a privacidade e seguran&ccedil;a de seus clientes durante o processo de navega&ccedil;&atilde;o pelo site. Usamos cookies e informa&ccedil;&otilde;es de navega&ccedil;&atilde;o (sess&atilde;o do browser) com o objetivo de tra&ccedil;ar o perfil do p&uacute;blico que visita o site e aperfei&ccedil;oar nossos conte&uacute;dos.<br />\nOs dados cadastrais de nossos clientes n&atilde;o s&atilde;o vendidos, trocados ou divulgados para terceiros e todas as informa&ccedil;&otilde;es s&atilde;o mantidas em sigilo absoluto. Seus dados s&atilde;o registrados pela Nome Do Site de forma automatizada, dispensando manipula&ccedil;&atilde;o humana.<br />\nAs altera&ccedil;&otilde;es sobre nossa Pol&iacute;tica de Privacidade ser&atilde;o devidamente informadas neste espa&ccedil;o.</p>\n\n<h3>Pol&iacute;tica de Privacidade</h3>\n\n<p>Esta pol&iacute;tica descreve as formas como coletamos, armazenamos, usamos e protegemos suas informa&ccedil;&otilde;es pessoais.<br />\nVoc&ecirc; aceita essa pol&iacute;tica e concorda com tal coleta, armazenamento e uso quando se inscrever ou usar nossos produtos, servi&ccedil;os ou qualquer outro recurso, tecnologia ou funcionalidade que n&oacute;s oferecemos ao acessar nosso site ou por qualquer outro meio (coletivamente &ldquo;Nome Do Site &rdquo;).<br />\nPodemos alterar a esta pol&iacute;tica a qualquer momento, divulgando uma vers&atilde;o revisada em nosso site. A vers&atilde;o revisada entrar&aacute; em vigor assim que disponibilizada no site. Al&eacute;m disso, se a vers&atilde;o revisada incluir uma altera&ccedil;&atilde;o substancial, avisaremos voc&ecirc; com 30 dias de anteced&ecirc;ncia, divulgando o aviso sobre a altera&ccedil;&atilde;o na p&aacute;gina &ldquo;Atualiza&ccedil;&otilde;es da pol&iacute;tica&rdquo; do nosso site. Depois desse aviso de 30 dias, ser&aacute; considerado que voc&ecirc; concorda com todas as emendas feitas a essa pol&iacute;tica.</p>\n\n<h3>Importante:</h3>\n\n<h3>Pol&iacute;tica de Descadastramento (&ldquo;Opt-out&rdquo;)</h3>\n\n<p>O usu&aacute;rio dos nossos servi&ccedil;os pode a qualquer momento deixar de receber comunica&ccedil;&otilde;es do nosso site. Para tanto basta enviar um e-mail para contato@NomeDoSite.com.br indicando o seu desejo de n&atilde;o mais receber comunica&ccedil;&otilde;es, ou simplesmente clicar no link &lsquo;remover&rsquo; ou unsubscribre contido no final de cada e-mail.</p>\n\n<h3>Como coletamos informa&ccedil;&otilde;es a seu respeito</h3>\n\n<p>Quando voc&ecirc; visita os sites do https://Nome Do Site.com.br ou usa os servi&ccedil;os da Nome Do Site coletamos o seu endere&ccedil;o IP e as informa&ccedil;&otilde;es padr&atilde;o de acesso &agrave; web como o tipo do seu navegador e as p&aacute;ginas que acessou em nosso site.<br />\nSe voc&ecirc; se inscrever, coletamos os seguintes tipos de informa&ccedil;&otilde;es:<br />\nInforma&ccedil;&otilde;es de contato &ndash; o seu nome, endere&ccedil;o, telefone, e-mail, nome de usu&aacute;rio do Skype e outras informa&ccedil;&otilde;es semelhantes.<br />\nInforma&ccedil;&otilde;es financeiras &ndash; os n&uacute;meros da conta banc&aacute;ria e do cart&atilde;o de cr&eacute;dito que voc&ecirc; forneceu quando adquiriu os Servi&ccedil;os da Nome Do Site.<br />\nAntes de permitir o uso dos Servi&ccedil;os da Nome Do Site , poderemos exigir que voc&ecirc; forne&ccedil;a informa&ccedil;&otilde;es adicionais que poderemos usar para verificar sua identidade ou endere&ccedil;o ou gerenciar risco, como sua data de nascimento, n&uacute;mero de registro nacional, nacionalidade e outras informa&ccedil;&otilde;es de identifica&ccedil;&atilde;o.<br />\nTamb&eacute;m podemos obter informa&ccedil;&otilde;es suas atrav&eacute;s de terceiros, como centros de cr&eacute;dito e servi&ccedil;os de verifica&ccedil;&atilde;o de identidade. Quando estiver usando os Servi&ccedil;os da Nome Do Site , coletaremos informa&ccedil;&otilde;es sobre suas transa&ccedil;&otilde;es e outras atividades suas em nosso site ou quando usar os Servi&ccedil;os da Nome Do Site e podemos coletar informa&ccedil;&otilde;es sobre seu computador ou outro dispositivo de acesso com finalidade de preven&ccedil;&atilde;o contra fraude.<br />\nPor fim, podemos coletar informa&ccedil;&otilde;es adicionais de e sobre voc&ecirc; por outros meios, como de contatos com nossa Nome Do Siteuipe de suporte ao cliente, de resultados de suas respostas a uma pesquisa, de intera&ccedil;&otilde;es com membros da rede corporativa da Nome Do Site e de outras empresas.</p>\n\n<h3>Como usamos cookies</h3>\n\n<p>Quando voc&ecirc; acessa nosso site, n&oacute;s, incluindo as empresas que contratamos para acompanhar como nosso site &eacute; usado, podemos colocar pNome Do Siteuenos arquivos de dados chamados &ldquo;cookies&rdquo; no seu computador.<br />\nEnviamos um &ldquo;cookie da sess&atilde;o&rdquo; para o seu computador quando voc&ecirc; entra em sua conta ou usa os Servi&ccedil;os da Nome Do Site . Esse tipo de cookie nos ajuda a reconhec&ecirc;-lo se visitar v&aacute;rias p&aacute;ginas em nosso site durante a mesma sess&atilde;o, para que n&atilde;o precisemos solicitar a sua senha em todas as p&aacute;ginas.<br />\nDepois que voc&ecirc; sair ou fechar o seu navegador, esse cookie ir&aacute; expirar e deixar&aacute; de ter efeito. Tamb&eacute;m usamos cookies mais permanentes para outras finalidades, como para exibir o seu endere&ccedil;o de e-mail em nosso formul&aacute;rio de acesso, para que voc&ecirc; n&atilde;o precise digitar novamente o endere&ccedil;o de e-mail sempre que entrar em sua conta.<br />\nCodificamos nossos cookies para que apenas n&oacute;s possamos interpretar as informa&ccedil;&otilde;es armazenadas neles. Voc&ecirc; est&aacute; livre para recusar nossos cookies caso o seu navegador permita, mas isso pode interferir no uso do nosso site.<br />\nN&oacute;s e nossos prestadores de servi&ccedil;o tamb&eacute;m usamos cookies para personalizar nossos servi&ccedil;os, conte&uacute;do e publicidade, avaliar a efici&ecirc;ncia das promo&ccedil;&otilde;es e promover confian&ccedil;a e seguran&ccedil;a.<br />\nVoc&ecirc; pode encontrar cookies de terceiros ao usar os Servi&ccedil;os da Nome Do Site em determinados sites que n&atilde;o est&atilde;o sob nosso controle (por exemplo, se voc&ecirc; visualizar uma p&aacute;gina da Web criada por terceiros ou usar um aplicativo desenvolvido por terceiros, um cookie poder&aacute; ser colocado por essa p&aacute;gina ou aplicativo).</p>\n\n<h3>Remarketing do Google</h3>\n\n<p>N&oacute;s utilizamos o recurso de Remarketing do Google Adwords para veicular an&uacute;ncios em sites de parceiros do Google. Este recurso permite identificar que voc&ecirc; visitou o nosso site e assim o Google pode exibir o nosso an&uacute;ncio para voc&ecirc; em diferentes websites.<br />\nDiversos fornecedores de terceiros, inclusive o Google, compram espa&ccedil;os de publicidade em sites da Internet. N&oacute;s eventualmente contratamos o Google para exibir nossos an&uacute;ncios nesses espa&ccedil;os. Para identificar a sua visita no nosso site, tanto outros fornecedores de terceiros, quanto o Google, utilizam-se de cookies, de forma similar ao exposto na se&ccedil;&atilde;o &ldquo;Como usamos cookies&rdquo;. Voc&ecirc; pode desativar o uso de cookies pelo Google acessando o Gerenciador de prefer&ecirc;ncias de an&uacute;ncio.</p>\n\n<h3>Como protegemos e armazenamos informa&ccedil;&otilde;es pessoais</h3>\n\n<p>Ao longo desta pol&iacute;tica, usamos o termo &ldquo;informa&ccedil;&otilde;es pessoais&rdquo; para descrever informa&ccedil;&otilde;es que possam ser associadas a uma determinada pessoa e possam ser usadas para identificar essa pessoa.<br />\nN&oacute;s n&atilde;o consideraremos como informa&ccedil;&otilde;es pessoais as informa&ccedil;&otilde;es que devem permanecer an&ocirc;nimas, para que elas n&atilde;o identifiquem um determinado usu&aacute;rio. Armazenamos e processamos suas informa&ccedil;&otilde;es pessoais em nossos computadores nos e as protegemos sob medidas de prote&ccedil;&atilde;o f&iacute;sicas, eletr&ocirc;nicas e processuais.<br />\nUsamos prote&ccedil;&otilde;es de computador, como firewalls e criptografia de dados, aplicamos controles de acesso f&iacute;sico a nossos pr&eacute;dios e arquivos e autorizamos o acesso a informa&ccedil;&otilde;es pessoais apenas para os funcion&aacute;rios que precisem delas para cumprir suas responsabilidades profissionais.<br />\nComo usamos as informa&ccedil;&otilde;es pessoais que coletamos Nossa finalidade principal ao coletar informa&ccedil;&otilde;es pessoais &eacute; fornecer a voc&ecirc; uma experi&ecirc;ncia segura, tranquila, eficiente e personalizada. Para isso, usamos suas informa&ccedil;&otilde;es pessoais para:<br />\nFornecer os servi&ccedil;os e o suporte ao cliente solicitados;<br />\nProcessar transa&ccedil;&otilde;es e enviar avisos sobre as suas transa&ccedil;&otilde;es;<br />\nSolucionar disputas, cobrar taxas e solucionar problemas;<br />\nImpedir atividades potencialmente proibidas ou ilegais e garantir a aplica&ccedil;&atilde;o do nosso Contrato do usu&aacute;rio;<br />\nPersonalizar, avaliar e melhorar nossos servi&ccedil;os, al&eacute;m do conte&uacute;do e do layout do nosso site;<br />\nEnviar materiais de marketing direcionados, avisos de atualiza&ccedil;&atilde;o no servi&ccedil;o e ofertas promocionais com base nas suas prefer&ecirc;ncias de comunica&ccedil;&atilde;o;<br />\nComparar informa&ccedil;&otilde;es, para uma maior precis&atilde;o, e verific&aacute;-las com terceiros.</p>\n\n<h3>Marketing</h3>\n\n<p>N&atilde;o vendemos nem alugamos suas informa&ccedil;&otilde;es pessoais para terceiros para fins de marketing sem seu consentimento expl&iacute;cito. Podemos combinar suas informa&ccedil;&otilde;es com as informa&ccedil;&otilde;es que coletamos de outras empresas e us&aacute;-las para melhorar e personalizar nossos servi&ccedil;os, conte&uacute;do e publicidade.<br />\nSe n&atilde;o desejar receber nossas mensagens de marketing nem participar de nossos programas de personaliza&ccedil;&atilde;o de an&uacute;ncios, basta indicar sua prefer&ecirc;ncia mandando-nos um e-mail ou simplesmente clicar no link de descadastramento fornecido em todos os nossos e-mails.</p>\n\n<h3>Como compartilhamos informa&ccedil;&otilde;es pessoais com outras partes</h3>\n\n<p>Podemos compartilhar suas informa&ccedil;&otilde;es pessoais com: Membros da rede corporativa Nome Do Site para fornecer conte&uacute;do, produtos e servi&ccedil;os conjuntos (como registro, transa&ccedil;&otilde;es e suporte ao cliente) para ajudar a detectar e impedir atos potencialmente ilegais e viola&ccedil;&otilde;es de nossas pol&iacute;ticas, al&eacute;m de cooperar nas decis&otilde;es quanto a seus produtos, servi&ccedil;os e comunica&ccedil;&otilde;es.</p>\n\n<p>Os membros da nossa rede corporativa usar&atilde;o essas informa&ccedil;&otilde;es para lhe enviar comunica&ccedil;&otilde;es de marketing apenas se voc&ecirc; tiver solicitado seus servi&ccedil;os.<br />\nFornecedores dos servi&ccedil;os sob contrato que colaboram em partes de nossas opera&ccedil;&otilde;es comerciais; (preven&ccedil;&atilde;o contra fraude, atividades de cobran&ccedil;a, marketing, servi&ccedil;os de tecnologia). Nossos contratos determinam que esses fornecedores de servi&ccedil;o s&oacute; usem suas informa&ccedil;&otilde;es em rela&ccedil;&atilde;o aos servi&ccedil;os que realizam para n&oacute;s, e n&atilde;o em benef&iacute;cio pr&oacute;prio.<br />\nEmpresas com as quais pretendemos nos fundir ou adquirir. (Se ocorrer uma fus&atilde;o, exigiremos que a nova entidade constitu&iacute;da siga essa pol&iacute;tica de privacidade com rela&ccedil;&atilde;o &agrave;s suas informa&ccedil;&otilde;es pessoais. Se suas informa&ccedil;&otilde;es pessoais puderem ser usadas contra essa pol&iacute;tica, voc&ecirc; receber&aacute; um aviso pr&eacute;vio).</p>\n\n<h3>Autoridades policiais, oficiais do governo ou outros terceiros quando:</h3>\n\n<p>Formos obrigados a isso por intima&ccedil;&atilde;o, decis&atilde;o judicial ou procedimento legal semelhante. Precisamos fazer isso para estar em conformidade com a lei ou com as regras de associa&ccedil;&atilde;o de cart&atilde;o de cr&eacute;dito<br />\nEstivermos cooperando com uma investiga&ccedil;&atilde;o policial em andamento. Acreditamos, de boa f&eacute;, que a divulga&ccedil;&atilde;o das informa&ccedil;&otilde;es pessoais &eacute; necess&aacute;ria para impedir danos f&iacute;sicos ou perdas financeiras, para reportar atividade ilegal suspeita ou investigar viola&ccedil;&otilde;es do nosso Contrato do usu&aacute;rio.<br />\nOutros terceiros com seu consentimento ou orienta&ccedil;&atilde;o para tanto.<br />\nNote que esses terceiros podem estar em outros pa&iacute;ses nos quais a legisla&ccedil;&atilde;o sobre o processamento de informa&ccedil;&otilde;es pessoais seja menos r&iacute;gida do que a do seu pa&iacute;s.<br />\nNos casos em que nossa empresa e um parceiro promovem juntos nossos Servi&ccedil;os, n&oacute;s podemos divulgar ao parceiro algumas informa&ccedil;&otilde;es pessoais tais como nome, endere&ccedil;o e nome de usu&aacute;rio das pessoas que se inscreveram nos nossos Servi&ccedil;os com resultado da promo&ccedil;&atilde;o conjunta com o &uacute;nico prop&oacute;sito de permitir a n&oacute;s e ao parceiro avaliar os resultados da promo&ccedil;&atilde;o.<br />\nNesse caso, informa&ccedil;&otilde;es pessoais n&atilde;o podem ser usadas pelo parceiro para nenhum outro prop&oacute;sito. A Nome Do Site n&atilde;o vender&aacute; ou alugar&aacute; nenhuma das suas informa&ccedil;&otilde;es pessoais para terceiros no curso normal dos neg&oacute;cios e s&oacute; compartilha suas informa&ccedil;&otilde;es pessoais com terceiros, conforme descrito nesta pol&iacute;tica.<br />\nSe voc&ecirc; se inscrever na Nome Do Site diretamente em um site de terceiros ou por meio de um aplicativo de terceiros, qualquer informa&ccedil;&atilde;o inserida naquele site ou aplicativo (e n&atilde;o diretamente em um site da Nome Do Site ) ser&aacute; compartilhada com o propriet&aacute;rio desse site ou aplicativo &ndash; e suas informa&ccedil;&otilde;es podem estar sujeitas as pol&iacute;ticas de privacidade deles.</p>\n', 1),
	(932, 1, 680, 1445, '{"url":"","status":true}', 1),
	(933, 1, 680, 1446, '<h1>Trabalhe Conosco</h1>\n', 1),
	(965, 1, 30, 1472, '{"url":"","status":true}', 1),
	(966, 1, 30, 1473, '<h1>Blog</h1>\n', 1),
	(973, 1, 694, 86, '668', 1),
	(974, 1, 694, 60, '{"url":"","status":true}', 1),
	(975, 1, 694, 62, '', 1),
	(976, 1, 694, 61, '', 1),
	(977, 1, 694, 1223, '', 1),
	(978, 1, 694, 1224, '{"url":"","status":true}', 1),
	(995, 1, 153, 1490, '{"url":"","status":true}', 1),
	(996, 1, 154, 1490, '{"url":"","status":true}', 1),
	(997, 1, 155, 1490, '{"url":"","status":true}', 1),
	(998, 1, 160, 1490, '{"url":"","status":true}', 1),
	(1016, 1, 127, 1508, '{"url":"","status":true}', 1),
	(1017, 1, 127, 1509, '<h1>Produtos</h1>\n', 1),
	(1018, 1, 653, 1510, '672', 1),
	(1019, 1, 698, 1510, '', 1),
	(1020, 1, 699, 1510, '', 1),
	(1021, 1, 700, 1510, '', 1),
	(1022, 1, 701, 1510, '', 1),
	(1023, 1, 696, 1510, '670', 1),
	(1024, 1, 697, 1510, '', 1),
	(1026, 1, 653, 1511, '1', 1),
	(1027, 1, 654, 1510, '', 1),
	(1028, 1, 654, 1511, '1', 1),
	(1030, 1, 696, 1511, '1', 1),
	(1031, 1, 654, 1512, '{"url":"","status":true}', 1),
	(1032, 1, 654, 1513, '', 1),
	(1033, 1, 653, 1512, '{"url":"","status":true}', 1),
	(1034, 1, 653, 1513, '', 1),
	(1035, 1, 696, 1512, '{"url":"","status":true}', 1),
	(1036, 1, 696, 1513, '', 1),
	(1039, 1, 697, 1511, '', 1),
	(1040, 1, 697, 1512, '{"url":"","status":true}', 1),
	(1041, 1, 697, 1513, '', 1),
	(1042, 1, 698, 1511, '', 1),
	(1043, 1, 698, 1512, '{"url":"","status":true}', 1),
	(1044, 1, 698, 1513, '', 1),
	(1045, 1, 699, 1511, '1', 1),
	(1046, 1, 699, 1512, '{"url":"","status":true}', 1),
	(1047, 1, 699, 1513, '', 1),
	(1048, 1, 700, 1511, '', 1),
	(1049, 1, 700, 1512, '{"url":"","status":true}', 1),
	(1050, 1, 700, 1513, '', 1),
	(1051, 1, 701, 1511, '', 1),
	(1052, 1, 701, 1512, '{"url":"","status":true}', 1),
	(1053, 1, 701, 1513, '', 1),
	(1054, 1, 653, 1514, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc metus velit, varius vitae imperdiet eget, molestie ac sapien.', 1),
	(1055, 1, 654, 1514, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc metus velit, varius vitae imperdiet eget, molestie ac sapien.', 1),
	(1056, 1, 696, 1514, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc metus velit, varius vitae imperdiet eget, molestie ac sapien.', 1),
	(1058, 1, 699, 1514, '', 1),
	(1072, 1, 119, 1526, '{"url":"","status":true}', 1),
	(1073, 1, 119, 1527, '<h1>D&uacute;vidas</h1>\n', 1),
	(1085, 1, 697, 1514, '', 1),
	(1089, 1, 698, 1514, '', 1),
	(1096, 1, 700, 1514, '', 1),
	(1100, 1, 701, 1514, '', 1);

-- Copiando estrutura para tabela modelo-2.app_idiomas
CREATE TABLE IF NOT EXISTS `app_idiomas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titulo` varchar(250) CHARACTER SET latin1 DEFAULT NULL,
  `sigla` varchar(250) CHARACTER SET latin1 DEFAULT NULL,
  `thumb` varchar(250) CHARACTER SET latin1 DEFAULT NULL,
  `fixo` tinyint DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Copiando dados para a tabela modelo-2.app_idiomas: ~0 rows (aproximadamente)
INSERT IGNORE INTO `app_idiomas` (`id`, `titulo`, `sigla`, `thumb`, `fixo`) VALUES
	(1, 'Português (Brasil)', 'pt-br', 'admin/img/icons/pt-br.png', 1),
	(2, 'English', 'en', 'admin/img/icons/en.png', 1),
	(3, 'Spanish', 'spain', 'admin/img/icons/spain.png', 1);

-- Copiando estrutura para tabela modelo-2.app_logs
CREATE TABLE IF NOT EXISTS `app_logs` (
  `id` int NOT NULL AUTO_INCREMENT,
  `usuario` varchar(250) CHARACTER SET utf8mb3 DEFAULT NULL,
  `conteudo` varchar(250) CHARACTER SET utf8mb3 DEFAULT NULL,
  `conteudo_id` int DEFAULT NULL,
  `idioma_id` int DEFAULT NULL,
  `tipo` tinytext CHARACTER SET utf8mb3,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Copiando dados para a tabela modelo-2.app_logs: ~0 rows (aproximadamente)
INSERT IGNORE INTO `app_logs` (`id`, `usuario`, `conteudo`, `conteudo_id`, `idioma_id`, `tipo`, `created_at`, `updated_at`) VALUES
	(1, 'Joe', 'Configurações', 0, 0, 'config', '2023-08-04 21:08:06', '2023-08-04 21:08:06'),
	(2, 'Joe', 'Configurações', 0, 0, 'config', '2023-08-04 21:08:30', '2023-08-04 21:08:30'),
	(3, 'Joe', 'Configurações', 0, 0, 'config', '2023-08-04 21:22:16', '2023-08-04 21:22:16'),
	(4, 'Joe', 'Configurações', 0, 0, 'config', '2023-08-04 21:22:53', '2023-08-04 21:22:53'),
	(5, 'Joe', 'Configurações', 0, 0, 'config', '2023-08-04 21:23:07', '2023-08-04 21:23:07'),
	(6, 'Joe', 'Configurações', 0, 0, 'config', '2023-08-04 21:23:27', '2023-08-04 21:23:27'),
	(7, 'Joe', 'Configurações', 0, 0, 'config', '2023-08-04 21:23:33', '2023-08-04 21:23:33'),
	(8, 'Joe', 'Como adquirir equipamentos médicos hospitalares e sua manutenção?', 649, 1, 'update', '2023-08-04 21:27:42', '2023-08-04 21:27:42'),
	(9, 'Joe', 'Como adquirir equipamentos médicos hospitalares e sua manutenção?', 649, 1, 'update', '2023-08-04 21:27:49', '2023-08-04 21:27:49'),
	(10, 'Joe', 'Como adquirir equipamentos médicos hospitalares e sua manutenção?', 649, 1, 'update', '2023-08-04 21:27:58', '2023-08-04 21:27:58'),
	(11, 'Joe', 'post 1', 649, 1, 'update', '2023-08-04 21:28:36', '2023-08-04 21:28:36'),
	(12, 'Joe', 'post 2', 644, 1, 'update', '2023-08-04 21:28:46', '2023-08-04 21:28:46'),
	(13, 'Joe', 'post 2', 644, 1, 'update', '2023-08-04 21:28:54', '2023-08-04 21:28:54'),
	(14, 'Joe', 'post 2', 644, 1, 'update', '2023-08-04 21:29:03', '2023-08-04 21:29:03'),
	(15, 'Joe', 'post 2', 644, 1, 'update', '2023-08-04 21:29:12', '2023-08-04 21:29:12'),
	(16, 'Joe', 'Post 3', 131, 1, 'update', '2023-08-04 21:29:40', '2023-08-04 21:29:40'),
	(17, 'Joe', 'Post 4', 106, 1, 'update', '2023-08-04 21:30:01', '2023-08-04 21:30:01'),
	(18, 'Joe', 'Post 5', 694, 1, 'update', '2023-08-04 21:30:42', '2023-08-04 21:30:42'),
	(19, 'Joe', 'Post 5', 694, 1, 'update', '2023-08-04 21:30:47', '2023-08-04 21:30:47'),
	(20, 'Joe', 'Duvida 01', 194, 1, 'update', '2023-08-04 21:31:37', '2023-08-04 21:31:37'),
	(21, 'Joe', 'Duvida 02', 357, 1, 'update', '2023-08-04 21:31:49', '2023-08-04 21:31:49'),
	(22, 'Joe', 'Duvida 03', 490, 1, 'update', '2023-08-04 21:31:59', '2023-08-04 21:31:59'),
	(23, 'Joe', 'Duvida 04', 189, 1, 'update', '2023-08-04 21:32:10', '2023-08-04 21:32:10'),
	(24, 'Joe', 'Duvida 04', 189, 1, 'update', '2023-08-04 21:32:15', '2023-08-04 21:32:15'),
	(25, 'Joe', 'Configurações', 0, 0, 'config', '2023-08-04 21:32:39', '2023-08-04 21:32:39'),
	(26, 'Joe', 'Maria Oliveira', 153, 1, 'update', '2023-08-04 23:30:01', '2023-08-04 23:30:01'),
	(27, 'Joe', 'Maria Oliveira', 153, 1, 'update', '2023-08-04 23:30:05', '2023-08-04 23:30:05'),
	(28, 'Joe', 'João Santos', 154, 1, 'update', '2023-08-04 23:30:15', '2023-08-04 23:30:15'),
	(29, 'Joe', 'Maria Silva - Enfermeira Chefe', 155, 1, 'update', '2023-08-04 23:30:22', '2023-08-04 23:30:22'),
	(30, 'Joe', 'Maria Silva - Enfermeira Chefe', 155, 1, 'update', '2023-08-04 23:30:26', '2023-08-04 23:30:26'),
	(31, 'Joe', 'Nathan Queiroz', 160, 1, 'update', '2023-08-04 23:30:32', '2023-08-04 23:30:32'),
	(32, 'Joe', 'Nathan Queiroz', 160, 1, 'update', '2023-08-04 23:30:35', '2023-08-04 23:30:35'),
	(33, 'Joe', 'Depoimentos', 62, 1, 'update', '2023-08-04 23:30:55', '2023-08-04 23:30:55'),
	(34, 'Joe', 'Pielsana® Óleo', 653, 1, 'update', '2023-08-04 23:31:11', '2023-08-04 23:31:11'),
	(35, 'Joe', 'Produto 1', 653, 1, 'update', '2023-08-04 23:31:23', '2023-08-04 23:31:23'),
	(36, 'Joe', 'Produto 2', 654, 1, 'update', '2023-08-04 23:31:36', '2023-08-04 23:31:36'),
	(37, 'Joe', 'Produto 3', 696, 1, 'update', '2023-08-04 23:31:53', '2023-08-04 23:31:53'),
	(38, 'Joe', 'Produto 4', 697, 1, 'update', '2023-08-04 23:32:05', '2023-08-04 23:32:05'),
	(39, 'Joe', 'Produto 5', 698, 1, 'update', '2023-08-04 23:32:17', '2023-08-04 23:32:17'),
	(40, 'Joe', 'Produto 6', 699, 1, 'update', '2023-08-04 23:32:28', '2023-08-04 23:32:28'),
	(41, 'Joe', 'Produto 7', 700, 1, 'update', '2023-08-04 23:32:38', '2023-08-04 23:32:38'),
	(42, 'Joe', 'Produto 8', 701, 1, 'update', '2023-08-04 23:32:49', '2023-08-04 23:32:49'),
	(43, 'Joe', 'Pielsana® bandagem', 702, 1, 'delete', '2023-08-04 23:32:54', '2023-08-04 23:32:54'),
	(44, 'Joe', 'Página Inicial', 60, 1, 'update', '2023-08-04 23:33:42', '2023-08-04 23:33:42'),
	(45, 'Joe', 'Página Inicial', 60, 1, 'update', '2023-08-04 23:34:21', '2023-08-04 23:34:21'),
	(46, 'Joe', 'Produtos', 127, 1, 'update', '2023-08-04 23:34:43', '2023-08-04 23:34:43'),
	(47, 'Joe', 'Post 1', 649, 1, 'update', '2023-08-04 23:35:16', '2023-08-04 23:35:16'),
	(48, 'Joe', 'Post 2', 644, 1, 'update', '2023-08-04 23:35:25', '2023-08-04 23:35:25'),
	(49, 'Joe', 'Post 1', 649, 1, 'update', '2023-08-04 23:35:44', '2023-08-04 23:35:44'),
	(50, 'Joe', 'Configurações', 0, 0, 'config', '2023-08-04 23:36:18', '2023-08-04 23:36:18'),
	(51, 'Joe', 'Configurações', 0, 0, 'config', '2023-08-04 23:40:30', '2023-08-04 23:40:30'),
	(52, 'Joe', 'Maria Silva', 155, 1, 'update', '2023-08-04 23:42:01', '2023-08-04 23:42:01'),
	(53, 'Joe', 'Dúvidas', 119, 1, 'update', '2023-08-04 23:42:15', '2023-08-04 23:42:15'),
	(54, 'Joe', 'Fale Conosco', 74, 1, 'update', '2023-08-04 23:42:43', '2023-08-04 23:42:43'),
	(55, 'Joe', 'Trabalhe Conosco', 680, 1, 'update', '2023-08-04 23:43:00', '2023-08-04 23:43:00'),
	(56, 'Joe', 'Trabalhe Conosco', 680, 1, 'update', '2023-08-04 23:43:05', '2023-08-04 23:43:05'),
	(57, 'Joe', 'Trabalhe Conosco', 680, 1, 'update', '2023-08-04 23:43:11', '2023-08-04 23:43:11'),
	(58, 'Joe', 'Termos de Uso', 52, 1, 'update', '2023-08-04 23:43:38', '2023-08-04 23:43:38');

-- Copiando estrutura para tabela modelo-2.app_mensagens
CREATE TABLE IF NOT EXISTS `app_mensagens` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(300) CHARACTER SET latin1 DEFAULT NULL,
  `email` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `telefone` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `campos` text CHARACTER SET latin1,
  `form_name` varchar(300) CHARACTER SET latin1 DEFAULT NULL,
  `idioma` int DEFAULT '1',
  `lida` varchar(250) CHARACTER SET latin1 DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `local` text CHARACTER SET latin1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Copiando dados para a tabela modelo-2.app_mensagens: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela modelo-2.app_rd_oportunidades
CREATE TABLE IF NOT EXISTS `app_rd_oportunidades` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `id_oportunidade` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `usuario_id` int DEFAULT NULL,
  `usuario_crm_id` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `nome` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefone` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mensagem` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `formulario` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `anotacoes` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Copiando dados para a tabela modelo-2.app_rd_oportunidades: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela modelo-2.app_rd_usuarios
CREATE TABLE IF NOT EXISTS `app_rd_usuarios` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whatsapp` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `local` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `crm_id` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `rodizio` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Copiando dados para a tabela modelo-2.app_rd_usuarios: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela modelo-2.app_recuperarsenha
CREATE TABLE IF NOT EXISTS `app_recuperarsenha` (
  `id` int NOT NULL AUTO_INCREMENT,
  `usuario_id` int DEFAULT NULL,
  `usuario_email` varchar(300) CHARACTER SET latin1 DEFAULT NULL,
  `token` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `data` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Copiando dados para a tabela modelo-2.app_recuperarsenha: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela modelo-2.app_upload
CREATE TABLE IF NOT EXISTS `app_upload` (
  `id` int NOT NULL AUTO_INCREMENT,
  `file` varchar(300) CHARACTER SET latin1 DEFAULT NULL,
  `type` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Copiando dados para a tabela modelo-2.app_upload: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela modelo-2.app_usuarios
CREATE TABLE IF NOT EXISTS `app_usuarios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(300) CHARACTER SET latin1 NOT NULL DEFAULT '0',
  `email` varchar(300) CHARACTER SET latin1 DEFAULT NULL,
  `telefone` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `senha` text CHARACTER SET latin1,
  `cargo` varchar(300) CHARACTER SET latin1 DEFAULT NULL,
  `permissao_geral` int DEFAULT NULL,
  `permissao_paginas` text CHARACTER SET latin1,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `permissoes` text CHARACTER SET latin1,
  `listar` int DEFAULT NULL,
  `ler` int DEFAULT NULL,
  `editar` int DEFAULT NULL,
  `inserir` int DEFAULT NULL,
  `conf` int DEFAULT NULL,
  `users` int DEFAULT NULL,
  `messages` int DEFAULT NULL,
  `dev` int DEFAULT NULL,
  `crm` int DEFAULT NULL,
  `crm_relatorio` int DEFAULT NULL,
  `crm_contato` int DEFAULT NULL,
  `crm_gerenciar` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Copiando dados para a tabela modelo-2.app_usuarios: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela modelo-2.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Copiando dados para a tabela modelo-2.migrations: ~21 rows (aproximadamente)
INSERT IGNORE INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(6, '2021_07_26_125612_atualizar_app', 1),
	(7, '2021_08_05_140900_atualizacao_relatorio', 1),
	(8, '2021_08_10_162745_atualizar_permissoes', 1),
	(9, '2021_08_31_160146_atualizacao_crm_rodizio', 1),
	(10, '2021_09_01_160224_atualizar_conf_crm', 1),
	(11, '2021_09_03_121630_atualizar_crm_oportunidades', 1),
	(12, '2021_09_20_150954_formularios_crm', 1),
	(13, '2021_09_20_181033_remover_funil_sem_etapa', 1),
	(14, '2021_09_24_103513_app_crm_produtos_oportunidades', 2),
	(15, '2021_09_30_104355_app_crm_fontes_oportunidades', 3),
	(16, '2021_10_06_104051_grupo_funil', 4),
	(17, '2021_10_08_105020_funil_cores', 4),
	(18, '2021_10_26_074321_app_mensagens_local', 4),
	(19, '2021_10_26_161340_interacao_new', 4),
	(20, '2021_11_29_154213_popular_dados_crm', 4),
	(21, '2021_12_03_150329_rdstation_crm', 4),
	(22, '2022_01_10_133856_crm_raddar_digital', 4),
	(23, '2022_08_04_092533_ordenamento_conteudo', 4),
	(24, '2022_08_09_080700_nectar_crm', 4),
	(25, '2023_05_09_103754_limite_campos', 5),
	(26, '2023_06_12_094538_tamanho_campo_texto', 5);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
`modelo-1`