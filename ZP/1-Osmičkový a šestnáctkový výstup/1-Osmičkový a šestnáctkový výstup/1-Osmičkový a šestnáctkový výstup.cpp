// 1-Osmičkový a šestnáctkový výstup.cpp : Defines the entry point for the console application.
//

#include "stdafx.h"
#include <Windows.h>


int main()
{
	printf("Zadejte cislo:");
	int cislo;
	scanf_s("%d", &cislo);
	printf("\nCislo %d odpovida cislu %o v osmickove soustave a cislu %X v sestnactkove soustave.\n", cislo, cislo, cislo);
	system("pause");
    return 0;
}

