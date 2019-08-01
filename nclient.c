#include <stdio.h>
#include <stdlib.h>
#include <unistd.h>
#include <string.h>
#include <sys/types.h>
#include <sys/socket.h>
#include <netdb.h>
#include <arpa/inet.h>
#include <netinet/in.h>
#include <ctype.h>
#include "signature.c"
#define PORT 4040

int main(){
    
int client_socket, ret;
struct sockaddr_in serverAddr;

char commandA[256]="addmember";
char commandB[256]="check_status";
char commandC[256]="Search ";
char commandD[256]="get_statement";
{FILE *pay;
  struct payment{
    int p;
  };}

char commandE[256]="addmember_";
  

printf("\n\tInstructions\n");
printf("\n[*] To submit new member list\n");
printf("Addmember member_name, date, gender, recommender\n\n");
printf("[*]To check status of the file,\n");
printf("Check_status\n\n");
printf("[*] To check statement of payment for the logged in user,\n");
printf("get_statement\n\n");
printf("[*] To submit new members from the file,\n");
printf("Addmember_file.txt\n\n");
printf("[*] To search and view a record from file by date or name\n");
printf("Search_criteria\n\n");



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


char district[256];
    printf("Enter District:\t");
    gets(district);
    send(client_socket,district,sizeof(district),0);
while(1){
char command[256];
printf("Enter command:\t");
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
printf("Enter signature\n");
char* sign = signature();
printf("%s",sign);
send(client_socket,sign,sizeof(sign),0);
}




if((strcmp(command,commandB)==0)){
 char id[256];
    printf("Enter Name of file eg file.txt:\t");
    gets(id);
    send(client_socket,id,sizeof(id),0);
   int ln;
   recv(client_socket,&ln,sizeof(ln),0);
   char newline[256];
    for(int i=0;i<ln;i++){
   recv(client_socket,newline,sizeof(newline),0);
   printf("%s\n",newline);
}
}


if((strstr(command,commandC)!=NULL)){
    char id[256];
    strncpy(id,command + 7,50);
    send(client_socket,id,sizeof(id),0);
   char newline[256];
    
  for(int i=0;i < 100;i++){ 
   recv(client_socket,newline,sizeof(newline),0);
   printf("Your search result:\t%s\n",newline);
  }
}






if((strcmp(command,commandD)==0)){
    char id[256];
    printf("Enter Name od ID:\t");
    gets(id);
    send(client_socket,id,sizeof(id),0);
   char newline[256];
    
   recv(client_socket,newline,sizeof(newline),0);
   printf("Your payment is:\n%s\n",newline);
  
    
}






if((strstr(command,commandE)!=NULL)){
    char dist1[256]="soroti.txt";
    char dist2[256]="lira.txt";
    char dist[256];
    strncpy(dist,command + 10,50);
   // printf("Enter name of district file: example distict.txt");
   // scanf("%s",dist);
    send(client_socket,dist,sizeof(dist),0);   
    if(strcmp(dist,dist1)==0){
    char distsoroti[256];
    FILE *soroti;
    int words =0;
    char c;
    soroti = fopen("soroti.txt","r");
    while((c = getc(soroti)) != EOF){
        fscanf(soroti,"%s",distsoroti);
        if(isspace(c) || c=='\t')
            words++;
    }
    write(client_socket,&words,sizeof(int));
    rewind(soroti);

    char ch;
    while((ch!= EOF)){
        fscanf(soroti,"%s",distsoroti);
        write(client_socket,distsoroti,256);
        ch = fgetc(soroti);
    }
    printf("The file has been succesfully sent");
}

if(strcmp(dist,dist2)==0){
    char distlira[256];
    FILE *lira;
    int words =0;
    char c;
    lira = fopen("lira.txt","r");
    while((c = getc(lira)) != EOF){
        fscanf(lira,"%s",distlira);
        if(isspace(c) || c=='\t')
            words++;
    }
    write(client_socket,&words,sizeof(int));
    rewind(lira);

    char ch;
    while((ch!= EOF)){
        fscanf(lira,"%s",distlira);
        write(client_socket,distlira,256);
        ch = fgetc(lira);
    }
    printf("The file has been succesfully sent");
}

}

break;

}
return 0;
}