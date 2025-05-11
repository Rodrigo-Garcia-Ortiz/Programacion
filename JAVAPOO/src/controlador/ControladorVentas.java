package controlador;

import config.*;
import java.sql.*;
import java.sql.Date;

public class ControladorVentas {

	Conexion miConexion;

	public ControladorVentas() {
			
		miConexion = new Conexion();
	}
	
	public void registrarVenta(int id_cliente, int id_articulo, int cantidad, Date fecha) { //Registra los datos de una nueva venta

		Connection conexion = miConexion.conectar();
			
		 try {
			 
			 String sql = "INSERT INTO ventas (id_cliente, id_articulo, cantidad, fecha_venta) VALUES (?, ?, ?, ?)";
	         PreparedStatement pstmt = conexion.prepareStatement(sql);
	         
	         pstmt.setInt(1, id_cliente);
	         pstmt.setInt(2, id_articulo);
	         pstmt.setInt(3, cantidad);
	         pstmt.setDate(4, fecha);

	         pstmt.executeUpdate();

	         pstmt.close();
	         conexion.close();
	         
	         System.out.println("Venta registrada exitosamente");
	         
	        } catch (Exception e) {
	        	
	        	System.out.println("Error al conectarse: " + e.getMessage());
	        }
	}
		
	public void listarVentas() { //Muestra los datos de todas las ventas registradas

		Connection conexion = miConexion.conectar();
			
		try {
			
			Statement stmt = conexion.createStatement();
            ResultSet resultado = stmt.executeQuery("SELECT * FROM ventas");
			
			while (resultado.next()) {
				
                System.out.println("ID de la venta: " + resultado.getInt("id_venta") + ", ID del cliente: " + resultado.getString("id_cliente") + 
                		", ID del artículo: " + resultado.getString("id_articulo") + ", Cantidad del artículo: " + resultado.getString("cantidad") + 
                		", Fecha de venta: " + resultado.getString("fecha_venta"));
                
            }
			
			System.out.println();
			
			stmt.close();
            conexion.close();
			
		} catch (Exception e) {
			
			System.out.println("Error al conectarse: " + e.getMessage());
			
		}
	}
	
	public void modificarVenta(int id_venta, int id_cliente, int id_articulo, int cantidad, java.sql.Date fecha) { //Modifica los datos de la venta indicada
		
		Connection conexion = miConexion.conectar();
		
		 try {
			 
			 String sql = "UPDATE ventas SET id_cliente = ?, id_articulo = ?, cantidad = ?, fecha = ? WHERE id_venta = ?";
	         PreparedStatement pstmt = conexion.prepareStatement(sql);
	         
	         pstmt.setInt(1, id_cliente);
	         pstmt.setInt(2, id_articulo);
	         pstmt.setInt(3, cantidad);
	         pstmt.setDate(4, fecha);
	         pstmt.setInt(5, id_venta);

	         pstmt.executeUpdate();

	         pstmt.close();
	         conexion.close();
	         
	         System.out.println("Factura modificada exitosamente");
	         
	        } catch (Exception e) {
	        	
	        	System.out.println("Error al conectarse: " + e.getMessage());
	        }
	}
	
	public void eliminarVenta(int id) { //Elimina los datos de la venta indicada
		
		Connection conexion = miConexion.conectar();
		
		 try {
			 
			 String sql = "DELETE FROM ventas WHERE id_venta = ?";
	         PreparedStatement pstmt = conexion.prepareStatement(sql);
	         
	         pstmt.setInt(1, id);

	         pstmt.executeUpdate();

	         pstmt.close();
	         conexion.close();
	         
	         System.out.println("Venta eliminada exitosamente");
	         
	        } catch (Exception e) {
	        	
	        	System.out.println("Error al conectarse: " + e.getMessage());
	        }
	}
}
