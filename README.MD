# MVC

### Primeiro Passo

correr o comando dentro de src:

```
composer install
```
em seguida correr dentro de src:

```
composer dump-autoload
```

### Segundo Passo

Criar ficheito .env dentro de app/model e setar as variaveis de ambiente:
 * HOST 
 * DB
 * USER
 * PASS

### Criação de controller
 * Criar um Controller dentro de app/controller
 * Registar a rota dentro de src/class/Routes

### Criação de view
 * Criar uma pasta com o nome da rota em app/view
 * Dentro criar os ficheiros de renderização (Footer,Main,Header,Head)

### Criação de Model
 * Criar dentro da pasta model

### Connectar Model - View - Controller
 * A classe principal dentro do Controller extende o Model
 * Clase Auxiliar View extende o Render e implementa a interfaceView
 * um objecto da classe auxiliar é criada dentro do contrutor da classe principal