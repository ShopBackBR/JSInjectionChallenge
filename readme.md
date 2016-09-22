# ShopBack JS Injection Challange
Injeção de JS em páginas e captura de informações.

## Desafio da ShopBack
Imagine o cenário em que você precise injetar um único arquivo .js em uma loja virtual e este código deverá capturar e gerenciar dados dos cliente de forma dinâmica e inteligente.

Estes dados podem ser capturados de várias formas diferentes, monitorando formulários, buscando em variaveis globais e/ou outros meios.

Precisam ser capturados pelo menos os seguintes dados utilizando o método do JS _shopback.in:
- E-Mail
- Nome
- Sobrenome

Em um certo momento estas informações deverão ser exibidas em um modal criado pelo seu código injetado (método do JS _shopback.showUserData).

Você pode usar qualquer site para desenvolver o teste, na hora de postar seu código para a avaliação, nos informe a URL em que devemos injetar o seu script para testar.

## Requisitos
- Utilização de PHP 7 (vamos testar na versão 7.0 do PHP)
- Algorítimos inteligentes e ageis para não alterar o fluxo do site
- Salvar as informções recebidas e retornar uma forma de identificar o cliente posteriormente
- Se o cliente já existir no banco e alterar alguma informação, esta informação deverá ser atualizada.
- Se for utilizar jQuery, utilizar o do próprio site injetado (não podemos carregar mais que um arquivo de script dentro da página injetada)
- É desejavel que as informações sejam trafegadas de forma segura


## Informações úteis
Dentro do código temos o arquivo api.php que devera receber o POST com os dados e o shopback.js que vai ser injetado na loja.

Existem várias formas de processar e salvar as informações (banco de dados NoSql ou SQL) desejamos ver algorítimos inteligentes e bem estruturados.

Código de injeção de JS:
```js
// Alterar e colar o código no console de desenvolvedor do navegador para iniciar o monitoramento dos dados
(function () {
  var ss = document.createElement('script');
  ss.type = 'text/javascript';
  ss.async = false;
  ss.src = 'http://github.com/repositorio/script.js';
  var sc = document.getElementsByTagName('script')[0];
  sc.parentNode.insertBefore(ss, sc);
})();
```