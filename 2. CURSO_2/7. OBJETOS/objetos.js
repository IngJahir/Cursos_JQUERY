// Declaracion del arreglo
// -----------------------
var arreglo = ['HTML',15,true];

// Impresion en consola del arreglo  
console.log('Impresion arreglo y dato 0');
console.log(arreglo);
console.log(arreglo[0]);

// Creacion de objeto
// ------------------
var objeto = 
{
	nombre:'HTML',
	duracion:15,
	estado:true
}

// Impresion de los objetos
console.log('Impresion objeto y dato 2 ( Duracion)');
console.log(objeto);
console.log(objeto['duracion']);
console.log(objeto.duracion);

// Creacion de objeto dentro de otro objeto
// ----------------------------------------
var objeto2 = 
{
	nombre:'HTML',
	duracion:15,
	estado:true,
	capitulos:
		{
			nombre:'Introduccion',
			videos:20
		}
}

// Impresion de los objetos
console.log('Impresion objeto del objeto');
console.log(objeto2);
console.log(objeto2.capitulos);
console.log(objeto2.capitulos.videos);

// Creacion de arreglo de objetos
// ------------------------------
var arrayObjetos =
[
	{ nombre:'HTML', estado: true },
	{ nombre:'CSS',  estado: true },
	{ nombre:'JS',   estado: true }
]

// Impresion arreglo de objetos
console.log('Impresion arreglo objetos');
console.log(arrayObjetos);
console.log(arrayObjetos[0].nombre);
console.log(arrayObjetos[1].nombre);

// Impresion rrecorriendo el arreglo
for(let indice of arrayObjetos)
{
	console.log(indice)
	console.log(indice.nombre)
}

