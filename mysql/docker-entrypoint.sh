#!/bin/bash

set -xeo pipefail
shopt -s nullglob

DATADIR="/var/lib/mysql/"
SOCKET="/var/run/mysqld/mysqld.sock"

if [ "$1" = 'mysqld' ]; then
    if [ ! "$(ls -A /var/lib/mysql/)" ]; then
        "$@" --initialize-insecure
    fi

    sed -i 's/127.0.0.1/0.0.0.0/' /etc/mysql/mysql.conf.d/mysqld.cnf
    "$@" --socket="${SOCKET}" &
    pid="$!"

    sleep 10

    env | grep "MYSQL"
    mysql --protocol=socket -uroot -hlocalhost --socket="${SOCKET}" -e\
        "CREATE DATABASE IF NOT EXISTS "${MYSQL_DATABASE}";
         CREATE USER IF NOT EXISTS "\"${MYSQL_USER}\""@"\"%\"";
         SET PASSWORD FOR "\"${MYSQL_USER}\""@"\"%\"" = PASSWORD("\"${MYSQL_PASSWORD}\"");
         GRANT ALL ON "${MYSQL_DATABASE}".* TO "\"${MYSQL_USER}\""@"\"%\"";
         DELETE FROM mysql.user WHERE User='root' AND Host NOT IN ('localhost', '127.0.0.1', '::1');
         FLUSH PRIVILEGES;
         SHOW DATABASES;"

    if ! kill -s TERM "$pid"; then
        echo >&2 "MySQL init failed."
        exit 1
    fi
fi

exec "$@"
