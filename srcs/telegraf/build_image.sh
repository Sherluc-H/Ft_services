kubectl create configmap telegraf-config --from-file=telegraf.conf
kubectl apply -f telegraf_secrets.yaml
kubectl apply -f telegraf_deploy.yaml
