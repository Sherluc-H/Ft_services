#echo "use wordpress;" > ./srcs/change_ip
#echo "update wp_options set option_value = \"http://$(minikube ip)/wordpress\" where option_id = 1;" >> ./srcs/change_ip
#echo "update wp_options set option_value = \"http://$(minikube ip)/wordpress\" where option_id = 2;" >> ./srcs/change_ip
#MINIKUBE_IP=$(minikube ip) && export MINIKUBE_IP
#echo $MINIKUBE_IP
sed "s+http://192.168.99.116/wordpress+http://$(minikube ip):5050+g" ./srcs/wordpress.sql > ./srcs/wordpress_clean.sql
eval $(minikube docker-env)
docker build . -t mysql
kubectl apply -f mysql_pv.yaml
kubectl apply -f mysql_deploy.yaml
