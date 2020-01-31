cd ./srcs && ./apply_ingress.sh
cd ./nginx && ./build_image.sh && cd ..
cd ./ftps && ./build_image.sh && cd ..
cd ./mysql && ./build_image.sh && cd ..
cd ./phpmyadmin && ./build_image.sh && cd ..
cd ./wordpress && ./build_image.sh && cd ..
cd ./influxdb && ./build_image.sh && cd ..
cd ./telegraf && ./build_image.sh && cd ..
cd ./grafana && ./build_image.sh && cd ..
