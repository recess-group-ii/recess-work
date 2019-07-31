#include<stdio.h>
#include<stdlib.h>
#include<string.h>

//void printperson(char person[]){
	
//}

int main(){
	char word[200];
	printf("Enter id:\t");
	gets(word);
	char line[255];
	//char id[256];
	//printf("Enter file.txt\t");
	//scanf("%s",id);
	FILE *fp;
	fp = fopen("status.txt","r");
	if (fp==NULL){
		printf("Error file not found;");
		return;
	}
	
	while(!feof(fp)){
		fgets(line,255,fp);
		if(strstr(line,word)!= NULL){
		printf("\n%s",line);

		}
		}
	fclose(fp);


	return 0;
}
