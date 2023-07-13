#include <stdio.h>

int main(void)
{
  int n;

  printf("n = ");
  scanf("%d", &n);

  if(( n & 1 ) == 0 ){  // (n & 1)が0と等しいか確認する必要がある。
    printf("%d は偶数です\n", n);
  }
  return 0;
}
