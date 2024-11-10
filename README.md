# 🐳 Sistema de Gerenciamento de Funcionários com Docker

Este projeto demonstra a implementação de um sistema PHP de gerenciamento de funcionários utilizando Docker, com foco nos seguintes objetivos:

1. 📄 Explicar o arquivo `docker-compose.yml`
2. 💻 Demonstrar o funcionamento do sistema PHP
3. 🔄 Verificar a persistência de dados após reiniciar os contêineres
4. 🗄️ Acessar o banco de dados via phpMyAdmin
5. 🎛️ Gerenciar contêineres através do Portainer.io

## 🛠️ Componentes do Sistema

- Aplicação PHP (CRUD de funcionários)
- Banco de dados MySQL
- phpMyAdmin para gerenciamento do banco de dados
- Portainer.io para gerenciamento de contêineres

## 🚀 Como Executar o Projeto

1. Clone o repositório:
   ```
   git clone https://github.com/luizfelipemacedo/php-container.git
   cd php-container
   ```

2. Configure o arquivo `src/config.php`:
   - Abra o arquivo `src/config.php`
   - Localize a linha: `define('DB_SERVER', 'localhost');`
   - Substitua 'localhost' pelo seu endereço IP local
   - Exemplo: `define('DB_SERVER', '192.168.0.10');`

   ⚠️ **IMPORTANTE**: Esta etapa é crucial para que a aplicação PHP se conecte corretamente ao banco de dados MySQL no contêiner Docker.

3. Inicie os contêineres:
   ```
   docker-compose up -d
   ```

4. Acesse os serviços:
   - 🌐 Aplicação PHP: `http://localhost:8080`
   - 🗄️ phpMyAdmin: `http://localhost:8081`
   - 🐳 Portainer: `http://localhost:9000`

## 📋 Explicação do docker-compose.yml

O arquivo `docker-compose.yml` define quatro serviços:

1. `php`: Aplicação PHP com Apache
2. `db`: Banco de dados MySQL
3. `phpmyadmin`: Interface web para gerenciamento do MySQL
4. `portainer`: Ferramenta de gerenciamento de contêineres

Cada serviço é configurado com suas respectivas portas, volumes e variáveis de ambiente.

## 🔍 Demonstração do Sistema

1. Acesse `http://localhost:8080` e cadastre um novo funcionário.
2. Verifique se o funcionário foi adicionado à lista.

## 🔄 Teste de Persistência

1. Pare os contêineres: `docker-compose down`
2. Inicie-os novamente: `docker-compose up -d`
3. Verifique se o funcionário cadastrado ainda está na lista.

## 🗄️ Acesso via phpMyAdmin

1. Acesse `http://localhost:8081`
2. Faça login com usuário `root` e senha `rootpass`
3. Explore a tabela `employees` no banco `test_db`

## 🎛️ Gerenciamento com Portainer.io

1. Acesse `http://localhost:9000` e crie uma conta de admin
2. Use o Portainer para monitorar e gerenciar seus contêineres Docker

## 📝 Notas Importantes

- Os dados persistem em volumes Docker, garantindo que as informações não sejam perdidas entre reinicializações.
- Altere as senhas padrão em um ambiente de produção!
- Certifique-se de que o endereço IP configurado no `src/config.php` corresponda ao IP da sua máquina na rede local.

## 👥 Participantes

<table align="center">
  <tr>
    <td align="center">
      <a href="https://github.com/pedrohmarinho">
        <img src="https://github.com/pedrohmarinho.png" width="100px;" alt="Foto do Pedro Marinho"/><br>
        <sub>
          <b>Pedro Marinho</b>
        </sub>
      </a>
    </td>
    <td align="center">
      <a href="https://github.com/luizfelipemacedo">
        <img src="https://github.com/luizfelipemacedo.png" width="100px;" alt="Foto do Luiz Felipe"/><br>
        <sub>
          <b>Luiz Felipe Macedo</b>
        </sub>
      </a>
    </td>
    <td align="center">
      <a href="https://github.com/gustavopradobr">
        <img src="https://github.com/gustavopradobr.png" width="100px;" alt="Foto do Gustavo Prado"/><br>
        <sub>
          <b>Gustavo Prado</b>
        </sub>
      </a>
    </td>
    <td align="center">
      <a href="">
        <img src="https://avatars.githubusercontent.com/u/80767120?v=4" width="100px;" alt="Foto do Gustavo Prado"/><br>
        <sub>
          <b>João Pedro</b>
        </sub>
      </a>
    </td>
  </tr>
</table>
