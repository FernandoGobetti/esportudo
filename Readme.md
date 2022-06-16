# Desafio Esportudo wordpress

Neste projeto utilizei o método de ShortCode. 
Em qualquer página ou post, pode ser incluído o ShortCode e o plugin irá ser executado.

------------
Organização dos Arquivos
------------
    esportudo
    ├── assets
    │   ├── css                           <- Armazena as folhas de estilos do plugin 
    │   │   └── css.css                   <- Folha de estilo do plugin
    │   │   
    │   └── js                            <- Armazena os códigos em JavaScript
    │       └── script.js                 <- Código javascript do plugin
    │   
    ├── includes
    │   ├── shortcodes
    │   │    ├── esp_gitApi.php           <- Função que insere o template
    │   │    └── esp_gitApi-template.php  <- Template do plugin
    │   │
    │   ├── activate.php                  <- Função executado quando ativa o plugin
    │   ├── enqueue.php                   <- Função para inserir o CSS e JS no plugin
    │   └── gitapi-ajax.php               <- Função que retorna o ajax
    │
    └─ index.php                          <- Inicio do Plugin 
 
------------
## Instalação
```bash
  Instalação normal de um plugin Wordpress.
  Requer versão do wordpress maior que 5.0
```

## Executando
```bash
  * Incluir uma nova página no wordpress
  * No bloco principal, incluir o código [git_api]
```

