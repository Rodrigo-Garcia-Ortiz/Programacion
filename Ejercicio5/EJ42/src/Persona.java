
public class Persona {

	String nombre;
	int edad;
	
	public Persona(String nombre, int edad) { //constructor
        this.nombre = nombre;
        this.edad = edad;
    }

    public void mostrarDatos() { //muestra los datos
		
		System.out.println("Nombre: " + nombre);
		System.out.println("Edad: " + edad);
	}
    
    void setNombre(String nombre) { //Setter nombre
        this.nombre = nombre;
    }
    
    public String getNombre() { //Getter nombre
        return nombre;
    }
    
    void setEdad(int edad) { //Setter edad
        this.edad = edad;
    }
    
    public int getEdad() { //Getter edad
        return edad;
    }
}

