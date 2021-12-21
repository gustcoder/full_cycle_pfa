FROM mysql:5.7

COPY ./db/ /docker-entrypoint-initdb.d

RUN chown -R mysql:mysql /docker-entrypoint-initdb.d/

EXPOSE 3306

CMD service mysql start && \
    mysql --user=root --password= mysql < /docker-entrypoint-initdb.d/createDatabase.sql && \
    tail -f /dev/null

RUN echo "Subindo container Mysql, por favor aguarde..."
RUN sleep 5