#include<stdio.h>
int main(){
    int cell;
    int sign[6][4];
    int j,i;
    int row, column;
   // int row=3,column=5;
    printf("Enter 1 or 0\n");
    for(row=1;row<6;row++){
        for(column=1;column<4;column++){
            printf("cell[%d][%d]=",row,column);
            scanf("%d",&cell);
            sign[row][column]=cell;
        }
    }

   for(j=1;j<6;j++){
        for(i=1;i<4;i++){
            if(sign[j][i]==1){
            printf("*");
            }
            else if(sign[j][i]==0){
                printf(" ");
            }
           
        }
        printf("\n");
    }
return 0;
    
}
