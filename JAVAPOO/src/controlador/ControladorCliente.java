package controlador;

import config.*;
import java.sql.*;

public class ControladorCliente {
	
	Conexion miConexion;

	public ControladorCliente() {
			
		miConexion = new Conexion();
	}
	
	public void registrarCliente(String nombre, String email, int telefono) { //Registra los datos de un nuevo cliente

		Connection conexion = miConexion.conectar();
			
		 try {
			 
			 String sql = "INSERT INTO clientes (nombre, email, telefono) VALUES (?, ?, ?)";
	         PreparedStatement pstmt = conexion.prepareStatement(sql);
	         
	         pstmt.setString(1, nombre);
	         pstmt.setString(2, email);
	         pstmt.setInt(3, telefono);

	         pstmt.executeUpdate();

	         pstmt.close();
	         conexion.close();
	         
	         System.out.println("Cliente registrado exitosamente");
	         
	        } catch (Exception e) {
	        	
	        	System.out.println("Error al conectarse: " + e.getMessage());
	        }
	}
		
	public void listarClientes() { //Muestra los datos de todos los clientes registrados

		Connection conexion = miConexion.conectar();
			
		try {
			
			Statement stmt = conexion.createStatement();
            ResultSet resultado = stmt.executeQuery("SELECT * FROM clientes");
			
			while (resultado.next()) {
				
                System.out.println("ID: " + resultado.getInt("id_cliente") + ", Nombre: " + resultado.getString("nombre") + 
                		", Correo: " + resultado.getString("email") + ", Teléfono: " + resultado.getString("telefono"));
                
            }
			
			System.out.println();
			
			stmt.close();
            conexion.close();
			
		} catch (Exception e) {
			
			System.out.println("Error al conectarse: " + e.getMessage());
			
		}
	}
	
	public void modificarCliente(int id, String nombre, String email, int telefono) { //Modifica los datos del cliente indicado
		
		Connection conexion = miConexion.conectar();
		
		 try {
			 
			 String sql = "UPDATE clientes SET nombre = ?, email = ?, telefono = ? WHERE id_cliente = ?";
	         PreparedStatement pstmt = conexion.prepareStatement(sql);
	         
	         pstmt.setString(1, nombre);
	         pstmt.setString(2, email);
	         pstmt.setInt(3, telefono);
	         pstmt.setInt(4, id);

	         pstmt.executeUpdate();

	         pstmt.close();
	         conexion.close();
	         
	         System.out.println("Cliente modificado exitosamente");
	         
	        } catch (Exception e) {
	        	
	        	System.out.println("Error al conectarse: " + e.getMessage());
	        }
	}
	
	public void eliminarCliente(int id) { //Elimina los datos del cliente indicado
		
		Connection conexion = miConexion.conectar();
		
		 try {
			 
			 String sql = "DELETE FROM clientes WHERE id_cliente = ?";
	         PreparedStatement pstmt = conexion.prepareStatement(sql);
	         
	         pstmt.setInt(1, id);

	         pstmt.executeUpdate();

	         pstmt.close();
	         conexion.close();
	         
	         System.out.println("Cliente eliminado exitosamente");
	         
	        } catch (Exception e) {
	        	
	        	System.out.println("Error al conectarse: " + e.getMessage());
	        }	
	}
	
}

