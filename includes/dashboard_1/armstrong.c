#include<stdio.h>
void main()
{
  int n,r,temp,nn=0;
  printf("Enter a number");
  scanf("%d",&n);
  temp=n;
  while(n!=0)
  {
    r=n%10;
    nn+=(r*r*r);
    n=n/10;
  }  
  if(nn==temp)
   printf("Armstrong");
  else
   printf("Not armstrong");
}
