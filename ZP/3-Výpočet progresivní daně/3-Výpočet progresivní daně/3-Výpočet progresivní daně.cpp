// 3-Výpočet progresivní daně.cpp : Defines the entry point for the console application.
//

#include "stdafx.h"
#include <Windows.h>
#include <math.h>


int main()
{
	int mzda;
	float dan = 0;
	printf("Zadejte mzdu:");
	scanf_s("%d", &mzda);
	if (mzda <= 10000)
	{
		dan += mzda*0.1;
	}
	else if (mzda > 10000 && mzda<20000)
	{
		dan += 10000*0.1;
		mzda -= 10000;
		dan += mzda*0.2;
	}
	else
	{
		dan += 10000 * 0.1 + 10000 * 0.2;
		mzda -= 20000;
		dan += mzda * 0.3;
	}
	printf("\nOdpovidajici dan je:%.1f\n", floor(dan / 0.1 + 0.5)*0.1);
	system("pause");
    return 0;
}

