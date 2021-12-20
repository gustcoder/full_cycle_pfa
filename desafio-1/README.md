Ao baixar os arquivos, por gentileza executar:

1. docker build -t gustcoder/php .
2. docker run --rm -it --name php8 -v "$PWD":/var/www/app gustcoder/php