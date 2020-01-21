eval $(minikube docker-env)
docker build . -t nginx-image
