chacao
================

A web-enabled athlete profiles software

# How to run

## Prerequisite

### Install Php and Nginx

Install php7.4-fpm <br />

match nginx user to php user <br />

use nginx with php7.4-fpm.sock <br />


### Install mysql and php support


### Enviroment variables

OPENSHIFT_MYSQL_DB_HOST=<br />
OPENSHIFT_MYSQL_DB_PORT=<br />
OPENSHIFT_MYSQL_DB_USERNAME=<br />
OPENSHIFT_MYSQL_DB_PASSWORD=<br />
OPENSHIFT_GEAR_NAME=bd_registro<br />
GII_MODULE_PASS=<br />
GII_MODULE_IP=<br />
ADMIN_EMAIL=<br />


### data
# create database and user from<br />
/protected/data/init.sql<br />

# Copy data
/protected/data/dump-data.sql <br />
/protected/data/dump-data-lost-tables.sql <br />


# login
user: usuario <br />
pass: usuario <br />

# Database Model
You can find a database in /protected/data/MODELO_ER_BD_MySQL_Workbench_8.mwb <br />
It works on MySQL Workbench 8
