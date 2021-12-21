echo "Criando rede..."
docker network create --driver bridge fullcycle_desafio1

echo "Subindo container MySQL 5.7..."
docker run --rm -d -it --name mysql57 -p 3306:3306 --network fullcycle_desafio1 -e MYSQL_DATABASE=FullCycle -e MYSQL_USER=fullcycle -e MYSQL_PASSWORD=fullcycle gustcoder/mysql57

echo "Aguardando container MySQL 5.7..."
sleep 10

echo "Subindo container PHP 8..."
echo "Exibindo módulos FullCycle:"
docker run --rm -it --name php8 -p 8080:80 --network fullcycle_desafio1 -v "$PWD":/var/www/app/desafio-1 gustcoder/php8

echo "Removendo container MySQL 5.7..."
docker stop mysql57

echo "Removendo network..."
docker network rm fullcycle_desafio1