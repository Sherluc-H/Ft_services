eval $(minikube docker-env)
docker build . -t nginx
kubectl apply -f nginx_deploy.yaml
