# CRUD Laravel con Livewire

Este es un proyecto CRUD (Crear, Leer, Actualizar, Eliminar) utilizando Laravel y Livewire. El proyecto proporciona una solución sencilla y eficiente para gestionar registros de datos, en este caso, cursos, de forma interactiva en tiempo real sin necesidad de recargar la página.

## Características

- **Interfaz interactiva en tiempo real** utilizando [Livewire](https://laravel-livewire.com/).
- **Crear, leer, actualizar y eliminar** cursos.
- Uso del sistema de autenticación de Laravel para proteger el acceso a las funciones administrativas.
- **Búsqueda en tiempo real** para filtrar los cursos.
- **Papelera** para eliminar cursos de forma segura.

## Tecnologías Utilizadas

- [Laravel](https://laravel.com) - Framework PHP para aplicaciones web.
- [Livewire](https://laravel-livewire.com/) - Framework para la construcción de interfaces dinámicas.
- [Tailwind CSS](https://tailwindcss.com/) - Framework CSS para un diseño moderno y responsivo.


## Requisitos Previos

Antes de comenzar, asegúrate de tener instalados los siguientes requisitos:

- [PHP 8.x](https://www.php.net/downloads)
- [Composer](https://getcomposer.org/)
- [Node.js](https://nodejs.org/)
- [MySQL ](https://www.mysql.com/)

## Instalación

Sigue los siguientes pasos para instalar y ejecutar este proyecto en tu máquina local.

### 1. Clonar el repositorio

Primero, clona el repositorio en tu máquina local utilizando Git:

```bash
git clone https://github.com/jordanmax10/crud_laravel_livewire.git
cd crud-laravel_livewire
```

### 2. Instalar las dependencias de PHP con Composer

```bash
composer install
```

### 3. Copiar el archivo .env

```bash
cp .env.example .env
```

### 4. Generar la clave de la aplicación

```bash
php artisan key:generate
```

### 5. Ejecutar las migraciones

```bash
php artisan migrate
```

### 6. Instalar las dependencias de Node.js

```bash
npm install
```

### 7. Compilar los assets

```bash
npm run dev
```

### 7. Iniciar el servidor de desarrollo

```bash
php artisan serve
```