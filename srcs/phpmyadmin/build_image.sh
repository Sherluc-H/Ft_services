eval $(minikube docker-env)
docker build . -t phpmyadmin
kubectl apply -f phpmyadmin_deploy.yaml
