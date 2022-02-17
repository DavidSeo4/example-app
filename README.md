<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

Creación de un Blog con Laravel:

- Basado en el seguimiento del siguiente tutorial: https://laracasts.com/series/laravel-8-from-scratch/episodes/17 , procedemos a crear una web con las funcionalidades y estética de un Blog. Esta web sigue los pasos del tutorial hasta el video número 30.
- En el se podrá escribir, subir y modificar posts, ademas de filtrar tanto por autores, id y categorias del post.
- Para esto instalaremos Laravel mediante la consola con el comando composer create-project laravel/laravel example-app e inciamos el servidor con php artisan serve para poder ir viendo los cambios realizados.
- En la pagina de inicio vemos el nombre del blog acompañado de los posts que hay en el. Tambien se detalla quien creo (escribió) cada blog y la categoria a la que pertenece, pudiendo acceder a ambas para ver todos los post relacionados con cada uno de ellos.
-Las dos páginas en las que se expone el contenido al publico son posts.blade.php (principal) y post.blade.php (muestra cada post por inidividual). 
- La base de datos en la cual se crea y almacena la información que se van representar en la web contiene las siguientes tablas y datos:
- 1_Categorias: id, name, slug, created_at, updated_at.
- 2_Failed_jobs: (sin uso).
- 3_Migrations: id, migration, batch.
- 4_Password_resets: (sin uso).
- 5_Personal_access_tokens: (sin uso).
- 6_Posts: id, user_id, category_id, slug, title, excerpt, body, created_at, updated_at, pusblished_at.
- 7_Users: id, username, name, email, email_verified_at, password, remember_token, created_at, updated_at.
- Con el fin de dotar a la pagina de un mínimo de estética se le ha aplicado Bootstrap introduciendo el enlace correspondiete ( <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">) en el archivo layout.blade.php, que controla la estetica y distribucion de las dos páginas principales. Además he añadido un cuantos estilos de mi propia mano para hacer algo mas visible el contenido.
- Todos los comandos aplicados al repositorio y los archivos creados se basan exclusivamente en el tutorial seguido.
