Ao baixar os arquivos, por gentileza executar:

1. cd desafio-1
2. docker build -t gustcoder/php .
3. docker run --rm -it --name php8 -v "$PWD":/var/www/app gustcoder/php