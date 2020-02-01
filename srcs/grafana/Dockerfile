FROM grafana/grafana
RUN mkdir -p /var/lib/grafana/dashboards
COPY ./srcs/nginx.json /var/lib/grafana/dashboards
COPY ./srcs/ftps.json /var/lib/grafana/dashboards
COPY ./srcs/wordpress.json /var/lib/grafana/dashboards
COPY ./srcs/mysql.json /var/lib/grafana/dashboards
COPY ./srcs/phpmyadmin.json /var/lib/grafana/dashboards
COPY ./srcs/grafana.json /var/lib/grafana/dashboards
COPY ./srcs/influxdb.json /var/lib/grafana/dashboards
COPY ./srcs/telegraf.json /var/lib/grafana/dashboards
COPY ./srcs/all.yaml /etc/grafana/provisioning/dashboards
COPY ./srcs/influxdb-telegraf.yaml /etc/grafana/provisioning/datasources
