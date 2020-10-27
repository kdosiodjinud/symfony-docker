# Symfony (tests / local docker / deploy to gCloud)

## Create new google cloud project
```sh
$ gcloud projects create symfony-1 --name="symfony"
```

## Create own cluster for your containers
```sh
$ gcloud container clusters create symfony-cluster-1
```

## Build app images
```sh
$ docker build -f docker/php-fpm/Dockerfile-prod -t gcr.io/symfony-1/php-fpm:0.0.1 .
$ docker build -f docker/nginx/Dockerfile-prod -t gcr.io/symfony-1/nginx:0.0.1 .
```

## Push images to Google docker registry
```sh
$ docker push gcr.io/symfony-1/php-fpm:0.0.1`
$ docker push gcr.io/symfony-1/nginx:0.0.1
```

## Create PHP service and deploy containers
```sh
$ kubectl apply -f kubernetes/php_service.yaml
$ kubectl apply -f kubernetes/php_deployment.yaml
$ kubectl apply -f kubernetes/nginx_deployment.yaml
```

## Setup LoadBalancer for incoming traffic
```sh
$ kubectl expose deployment nginx --port=80 --type=LoadBalancer
```

## Useful commands
### Get informations about pods
```sh
$ kubectl get pods
```

### Get informations about services
```sh
$ kubectl get svc
```

### Connect from local to deployed container
```sh
$ kubectl exec -it <POD_NAME> -c <CONTAINER_NAME> sh
```
