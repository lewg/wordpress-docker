# Wait for DB Server
while ! nc -vz $DB_1_PORT_3306_TCP_ADDR $DB_1_PORT_3306_TCP_PORT; do sleep 1; done

# Live server read-only account info:
DB_HOST=replace
DB_USER=replace
DB_PASS=replace
DB_NAME=replace

echo "Restoring Site DB from Production"
mysqldump -C --single-transaction -u $DB_USER -h $DB_HOST -p$DB_PASS $DB_NAME | mysql -C -h $DB_1_PORT_3306_TCP_ADDR -P $DB_1_PORT_3306_TCP_PORT -u $DB_1_ENV_MYSQL_USER -p$DB_1_ENV_MYSQL_PASSWORD $DB_1_ENV_MYSQL_DATABASE
echo "Done Restore"
