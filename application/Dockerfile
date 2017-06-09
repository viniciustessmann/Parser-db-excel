FROM php:7.1-cli

# Install mysql extensions
RUN docker-php-ext-install pdo_mysql mysqli

ENV APP=/var/opt/application

# Create application folder
RUN mkdir -p $APP

WORKDIR $APP

# Copy application to its folder
COPY . $APP/

CMD ["tail", "-f", "/dev/null"]