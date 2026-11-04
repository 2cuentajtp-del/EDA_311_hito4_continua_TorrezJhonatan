# Recursividad en PHP

Ejercicios de recursividad en PHP: cálculo de factorial y recorrido de categorías jerárquicas en MySQL.

## Archivos

Ubicados en la carpeta `recursividad/`:

| Archivo | Descripción |
|---|---|
| `tarea.php` | Calcula el factorial de un número de forma recursiva. |
| `conexion.php` | Prueba la conexión a MySQL con `mysqli`. |
| `resursividad_db.php` | Lista todos los descendientes de una categoría usando recursividad y PDO. |

## Requisitos

- Base de datos `recursividad_db` con la tabla `categorias` (`id`, `nombre`, `padre_id`)

## Uso

1. Copia la carpeta en `htdocs` (XAMPP) e inicia Apache y MySQL.
2. Abre en el navegador:
   - `http://localhost/EDA_311_hito4_continua_TorrezJhonatan-main/EDA_311_hito4_continua_TorrezJhonatan-main/recursividad/tarea.php`
   - `(http://localhost/EDA_311_hito4_continua_TorrezJhonatan-main/EDA_311_hito4_continua_TorrezJhonatan-main/recursividad/conexion.php)`
   - `http://localhost/EDA_311_hito4_continua_TorrezJhonatan-main/EDA_311_hito4_continua_TorrezJhonatan-main/recursividad/resursividad_db.php`

## Configuración

Las credenciales de conexión (`localhost`, usuario `root`, sin contraseña) están en `conexion.php` y `resursividad_db.php`.
