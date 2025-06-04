# Capturar el valor de una lista select HTML con HTMX

Este es un proyecto que demuestra cómo capturar y procesar el valor seleccionado de un elemento `<select>` usando HTMX, sin necesidad de escribir JavaScript. El ejemplo utiliza una lista de frutas, pero la implementación puede adaptarse a cualquier tipo de datos.

## Características

- Captura del valor seleccionado en tiempo real
- Uso de HTMX para manejar las interacciones
- Interfaz responsive con Bootstrap 5
- Actualización asíncrona del contenido
- Sin necesidad de JavaScript

## Estructura del Proyecto

```
.
├── index.php          # Página principal con el formulario
├── get_fruit.php      # Endpoint para procesar la selección
└── README.md          # Este archivo
```

## Tecnologías Utilizadas

- PHP 7.4+
- HTMX 1.9.5
- Bootstrap 5.3.3

## Cómo Funciona

1. El usuario selecciona una fruta del menú desplegable
2. HTMX detecta el cambio y hace una petición GET a `get_fruit.php`
3. El servidor procesa la selección y devuelve el resultado
4. El resultado se muestra dinámicamente en la página sin recargar

## Requisitos

- Servidor web con PHP (Apache, Nginx, etc.)
- PHP 7.4 o superior

## Instalación

1. Clona este repositorio en tu servidor web
2. Asegúrate de que el servidor web tenga permisos de lectura
3. Accede al proyecto a través de tu navegador

## Uso

1. Abre el proyecto en tu navegador
2. Selecciona una fruta del menú desplegable
3. El resultado se mostrará automáticamente en la sección derecha

## Personalización

Puedes modificar la lista de frutas editando el array `$list_fruits` en `index.php` y `get_fruit.php`.
