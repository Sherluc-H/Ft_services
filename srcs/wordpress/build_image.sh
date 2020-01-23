eval $(minikube docker-env)
docker build . -t wordpress
kubectl apply -f wordpress_deploy.yaml
