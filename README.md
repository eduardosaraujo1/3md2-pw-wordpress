# Instalação via Docker

1. Clone o repositório:

```bash
git clone https://github.com/eduardosaraujo1/3md2-pw-wordpress.git
```

2. Copie o arquivo www/wp-config-sample.php para www/wp-config.php e configure as credenciais do banco de dados conforme necessário.

3. Acesse a pasta do projeto:

```bash
cd 3md2-pw-wordpress
```

3. Inicie os containers:

```bash
docker compose up
```

# Instalação via XAMPP

1. Copie o conteúdo da pasta `www` para dentro da pasta `htdocs` do XAMPP.
2. Copie o arquivo `wp-config-sample.php` para `wp-config.php` e configure as credenciais do banco de dados conforme necessário em seu ambiente.
   - Como estará fora do setup Docker, você precisará criar o banco de dados nomeado em `DB_NAME` manualmente via phpMyAdmin ou linha de comando.
3. Utilize o painel de controle do XAMPP para iniciar os serviços Apache e MySQL.

> ⚠️ **Atenção:** Não coloque o projeto inteiro dentro de `htdocs`, apenas o conteúdo da pasta `www`. Colocar o projeto completo pode causar problemas com os caminhos padrão do WordPress.
