kubectl create configmap influxdb-config --from-file=influxdb.conf
kubectl apply -f influxdb_pv.yaml
kubectl apply -f influxdb_secrets.yaml
kubectl apply -f influxdb_deploy.yaml
