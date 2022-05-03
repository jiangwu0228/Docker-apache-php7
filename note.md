# **Docker-PHP-MySQL**





// each time you make change you have to rebuild image and container.

`$docker build -t php-image .`



`$ docker run -p 80:80 -d --name php-container php-image`



// to make change in any file, you have to delete and rebuild.

`$ docker rm php-container -f // force stop and delete container in same time.`



Otherwise have to stop container then delete container

`$ docker stop php-container`

`$ docker rm php-container`

// build and run mysql

`$ docker run --name mysql-container -e MYSQL_ROOT_PASSWORD=jasonwu --platform=linux/x86_64 -d mysql:latest`



If you only need link them together you don’t have to delete all image, just delete container.

Delete container and run under.



// Link them togater

`$ docker run -p 80:80 -d --name php-container --link mysql-container:mysql php-image`



// make everything easy you can add this code, but you got to remove provers container first. 

`$ docker run -p 80:80 -d -v ~/Documents/Docker/docker-apache-php7/src/:var/www/html/ --name php-container —link mysql-container:mysql php-image`



After this command you don’t have to rebuild image and container! Amazing!





For nginx frist of all need add docker-composer.yml

```yml
nginx:
  image: nginx:latest
  container_name: nginx-container
  ports:
    - 80:80
```

after config all, have to rebuild same as before. Delete all the container and image and RUN:

` docker-compose up -d`