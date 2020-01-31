cat begin.conf > telegraf.conf
echo "    url = \"https://$(minikube ip):10250\"" >> telegraf.conf
cat end.conf >> telegraf.conf
#kubectl describe secret kubernetes-bashboard -n kubernetes-dashboard > token
#grep token: token | cut -c 13- > token
kubectl create configmap telegraf-config --from-file=telegraf.conf
kubectl apply -f telegraf_secrets.yaml
kubectl apply -f telegraf_deploy.yaml
