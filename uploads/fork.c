#include<stdio.h>
#include<dirent.h>
#include<unistd.h>
#include<sys/types.h>

main()
{
	DIR *ptr;
	//int i=0;
	struct dirent *p;
	ptr = opendir(".");
	p = readdir(ptr);
	while(p!=NULL)
	{
		if(p->d_name[0]!='.')
			printf("%s\n", p->d_name);
		p = readdir(ptr);
	}
}
