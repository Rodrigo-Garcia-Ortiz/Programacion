package config;

import java.sql.*;

public class Conexion { //Crea una conexión con la base de datos
	
	Connection conexion;

	public Connection conectar() {
		
		try {
			
			conexion = DriverManager.getConnection("jdbc:mysql://localhost:3306/JAVAPOO", "root", "curso");
			
		} catch (Exception e) {
			
			System.out.println("Error al conectarse: " + e.getMessage());
			
		}
		
		return conexion;
	}
}
