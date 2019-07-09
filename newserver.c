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
  FILE *fk;
  FILE *fg;
  FILE *fm;
  FILE *fa;
int server_socket, ret;
struct sockaddr_in serverAddr;
int newSocket;
struct sockaddr_in newAddr;
socklen_t addr_size;
char buffer[256];
char details[256];
pid_t childpid;


server_socket=socket(AF_INET,SOCK_STREAM,0);
if(server_socket<0){
    printf("[-]Error in connection");
    exit(1);
}
printf("[+]Server socket is created\n");

memset(&serverAddr, '\0', sizeof(serverAddr));
serverAddr.sin_family = AF_INET;
serverAddr.sin_port = htons(PORT);
serverAddr.sin_addr.s_addr = inet_addr("127.0.0.1");

ret = bind(server_socket,(struct sockaddr*)&serverAddr,sizeof(serverAddr));
if(ret<0){
    printf("[-]Error in binding\n");
    exit(1);
}
printf("[+]Bind to port %d\n",PORT);

if(listen(server_socket,10) == 0){
    printf("[+]Listening...\n");
}else{
    printf("[-]Error in binding");
}
while((newSocket = accept(server_socket, (struct sockaddr*)&newAddr, &addr_size))){
    printf("\n\n[OK]Connection accepted from %s:%d\n",inet_ntoa(newAddr.sin_addr), ntohs(newAddr.sin_port));
    recv(newSocket,buffer,sizeof(buffer),0);
puts(buffer);


int num;
recv(newSocket,&num,sizeof(num),0);
printf("\n\n[OK]The number entered is %d\n",num);

//int number;

char a[10] = "kampala";
    char b[10] = "gulu";
    char m[10] = "mbale";
    char n[10] = "arua";
    if ((strcmp(buffer, a) == 0)){
for(int c = 0;c <= num; c++){
    
    recv(newSocket,details,sizeof(details),0);
    puts(details);
    
    fk = fopen("kampala.txt", "a+");
    if (fk == NULL){
        printf("Error in creating file!!!");
    }
    fprintf(fk, "\n%s", details);
    fclose(fk);
}
    }

        if ((strcmp(buffer, b) == 0)){
for(int c = 0;c <= num; c++){
    
    recv(newSocket,details,sizeof(details),0);
    puts(details);
    
    fg = fopen("gulu.txt", "a+");
    if (fg == NULL){
        printf("Error in creating file!!!");
    }
    fprintf(fg, "\n%s", details);
    fclose(fg);
}
    }

        if ((strcmp(buffer, m) == 0)){
for(int c = 0;c <= num; c++){
    
    recv(newSocket,details,sizeof(details),0);
    puts(details);
    
    fm = fopen("mbale.txt", "a+");
    if (fm == NULL){
        printf("Error in creating file!!!");
    }
    fprintf(fm, "\n%s", details);
    fclose(fm);
}
    }

        if ((strcmp(buffer, n) == 0)){
for(int c = 0;c <= num; c++){
    
    recv(newSocket,details,sizeof(details),0);
    puts(details);
    
    fa = fopen("arua.txt", "a+");
    if (fa == NULL){
        printf("Error in creating file!!!");
    }
    fprintf(fa, "\n%s", details);
    fclose(fa);
}
    }
}  
close(newSocket);
return 0;
}