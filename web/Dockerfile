FROM ctftraining/base_image_nginx_mysql_php_73

LABEL Author="glzjin <i@zhaoj.in>" Blog="https://www.zhaoj.in"

COPY ./files /tmp/
RUN cp -rf /tmp/html/ /var/www/ \
    && rm -f /var/www/html/index.php \
    && cp -f /tmp/flag.sh /flag.sh \
    && chown -R www-data:www-data /var/www/html \
    && sed -i 's/skip-networking/#skip-networking/' /etc/my.cnf.d/mariadb-server.cnf \
    && sed -i 's/index index.php/index index.html index.php/' /etc/nginx/nginx.conf
