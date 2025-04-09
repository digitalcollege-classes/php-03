migrar-database:
	@echo "\n" 
	@echo ">>> Criando banco de dados...\n"

	@docker compose exec mysql mysql -u root -proot -e "CREATE DATABASE IF NOT EXISTS db_contatinhos;" > /dev/null 2>&1
	
	@echo "\n>>> Sucesso, banco criado!...\n"

	@echo "\n>>> Criando tabela de CONTATOS\n"
	@docker compose exec mysql mysql -u root -proot -e "USE db_contatinhos; CREATE TABLE IF NOT EXISTS	 tb_contatos ( id INT PRIMARY KEY AUTO_INCREMENT, nome VARCHAR(50) NOT NULL, email VARCHAR(100) NULL, telefone VARCHAR(20) NOT NULL  );" > /dev/null 2>&1
	@echo "\n>>> Sucesso, tabela de contatos criado!...\n"
