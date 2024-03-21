FROM php:8.0-apache

COPY app/topicmodeler/requirements.txt requirements.txt


RUN apt-get update
RUN apt install -y python3
RUN apt install -y python3-pip
RUN pip3 install -r requirements.txt





