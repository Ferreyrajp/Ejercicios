Proceso sin_titulo
	Definir Hentrada, Hsalida, duracionEstadia, montoAPagar,horasRestantes Como Entero
	
	Escribir "Ingrese la hora de entrada (formato 24 horas):"
	Leer Hentrada
	Escribir "Ingrese la hora de salida (formato 24 horas):"
	Leer Hsalida
	Si Hsalida > Hentrada Entonces
		duracionEstadia = Hsalida - Hentrada
	SiNo
		duracionEstadia = 24 - Hentrada + Hsalida
	Fin Si
	Si duracionEstadia <= 1 Entonces
		montoAPagar = 1500
	SiNo
		horasRestantes = duracionEstadia - 1
		montoAPagar = 1500 + (horasRestantes * 1000)
	Fin Si
	Escribir "El monto a pagar por la estadia es: $"  montoAPagar
FinProceso
