FROM tomcat:7.0.108-jdk8
RUN apt-get update
RUN git clone https://github.com/boxfuse/boxfuse-sample-java-war-hello
RUN apt install maven -y
RUN cd boxfuse-sample-java-war-hello && mvn package
RUN cp /usr/local/tomcat/boxfuse-sample-java-war-hello/target/hello-1.0.war $CATALINA_HOME/webapps/
EXPOSE 8080
CMD ["/bin/catalina.sh" "run"]