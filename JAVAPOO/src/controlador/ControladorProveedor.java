package controlador;

import config.*;
import java.sql.*;

public class ControladorProveedor {

	Conexion miConexion;

	public ControladorProveedor() {
			
		miConexion = new Conexion();
	}
	
	public void registrarProveedor(String nombre, String cif, int telefono) { //Registra los datos de un nuevo proveedor

		Connection conexion = miConexion.conectar();
			
		 try {
			 
			 String sql = "INSERT INTO proveedores (nombre, cif, telefono) VALUES (?, ?, ?)";
	         PreparedStatement pstmt = conexion.prepareStatement(sql);
	         
	         pstmt.setString(1, nombre);
	         pstmt.setString(2, cif);
	         pstmt.setInt(3, telefono);

	         pstmt.executeUpdate();

	         pstmt.close();
	         conexion.close();
	         
	         System.out.println("Proveedor registrado exitosamente");
	         
	        } catch (Exception e) {
	        	
	        	System.out.println("Error al conectarse: " + e.getMessage());
	        }
	}
		
	public void listarProveedores() { //Muestra los datos de todos los proveedor registrados

		Connection conexion = miConexion.conectar();
			
		try {
			
			Statement stmt = conexion.createStatement();
            ResultSet resultado = stmt.executeQuery("SELECT * FROM proveedores");
			
			while (resultado.next()) {
				
                System.out.println("ID: " + resultado.getInt("id_proveedor") + ", Nombre: " + resultado.getString("nombre") + 
                		", CIF: " + resultado.getString("cif") + ", Teléfono: " + resultado.getString("telefono"));
                
            }
			
			System.out.println();
			
			stmt.close();
            conexion.close();
			
		} catch (Exception e) {
			
			System.out.println("Error al conectarse: " + e.getMessage());
			
		}
	}
	
	public void modificarProveedor(int id, String nombre, String cif, int telefono) { //Modifica los datos del proveedor indicado
		
		Connection conexion = miConexion.conectar();
		
		 try {
			 
			 String sql = "UPDATE proveedores SET nombre = ?, cif = ?, telefono = ? WHERE id_proveedor = ?";
	         PreparedStatement pstmt = conexion.prepareStatement(sql);
	         
	         pstmt.setString(1, nombre);
	         pstmt.setString(2, cif);
	         pstmt.setInt(3, telefono);
	         pstmt.setInt(4, id);

	         pstmt.executeUpdate();

	         pstmt.close();
	         conexion.close();
	         
	         System.out.println("Proveedor modificado exitosamente");
	         
	        } catch (Exception e) {
	        	
	        	System.out.println("Error al conectarse: " + e.getMessage());
	        }
	}
	
	public void eliminarProveedor(int id) { //Elimina los datos del proveedor indicado
		
		Connection conexion = miConexion.conectar();
		
		 try {
			 
			 String sql = "DELETE FROM proveedores WHERE id_cliente = ?";
	         PreparedStatement pstmt = conexion.prepareStatement(sql);
	         
	         pstmt.setInt(1, id);

	         pstmt.executeUpdate();

	         pstmt.close();
	         conexion.close();
	         
	         System.out.println("Proveedor eliminado exitosamente");
	         
	        } catch (Exception e) {
	        	
	        	System.out.println("Error al conectarse: " + e.getMessage());
	        }	
	}
}
