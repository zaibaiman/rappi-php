## About Rappi-PHP

Rappi-PHP es una pequeña aplicación Web que trata de imitar la aplicación [Rappi](https://www.rappi.com.mx).
Rappi-PHP esta desarrollada con Laravel 5.5

## Ejecutar

Para correr la aplicación es necesario descargar el repositorio a la maquina local e instalar [Docker](https:docker.com).

Abrir la terminal de docker, ir a la carpeta rappi-php y ejecutar el comando:

```
docker-compose up
```

Luego, es necesario alimentar la base de datos con información inicial, para esto es necesario que abra una nueva terminal de docker para luego entrar al contenedor de la aplicación ejecutando el siguiente comando:

```
docker exec -it rappi-web /bin/sh
```

Una vez dentro del contenedor corra el siguiente comando:

```
php artisan migrate:refresh --seed
```

## Capturas de Pantalla
![alt text](misc/screenshot-1.png?raw=true)
![alt text](misc/screenshot-2.png?raw=true)
![alt text](misc/screenshot-3.png?raw=true)
