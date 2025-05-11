package controlador;

import config.*;
import java.sql.*;

public class ControladorArticulo {
	
	Conexion miConexion;

	public ControladorArticulo() {
			
		miConexion = new Conexion();
	}
	
	public void registrarArticulo(String nombre, double precio, int stock) { //Registra los datos de un nuevo artículo

		Connection conexion = miConexion.conectar();
			
		 try {
			 
			 String sql = "INSERT INTO articulos (nombre, precio_unitario, stock) VALUES (?, ?, ?)";
	         PreparedStatement pstmt = conexion.prepareStatement(sql);
	         
	         pstmt.setString(1, nombre);
	         pstmt.setDouble(2, precio);
	         pstmt.setInt(3, stock);

	         pstmt.executeUpdate();

	         pstmt.close();
	         conexion.close();
	         
	         System.out.println("Artículo registrado exitosamente");
	         
	        } catch (Exception e) {
	        	
	        	System.out.println("Error al conectarse: " + e.getMessage());
	        }
	}
		
	public void listarArticulos() { //Muestra los datos de todos los artículos registrados

		Connection conexion = miConexion.conectar();
			
		try {
			
			Statement stmt = conexion.createStatement();
            ResultSet resultado = stmt.executeQuery("SELECT * FROM articulos");
			
			while (resultado.next()) {
				
                System.out.println("ID: " + resultado.getInt("id_articulo") + ", Nombre: " + resultado.getString("nombre") + 
                		", Precio por unidad: " + resultado.getDouble("precio_unitario") + ", Stock: " + resultado.getString("stock"));
            }
			
			System.out.println();
			
			stmt.close();
            conexion.close();
			
		} catch (Exception e) {
			
			System.out.println("Error al conectarse: " + e.getMessage());
			
		}
	}
	
	public void modificarArticulo(int id, String nombre, double precio, int stock) { //Modifica los datos del artículo indicado
		
		Connection conexion = miConexion.conectar();
		
		 try {
			 
			 String sql = "UPDATE articulos SET nombre = ?, precio_unitario = ?, stock = ? WHERE id_articulo = ?";
	         PreparedStatement pstmt = conexion.prepareStatement(sql);
	         
	         pstmt.setString(1, nombre);
	         pstmt.setDouble(2, precio);
	         pstmt.setInt(3, stock);
	         pstmt.setInt(4, id);

	         pstmt.executeUpdate();

	         pstmt.close();
	         conexion.close();
	         
	         System.out.println("Artículo modificado exitosamente");
	         
	        } catch (Exception e) {
	        	
	        	System.out.println("Error al conectarse: " + e.getMessage());
	        }
	}
	
	public void eliminarArticulo(int id) { //Elimina los datos del articulo indicado
		
		Connection conexion = miConexion.conectar();
		
		 try {
			 
			 String sql = "DELETE FROM articulos WHERE id_articulo = ?";
	         PreparedStatement pstmt = conexion.prepareStatement(sql);
	         
	         pstmt.setInt(1, id);

	         pstmt.executeUpdate();

	         pstmt.close();
	         conexion.close();
	         
	         System.out.println("Artículo eliminado exitosamente");
	         
	        } catch (Exception e) {
	        	
	        	System.out.println("Error al conectarse: " + e.getMessage());
	        }	
	}

}
