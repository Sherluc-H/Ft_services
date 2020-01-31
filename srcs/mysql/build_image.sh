echo "use wordpress;" > ./srcs/change_ip
echo "update wp_options set option_value = \"http://$(minikube ip)/wordpress\" where option_id = 1;" >> ./srcs/change_ip
echo "update wp_options set option_value = \"http://$(minikube ip)/wordpress\" where option_id = 2;" >> ./srcs/change_ip
eval $(minikube docker-env)
docker build . -t mysql
kubectl apply -f mysql_pv.yaml
kubectl apply -f mysql_deploy.yaml
