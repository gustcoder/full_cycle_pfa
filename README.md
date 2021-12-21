# Repositório para armazenar atividades e desafios relacionados ao curso "Imersão FullCycle"

## Desafio 1
### Ao baixar os arquivos, por gentileza executar:

```
1. cd desafio-1/mysql
2. docker build -t gustcoder/mysql .
3. docker network create -d bridge fullcycle-network
4. docker run --rm -d -it --name mysql57 -p 3307:3306 --network fullcycle-network -e MYSQL_DATABASE=FullCycle -e MYSQL_USER=fullcycle -e MYSQL_PASSWORD=fullcycle gustcoder/mysql

5. cd .. && cd desafio-1
6. docker build -t gustcoder/php .
7. docker run --rm -it --name php8 -p 8080:80 --network fullcycle-network -v "$PWD":/var/www/app gustcoder/php
```