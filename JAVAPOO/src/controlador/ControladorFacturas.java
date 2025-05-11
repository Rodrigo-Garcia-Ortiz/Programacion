package controlador;

import config.*;
import java.sql.*;
import java.sql.Date;

public class ControladorFacturas {

	Conexion miConexion;

	public ControladorFacturas() {
			
		miConexion = new Conexion();
	}
	
	public void registrarFactura(int id, Date fecha, double precio) { //Registra los datos de una nueva factura

		Connection conexion = miConexion.conectar();
			
		 try {
			 
			 String sql = "INSERT INTO facturas (id_proveedor, fecha, total) VALUES (?, ?, ?)";
	         PreparedStatement pstmt = conexion.prepareStatement(sql);
	         
	         pstmt.setInt(1, id);
	         pstmt.setDate(2, fecha);
	         pstmt.setDouble(3, precio);

	         pstmt.executeUpdate();

	         pstmt.close();
	         conexion.close();
	         
	         System.out.println("Factura registrada exitosamente");
	         
	        } catch (Exception e) {
	        	
	        	System.out.println("Error al conectarse: " + e.getMessage());
	        }
	}
		
	public void listarFacturas() { //Muestra los datos de todas las facturas registradas

		Connection conexion = miConexion.conectar();
			
		try {
			
			Statement stmt = conexion.createStatement();
            ResultSet resultado = stmt.executeQuery("SELECT * FROM facturas");
			
			while (resultado.next()) {
				
                System.out.println("ID de la factura: " + resultado.getInt("id_factura") + ", ID del proveedor: " + resultado.getString("id_proveedor") + 
                		", Fecha: " + resultado.getString("fecha") + ", Precio total: " + resultado.getString("total"));
                
            }
			
			System.out.println();
			
			stmt.close();
            conexion.close();
			
		} catch (Exception e) {
			
			System.out.println("Error al conectarse: " + e.getMessage());
			
		}
	}
	
	public void modificarFactura(int id_factura, int id_proveedor, Date fecha, double precio) { //Modifica los datos de la factura indicada
		
		Connection conexion = miConexion.conectar();
		
		 try {
			 
			 String sql = "UPDATE facturas SET id_proveedor = ?, fecha = ?, total = ? WHERE id_factura = ?";
	         PreparedStatement pstmt = conexion.prepareStatement(sql);
	         
	         pstmt.setInt(1, id_proveedor);
	         pstmt.setDate(2, fecha);
	         pstmt.setDouble(3, precio);
	         pstmt.setInt(4, id_factura);

	         pstmt.executeUpdate();

	         pstmt.close();
	         conexion.close();
	         
	         System.out.println("Factura modificada exitosamente");
	         
	        } catch (Exception e) {
	        	
	        	System.out.println("Error al conectarse: " + e.getMessage());
	        }
	}
	
	public void eliminarFactura(int id) { //Elimina los datos de la factura indicada
		
		Connection conexion = miConexion.conectar();
		
		 try {
			 
			 String sql = "DELETE FROM facturas WHERE id_factura = ?";
	         PreparedStatement pstmt = conexion.prepareStatement(sql);
	         
	         pstmt.setInt(1, id);

	         pstmt.executeUpdate();

	         pstmt.close();
	         conexion.close();
	         
	         System.out.println("Factura eliminada exitosamente");
	         
	        } catch (Exception e) {
	        	
	        	System.out.println("Error al conectarse: " + e.getMessage());
	        }	
	}
}
