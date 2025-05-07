package clases;

import java.sql.*;

public class Funciones {
	
	public void verPeliculas() { //Muestra los datos de todas las películas guardadas en la base de datos ordenadas por su ID
		
        try { //Comprueba que no ocurran errores al recoger los datos de la base de datos
			
			Connection conexion = DriverManager.getConnection("jdbc:mysql://localhost:3306/cine_Rodrigo_García_Ortiz", "root", "curso");
			Statement stmt = conexion.createStatement();
			ResultSet resultado = stmt.executeQuery("SELECT * FROM peliculas INNER JOIN categorias WHERE categoria = id_categoria ORDER BY id_pelicula");
			
			while (resultado.next()) {
				
                System.out.println("ID: " + resultado.getInt("id_pelicula") + ", Título: " + resultado.getString("titulo") + 
                		", Categoría: " + resultado.getString("nombre_categoria") + ", Director: " + resultado.getString("director") +
                		", Año de publicación: " + resultado.getInt("publicacion"));
                
            }
			
			System.out.println();
			
			stmt.close();
            conexion.close();

			
		} catch (Exception e) { //Muestra el error ocurrido
			
			System.out.println("Error al conectarse: " + e.getMessage());
		}
    }
	
    public void registrarPelicula(int id, String titulo, int categoria, String director, int publicacion) { //Guarda los datos de la película en la base de datos
		
        try { //Comprueba que no ocurran errores al recoger los datos de la base de datos
			
        	Connection conexion = DriverManager.getConnection("jdbc:mysql://localhost:3306/cine_Rodrigo_García_Ortiz", "root", "curso");
			String sql = "INSERT INTO peliculas VALUES (?, ?, ?, ?, ?)";
						
		    PreparedStatement stmt = conexion.prepareStatement(sql);
			stmt.setInt(1, id);
			stmt.setString(2, titulo);
			stmt.setInt(3, categoria);
			stmt.setString(4, director);
			stmt.setInt(5, publicacion);
						
			stmt.executeUpdate();		
						
			stmt.close();
			conexion.close();
						
			System.out.println("Película registrada exitosamente");
			System.out.println();
			
			stmt.close();
            conexion.close();
			
		} catch (Exception e) { //Muestra el error ocurrido
			
			System.out.println("Ya existe una película con esa clave");
		}
    }
    
    public void eliminarPelicula(int id) { //Elimina la película indicada de la base de datos
		
        try { //Comprueba que no ocurran errores al recoger los datos de la base de datos
			
        	Connection conexion = DriverManager.getConnection("jdbc:mysql://localhost:3306/cine_Rodrigo_García_Ortiz", "root", "curso");
			String sql = "DELETE FROM peliculas WHERE id_pelicula = ?";
			
			PreparedStatement stmt = conexion.prepareStatement(sql);
			stmt.setInt(1, id);
			
			stmt.executeUpdate();		
			
			stmt.close();
            conexion.close();
			
            System.out.println("Película eliminada exitosamente");
            System.out.println();
            
		} catch (Exception e) { //Muestra el error ocurrido
			
			System.out.println("Error al conectarse: " + e.getMessage());
		}
    }
    
    public void modificarPelicula(int id, String titulo, int categoria, String director, int publicacion) { //Modifica los datos de la película indicada
    	
        try { //Comprueba que no ocurran errores al recoger los datos de la base de datos
			
        	Connection conexion = DriverManager.getConnection("jdbc:mysql://localhost:3306/cine_Rodrigo_García_Ortiz", "root", "curso");
			String sql = "UPDATE peliculas SET titulo = ?, categoria = ?, director = ?, publicacion = ? WHERE id_pelicula = ?";
			
			PreparedStatement stmt = conexion.prepareStatement(sql);
			stmt.setString(1, titulo);
			stmt.setInt(2, categoria);
			stmt.setString(3, director);
			stmt.setInt(4, publicacion);
			stmt.setInt(5, id);
			
			stmt.executeUpdate();		
			
			stmt.close();
            conexion.close();
			
            System.out.println("Película modificada exitosamente");
            System.out.println();
            
		} catch (Exception e) { //Muestra el error ocurrido
			
			System.out.println("Error al conectarse: " + e.getMessage());
		}
    }
}
