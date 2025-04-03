package codigo;

public class SensorHumedad extends Sensor implements Medible{

    public SensorHumedad(int id, String ubicacion) {
		
		this.id = id;
		this.ubicacion = ubicacion;
	}
	
	public double leerValor() {
		
		return 27.32;
	}
	
	public String getUnidad() {
		
		return "%";
	}
}
