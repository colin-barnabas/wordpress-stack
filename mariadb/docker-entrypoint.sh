#! /bin/bash

set -exo pipefail

SOCKET=$(mysqld --verbose --help 2>/dev/null | awk '$1 == "'"socket"'" { print $2 }')
DATADIR=$(mysqld --help --verbose 2>/dev/null | awk '$1 == "'"datadir"'" { print $2}')

mysql_install_db --datadir=$DATADIR

#"$@" --skip-networking --socket="${SOCKET}" &
mysqld_safe &
pid="$!"

mysql -uroot <<-EOSQL
    CREATE TABLE wordpress;
EOSQL




exec "$@"
