# 🚀 Meu Primeiro Projeto PHP + MySQL

Este é o meu primeiro projeto desenvolvido com **PHP** e **MySQL**, criado como parte do meu aprendizado em desenvolvimento web utilizando o PHP. O projeto consiste em um sistema simples de autenticação com as seguintes funcionalidades:

## 📋 Funcionalidades

- **🏠 Home** - Página inicial do sistema
- **👤 Cadastro** - Tela para novos usuários se registrarem
- **🔐 Login** - Sistema de autenticação de usuários
- **📊 Painel (simples) do Cliente** - Área restrita para usuários logados

## 🗄️ Configuração do Banco de Dados

### 1. Criar o Schema no MySQL

```sql
CREATE SCHEMA projeto_um;
```
(De preferência, criar um schema com o nome projeto_um, mas pode criar um schema com outro nome, se quiser)

### 2. Criar a Tabela de Usuários

```sql
CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    nome VARCHAR(255) NOT NULL,
    email VARCHAR(200) NOT NULL,
    senha VARCHAR(16) NOT NULL
);
```

## ⚙️ Configuração do Projeto

### 1. Clonar o Repositório
```bash
git clone [URL_DO_REPOSITORIO]
cd [NOME_DO_PROJETO]
```

### 2. Configurar a Conexão com o Banco

1. Copie o arquivo de exemplo:
   ```bash
   cp config.exemplo.php config.php
   ```

2. Crie o arquivo `config.php` com suas credenciais:
   ```php
   <?php
   $host="localhost";
   $port=3306;
   $socket="";
   $user="SEU_USUARIO_MYSQL";
   $password="SUA_SENHA_MYSQL";
   $dbname="projeto_um";
   
   $conexao = new mysqli($host, $user, $password, $dbname, $port, $socket);
   ?>
   ```

## 🖥️ Como Executar o Projeto

### Usando o Servidor Embutido do PHP

Este projeto foi desenvolvido utilizando **apenas o servidor embutido do PHP**, sem necessidade de XAMPP, WAMP ou outras plataformas.

#### Passo 1: Navegar até o diretório do projeto
```bash
cd /caminho/para/o/projeto
```

#### Passo 2: Iniciar o servidor embutido
```bash
php -S localhost:8000
```

#### Passo 3: Acessar o projeto
Abra seu navegador e acesse: `http://localhost:8000`

### 📍 Rotas Disponíveis

- `http://localhost:8000/` - Página inicial
- `http://localhost:8000/cadastro.php` - Tela de cadastro
- `http://localhost:8000/login.php` - Tela de login
- `http://localhost:8000/painel.php` - Painel do cliente (requer login, caso tente acessar essa página sem estar logado, você será direcionado para a página login.php)

## 🛠️ Tecnologias Utilizadas

- **PHP 8.4.11** - Linguagem de programação principal
- **MySQL** - Banco de dados relacional
- **HTML5/CSS3** - Estrutura e estilo das páginas
- **Servidor Embutido PHP** - Para desenvolvimento local

## 📖 Documentação Adicional

### Comandos Úteis do Servidor PHP

#### Iniciar servidor em porta específica:
```bash
php -S localhost:3000
```

#### Iniciar servidor em IP específico:
```bash
php -S 192.168.1.100:8000
```

#### Verificar versão do PHP:
```bash
php --version
```

#### Verificar módulos PHP instalados:
```bash
php -m
```

### Solução de Problemas Comuns

#### Erro: "mysqli não encontrado"
```bash
# No Ubuntu/Debian
sudo apt-get install php-mysql

# No Windows (com PHP instalado)
# Verifique se a extensão mysqli e a extensão pdo_mysql está descomentada no php.ini
```

#### Erro: "Não é possível conectar ao MySQL"
- Verifique se o MySQL está rodando
- Confirme as credenciais no arquivo `config.php`
- Verifique se o usuário tem permissões no banco `projeto_um`

## 🤝 Contribuições

Este é um projeto de aprendizado, mas sugestões e melhorias são sempre bem-vindas!

## 📄 Licença

Este projeto foi criado para fins educacionais e de aprendizado.

## 🔗 Links Úteis

- [Como instalar PHP e usar servidor imbutido] (https://www.youtube.com/watch?v=HzIXZVctwI8)

- [Como configurar o PHP para usar com o MySQL] (https://www.youtube.com/watch?v=IeTbZOxEwGc)

---

**Desenvolvido por Arthur como primeiro projeto PHP + MySQL**
