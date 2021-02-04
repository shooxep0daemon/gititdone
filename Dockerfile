FROM ubuntu:20.04
RUN apt-get update && apt-get upgrade -y
RUN apt install maven -y && apt install tomcat9 -y && git clone https://github.com/jenkinsci/jenkins.git
RUN cd jenkins && mvn build
RUN cd war && cp jenkins.war /var/lib/tomcat9/webapps
EXPOSE 80
