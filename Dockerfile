FROM ubuntu:20.04
RUN apt-get update
RUN apt install maven -y && apt install tomcat9 -y && apt install git -y
RUN git clone https://github.com/boxfuse/boxfuse-sample-java-war-hello
RUN cd boxfuse-sample-java-war-hello && mvn package
RUN cp ../boxfuse-sample-java-war-hello/target/hello-1.0.war /var/lib/tomcat9/webapps/
CMD ["/usr/linexec/tomcat9/tomcat-start.sh", "run"]
EXPOSE 80
