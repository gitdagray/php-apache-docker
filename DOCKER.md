# Docker

Think of Docker as a tool that helps package up software and everything it needs to run, like libraries and settings, into a neat little box called a "container". This container can then be easily moved around and run on different computers, making it simpler for developers to build, share, and run their applications consistently across various environments. 

## Download Docker Desktop

[https://docs.docker.com/get-docker/](https://docs.docker.com/get-docker/)

## Terminal commands:

### build image: 
docker build -t image-name .

### list images: 
docker image ls

### run image: 
docker-compose up 

### run image in background: 
docker-compose up -d 

# remove image 
docker image rm image-name

### explore running container: 
docker exec -it container-name bash 

### restart container: 
docker restart container-name 

### remove container: 
docker rm container-name 

### remove all stopped containers including "none" containers: 
docker system prune
