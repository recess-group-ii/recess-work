#include <stdio.h>
#include <stdlib.h>
#include <unistd.h>
#include <string.h>
#include <sys/types.h>
#include <sys/socket.h>
#include <netdb.h>
#include <arpa/inet.h>
#include <netinet/in.h>
#define PORT 4040

int main(){
  FILE *fk;
  FILE *fj;
  FILE *fm;
  FILE *fa;
int server_socket, ret;
struct sockaddr_in serverAddr;
int newSocket;
struct sockaddr_in newAddr;
socklen_t addr_size;
char district[256];
char addmember[190];
char command[256];
char commandA[256]="addmember";
char commandB[256]="check_status";
char commandC[256]="search_criteria";
char commandD[256]="get_statement";
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
    recv(newSocket,district,sizeof(district),0);
puts(district);

    recv(newSocket,command,sizeof(command),0);
puts(command);

if((strcmp(command,commandA)==0)){
int number;
recv(newSocket,&number,sizeof(number),0);
printf("\n\n[OK]The number entered is %d\n",number);

//int number;

char a[10] = "kampala";
    char b[10] = "jinja";
    char m[10] = "mbale";
    char n[10] = "arua";
    if ((strcmp(district, a) == 0)){
for(int c = 0;c <= number; c++){
    
    recv(newSocket,addmember,sizeof(addmember),0);
    puts(addmember);
    
    fk = fopen("kampala.txt", "a+");
    if (fk == NULL){
        printf("Error in creating file!!!");
    }
    fprintf(fk, "\n%s", addmember);
    fclose(fk);
}
    }

        if ((strcmp(district, b) == 0)){
for(int c = 0;c <= number; c++){
    
    recv(newSocket,addmember,sizeof(addmember),0);
    puts(addmember);
    
    fj = fopen("jinja.txt", "a+");
    if (fj == NULL){
        printf("Error in creating file!!!");
    }
    fprintf(fj, "\n%s", addmember);
    fclose(fj);
}
    }

        if ((strcmp(district, m) == 0)){
for(int c = 0;c <= number; c++){
    
    recv(newSocket,addmember,sizeof(addmember),0);
    puts(addmember);
    
    fm = fopen("mbale.txt", "a+");
    if (fm == NULL){
        printf("Error in creating file!!!");
    }
    fprintf(fm, "\n%s", addmember);
    fclose(fm);
}
    }

        if ((strcmp(district, n) == 0)){
for(int c = 0;c <= number; c++){
    
    recv(newSocket,addmember,sizeof(addmember),0);
    puts(addmember);;
    
    fa = fopen("arua.txt", "a+");
    if (fa == NULL){
        printf("Error in creating file!!!");
    }
    fprintf(fa, "\n%s", addmember);
    fclose(fa);
}
    }
}
if((strcmp(command,commandB)==0)){

}
if((strcmp(command,commandC)==0)){
    
}
if((strcmp(command,commandD)==0)){
    
} 
} 
close(newSocket);
return 0;
}