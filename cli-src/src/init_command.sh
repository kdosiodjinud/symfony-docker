GIT_REPO_NAME=$(cut -d ":" -f2 <<< $(git config --get remote.origin.url))
REPO_NAME=${GIT_REPO_NAME/.git/}
APP_NAMESPACE=${REPO_NAME/\//-}

find ./kubernetes/ -type f -exec sed -i '' -e "s/#{APP_NAMESPACE}#/$APP_NAMESPACE/g" {} \;
