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
#define PORT 4040



int server_socket, ret;
struct sockaddr_in serverAddr;
int newSocket;
struct sockaddr_in newAddr;
socklen_t addr_size;
char sign[256];
char district[256];
char addmember[256];
char command[256];
char commandA[256]="addmember";
char commandB[256]="check_status";
char commandC[256]="search_criteria";
char commandD[256]="get_statement";
char commandE[256]="addmemberfromfile";



/*void printperson(char person[]){
	char line[256];
    char newline[256];
	FILE *fp;
	fp = fopen("status.txt","r");
	if (fp==NULL){
		printf("Error file not found;");
		return;
	}
	
	while(!feof(fp)){
		fgets(line,256,fp);
		if(strstr(line,person)!= NULL){
		printf("\n%s",line);
        strcpy(newline,line);
   		}
 		}
	fclose(fp);
    send(server_socket,newline,sizeof(newline),0); 
}*/



int main(){
  FILE *fk;
  FILE *fj;
  FILE *fm;
  FILE *fa;



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
    //fprintf(fk, "\n%s", sign);
    fclose(fk);
}
fk = fopen("kampala.txt", "a+");

    recv(newSocket,sign,sizeof(sign),0);
    puts(sign);
        fprintf(fk, "\n%s", sign);

fclose(fk);
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
    //fprintf(fj, "\n%s", sign);
    fclose(fj);
}
fj = fopen("jinja.txt", "a+");

    recv(newSocket,sign,sizeof(sign),0);
    puts(sign);
        fprintf(fj, "\n%s", sign);

fclose(fj);
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
    //fprintf(fm, "\n%s", sign);
    fclose(fm);
}
fm = fopen("mbale.txt", "a+");

    recv(newSocket,sign,sizeof(sign),0);
    puts(sign);
        fprintf(fm, "\n%s", sign);

fclose(fm);
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
fa = fopen("arua.txt", "a+");

    recv(newSocket,sign,sizeof(sign),0);
    puts(sign);
        fprintf(fa, "\n%s", sign);

fclose(fa);
    }
    
}




if((strcmp(command,commandB)==0)){

}




if((strcmp(command,commandC)==0)){
    char id[256];
    recv(newSocket,id,sizeof(id),0);
    printf("%s",id);
    char line[256];
    char newline[256];
	FILE *fp;
	fp = fopen("status.txt","r");
	if (fp==NULL){
		printf("Error file not found;");
        break;
	}
	
	while(!feof(fp)){
		fgets(line,256,fp);
		if(strstr(line,id)!= NULL){
		printf("\n%s",line);
        strcpy(newline,line);
        send(newSocket,newline,sizeof(newline),0); 
   		}
 		}
	fclose(fp);

}




if((strcmp(command,commandD)==0)){
    char payments[256];
    FILE *sorotis;
    int words =0;
    char c;
    sorotis = fopen("payment.txt","r");
    while((c = getc(sorotis)) != EOF){
        fscanf(sorotis,"%s",payments);
        if(isspace(c) || c=='\t')
            words++;
    }
    write(server_socket,&words,sizeof(int));
    rewind(sorotis);

    char ch;
    while((ch!= EOF)){
        fscanf(sorotis,"%s",payments);
        write(server_socket,payments,256);
        ch = fgetc(sorotis);
    }
    printf("The file has been succesfully sent");

}







if((strcmp(command,commandE)==0)){
    char dist1[256]= "soroti.txt";
    char dist2[256]= "lira.txt";
    char dist[256];
    char distsoroti[256];
    char distlira[256];
    recv(newSocket,dist,sizeof(dist),0);
    puts(dist);
    if(strcmp(dist,dist1)==0){
        FILE *sorotis;
        int ch = 0;
        sorotis = fopen("sorotiRecieved.txt","a");
        int words;
        read(newSocket,&words,sizeof(int));
        while(ch != words){
            read(newSocket,distsoroti,256);
            fprintf(sorotis,"%s ",distsoroti);
            ch++;
        }
        printf("The file has been recieved successfully.");
    }

    if(strcmp(dist,dist2)==0){
        FILE *liras;
        int ch = 0;
        liras = fopen("liraRecieved.txt","a");
        int words;
        read(newSocket,&words,sizeof(int));
        while(ch != words){
            read(newSocket,distlira,256);
            fprintf(liras,"%s ",distlira);
            ch++;
        }
        printf("The file has been recieved successfully.");
    }
} 
} 
close(newSocket);
return 0;
}


