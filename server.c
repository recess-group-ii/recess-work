#include <stdio.h>
#include <stdlib.h>
#include <unistd.h>
#include <string.h>
#include <sys/types.h>
#include <sys/socket.h>
#include <netdb.h>
#include <arpa/inet.h>
#include <netinet/in.h>

#define PORT 5555

int main(){
//socket
int server_socket, ret;
struct sockaddr_in serverAddr;

int newSocket;
struct sockaddr_in newAddr;

socklen_t addr_size;

char buffer[1000];
char details[1000];
pid_t childpid;


server_socket=socket(AF_INET,SOCK_STREAM,0);
if(server_socket<0){
    printf("Error in connection");
    exit(1);
}
printf("Server socker is created");

memset(&serverAddr, '\0', sizeof(serverAddr));
serverAddr.sin_family = AF_INET;
serverAddr.sin_port = htons(PORT);
serverAddr.sin_addr.s_addr = inet_addr("127.0.0.1");

ret =bind(server_socket,(struct sockaddr*)&serverAddr,sizeof(serverAddr));
if(ret<0){
    printf("Error in binding");
    exit(1);
}
printf("Bind to port %d\n",PORT);

if(listen(server_socket,10) == 0){
    printf("Listening...\n");
}else{
    printf("Error in binding");
}
  
while(newSocket = accept(server_socket, (struct sockaddr*)&newAddr, &addr_size)){
    printf("Connection accepted from %s:%d\n",inet_ntoa(newAddr.sin_addr), ntohs(newAddr.sin_port));
    recv(newSocket,buffer,strlen(buffer),0);
    printf("%s",buffer);


    int num;
recv(newSocket,&num,sizeof(num),0);
printf("the number entered is %d\n",num);

for(int c=0;c<num;c++){
    recv(newSocket,details,strlen(details),0);
    printf("%s",details);
}
        /* while(newSocket)
        {
            FILE *mem;
               mem=fopen(kampala.txt,'a');
           for(int c=0;c<number;c++){
               
           }*/
}

close(newSocket);
return 0;
}