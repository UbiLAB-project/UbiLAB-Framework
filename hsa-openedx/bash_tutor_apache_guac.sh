#!/bin/bash

# Check if the user is root or has superuser privileges
if [[ $EUID -ne 0 ]]; then
   echo "This script needs to be run with root privileges." 
   exit 1
fi

# Update the package list
apt update

# Install necessary packages for Tutor, Apache2, and Apache Guacamole
apt install -y python3 python3-pip apache2

# Install Tutor using pip
pip3 install tutor-openedx

# Install Apache Guacamole and its dependencies
apt install -y libcairo2 libjpeg-turbo8 libjpeg-turbo8-dev libpng16-16 libossp-uuid-dev libavcodec-dev libavutil-dev libswscale-dev freerdp2-dev libpango1.0-dev libssh2-1-dev libtelnet-dev libvncserver-dev libpulse-dev libssl-dev libvorbis-dev libwebp-dev tomcat9 tomcat9-admin

# Download Apache Guacamole
GUACAMOLE_VERSION="1.4.1" # Replace with the actual version of Apache Guacamole
cd /tmp
wget "https://downloads.apache.org/guacamole/${GUACAMOLE_VERSION}/source/guacamole-server-${GUACAMOLE_VERSION}.tar.gz"
tar -xzf "guacamole-server-${GUACAMOLE_VERSION}.tar.gz"

# Build and install Apache Guacamole
cd "guacamole-server-${GUACAMOLE_VERSION}"
./configure --with-init-dir=/etc/init.d
make
make install
ldconfig
systemctl enable guacd
systemctl start guacd

# Configure Apache2 for Guacamole
cat << EOF > /etc/apache2/sites-available/guacamole.conf
<VirtualHost *:80>
    ServerName your_server_domain_or_ip # Replace with your server's domain or IP address
    ServerAdmin webmaster@localhost
    DocumentRoot /var/www/html

    ErrorLog ${APACHE_LOG_DIR}/error.log
    CustomLog ${APACHE_LOG_DIR}/access.log combined

    # Proxy requests for Guacamole to the local Guacamole port
    ProxyPass /guacamole http://localhost:8080/guacamole
    ProxyPassReverse /guacamole http://localhost:8080/guacamole
</VirtualHost>
EOF

# Enable the new virtual host and restart Apache
a2ensite guacamole
a2enmod proxy proxy_http
systemctl restart apache2

echo "Tutor, Apache2, and Apache Guacamole installation completed!"
echo "You can access Apache Guacamole by opening a web browser and navigating to http://your_server_domain_or_ip/guacamole"
