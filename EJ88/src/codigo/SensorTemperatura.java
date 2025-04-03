package codigo;

public class SensorTemperatura extends Sensor implements Medible{

	public SensorTemperatura(int id, String ubicacion) {
		
		this.id = id;
		this.ubicacion = ubicacion;
	}
	
	public double leerValor() {
		
		return 54.32;
	}
	
	public String getUnidad() {
		
		return "ºC";
	}
}
