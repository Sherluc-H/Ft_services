eval $(minikube docker-env)
docker build . -t grafana
kubectl apply -f grafana_deploy.yaml
