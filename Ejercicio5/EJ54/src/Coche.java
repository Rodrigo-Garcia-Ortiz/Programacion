
public class Coche extends Vehiculo{

	int numPuertas;
	
	public Coche(String marca, String modelo, int numPuertas) { //Constructor
		
		this.marca = marca;
		this.modelo = modelo;
		this.numPuertas = numPuertas;
	}
	
	public String getMarca() { //Devuelve la marca
		
		return marca;
	}
	
    public String getModelo() { //Devuelve el modelo
		
		return modelo;
	}
    
    public int getPuertas() { //Devuelve el número de puertas
		
		return numPuertas;
	}

}
