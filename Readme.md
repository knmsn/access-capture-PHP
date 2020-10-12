# Captura de usuários que visualizam seu site por IP.

[![Build Status](https://travis-ci.org/joemccann/dillinger.svg?branch=master)](https://test.pypi.org/project/dudesec/1.0.0/)

Neste repositório, trago o código fonte de um algoritmo para captura de views e o IP (com suporte a outras informações) do usuário. O objetivo deste repositório é ajudar a comunidade a se desenvolver , além de manter afiada minhas habilidades desenvolvendo usando a linguagem PHP.

# Ferramentas presentes na versão atual:

  - Captura do IP.
  - Conexão com o banco de dados e armazenamento do IP.
  
# Ideias para possiveis atualizações:

- Para não deixar o carregamento da página lento, alterar o banco de dados inserindo outras informaçoes e criar uma CRON TAB para conectar a uma API de tracer de IP para pegar outros dados a respeito do usuário para o crusamento de dados.


### Como instalar

Para usar estes arquivos, crie uma conta em um site de hospedagem como o 000webhost ou baixe um servidor em seu computador, como por exemplo o WampServer com suporte para PHP e MySQL, crie o banco conforme o script mysqlconfig.sql, arraste os arquivos para dentro da pasta do servidor (geralmente www/ ou htdocs/) e seja feliz! :)