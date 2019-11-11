# Levantamento do projeto

- Cria��o do ambiente (PHP 7.2 e Laravel 5.5)
- Cria��o do banco de dados no phpmyadmin
- Instala��o e configura��o do L5 repository
- Configura��o do banco de dados (.env e database)
- Cria��o das migrations (tipo_imovel, proprietario e imovel)
- Cria��o dos seeders (tipo_imovel e proprietario)
- Cria��o das rotas
- Cria��o do CRUD de im�vel
- Cria��o da request/rules para valida��o dos campos e formato do padr�o para CEP 00000-000
- Cria��o da pesquisa de im�vel por munic�pio
- Cria��o da pesquisa de im�vel por bairro
- Cria��o da lista de im�vel ordenada por bairro e mun�cipio paginada

# Endpoints

# Criar im�vel:  

POST | api/imovel

Exemplo de json utilizado:

```javascript
{
	"logradouro": "Rua Projetada V",
	"numero" :13,
	"complemento": "Qd 37",
	"cep": "25260-140",
	"estado": "RJ",
	"bairro": "Santa Cruz da Serra",
	"municipio": "Duque de Caxias",
	"id_tipo_imovel": 1,
	"id_proprietario": 1
}
```

# Editar im�vel:

PUT| api/imovel/{imovel}   

Exemplo de json utilizado:

```javascript
{
	"logradouro":"Rua Projetada A",
	"numero":15,
	"complemento": "Qd 38",
	"cep": "25260-141",
	"estado": "RJ",
	"bairro": "Parque Paulista",
	"municipio": "Duque de Caxias",
	"id_tipo_imovel": 1,
	"id_proprietario": 1
}
```

# Listar im�vel:

GET| api/imovel  

# Deletar im�vel:

DELETE | api/imovel/{imovel}  
          
# Pesquisar im�vel por bairro:

GET | api/imovel/pesquisarPorBairro/{bairro}

# Pesquisar im�vel por munic�pio:

GET| api/imovel/pesquisarPorMunicipio/{municipio}

# Paginar e ordenar im�vel:

GET| api/imovel/ordenar 




Obs.: Foi utilizado o Insomnia para testar as APIs.


Obrigada!


