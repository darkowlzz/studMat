#include<stdio.h>
#include<string.h>
#include<stdlib.h>
#include<dirent.h>
#include<unistd.h>
#include<sys/types.h>

main()
{
	FILE *f;
	char  x, a, w[100];
	int i=0, j=0, op;
	DIR *ptr;
	struct dirent *p;
	
	do {
		printf("1. grep, 2. ls, 3. exit");
		scanf("%d", &op);
		switch(op) {
			case 1: printf("enter a character:");
				scanf("%s",  &x);
				f = fopen("/home/sunny/os/word", "r");
				while (!feof(f)) {
					w[i] = fgetc(f);
					i++;
				}
				while(w[j]!='\0') {
					a = w[j];
					j++;
					if(a == x) {
						//a = w[j];
						//j++;
						//if(a == x) {
							printf("char found");
							break;
						//}
					}
				}
				break;
			case 2: ptr = opendir(".");
				p = readdir(ptr);
				while(p!=NULL) {
					if(p->d_name[0]!='.')
						printf("%s\n", p->d_name);
					p = readdir(ptr);
				}
				break;
			case 3: break;
		}
	}
	while(op!=3);
	
	return 0;
}
