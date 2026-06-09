<div align="center">

# 📱 Sistema de Reparación de Celulares

> Aplicación web para gestionar reparaciones de dispositivos móviles, desarrollada con **Laravel** y **MySQL**.

![Laravel](https://img.shields.io/badge/Laravel-10+-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-8.1+-777BB4?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white)
![Blade](https://img.shields.io/badge/Blade-Templates-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)

</div>

---

## 📌 Tabla de Contenidos

- [Requisitos](#-requisitos)
- [Instalación](#-instalación)
- [Configuración del Entorno](#-configuración-del-entorno)
- [Base de Datos](#-base-de-datos)
- [Modelos](#-modelos)
- [Controladores y Validaciones](#-controladores-y-validaciones)
- [Seeders](#-seeders)
- [Vistas](#-vistas-blade)
- [Estilos CSS](#-estilos-css)
- [Rutas](#-rutas)
- [Autenticación](#-autenticación)
- [Autores](#-autores)

---

## ✅ Requisitos

| Tecnología | Versión mínima |
|------------|---------------|
| PHP        | 8.1+          |
| Laravel    | 10+           |
| MySQL      | 5.7+          |
| Composer   | 2+            |

---

## 🚀 Instalación

```bash
# 1. Clonar el repositorio
git clone <url-del-repo>
cd <nombre-del-proyecto>

# 2. Instalar dependencias
composer install

# 3. Copiar archivo de entorno
cp .env.example .env

# 4. Generar clave de la aplicación
php artisan key:generate

# 5. Ejecutar migraciones
php artisan migrate

# 6. (Opcional) Cargar datos de prueba
php artisan db:seed

# 7. Levantar el servidor
php artisan serve
```

---

## 🔧 Configuración del Entorno

Editá el archivo `.env` con los datos de tu base de datos:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=reparacion_celulares
DB_USERNAME=root
DB_PASSWORD=
```

---

## 🗄️ Base de Datos

### Diagrama de relaciones

```
marcas ──────────── celulares ──────────── reparaciones
                                                │
clientes ───────────────────────────────────────┤
                                                │
usuarios ───────────────────────────────────────┘
```

### Tablas

<details>
<summary><b>📋 usuarios</b> — Técnicos del sistema</summary>

| Campo      | Tipo   | Descripción            |
|------------|--------|------------------------|
| id         | bigint | Clave primaria         |
| nombre     | string | Nombre del técnico     |
| email      | string | Único                  |
| password   | string | Hasheada               |
| timestamps | —      | created_at, updated_at |

</details>

<details>
<summary><b>👤 clientes</b> — Datos de los clientes</summary>

| Campo      | Tipo   | Descripción            |
|------------|--------|------------------------|
| id         | bigint | Clave primaria         |
| nombre     | string | Nombre del cliente     |
| telefono   | string | Opcional               |
| timestamps | —      | created_at, updated_at |

</details>

<details>
<summary><b>🏷️ marcas</b> — Marcas de celulares</summary>

| Campo      | Tipo   | Descripción            |
|------------|--------|------------------------|
| id         | bigint | Clave primaria         |
| nombre     | string | Nombre de la marca     |
| timestamps | —      | created_at, updated_at |

</details>

<details>
<summary><b>📱 celulares</b> — Modelos de dispositivos</summary>

| Campo      | Tipo   | Descripción            |
|------------|--------|------------------------|
| id         | bigint | Clave primaria         |
| marca_id   | bigint | FK → marcas            |
| modelo     | string | Nombre del modelo      |
| timestamps | —      | created_at, updated_at |

</details>

<details>
<summary><b>🔧 reparaciones</b> — Tabla principal</summary>

| Campo             | Tipo   | Descripción                                          |
|-------------------|--------|------------------------------------------------------|
| id                | bigint | Clave primaria                                       |
| descripcion_falla | text   | Detalle del problema                                 |
| fecha_ingreso     | date   | Por defecto: fecha actual                            |
| estado            | enum   | `Ingresado` · `Reparando` · `Reparado` · `Entregado` |
| celular_id        | bigint | FK → celulares                                       |
| cliente_id        | bigint | FK → clientes                                        |
| usuario_id        | bigint | FK → usuarios                                        |
| timestamps        | —      | created_at, updated_at                               |

</details>

### Flujo de estados

```
[ Ingresado ] ──► [ Reparando ] ──► [ Reparado ] ──► [ Entregado ]
```

---

## 🧩 Modelos

| Modelo     | Tabla        | Fillable                                                                      | Relaciones                          |
|------------|--------------|-------------------------------------------------------------------------------|-------------------------------------|
| Usuario    | usuarios     | nombre, email, password                                                       | hasMany Reparacion                  |
| Cliente    | clientes     | nombre, telefono                                                              | hasMany Reparacion                  |
| Marca      | marcas       | nombre                                                                        | hasMany Celular                     |
| Celular    | celulares    | marca_id, modelo                                                              | belongsTo Marca · hasMany Reparacion|
| Reparacion | reparaciones | descripcion_falla, fecha_ingreso, estado, celular_id, cliente_id, usuario_id | belongsTo Cliente, Celular, Usuario |

---

## 🎮 Controladores y Validaciones

| Controlador          | Form Request(s)                           | Validaciones clave                                   |
|----------------------|-------------------------------------------|------------------------------------------------------|
| CelularController    | `CelularRequest`                          | marca_id existente · modelo obligatorio              |
| ClienteController    | `StoreClienteRequest` `UpdateClienteRequest` | nombre único · teléfono opcional                  |
| MarcaController      | `StoreMarcaRequest` `UpdateMarcaRequest`  | nombre obligatorio y único                           |
| ReparacionController | `ReparacionRequest`                       | FKs existentes · estado válido · falla obligatoria   |
| PageController       | —                                         | Vistas estáticas (home, about)                       |
| LoginController      | —                                         | Credenciales · redirecciones · logout                |

### 🔑 LoginController

```
showLoginForm  →  Muestra formulario / redirige si ya autenticado
login          →  Valida credenciales → redirige a /reparaciones
logout         →  Cierra sesión e invalida token
```

---

## 🌱 Seeders

```bash
# Ejecutar seeders
php artisan db:seed

# Reiniciar BD con datos frescos
php artisan migrate:fresh --seed
```

El `DatabaseSeeder` ejecuta en orden:

```
1. UsuarioSeeder   →  admin@test.com · juan@test.com
2. ClienteSeeder   →  Carlos Perez · Ana Gomez · Luis Martinez
3. MarcaSeeder     →  Samsung · Apple · Xiaomi · Motorola · Huawei · LG · Sony · Nokia
4. CelularSeeder   →  Galaxy S21 · iPhone 13 · Redmi Note 10 · Moto G100
5. ReparacionSeeder → Pantalla rota · Batería defectuosa · No enciende
```

---

## 🖼️ Vistas (Blade)

### Layout base

`resources/views/layouts/layout.blade.php`

Contiene navbar dinámico, footer y `@yield('content')`.

| Estado de sesión | Acceso en navbar                              |
|------------------|-----------------------------------------------|
| ✅ Autenticado    | Reparaciones · Clientes · Celulares · Marcas  |
| ❌ No autenticado | Inicio · Acerca de                            |

### Módulos

| Módulo       | Vistas                          |
|--------------|---------------------------------|
| Páginas      | `home` · `about`                |
| Auth         | `login`                         |
| Marcas       | `index` `create` `edit` `show`  |
| Celulares    | `index` `create` `edit` `show`  |
| Clientes     | `index` `create` `edit` `show`  |
| Reparaciones | `index` `create` `edit` `show`  |

> Todas las vistas usan `@csrf`, `@method`, y validación con `$errors`.

---

## 🎨 Estilos CSS

```
public/css/
├── layout.css
├── home.css
├── about.css
├── login.css
│
├── components/
│   └── button.css          ← botones globales reutilizables
│
├── celulares/
│   ├── celulares_index.css
│   ├── create.css
│   ├── edit.css
│   └── show.css
│
├── clientes/
│   ├── clientes_index.css
│   ├── create.css
│   ├── edit.css
│   └── show.css
│
├── marcas/
│   ├── marcas_index.css
│   ├── create.css
│   ├── edit.css
│   └── show.css
│
└── reparacion/
    ├── index_reparaciones.css   ← incluye colores por estado
    ├── create.css
    └── show.css
```

---

## 🛣️ Rutas

### Públicas

| Método | URL      | Controlador     | Acción              |
|--------|----------|-----------------|---------------------|
| GET    | `/`      | PageController  | Página principal    |
| GET    | `/about` | PageController  | Acerca de           |
| GET    | `/login` | LoginController | Formulario de login |
| POST   | `/login` | LoginController | Procesar login      |
| POST   | `/logout`| LoginController | Cerrar sesión       |

### Protegidas `middleware('auth')`

| Recurso      | Prefijo URL     | Controlador           |
|--------------|-----------------|-----------------------|
| Reparaciones | `/reparaciones` | ReparacionController  |
| Marcas       | `/marcas`       | MarcaController       |
| Celulares    | `/celulares`    | CelularController     |
| Clientes     | `/clientes`     | ClienteController     |

> Cada recurso expone: `index` · `create` · `store` · `show` · `edit` · `update` · `destroy`

---

## 🔐 Autenticación

El sistema reemplaza el modelo `User` de Laravel por un modelo propio `Usuario`. Configurado en `config/auth.php`:

```php
'providers' => [
    'users' => [
        'driver' => 'eloquent',
        'model'  => env('AUTH_MODEL', Usuario::class),
    ],
],
```

---

## 👥 Autores

<div align="center">

| 👤 Nombre                 |
|---------------------------|
| Gianluca Vilca            |
| Daniela Piñerua           |
| Marcos Jesus Di Filipo    |

</div>

---

## 📝 Conclusión

El sistema permite gestionar de manera eficiente el proceso de reparación de celulares, integrando clientes, dispositivos, marcas y reparaciones en una sola aplicación.

A lo largo del desarrollo se aplicaron conceptos fundamentales de Laravel: migraciones, Eloquent ORM, controladores, Form Requests, vistas Blade y autenticación personalizada. El resultado es una aplicación funcional, escalable y fácil de mantener.

---

<div align="center">

📄 Licencia MIT &nbsp;·&nbsp; Hecho con ❤️ y Laravel

</div>