# Sistema de Voto Escolar - Rangers educations

## ¿Qué es?

Es una página web para que los estudiantes del colegio secundario **Rangers educations** puedan votar desde una computadora, tablet o celular, en lugar de usar papeletas.

## ¿En qué estado está?

El proyecto recién comienza. Por ahora solo existe la **pantalla de ingreso**, y es únicamente el diseño: todavía no revisa el código, no permite votar y no usa base de datos.

## ¿Qué se necesita?

- XAMPP con PHP 8.5.12
- MySQL (se usará más adelante)
- Un navegador web

No se usan frameworks: es PHP puro.

## ¿Cómo se abre?

1. Copia la carpeta `voto-escolar` dentro de `C:\xampp\htdocs\`.
2. Abre el panel de XAMPP y enciende **Apache**.
3. En el navegador, entra a: <http://localhost/voto-escolar/>

## ¿Qué hay en cada carpeta?

| Archivo o carpeta | Para qué sirve |
|---|---|
| `index.php` | Pantalla de ingreso del elector. |
| `admin/` | Aquí irá la zona del administrador (encargados de la elección). |
| `includes/` | Aquí irán las partes de código que se repiten en varias páginas. |
| `assets/css/` | Aquí están los estilos: colores, tamaños y diseño. |
| `database/` | Aquí irán los archivos de la base de datos. |

Las carpetas que todavía están vacías tienen un archivo llamado `.gitkeep`. Sirve para que no se pierdan si el proyecto se guarda con Git.
