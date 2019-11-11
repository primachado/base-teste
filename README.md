# Levantamento do projeto

- Criação do ambiente (PHP 7.2 e Laravel 5.5)
- Criação do banco de dados no phpmyadmin
- Instalação e configuração do L5 repository
- Configuração do banco de dados (.env e database)
- Criação das migrations (tipo_imovel, proprietario e imovel)
- Criação dos seeders (tipo_imovel e proprietario)
- Criação das rotas
- Criação do CRUD de imóvel
- Criação da request/rules para validação dos campos e formato do padrão para CEP 00000-000
- Criação da pesquisa de imóvel por município
- Criação da pesquisa de imóvel por bairro
- Criação da lista de imóvel ordenada por bairro e munícipio paginada

# Endpoints

# Criar imóvel:  

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

# Editar imóvel:

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

# Listar imóvel:

GET| api/imovel  

# Deletar imóvel:

DELETE | api/imovel/{imovel}  
          
# Pesquisar imóvel por bairro:

GET | api/imovel/pesquisarPorBairro/{bairro}

# Pesquisar imóvel por município:

GET| api/imovel/pesquisarPorMunicipio/{municipio}

# Paginar e ordenar imóvel:

GET| api/imovel/ordenar 




Obs.: Foi utilizado o Insomnia para testar as APIs.


Obrigada!


