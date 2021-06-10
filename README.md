# Cadastro Symfony

PHP avançado com o framework symfony. Configurações simples de rotas web e api usando annotations, migrations com orm doctrine e framework twig.

## Configurações - Symfony 

## Instalação sem instalador(local)

Instalação do composer 5.2.*  
    
`$ composer create_project symfony/skeleton nome-da-pasta`*

```

Essa versão mais simples não acompanha o symfony webserver

```

`$ cd nome-da-pasta`

Instalação do webserver

`$ composer require webserver ^4.3.5`*

```

*webserver não funciona mais na versão 5.2 do symfony
```


*Nessa versão não é possível utilizar o `$ bin/console server:start`

Instalação das *annotatios* para as rotas


`$ composer require annotations`

## Instalando o *annotations* para as rotas

`$ composer require annotations`

## Instalando o Framework Twig

`$ composer require twig`

## Instalando o doctrine (ORM do Symfony)

`$ composer require orm`

## Utilitário Maker

`$ composer require maker`

## Comandos úteis

Iniciar webserver

`$ bin/console server:run`

Para identificar as rotas (api ou web)

`$ bin/console debug:router`

Criar local para prepar o database

`$ bin/console doctrine:databse:create`

Criar entidades da sua tabela

```
$ bin/console make:entity

Nesse exemplo:

Classe > Usuario
Campos > nome, tipo string, tamanho 150
> email, tipo string, tamanho 255
```

Crair migrations

`$ bin/console make:migrations`

Rodar migration (criar a tabela no banco)

`$ bin/console doctrine:migratons:migrate`

Comandos sql com orm doctrine

`$ bin/console doctrine:query:sql "Comando sql"`

## Mais informações

### Site do Framework Symfony
[symfony.com](https://symfony.com/)


### Site do Framework Symfony
[twig.symfony.com](https://twig.symfony.com/)
