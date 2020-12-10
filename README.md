# Symfony 5, development and deploy stack

*Keywords: Symfony 5, PHP7.4, Apache 2.4, Postgres 10.4, Docker, Kubernetes, cli, https, Ingress*

All commands are run in the root directory.

### Config files
| Path | Usage |
| ------ | ------ |
|./.env| build env variables for build via docker-compose|
|./app/.env| app env variables for local development|
|./app/.env.test| app env variables for test development|

Prod ENVs are defined in ./kubernetes/init/secrets.yaml!


## Local development
Remote postgres db (no-persist), apache listening on localhost:80 and php-fpm
```
$ ./cli start
$ ./cli stop
```
#### Predefined app commands
CLI shortcut (within manually connecting to container):
```sh
$ ./cli tests           <-- all tests
$ ./cli tests ecs       <-- only ecs
$ ./cli tests phpstan   <-- only phpstan
$ ./cli tests phpunit   <-- only phpuni
```
Or run composer commands / symfony commands in webroot directory in PHP container:
```sh
$ composer ecs          <-- code style check
$ composer ecs-fix      <-- code style check with auto-fix
$ composer phpstan      <-- php static analyst
$ composer phpunit      <-- classic phpunit tests
```
#### Useful commands
```sh
$ ./cli bash            <-- return bash from php-fpm container
```

## Push docker images to GitHub registry
### Enable docker container registry for your account
1. go to https://github.com/settings/tokens and generate new token for "repo", "write:packages", "read:packages"
2. on github.com click to your account -> *Feature preview* and click to "Enable"

#### Acces to github private registry from localhost
On your localhost run command (as password paste token from first step):
```sh
$ docker login ghcr.io -u [github_username]
```

#### Access to github private registry from Kubernetes
```sh
kubectl create secret docker-registry regcred \
    --docker-server=ghcr.io \
    --docker-username=[github_username] \
    --docker-password=[token_from_first_step] \
    --namespace [githubusername/github_project]
```

Great! You have github docker registry.
Your images you can find on your github profile under "Packages" tab. 

**This project has GitHub actions for automatic build php-fpm and apache with save images on GitHub.**

### Set GitHub SECRETS for your project -> need for automatic build and deploy
1) on github in project settings click to **Secrets**
2) click to **New repository secret** and create two keys with this names:

| File | Description |
| ------ | ------ |
|KUBE_CONFIG_DATA| contains base64 encode KUBECONFIG file for access your Kubernetes |
|CR_PAT| with token for image repository (from previous step) |

## Init production
### Set Kubernetes namespace
All configs use namespace attribute. Namespace is generated from your github 
username/repo (repo must be cloned with git), for example:
```sh
Repo: git@github.com:kdosiodjinud/symfony-docker.git
Generated namespace: kdosiodjinud-symfony-docker
```

Becouse project is universal, you must init script for replace namespaces in your cloned version:
```sh
./cli init
```
That`s all! :)

### Services
Look at the **kubernetes/init/secrets.yaml** file and config your settings for production.
After check apply configure all files from folder init:

```sh
kubectl apply -f kubernetes/init/
```

### Ingress (domain routing) and HTTPS
#### Install cert manager to Kubernetes cluster
This example is for Kubernetes over microk8s service, but commands for full install kubernetes is the same.
In file ingress/cert.yaml set your email address.
In file ingress/ingress.yaml set domain for your app.

```sh
// run in cluster
$ microk8s enable helm3 ingress
$ microk8s kubectl create namespace cert-manager
$ microk8s helm3 repo add jetstack https://charts.jetstack.io
$ microk8s helm3 repo update
$ microk8s helm3 install cert-manager jetstack/cert-manager \
  --namespace cert-manager --version v0.15.2 \
  --set installCRDs=true \
  --set ingressShim.defaultIssuerName=letsencrypt-production \
  --set ingressShim.defaultIssuerKind=ClusterIssuer \
  --set ingressShim.defaultIssuerGroup=cert-manager.io
```

```sh
// run from localhost
$ kubectl apply -f kubernetes/ingress/
```

## Deploy to production
If you have ready app, push it to github. Init realease is realy easy. Make git tag with prefix **r** (for example r0.0.1).

After github register tag, github actions run tests, build images and make deploy to Kubernetes. 


## Create new commands for app CLI
This project use great simple framework for generate CLI:
https://github.com/DannyBen/bashly

Thank you Danny :)

Path to sources files:
```sh 
./cli-src/
```
New commands you can define in yml file:
```sh
./cli-src/src/bashly.yml
```
After edit you must run:
```sh
./cli-src/bashly generate 
```
Bashly create new *\*.sh* files in ./cli-src/src/ directory - this is place for process your new command logic. After update run generate again!

In app root is symlink for easy call CLI:
```
./cli --help
```
