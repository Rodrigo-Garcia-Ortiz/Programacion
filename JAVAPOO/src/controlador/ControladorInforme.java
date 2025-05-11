package controlador;

import config.*;
import java.sql.*;

public class ControladorInforme {

	Conexion miConexion;

	public ControladorInforme() {
			
		miConexion = new Conexion();
	}
	
	public void listarVentas(int id) { //Muestra los datos las ventas registradas del cliente indicado

		Connection conexion = miConexion.conectar();
			
try {
			

           
            
            String sql = "SELECT * FROM ventas WHERE id_cliente = ?";
            PreparedStatement pstmt = conexion.prepareStatement(sql);
	         
	         pstmt.setInt(1, id);
	         
	         ResultSet resultado = pstmt.executeQuery("SELECT * FROM ventas WHERE id_cliente = ?");
			
			while (resultado.next()) {
				
                System.out.println("ID de la venta: " + resultado.getInt("id_venta") + ", ID del cliente: " + resultado.getString("id_cliente") + 
                		", ID del artículo: " + resultado.getString("id_articulo") + ", Cantidad del artículo: " + resultado.getString("cantidad") + 
                		", Fecha de venta: " + resultado.getString("fecha_venta"));
                
            }
			
			System.out.println();
			
			pstmt.close();
            conexion.close();
			
		} catch (Exception e) {
			
			System.out.println("Error al conectarse: " + e.getMessage());
			
		}
	}
}
