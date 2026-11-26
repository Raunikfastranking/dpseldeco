FROM php:8.2-apache

# Enable Apache modules used by .htaccess and allow .htaccess overrides
RUN a2enmod rewrite headers expires deflate \
    && sed -ri 's/AllowOverride[[:space:]]+None/AllowOverride All/' /etc/apache2/apache2.conf \
    && echo 'ServerName localhost' > /etc/apache2/conf-available/servername.conf \
    && a2enconf servername

# Raise upload limits for job-application forms (resume/cover letter PDFs)
RUN { \
      echo 'upload_max_filesize=20M'; \
      echo 'post_max_size=25M'; \
      echo 'max_file_uploads=5'; \
    } > /usr/local/etc/php/conf.d/uploads.ini

WORKDIR /var/www/html
COPY . /var/www/html

# File-based API cache must be writable by Apache
RUN chown -R www-data:www-data /var/www/html/cache

EXPOSE 80
