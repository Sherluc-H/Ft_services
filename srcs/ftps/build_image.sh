echo "pasv_address=$(minikube ip)" > ./srcs/minikube_ip
eval $(minikube docker-env)
#echo "pasv_address=$(minikube ip)" >> ./srcs/vsftpd.conf
kubectl apply -f ftps_pv.yaml
docker build . -t ftps
kubectl apply -f ftps_deploy.yaml
