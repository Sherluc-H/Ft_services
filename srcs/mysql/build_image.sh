sed "s+http://192.168.99.116/wordpress+http://$(minikube ip):5050+g" ./srcs/wordpress.sql > ./srcs/wordpress_clean.sql
eval $(minikube docker-env)
docker build . -t mysql
kubectl apply -f mysql_pv.yaml
kubectl apply -f mysql_deploy.yaml
