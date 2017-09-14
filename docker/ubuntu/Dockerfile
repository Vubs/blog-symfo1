FROM ubuntu:trusty
MAINTAINER some maintainer <maintainer@example.com>

# Install apache, PHP, and supplimentary programs.
RUN apt-get update && apt-get -y upgrade && DEBIAN_FRONTEND=noninteractive apt-get -y install \
    build-essential vim acl git sendmail ack-grep apache2 php5 php5-mysql php5-sqlite php5-intl php5-json \
    php5-mcrypt php5-tidy php5-gd php5-imap php5-curl php5-xdebug php-apc \
    libapache2-mod-php5 openssh-server curl lynx-cur dos2unix locate 

# Enable apache mods.
RUN a2enmod rewrite

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer --version

# Update Linux database
RUN updatedb

# Set timezone
RUN echo Europe/Paris > /etc/timezone

# Update the PHP.ini file.
RUN sed -i "s/error_reporting = .*$/error_reporting = E_ERROR | E_WARNING | E_PARSE/" /etc/php5/apache2/php.ini
RUN sed -i "s/;date.timezone =/date.timezone = Europe\/Paris/" /etc/php5/apache2/php.ini
RUN sed -i "s/display_errors = Off/display_errors = On/" /etc/php5/apache2/php.ini

RUN sed -i "s/error_reporting = .*$/error_reporting = E_ERROR | E_WARNING | E_PARSE/" /etc/php5/cli/php.ini
RUN sed -i "s/;date.timezone =/date.timezone = Europe\/Paris/" /etc/php5/cli/php.ini
RUN sed -i "s/display_errors = Off/display_errors = On/" /etc/php5/cli/php.ini

# Manually set up the apache environment variables
ENV APACHE_RUN_USER www-data
ENV APACHE_RUN_GROUP www-data
ENV APACHE_LOG_DIR /var/log/apache2
ENV APACHE_LOCK_DIR /var/lock/apache2
ENV APACHE_PID_FILE /var/run/apache2.pid

# Set environment variable for symfony app
ENV DOCKER_ENV dev

# Set workdir
WORKDIR /var/www/blog

