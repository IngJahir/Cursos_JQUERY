// Objeto 1: Pelicula Uno
// ----------------------
const PeliculaUno = 
{
	nombre:'Harry',
	id:1,
	reproducir() { return `reproduciendo pelicula...${this.nombre}`},
	estado:true
}
console.log('Primero objeto');
console.log(PeliculaUno.reproducir());

// Objeto 2: Pelicula Dos
// ----------------------
const PeliculaDos = 
{
	nombre:'Hombre Araña',
	id:2,
	reproducir() { return `reproduciendo pelicula...${this.nombre}`},
	estado:true
}
console.log('Segundo objeto');
console.log(PeliculaDos.reproducir());

// -----------------------------------
// Clases: Es una plantilla de objetos
// -----------------------------------
class Pelicula
{
	// Construye las propiedades del objeto. SOLO SE CREA UN SOLO CONSTRUCTOR !!!!
	// ---------------------------------------------------------------------------
	constructor(nombre,id)
	{
		this.nombre = nombre;
		this.id = id;
	}

	// Metodos : Funciones dentro de una clase. SE PUEDEN CREAR VARIOS METODOS !!!!
	// -----------------------------------------------------------------------------
	reproducir() { return `reproduciendo pelicula...${this.nombre}`}
}

// Nuevas clases a partir de la clase o plantilla
// ----------------------------------------------
const peliculaTres = new Pelicula('Men in Black',3);
const peliculaCuatro = new Pelicula('Zorro',4);

// Impresion y llamado del metodo 
// ------------------------------
console.log('Usando clases');
console.log(peliculaTres.reproducir());
console.log(peliculaCuatro.reproducir());

// -------------------------------------------------------
// Herencia: Nueva clase que toma una "plantilla" anterior 
// -------------------------------------------------------
class Serie extends Pelicula
{
	// Construye las propiedades del objeto. SOLO SE CREA UN SOLO CONSTRUCTOR !!!!
	// ---------------------------------------------------------------------------
	constructor(nombre,id,cap)
	{
		super (nombre,id);
		this.cap = cap;
	}

	// Metodos : Funciones dentro de una clase. SE PUEDEN CREAR VARIOS METODOS !!!!
	// -----------------------------------------------------------------------------
	reproducirCapitulo() { return `reproduciendo capitulo ${this.cap}...${this.nombre}`}
}

// Nuevas clases a partir de la clase o plantilla
// ----------------------------------------------
const serieUno = new Serie('Dexter',3,55);

// Impresion y llamado del metodo 
// ------------------------------
console.log('Usando clases heredadas');
console.log(serieUno.reproducirCapitulo());

