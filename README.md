# 🎬 Proyecto Netflix

## Descripción

Proyecto web inspirado en Netflix desarrollado para la materia **Implementa Software Multiplataforma**.

La aplicación permite el registro e inicio de sesión de usuarios, la visualización de un catálogo de películas y la administración de usuarios mediante operaciones CRUD (Crear, Leer, Actualizar y Eliminar), utilizando una base de datos MySQL conectada mediante PHP.

---

## Tecnologías Utilizadas

* HTML5
* CSS3
* JavaScript
* PHP
* MySQL
* XAMPP
* GitHub

---

## Funcionalidades

### Registro de Usuarios

Permite registrar nuevos usuarios dentro del sistema almacenando la información en la base de datos.

### Inicio de Sesión

Sistema de autenticación mediante usuario y contraseña con validación de credenciales.

### Gestión de Sesiones

Protección de páginas privadas mediante sesiones PHP.

### Catálogo de Películas

Visualización de películas con imagen, título, descripción y género.

### Buscador

Permite buscar películas por nombre dentro del catálogo.

### CRUD de Usuarios

El sistema permite:

* Crear usuarios
* Consultar usuarios registrados
* Editar información de usuarios
* Eliminar usuarios

### Base de Datos

La aplicación utiliza una base de datos relacional compuesta por las tablas:

* Usuarios
* Películas

---

## Estructura del Proyecto

```text
netflix/
│
├── index.php
├── registro.php
├── guardar_usuario.php
├── validar.php
├── home.php
├── admin_usuarios.php
├── editar_usuario.php
├── actualizar_usuario.php
├── eliminar_usuario.php
├── conexion.php
├── script.js
└── img/
```

---

## Instalación

1. Copiar la carpeta del proyecto dentro de:

```text
C:\xampp\htdocs\
```

2. Iniciar Apache y MySQL desde XAMPP.

3. Crear la base de datos correspondiente en phpMyAdmin.

4. Importar el script SQL.

5. Acceder desde el navegador mediante:

```text
http://localhost/netflix
```

---

## Autor

Proyecto desarrollado por Yoel Gallegos
