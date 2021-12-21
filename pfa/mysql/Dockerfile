FROM mysql:5.7
COPY ./db/ /docker-entrypoint-initdb.d
RUN chown -R mysql:mysql /docker-entrypoint-initdb.d/
CMD service mysql start && tail -f /dev/null