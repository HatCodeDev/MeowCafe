# Meow Cafe Bistro

Plataforma web y panel de administracion para Meow Cafe Bistro, un espacio ubicado en Puebla, Mexico, enfocado en ofrecer cafe de especialidad, reposteria de calidad y facilitar el proceso de adopcion de gatitos rescatados.

El proyecto cuenta con un portal publico para los clientes y un panel de control administrativo para la gestion dinamica de contenidos.

## Stack Tecnologico

* **Backend:** Laravel 10.x
* **Panel de Administracion:** Filament PHP 3.3
* **Frontend:** Blade Templates, Alpine.js
* **Framework de CSS:** Tailwind CSS v4 con plugin Flowbite
* **Empaquetador de Assets:** Vite 5.x
* **Base de Datos:** MySQL (soporta cualquier driver compatible con Laravel)
* **Requisitos:** PHP >= 8.1, Composer, Node.js

## Estructura del Proyecto y Archivos Clave

* **Modelos:**
  * [Banner.php](app/Models/Banner.php): Define la estructura y atributos de los banners (imagenes, enlace, orden, estado activo).
  * [User.php](app/Models/User.php): Modelo para la gestion de usuarios administradores.
* **Controladores:**
  * [HomeController.php](app/Http/Controllers/HomeController.php): Carga los banners activos y renderiza la pagina de inicio.
* **Rutas:**
  * [web.php](routes/web.php): Define los endpoints publicos para Home (`/`) y Sobre Nosotros (`/sobre-nosotros`).
* **Vistas Blade:**
  * [app.blade.php](resources/views/layouts/app.blade.php): Layout base HTML con configuracion de SEO, Open Graph y scripts assets.
  * [index.blade.php](resources/views/home/index.blade.php): Vista principal estructurada en secciones.
  * [index.blade.php](resources/views/about/index.blade.php): Informacion corporativa e historia de la cafeteria.
* **Administracion (Filament):**
  * [BannerResource.php](app/Filament/Resources/BannerResource.php): Gestiona el ABM (Alta, Baja, Modificacion) de banners, incluyendo carga de archivos multimedia, ordenamiento interactivo y control de visibilidad.

## Requisitos de Instalacion Local

Sigue estos pasos para configurar el entorno de desarrollo:

1. **Clonar el proyecto:**
   ```bash
   git clone <url-del-repositorio>
   cd Meowcafe
   ```

2. **Instalar dependencias de backend:**
   ```bash
   composer install
   ```

3. **Instalar dependencias de frontend:**
   ```bash
   npm install
   ```

4. **Configurar el archivo de entorno:**
   Duplica el archivo de ejemplo y genera la clave unica de la aplicacion:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **Configurar la Base de Datos:**
   Edita las variables correspondientes en el archivo `.env`:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=nombre_de_tu_base_de_datos
   DB_USERNAME=tu_usuario
   DB_PASSWORD=tu_contraseña
   ```

6. **Ejecutar las migraciones de la base de datos:**
   ```bash
   php artisan migrate
   ```

7. **Crear el enlace simbolico de almacenamiento:**
   Es obligatorio para que las imagenes de los banners subidas desde el panel de Filament sean publicas y visibles en el frontend:
   ```bash
   php artisan storage:link
   ```

8. **Crear usuario administrador de Filament:**
   Ejecuta el siguiente comando y sigue las instrucciones en la consola para registrar tu cuenta de acceso al panel administrativo:
   ```bash
   php artisan make:filament-user
   ```

## Servidores de Desarrollo

Para iniciar la aplicacion localmente, debes ejecutar los siguientes comandos en terminales independientes:

* **Servidor de PHP (Laravel):**
  ```bash
  php artisan serve
  ```
  La aplicacion estara disponible en `http://127.0.0.1:8000`.

* **Servidor de compilacion de assets (Vite):**
  ```bash
  npm run dev
  ```

* **Acceso al Panel Administrativo:**
  Visita `http://127.0.0.1:8000/admin` e ingresa con las credenciales creadas en el paso anterior.

## Base de Datos y Migraciones

La base de datos cuenta con una tabla especifica para la gestion del slider principal:

* **Tabla `banners`:**
  * `id` (Clave primaria autoincremental)
  * `image_desktop` (Ruta de la imagen optimizada para pantallas grandes)
  * `image_mobile` (Ruta de la imagen optimizada para dispositivos moviles)
  * `link` (URL de destino opcional)
  * `display_order` (Entero para ordenar las diapositivas)
  * `is_active` (Booleano para activar o pausar la publicacion del banner)
  * `timestamps` (`created_at` y `updated_at`)

## Licencia

Este proyecto es software privado y esta sujeto a los derechos de propiedad intelectual de Meow Cafe Bistro.
