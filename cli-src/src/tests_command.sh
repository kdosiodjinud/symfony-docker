# shellcheck disable=SC2154
case "${args[type]}" in

  "all")
        docker exec -it php-fpm bash -c 'composer ecs && composer phpunit && composer phpstan'
    ;;

  "phpstan")
        docker exec -it php-fpm bash -c 'composer phpstan'
    ;;

  "phpunit")
        docker exec -it php-fpm bash -c 'composer phpunit'
    ;;

  "ecs")
        docker exec -it php-fpm bash -c 'composer ecs'
    ;;

  *)

    ;;
esac
