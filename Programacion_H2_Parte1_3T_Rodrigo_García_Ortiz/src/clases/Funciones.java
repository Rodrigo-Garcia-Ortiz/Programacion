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
}

