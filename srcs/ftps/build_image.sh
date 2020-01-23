eval $(minikube docker-env)
docker build . -t ftps
kubectl apply -f ftps_deploy.yaml
