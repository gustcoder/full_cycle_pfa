# Repositório para armazenar atividades e desafios relacionados ao curso "Imersão FullCycle"

## Desafio 1
### Ao baixar os arquivos, por gentileza executar:

```
1. docker network create --driver bridge fullcycle_desafio1
2. docker run --rm -d -it --name mysql57 -p 3306:3306 --network fullcycle_desafio1 -e MYSQL_DATABASE=FullCycle -e MYSQL_USER=fullcycle -e MYSQL_PASSWORD=fullcycle gustcoder/mysql57
3. docker run --rm -it --name php8 -p 8080:80 --network fullcycle_desafio1 -v "$PWD":/var/www/app/desafio-1 gustcoder/php8
4. docker stop mysql57
5. docker network rm fullcycle_desafio1
```