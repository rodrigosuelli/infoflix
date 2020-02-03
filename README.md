# InfoFlix

![Screenshot](https://github.com/rodrigosuelli/InfoFlix/blob/master/screenshot.png)

Se você quiser dar uma olhada em todas as screenshots, click [aqui](https://drive.google.com/drive/folders/1AMb3vkXEdAruaHRhWOPTsYCWIP5ctUAe?usp=sharing).

## Sobre este Projeto

Fiz este site durante meu curso técnico em informática, e como eu estava aprendendo **php**, queria muito desenvolver algo usando **laravel**, pois é um dos melhores frameworks da linguagem. Naquela época eu estava assistindo muitos animes, foi aí que tive a ideia de fazer um site de animes usando laravel.

## Observações sobre o projeto

- As imagens dos itens(animes/series) já cadastrados no site estão sendo "puxadas" do banco de dados do **crunchyroll** e do **adorocinema**.

- Para acessar a página de cadastro de itens, você precisará digitar `/adicionar` na frente da **url** que estiver usando para abrir o projeto no navegador.

## Instalação

### Pré-requisitos

- Os requisitos para executar este projeto podem ser encontrados [aqui](https://laravel.com/docs/6.x/installation#server-requirements). Se você utiliza Windows, você pode usar um software de **ambiente de desenvolvimento web** como [WAMP](http://www.wampserver.com/en/) ou [XAMPP](https://www.apachefriends.org/pt_br/index.html) para satisfazer esses requisitos.

- O Laravel utiliza o [Composer](https://getcomposer.org/) para gerenciar suas dependências. Portanto, você precisará ter Composer instalado em sua máquina.

- Você também precisará ter o [Node](https://nodejs.org/en/) ou [Yarn](https://legacy.yarnpkg.com/en/) na sua máquina para poder instalar outras dependências

### Instalando

1. **Clone o Repositório**

```
git clone https://github.com/rodrigosuelli/InfoFlix.git

cd InfoFlix
```

2. **Instale as dependências do Composer:** `composer install`

3. **Instale as outras dependências com NPM ou Yarn**

```
npm install
//ou
yarn
```

4. **Faça uma cópia do arquivo** `.env.example` e renomeie-a para `.env`

5. **Rode o commando:** `php artisan key:generate`.
 Esse comando vai gerar uma chave de encriptação para sua aplicação. Sem isso o Laravel não vai funcionar.

6. **Crie um banco de dados vazio** com o nome que preferir e depois insira o nome escolhido no campo DB_DATABASE do arquivo `.env`

7. **No arquivo** `.env`, verifique se os campos `DB_HOST`, `DB_PORT`, `DB_DATABASE`, `DB_USERNAME`, e `DB_PASSWORD` coincidem com as credenciais do banco de dados que você acabou de criar

8. **Migre o banco de dados** rodando: `php artisan migrate`

9. **Use o seguinte comando para abrir o projeto no navegador:** `php artisan serve`

10. **Se tudo deu errado, recomendo ler o artigo de [instalação](https://laravel.com/docs/6.x/installation) do Laravel**

## Licença
Este projeto está licenciado sob a licença [MIT](https://github.com/rodrigosuelli/InfoFlix/blob/master/LICENSE).
