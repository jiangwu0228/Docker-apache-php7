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

Here is the thing, we need put php mysql as well as nginx in same container that all software can running together.

So in total there is 5 container which is app-data-container, mysql-data-container, mysql-container, php-container, nginx-container.

Except two data-container, other container will running.



Then we can run mysql CLI

` docker exec -it mysql-container /bin/bash`



` $ ls`

List all data

` $ pwd`

Print derictuy

` $ uname -or`

Show system info

` cd /var/lib/mysql`

Go to mysql folder directory



// In root directory type

` $ mysql -ujason -ppassword`

then you can do mysql CLI

` $ show databases;`

` $ use nginx_db`

Then you can do mysql CLI



after that have to quit

` $ \q`

quit mysql

` $ exit`

quit mysql-container

Quite





then 

` $ docker inspect mysql-data-container`

Show all the info

` $ docker volume ls`

Show all the volume

` $ docker volume ls -qf dangling=true `

show the one dangling

and what is dangling volume?

Since the point of volumes is to exist independent from containers, when a container is removed, a volume is not automatically removed at the same time. **When a volume exists and is no longer connected to any containers**, it's called a dangling volume.

` $docker volume prune`

Remove all unused local volumes. Unused local volumes are those which are not referenced by any containers
