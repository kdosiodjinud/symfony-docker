# Symfony 5, development and deploy stack

*Keywords: Symfony 5, PHP7.4, Apache 2.4, Postgres 10.4, Docker, Kubernetes, cli*

All commands are run in the root directory.

### Config files
| Path | Usage |
| ------ | ------ |
|./.env| build env variables for build via docker-compose|
|./app/.env| app env variables for local development|
|./app/.env.prod| app env variables for prod development (production build remove this file to .env)|
|./app/.env.test| app env variables for test development|


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
3. on your localhost run command (as password paste token from first step):
```sh
$ docker login ghcr.io -u [github_username]
```
Great! You have github docker registry.
Your images you can find on your github profile under "Packages" tab. 

### Building images
```sh
$ docker build -t ghcr.io/[github_username]/apache:0.0.1 -f docker/apache/Dockerfile-prod .
$ docker build -t ghcr.io/[github_username]/php-fpm:0.0.1 -f docker/php-fpm/Dockerfile-prod .
```
### Pushing images to repository
```sh
$ docker push ghcr.io/[github_username]/apache:0.0.1
$ docker push ghcr.io/[github_username]/php-fpm:0.0.1
```

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

