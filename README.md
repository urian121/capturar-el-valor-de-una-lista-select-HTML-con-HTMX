# Capturar el valor de una lista select HTML con HTMX

Este es un proyecto que demuestra cómo capturar y procesar el valor seleccionado de un elemento `<select>` usando HTMX, sin necesidad de escribir JavaScript. El ejemplo utiliza una lista de frutas, pero la implementación puede adaptarse a cualquier tipo de datos.

![Captura de pantalla](https://raw.githubusercontent.com/urian121/imagenes-proyectos-github/refs/heads/master/capturar-el-valor-de-una-lista-select-HTML-con-HTMX.gif)

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


## Cómo Funciona

1. El usuario selecciona una fruta del menú desplegable
2. HTMX detecta el cambio y hace una petición GET a `get_fruit.php`
3. El servidor procesa la selección y devuelve el resultado
4. El resultado se muestra dinámicamente en la página sin recargar


## Instalación

1. Clona este repositorio en tu servidor web
2. Asegúrate de que el servidor web tenga permisos de lectura
3. Accede al proyecto a través de tu navegador


## 🙌 Cómo puedes apoyar 📢:

✨ **Comparte este proyecto** con otros desarrolladores para que puedan beneficiarse 📢.

☕ **Invítame un café o una cerveza 🍺**:
   - [Paypal](https://www.paypal.me/iamdeveloper86) (`iamdeveloper86@gmail.com`).

### ⚡ ¡No olvides SUSCRIBIRTE a la [Comunidad WebDeveloper](https://www.youtube.com/WebDeveloperUrianViera?sub_confirmation=1)!


#### ⭐ **Déjanos una estrella en GitHub**:
   - Dicen que trae buena suerte 🍀.
**Gracias por tu apoyo 🤓.**