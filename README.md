# Sistema de Livraria 

**Projeto acadêmico — 2º ano do Ensino Médio Integrado ao Técnico em Informática para Internet | IF Goiano**

O **Sistema de Livraria** é uma aplicação web desenvolvida durante o segundo ano do curso Técnico em Informática para Internet, integrado ao ensino médio no Instituto Federal Goiano.

O projeto teve como objetivo desenvolver um sistema de gerenciamento de registros de uma livraria/biblioteca, permitindo a administração de livros, clientes, funcionários e empréstimos.

Seu desenvolvimento proporcionou experiência prática com páginas dinâmicas, integração entre frontend e backend, manipulação de dados e operações em banco de dados relacional.

> **Contexto acadêmico:** este repositório preserva um projeto desenvolvido durante minha formação técnica. O sistema não é mantido atualmente e não foi preparado para utilização em produção.

## Funcionalidades

- Cadastro e listagem de livros;
- Cadastro e listagem de clientes;
- Cadastro e listagem de funcionários;
- Registro e consulta de empréstimos;
- Exclusão de registros nas áreas de gerenciamento;
- Cadastro de usuários, login e logout.

## Tecnologias utilizadas

- **Frontend:** HTML, CSS e Bootstrap;
- **Backend:** PHP;
- **Banco de dados:** MariaDB/MySQL e SQL;
- **Ambiente de desenvolvimento:** Apache, Docker e Docker Compose.

## Estrutura do projeto

```text
controle/          # Conexão com banco, autenticação e operações com dados
public/            # Páginas de cadastro, listagem e interface
documentacao/      # Scripts SQL e materiais de modelagem do banco
Dockerfile
docker-compose.yml
```

## Minha participação

O Sistema de Livraria foi desenvolvido em equipe, com minha participação predominante em diferentes etapas do projeto, incluindo:

- Desenvolvimento das interfaces utilizando HTML, CSS e Bootstrap;
- Implementação de funcionalidades utilizando PHP;
- Integração entre formulários e banco de dados;
- Desenvolvimento de operações de cadastro, consulta e exclusão de registros;
- Organização e integração de diferentes partes do sistema.

O projeto também contou com contribuições dos demais integrantes da equipe.

## Ambiente de desenvolvimento

O ambiente utilizado durante o desenvolvimento incluía:

- PHP 8.1;
- Apache;
- MariaDB 10.5;
- Docker e Docker Compose.

O repositório contém os arquivos `Dockerfile`, `docker-compose.yml` e o script SQL `documentacao/script_crias.sql`.

O sistema foi iniciado novamente em ambiente local utilizando Docker, para fins de documentação e obtenção de capturas de tela. Entretanto, suas funcionalidades não foram submetidas a uma nova bateria completa de testes.

Como o projeto foi desenvolvido durante o curso técnico e não recebe manutenção contínua, podem ser necessários ajustes para sua execução em outros ambientes.

##  Aviso de segurança e privacidade!!

Este sistema foi desenvolvido exclusivamente para fins acadêmicos e não foi projetado para utilização em produção.

O código não passou por uma auditoria completa de segurança e pode apresentar vulnerabilidades, especialmente no tratamento de dados recebidos de formulários e na execução de consultas SQL.

**Para testes, utilize exclusivamente dados fictícios.** Não cadastre informações pessoais reais, senhas utilizadas em outros serviços ou quaisquer dados sensíveis.

A execução do projeto deve ser realizada preferencialmente em ambiente local e isolado, apenas para fins de estudo e demonstração.

## Capturas de tela

Abaixo estão algumas das principais interfaces desenvolvidas para o sistema.

### Página inicial

![Página inicial da Livraria]()

### Login

![Tela de login]()

### Registro de usuários

![Tela de registro]()

### Listagem

![Tela de listagem]()

### Cadastro

![Tela de cadastro]()

### Gerenciamento de empréstimos

![Gerenciamento de empréstimos]()

### Rodapé

![Rodapé do sistema]()

## Sobre este repositório

Este repositório tem como objetivo documentar e preservar um dos projetos desenvolvidos durante minha formação no **Técnico em Informática para Internet do IF Goiano**.

O Sistema de Livraria representa uma etapa inicial da minha trajetória no desenvolvimento web, na qual pude aplicar conhecimentos de programação, criação de interfaces e integração com bancos de dados.

O código, as tecnologias e a organização refletem as práticas utilizadas durante o período de desenvolvimento, permitindo acompanhar minha evolução ao longo da formação técnica.
