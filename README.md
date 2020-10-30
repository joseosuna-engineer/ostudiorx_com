<img src="https://raw.githubusercontent.com/joseosuna-engineer/ostudiorx_com/master/core/images/full-logo.png"   />

# This really means a lot to me
> It was my **first end-to-end big project**. I think it was important for my Programming portfolio. In fact. I used this project as a cover letter for my first paid job. I am surprised this code has survived to Pendrives, DVDs, private repositories, Bitbucket, and back to GitHub.

## A little bit of history



<img src="https://github.com/matiassingers/awesome-readme/raw/master/icon.png" align="left"  />


> According to this commit [58ed570](https://github.com/joseosuna-engineer/ostudiorx_com/commit/58ed57073d2e6b2c83dd50d61a53461bce47edfa) committed on **Dec 27, 2012**, It was running on PHP **YiiFramework 1.1.7**. <br />
> YiiFramework 1.1.7 [CHANGELOG](https://www.yiiframework.com/files/CHANGELOG-1.1.7.txt) dated Version 1.1.7 on **March 27, 2011**. <br />
> YiiFramework 1.1.8 [CHANGELOG](https://www.yiiframework.com/files/CHANGELOG-1.1.8.txt) dated Version 1.1.8 on **June 26, 2011**. <br />
> I remember that I used the last YiiFramework version, so this puts the kickoff between March 27, 2011 and June 26, 2011. 


<img src="https://www.yiiframework.com/image/yii_logo_light.png" align="center"   />


chacao
================

A web-enabled athlete profiles software

# How to run

## Prerequisite

### Install Php and Nginx

Install php7.4-fpm <br />

match nginx user to php user <br />
```bash
sudo nano /etc/php/7.4/fpm/pool.d/www.conf
user = your-user
group = your-user

listen.owner = your-user
listen.group = your-user

```

```bash
sudo nano /etc/nginx/nginx.conf
user your-user;

```

use nginx with php7.4-fpm.sock <br />
```bash
 location ~ \.php$ {
                ...
                include snippets/fastcgi-php.conf;
                fastcgi_pass unix:/var/run/php/php7.4-fpm.sock;
                ...
                }

```

#### enable GD-support 
```bash
sudo apt install php7.4-gd
```

### Install mysql and php support


### Enviroment variables

> nginx:
```bash

sudo nano nginx/sites-available/your-site
# don't put character $ as value

location ~ \.php$ {
        ...
        fastcgi_param OPENSHIFT_MYSQL_DB_PORT "...";
        fastcgi_param OPENSHIFT_MYSQL_DB_USERNAME "...";
        fastcgi_param OPENSHIFT_MYSQL_DB_PASSWORD "...";
        fastcgi_param OPENSHIFT_GEAR_NAME "...";
        fastcgi_param GII_MODULE_PASS "...";
        fastcgi_param GII_MODULE_IP "...";
        fastcgi_param ADMIN_EMAIL "...";
        include fastcgi_params;
        ...
    }
```


### data
#### create database and user from<br />
models-and-database/init.sql<br />

#### Copy data
models-and-database/dump-data.sql <br />
models-and-database/dump-data-lost-tables.sql <br />


### login
user: usuario <br />
pass: usuario <br />

### Database Model
You can find a database in models-and-database/MODELO_ER_BD_MySQL_Workbench_8.mwb <br />
It works on MySQL Workbench 8
