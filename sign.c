#include <stdio.h>
int main(){

int sign[5][3]=
                {1,1,0,
                1,0,1,
                1,1,0,
                1,0,1,
                1,1,0};

int j,i;
for (i=0;i<5;i++){
    for(j=0;j<3;j++){
       
        if((sign[i][j])=0){
            printf(" ");
        }else{printf("*");}
          }
          printf("\n");
}
return 0;
}