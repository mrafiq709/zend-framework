# ZendSkeletonApplication

Docker Command:
---------------
**See Running Container:** ```docker ps```

**See all container:** ```docker ps -a```

**List of all container ID:** ```docker ps -a -q```

**Delete all container:** ```docker container rm $(docker ps -a -q)```

MySQL Install in Docker
-----------------------
    https://hub.docker.com/r/mysql/mysql-server/
    
 **If 5.6 doesn't written then it will pull latest version.**
 
    docker pull mysql/mysql-server:5.6
    docker run --name=mysql1 -d mysql/mysql-server:5.6
**To see the current running images in Docker**

    docker ps
**To see the logs of MySql**

    docker logs mysql1
**For checking the root password**

    docker logs mysql1 2>&1 | grep GENERATED
**Use the *docker exec -it* command to start a mysql client inside the Docker container**

    docker exec -it mysql1 mysql -uroot -p
**For mysql 5.6 version**

    SET PASSWORD FOR 'root'@'localhost' = PASSWORD('new_password');
**For latest version**

    ALTER USER 'root'@'localhost' IDENTIFIED BY 'new_password';

##### References
https://docs.zendframework.com/tutorials/getting-started/skeleton-application/
