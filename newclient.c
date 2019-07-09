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
int client_socket, ret;
struct sockaddr_in serverAddr;


client_socket=socket(AF_INET,SOCK_STREAM,0);
if(client_socket<0){
    printf("Error in connection.\n");
    exit(1);
}
printf("Client socket created\n");

memset(&serverAddr, '\0', sizeof(serverAddr));
serverAddr.sin_family = AF_INET;
serverAddr.sin_port = htons(PORT);
serverAddr.sin_addr.s_addr = inet_addr("127.0.0.1");

ret = connect(client_socket,(struct sockaddr*)&serverAddr,sizeof(serverAddr));
if(ret<0){
    printf("Error in connection\n");
    exit(1);
}
printf("Connected to server\n");

while(1){
char buffer[256];
    printf("Enter District:\t");
    //fgets(&buffer, 5000,stdin);
    gets(buffer);
    send(client_socket,buffer,sizeof(buffer),0);


int num;
printf("Enter number of members to register:\t");
scanf("%d",&num);
send(client_socket,&num,sizeof(num),0);

char details[256];
        
for(int c = 0;c <= num;c++){
    
    gets(details);
    send(client_socket,details,sizeof(details),0);
}
break;
}
  
   
return 0;
}