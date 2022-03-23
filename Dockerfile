FROM php:latest

RUN apt -y update
RUN apt -y install curl

RUN mkdir /phpcs
WORKDIR /phpcs
RUN curl -OL https://squizlabs.github.io/PHP_CodeSniffer/phpcs.phar
RUN curl -OL https://squizlabs.github.io/PHP_CodeSniffer/phpcbf.phar
RUN chmod a+x phpcs.phar
RUN chmod a+x phpcbf.phar
