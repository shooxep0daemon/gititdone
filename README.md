# gititdone
There are 3 instances DB, NGINX(proxy), PHPFPM
1. set your MYSQL_ROOT_PASSWORD , MYSQL_USER , MYSQL_PASSWORD in .env file
2. set your IP or external FQDN in nginx/front.conf at the server_name 
3. edit wp-config.php in www/ 
  define( 'DB_USER', 'mysqluser' ); 
  define( 'DB_PASSWORD', 'mysqlpwd' );
4. run with docker-compose up -d
