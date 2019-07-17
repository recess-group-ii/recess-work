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
int client_socket, ret;
struct sockaddr_in serverAddr;

char commandA[256]="addmember";
char commandB[256]="check_status";
char commandC[256]="search_criteria";
char commandD[256]="get_statement";

printf("\n\tInstructions\n");
printf("\n* To submit new member list\n");
printf("Addmember member_name, date, gender, recommender\n\n");
printf("* To check status of the file,\n");
printf("Check_status\n\n");
printf("* To check statement of payment for the logged in user,\n");
printf("get_statement\n\n");
printf("* To submit new members from the file,\n");
printf("Addmember filename.txt\n\n");
printf("* To search and view a record from file by date or name\n");
printf("Search criteria\n\n");



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
char district[256];
    printf("Enter District:\t");
    gets(district);
    send(client_socket,district,sizeof(district),0);

char command[256];
printf("Enter command\t");
gets(command);
send(client_socket,command,sizeof(command),0);

if((strcmp(command,commandA)==0)){
int number;
printf("Enter number of members to register:\t");
scanf("%d",&number);
send(client_socket,&number,sizeof(number),0);

char details[256];
char addmember[190];       
for(int c = 0;c <= number;c++){
    
    gets(details);
    strncpy(addmember,details + 10,50);
    puts(addmember); 
    send(client_socket,addmember,sizeof(addmember),0);
}
}
if((strcmp(command,commandB)==0)){

}
if((strcmp(command,commandC)==0)){
    
}
if((strcmp(command,commandD)==0)){
    
}
break;
}
   
return 0;
}