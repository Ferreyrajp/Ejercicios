Proceso sin_titulo
	Definir Htrabajadas, sueldobruto, DesApJub, osocial, sueldoNeto Como Real
	
	Escribir "Ingrese la cantidad de horas trabajadas:"
	Leer Htrabajadas
	sueldobruto = Htrabajadas * 700
	DesApJub = sueldobruto * 0.15
	osocial = sueldobruto * 0.03
	sueldoNeto = sueldobruto - DesApJub - osocial
	Escribir "El sueldo neto a pagar es: $"  sueldoNeto
FinProceso
