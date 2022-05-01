# Sistema de Gerenciamento de igrejas

### Clone o projeto

```
git clone https://github.com/gabriel-torres-brum/ShepHerd.git
```

## Instale o Docker e continue as etapas abaixo


### Rode esse comando para instalar as dependências com o Docker

```
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v $(pwd):/var/www/html \
    -w /var/www/html \
    laravelsail/php81-composer:latest \
    composer install --ignore-platform-reqs
```

### Adicione o alias 'sail' no seu terminal padrão (Opcional)

```
echo "alias sail='[ -f sail ] && bash sail || bash vendor/bin/sail'" >> ~/.bashrc
```

### Suba o projeto no Docker com o sail

```
sail up -d
```

ou

```
./vendor/bin/sail up -d
```

### Instale as dependências node com o npm

```
sail npm install

sail npm run watch
```

### Pronto! Agora é só acessar esse link no navegador

```
http://localhost:3000
```

#  por Gabriel Torres Brum