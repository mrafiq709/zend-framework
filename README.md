# ZendSkeletonApplication

MySQL Install in Docker
-----------------------
    https://hub.docker.com/r/mysql/mysql-server/
    
    docker pull mysql/mysql-server:5.6 **// If 5.6 doesn't written the it will pull latest version.**
    docker run --name=mysql1 -d mysql/mysql-server:5.6
    docker ps // To see the current running images in Docker
    docker logs mysql1 // To see the logs of MySql
    docker logs mysql1 2>&1 | grep GENERATED // For checking the root password
    docker exec -it mysql1 mysql -uroot -p // Use the docker exec -it command to start a mysql client inside the Docker container
    SET PASSWORD FOR 'root'@'localhost' = PASSWORD('new_password'); // For mysql 5.6 version
    ALTER USER 'root'@'localhost' IDENTIFIED BY 'new_password'; // For latest version

### References
https://docs.zendframework.com/tutorials/getting-started/skeleton-application/
