# Recursividad en PHP

Ejercicios de recursividad en PHP: cálculo de factorial.

## Archivos

| Archivo | Descripción |
|---|---|
| `tarea.php` | Calcula el factorial de un número de forma recursiva. |
| `conexion.php` | Prueba la conexión a MySQL con `mysqli`. |
| `descendientes.php` | Lista todos los descendientes de una categoría usando recursividad y PDO. |


- Base de datos `recursividad_db` con la tabla `categorias` (`id`, `nombre`, `padre_id`)
- 
## Uso

1. Copia la carpeta en `htdocs` (XAMPP) e inicia Apache y MySQL.
2. Abre en el navegador:
   - `http://localhost/recursividad/tarea.php`
   - `http://localhost/recursividad/conexion.php`
   - `http://localhost/recursividad/descendientes.php`

## Configuración

Las credenciales de conexión (`localhost`, usuario `root`, sin contraseña) están en `conexion.php` y `descendientes.php`.
