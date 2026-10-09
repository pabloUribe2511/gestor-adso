# Gestor ADSO

## Nombre y propósito del proyecto

Gestor ADSO es un proyecto desarrollado en Laravel para administrar procesos, tareas y recursos relacionados con el programa ADSO. Su objetivo es centralizar la gestión del flujo de trabajo del equipo, facilitar el control de información y permitir una ejecución más ordenada y reproducible del proyecto en diferentes entornos.

## Herramientas y versiones reales

> Importante: NO escribir versiones inventadas. NO indicar automáticamente "Laravel 10.x". Registrar exactamente el resultado del computador.

Ejecutar y copiar el resultado real:

```bash
php -v
composer -V
php artisan --version
git --version
node -v
npm -v
```

Resultados verificados en este equipo:

```bash
PHP 8.2.12 (cli) (built: Oct 24 2023 21:15:15) (ZTS Visual C++ 2019 x64)
Composer version 2.10.3 2026-08-27 13:34:23
Laravel Framework 12.69.3
git version 2.54.0.windows.1
v24.19.0
11.17.0
```

## Pasos de instalación y configuración de .env

1. Clonar el repositorio:

```bash
git clone <url-del-repositorio>
cd gestor-adso
```

2. Instalar dependencias de PHP:

```bash
composer install
```

3. Crear el archivo de entorno:

```bash
copy .env.example .env
```

En Windows PowerShell:

```powershell
Copy-Item .env.example .env
```

4. Generar la clave de la aplicación:

```bash
php artisan key:generate
```

5. Configurar la base de datos.

Este proyecto usa SQLite por defecto en Laravel. En el archivo `.env` se debe verificar que la configuración sea similar a:

```env
DB_CONNECTION=sqlite
```

Si se usa SQLite, normalmente no es necesario definir `DB_DATABASE` si se trabaja con la base por defecto dentro de `database/database.sqlite`.

## Creación de BD y ejecución de migraciones

1. Crear la base de datos SQLite si no existe:

```bash
php artisan migrate:install
```

2. Ejecutar las migraciones:

```bash
php artisan migrate
```

3. Si se requiere instalar también dependencias de frontend:

```bash
npm install
npm run build
```

## Cómo ejecutar el servidor

Para iniciar el proyecto en modo local:

```bash
php artisan serve
```

Luego abrir en el navegador:

```text
http://127.0.0.1:8000
```

También puede ejecutarse con el stack completo de Laravel + Vite:

```bash
composer run dev
```

## Evidencias del proceso

Se recomienda documentar en el README la evidencia real del entorno con capturas o copias del resultado de las siguientes verificaciones:

- `php -v`
- `composer -V`
- `php artisan --version`
- `git --version`
- `node -v`
- `npm -v`

Esto permite reproducir el proyecto con las mismas herramientas y versiones en otro equipo sin errores por versiones incompatibles.

## Requisitos recomendados

- PHP 8.2+
- Composer 2.x
- Node.js 20+
- npm 10+
- Git

## Licencia

Este proyecto se distribuye bajo la licencia del repositorio y de la organización que lo desarrolla.
