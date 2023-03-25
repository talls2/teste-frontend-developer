# Teste de Estágio (Ellos Design)

<h2 id="introducao">Introdução</h2>

Resolução do teste da Ellos Design para vaga de estágio como desenvolvedor full-stack.

Gostaria de iniciar dizendo que me diverti muito no desenvolvimento do projeto, encarando também como um desafio para mim mesmo, me tirando um pouco da zona de conforto em algumas situações, como por exemplo: Fazer o css "puro" com SASS quando consigo fazer Landing Pages muito mais rapidamente com frameworks CSS, de qualquer forma, obrigado pelo desafio!

Vizualização do projeto disponível em: https://dk-banana.herokuapp.com/


A versão do PHP utilizada foi "8.0.1", caso haja algum erro na execução, favor utilizar essa versão!

Como exemplo, desenvolvi um site institucional para a empresa fictícia "DK banana's", a empresa do personagem fictício "Donkey Kong", com design baseado no [wireframe fornecido para o teste](https://raw.githubusercontent.com/talls2/teste-frontend-developer/master/wireframe.png).

<h2 id="tecnologias">Tecnologias utilizadas</h2>

As tecnologias usados no projeto foram:

<h3 id="frontend">Frontend</h3>

- [HTML](https://developer.mozilla.org/pt-BR/docs/Web/HTML);
- [JavaScript](https://developer.mozilla.org/pt-BR/docs/Web/JavaScript);
- [CSS](https://developer.mozilla.org/pt-BR/docs/Web/CDN);
- [Sass](https://sass-lang.com).

<h3 id="backend">Backend</h3>

- [PHP](https://www.php.net). (8.0.1) 
- [MAMP](https://www.mamp.info/en/windows/).

<h3 id="banco">Banco de Dados</h3>

- [MySQL](https://www.mysql.com).

<h3 id="ferramentas">Outras ferramentas</h3>

- [Git (Gerenciamento de versões)](https://git-scm.com);
- [Github (Hospedagem do código)](https://github.com);
- [Visual Studio Code (Editor de texto)](https://code.visualstudio.com);
- [Font Awesome (Biblioteca de ícones gratuitos)](https://fontawesome.com);
- [ESLint + Prettier (Padronização do código)](https://eslint.org).
- [Figma (Design)](https://www.figma.com/).

## Executando localmente

Inicialmente, crie uma tabela no banco de dados com os seguintes comandos.

```sql
-- Caso não possua um banco, crie-o.
CREATE DATABASE dk_banana;
USE dk_banana;

-- Tabela que armazenará as mensagens dos usuários
CREATE TABLE messages
(
  id INT NOT NULL AUTO_INCREMENT,
  name VARCHAR(50) NOT NULL,
  email VARCHAR(50) NOT NULL,
  phone VARCHAR(20) NOT NULL,
  message VARCHAR(400) NOT NULL,
  PRIMARY KEY (id)
);
```

Em seguida configure seus dados a partir da linha 10 do arquivo `index.php`.

```php
...

$user = "root"; // usuário
$password = "root"; // senha
$db = "dk_banana"; // nome do banco

...
```

Após as configurações e a criação da tabela, utilize um servidor web para acessar o arquivo index.php (Utilizei o MAMP durante o desenvolvimento)

### Editando os Estilos

A estilização do projeto foi feita usando o pré-processador Sass. Os arquivos estão modularizados no diretório `./styles/sass`, divididos em categorias importadas no arquivo `main.scss`.

Para processar o Sass, utilizei a extensão do Visual Studio Code [Live Sass Compiler](https://marketplace.visualstudio.com/items?itemName=ritwickdey.live-sass).

<h2 id="features">Features</h2>

As seguintes features foram adicionadas ao projeto:

- Responsividade (tanto para mobile quanto para dispositivos excessivamente grandes);
- Animações CSS (revelar no scroll, pulsão, girar);
- Deploy do PHP na Heroku;
- Máscara para input de telefone (padrão brasileiro);

<h2 id="design">Design</h2>

A partir do wireframe, desenvolvi a seguinte interface de usuário.

![Template da página desenvolvida](https://raw.githubusercontent.com/talls2/teste-frontend-developer/master/src/images/projectfull.png)
