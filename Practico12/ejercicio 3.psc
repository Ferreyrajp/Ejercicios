Proceso sin_titulo
	Definir contP, contI, valor,i Como Entero	
	contP=0
	contI=0
	Para i<-1 Hasta 10 Con Paso 1 Hacer
		Escribir "Ingrese un número entero:"
		Leer valor
		Si valor % 2 == 0 Entonces
			contP=contP+1
		SiNo
			contI=contI+1
		Fin Si
	Fin Para
	Escribir "La cantidad de números pares es: " contP
	Escribir "La cantidad de números impares es: " contI
FinProceso
