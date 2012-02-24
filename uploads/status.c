#include<sys/types.h>
#include<sys/stat.h>

main()
{
	struct stat status_rec;
	if(stat("file1.txt", &status_rec)==-1) {
		perror("During stat() at one file");
		exit(0);
	}

	printf("Size of our file is: %d", status_rec.st_size);
}
