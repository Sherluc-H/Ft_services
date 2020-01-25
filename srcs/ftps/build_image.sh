eval $(minikube docker-env)
echo "pasv_address=$(minikube ip)" >> ./srcs/vsftpd.conf
docker build . -t ftps
kubectl apply -f ftps_deploy.yaml
