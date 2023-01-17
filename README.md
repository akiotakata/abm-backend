# ABM Backend

Proyecto creado con Laravel y Docker (Sail)

## Instalación

Es necesario tener docker instalado y corriendo.

### Clonar el Proyecto

```
git clone git@github.com:akiotakata/abm-backend.git
```

y pasarse al directorio correspondiente

```
cd abm-backend
```

### Instalar dependencias con Composer


```
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php82-composer:latest \
    composer install --ignore-platform-reqs
```

### Instalar dependencias con NPM

```
npm install
```

### Crear una copia del .env de ejemplo

```
cp .env.example .env
```

### Levantar Sail

```
./vendor/bin/sail up
```

### Generar clave de encriptación de app

```
./vendor/bin/sail php artisan key:generate
```

### Migrar tablas

```
./vendor/bin/sail php artisan migrate
```
