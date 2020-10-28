# Symfony 5, development and deploy stack

*Keywords: Symfony 5, PHP7.4, Nginx 1.19, Postgres 13.0, Docker, Kubernetes, gCloud*

All commands are run in the root directory.
### Config files
| Path | Usage |
| ------ | ------ |
|./docker/.env| build env variables for build via docker-compose (db credentials etc.)|
|./src/.env| app env variables for local development|
|./src/.env.prod| app env variables for prod development (production build remove this file to .env)|
|./src/.env.test| app env variables for test development|

## Project control script, all what you need
```sh
$ ./project -a (start|stop)
$ ./project -a rebuild [-t <nginx|php-fpm|database>]
$ ./project -a deploy -v 0.1.2
$ ./project -a tests
```

That's all!

---

# For understanding control script, here is manual way

---

## Local development
Start postgres db (no-persist), php-fpm and nginx listening on localhost:80
```
$ docker-compose -f ./docker/docker-compose.yml up
```
#### Predefined app commands
*Composer commands / symfony commands run in webroot directory in PHP container.*
```sh
$ composer ecs          <-- code style check
$ composer ecs-fix      <-- code style check with auto-fix
$ composer phpstan      <-- php static analyst
$ composer phpunit      <-- classic phpunit tests
```
#### Useful local commands
```sh
$ docker ps                                 <-- list running containers
$ docker exec -it [container_id] /bin/bash  <-- connect into container
```

## Deploy on cloud

> **WARNING: This section is in development!**
>
> You will probably have problems with gCloud API permissions, local account and region/zone settings, but google 
> make question or give you link for setup.
>
> No worries and go ahead! (I'm sending a kiss for feedback)

### Create new google cloud project
```sh
$ gcloud projects create symfony-1 --name="symfony"
```

### Create own cluster for your containers
```sh
$ gcloud container clusters create symfony-cluster-1
```

### Build app images
*This version not generate images versions automaticaly and you muset set versions manualy - sorry :). Soon* 
```sh
$ docker build -f docker/php-fpm/Dockerfile-prod -t gcr.io/symfony-1/php-fpm:0.0.1 . --no-cache
$ docker build -f docker/nginx/Dockerfile-prod -t gcr.io/symfony-1/nginx:0.0.1 . --no-cache
```

### Push images to Google docker registry
```sh
$ docker push gcr.io/symfony-1/php-fpm:0.0.1
$ docker push gcr.io/symfony-1/nginx:0.0.1
```

### Create PHP service and deploy containers
*You muset edit files and set right version - sorry. Soon* 

```sh
$ kubectl apply -f kubernetes/php_service.yaml
$ kubectl apply -f kubernetes/php_deployment.yaml
$ kubectl apply -f kubernetes/nginx_deployment.yaml
```

### Setup LoadBalancer for incoming traffic
```sh
$ kubectl expose deployment nginx --port=80 --type=LoadBalancer
```

### Useful cloud commands
#### Get informations about pods
```sh
$ kubectl get pods
```

#### Get informations about services
Command shou you informations about services. For example external IP for your DNS.
```sh
$ kubectl get svc
```

#### Connect from local to deployed container
```sh
$ kubectl exec -it <POD_NAME> -c <CONTAINER_NAME> sh
```
