===========================================
MANUAL DE USUARIO
PROYECTO RELOJES
===========================================

Versión: 1.0
Fecha: Junio 2026

-------------------------------------------------------
ÍNDICE
-------------------------------------------------------

1. Introducción
2. Objetivo del sistema
3. Registro e Inicio de Sesión
4. Navegación General
5. Página de Inicio
6. Catálogo de Productos
7. Detalle del Producto
8. Carrito de Compras
9. Proceso de Compra
10. Mis Pedidos
11. Perfil de Usuario
12. Contacto
13. Panel Administrativo
14. Recomendaciones de Uso

=======================================================
1. INTRODUCCIÓN
=======================================================

Proyecto Relojes es una plataforma web desarrollada para la venta de relojes
de diferentes marcas y modelos.

La aplicación permite que cualquier visitante pueda navegar por el catálogo,
consultar información de los productos y registrarse para realizar compras.

Los usuarios registrados pueden administrar su carrito, confirmar pedidos y
consultar el historial de compras.

El sistema también incorpora un panel de administración desde donde es posible
gestionar productos, usuarios, pedidos y consultas.

El sitio fue desarrollado utilizando Laravel como framework principal y cuenta
con una interfaz adaptable para computadoras, tablets y teléfonos móviles.

=======================================================
2. OBJETIVO DEL SISTEMA
=======================================================

El objetivo principal del sistema es ofrecer una plataforma sencilla y segura
para comercializar relojes mediante Internet.

Las funciones principales son:

• Registro de clientes
• Inicio de sesión
• Catálogo de relojes
• Búsqueda de productos
• Carrito de compras
• Gestión de pedidos
• Contacto con la empresa
• Administración del sistema

=======================================================
3. REGISTRO E INICIO DE SESIÓN
=======================================================

REGISTRO

Para registrarse el usuario deberá:

1. Acceder al botón Registrarse.

2. Completar los datos solicitados.

- Nombre
- Apellido
- Correo electrónico
- Contraseña

3. Confirmar el registro.

Si toda la información es válida el sistema creará la cuenta
automáticamente.

-------------------------------------------------------

INICIO DE SESIÓN

El usuario deberá:

1. Acceder a Iniciar Sesión.

2. Completar:

• Email
• Contraseña

3. Presionar Ingresar.

Una vez autenticado podrá acceder a todas las funciones disponibles para
clientes.

-------------------------------------------------------

RECUPERACIÓN DE ACCESO

En caso de olvidar la contraseña, el sistema permitirá utilizar el mecanismo
de recuperación correspondiente si está habilitado.

=======================================================
4. NAVEGACIÓN GENERAL
=======================================================

Desde el menú principal el usuario podrá acceder a:

• Inicio
• Catálogo
• Productos destacados
• Contacto
• Mi cuenta
• Carrito

Cuando el usuario posee permisos de administrador también visualizará el
acceso al Panel Administrativo.

=======================================================
5. PÁGINA PRINCIPAL
=======================================================

La página principal presenta información general del negocio.

Generalmente incluye:

• Banner principal
• Productos destacados
• Promociones
• Información institucional
• Acceso rápido al catálogo

Desde esta pantalla puede iniciarse toda la navegación del sistema.

=======================================================
6. CATÁLOGO DE PRODUCTOS
=======================================================

El catálogo muestra todos los relojes disponibles.

Cada tarjeta contiene:

• Imagen
• Marca
• Modelo
• Precio
• Breve descripción
• Botón Ver Detalle

Dependiendo del stock también podrán visualizarse indicadores de disponibilidad.

El catálogo permite recorrer todos los productos disponibles antes de realizar
una compra.

=======================================================
7. DETALLE DEL PRODUCTO
=======================================================

Al ingresar a un producto el sistema muestra:

• Fotografías
• Marca
• Modelo
• Descripción
• Precio
• Características técnicas
• Disponibilidad
• Botón Agregar al carrito

Si existe una promoción se mostrará el precio actualizado.

Desde esta pantalla el usuario podrá agregar el producto directamente al
carrito.

=======================================================
8. CARRITO DE COMPRAS
=======================================================

El carrito almacena todos los productos seleccionados.

Para cada producto se visualiza:

• Imagen
• Nombre
• Cantidad
• Precio unitario
• Subtotal

El usuario podrá:

• Eliminar productos
• Modificar cantidades
• Continuar comprando
• Vaciar carrito
• Finalizar compra

El sistema recalcula automáticamente el importe total.

=======================================================
9. PROCESO DE COMPRA
=======================================================

Una compra se realiza siguiendo estos pasos:

Paso 1

Iniciar sesión.

Paso 2

Agregar productos al carrito.

Paso 3

Revisar los productos seleccionados.

Paso 4

Completar la información solicitada.

Paso 5

Confirmar el pedido.

Una vez confirmado el sistema registra automáticamente la compra y genera un
identificador del pedido.

=======================================================
10. MIS PEDIDOS
=======================================================

Desde esta sección el cliente podrá consultar todas las compras realizadas.

Cada pedido informa:

• Número de pedido
• Fecha
• Estado
• Total
• Productos incluidos

Los estados disponibles son:

Pendiente

Confirmado

Preparando

Enviado

Entregado

=======================================================
11. PERFIL DEL USUARIO
=======================================================

Los usuarios registrados pueden visualizar la información asociada a su cuenta.

Dependiendo de la implementación podrán actualizar:

• Nombre
• Correo electrónico
• Contraseña

=======================================================
12. CONTACTO
=======================================================

La página de contacto permite enviar consultas al administrador.

Campos principales:

• Nombre
• Correo electrónico
• Asunto
• Mensaje

El sistema valida todos los campos obligatorios antes del envío.

Una vez registrada la consulta se informa al usuario que el mensaje fue enviado
correctamente.

=======================================================
13. PANEL ADMINISTRATIVO
=======================================================

El panel administrativo está disponible únicamente para usuarios con permisos
de administrador.

Desde este panel es posible gestionar:

• Productos
• Categorías
• Marcas
• Usuarios
• Pedidos
• Consultas
• Stock

Funciones principales:

• Alta de productos

• Modificación de productos

• Eliminación de productos

• Visualización de pedidos

• Cambio de estado de pedidos

• Administración de usuarios

• Gestión de consultas

=======================================================
14. RECOMENDACIONES DE USO
=======================================================

• Utilizar navegadores actualizados.

• Mantener cerrada la sesión en equipos compartidos.

• Verificar los datos antes de confirmar una compra.

• No compartir la contraseña de acceso.

• Mantener actualizados los datos personales.

===========================================
ESPECIFICACIÓN DE REQUISITOS DE SOFTWARE
(ERS)
PROYECTO RELOJES
===========================================

Versión 1.0
Junio 2026

-------------------------------------------------------
ÍNDICE
-------------------------------------------------------

1. Introducción
2. Descripción General
3. Usuarios del Sistema
4. Requisitos Funcionales
5. Requisitos No Funcionales
6. Casos de Uso
7. Modelo General del Sistema
8. Restricciones
9. Suposiciones

=======================================================
1. INTRODUCCIÓN
=======================================================

Este documento describe los requisitos funcionales y no funcionales del
Proyecto Relojes.

El objetivo es especificar el comportamiento esperado del sistema y servir
como documentación técnica para el desarrollo y mantenimiento del proyecto.

El sistema fue desarrollado utilizando Laravel y una base de datos relacional,
permitiendo administrar productos, usuarios y pedidos de forma segura.

=======================================================
2. DESCRIPCIÓN GENERAL
=======================================================

Proyecto Relojes es un sistema web destinado a la venta online de relojes.

El sitio dispone de dos áreas principales:

• Sitio público para clientes.

• Panel administrativo.

El sistema permite administrar productos, pedidos, clientes y consultas desde
una única plataforma.

=======================================================
3. TIPOS DE USUARIOS
=======================================================

VISITANTE

Puede:

• Navegar el catálogo.

• Consultar información.

• Registrarse.

• Contactarse mediante el formulario.

-------------------------------------------------------

CLIENTE

Además de las funciones del visitante puede:

• Iniciar sesión.

• Comprar productos.

• Administrar su carrito.

• Consultar pedidos.

-------------------------------------------------------

ADMINISTRADOR

Además de todas las funciones anteriores puede:

• Administrar productos.

• Gestionar pedidos.

• Administrar usuarios.

• Gestionar consultas.

• Controlar el stock.

=======================================================
4. REQUISITOS FUNCIONALES
=======================================================

RF-01
REGISTRO

El sistema deberá permitir registrar nuevos usuarios.

RF-01.1

Validar nombre.

RF-01.2

Validar correo electrónico.

RF-01.3

Validar contraseña.

RF-01.4

Guardar el usuario en la base de datos.

-------------------------------------------------------

RF-02
AUTENTICACIÓN

El sistema deberá permitir iniciar sesión.

RF-02.1

Validar credenciales.

RF-02.2

Crear sesión.

RF-02.3

Cerrar sesión.

-------------------------------------------------------

RF-03
CATÁLOGO

El sistema deberá mostrar todos los relojes disponibles.

RF-03.1

Mostrar imagen.

RF-03.2

Mostrar nombre.

RF-03.3

Mostrar precio.

RF-03.4

Mostrar descripción.

-------------------------------------------------------

RF-04
DETALLE DEL PRODUCTO

El sistema deberá permitir visualizar toda la información del reloj.

RF-04.1

Mostrar fotografías.

RF-04.2

Mostrar precio.

RF-04.3

Mostrar características.

RF-04.4

Mostrar disponibilidad.

-------------------------------------------------------

RF-05
CARRITO

El sistema deberá permitir:

RF-05.1

Agregar productos.

RF-05.2

Eliminar productos.

RF-05.3

Modificar cantidades.

RF-05.4

Calcular subtotal.

RF-05.5

Calcular total.

-------------------------------------------------------

RF-06
PEDIDOS

El sistema deberá permitir:

RF-06.1

Registrar pedidos.

RF-06.2

Guardar el detalle del pedido.

RF-06.3

Actualizar estados.

RF-06.4

Consultar historial.

-------------------------------------------------------

RF-07
CONTACTO

El sistema deberá permitir:

• Enviar consultas.

• Validar formulario.

• Guardar mensajes.

-------------------------------------------------------

RF-08
ADMINISTRACIÓN

El administrador podrá:

• Crear productos.

• Modificar productos.

• Eliminar productos.

• Gestionar usuarios.

• Gestionar pedidos.

• Gestionar consultas.

=======================================================
5. REQUISITOS NO FUNCIONALES
=======================================================

RNF-01
RENDIMIENTO

Las páginas deberán cargar rápidamente bajo condiciones normales.

-------------------------------------------------------

RNF-02
SEGURIDAD

Las contraseñas deberán almacenarse cifradas.

Solo administradores podrán ingresar al panel administrativo.

Los formularios deberán validar la información ingresada.

-------------------------------------------------------

RNF-03
USABILIDAD

El sitio deberá ser intuitivo.

Todos los formularios mostrarán mensajes de error cuando corresponda.

-------------------------------------------------------

RNF-04
COMPATIBILIDAD

Compatible con:

Google Chrome

Mozilla Firefox

Microsoft Edge

Safari

-------------------------------------------------------

RNF-05
RESPONSIVE

El sistema deberá adaptarse correctamente a:

Desktop

Tablet

Smartphone

=======================================================
6. CASOS DE USO
=======================================================

CU-01

Registrar usuario

Actor:

Visitante

Resultado:

Usuario registrado.

-------------------------------------------------------

CU-02

Iniciar sesión

Actor:

Cliente

Resultado:

Acceso autorizado.

-------------------------------------------------------

CU-03

Agregar producto al carrito

Actor:

Cliente

Resultado:

Producto agregado.

-------------------------------------------------------

CU-04

Realizar compra

Actor:

Cliente

Flujo:

1. Inicia sesión.

2. Agrega productos.

3. Ingresa al carrito.

4. Confirma la compra.

5. El sistema registra el pedido.

-------------------------------------------------------

CU-05

Administrar productos

Actor:

Administrador

Acciones:

Crear.

Editar.

Eliminar.

=======================================================
7. MODELO GENERAL DEL SISTEMA
=======================================================

El sistema administra las siguientes entidades principales:

Usuarios

Productos

Pedidos

Detalle de pedidos

Consultas

Categorías

Administradores

=======================================================
8. RESTRICCIONES
=======================================================

• Solo usuarios registrados podrán comprar.

• Solo administradores podrán acceder al panel.

• No podrán registrarse correos electrónicos duplicados.

• Los pedidos deberán asociarse a un usuario existente.

=======================================================
9. SUPOSICIONES
=======================================================

• El servidor posee PHP compatible con Laravel.

• Existe conexión a Internet.

• La base de datos está correctamente configurada.

• El navegador soporta JavaScript.

===========================================
INSTALACIÓN, CONFIGURACIÓN Y DOCUMENTACIÓN
PROYECTO RELOJES
===========================================

Versión 1.0
Junio 2026

-------------------------------------------------------
ÍNDICE
-------------------------------------------------------

1. Requisitos Previos
2. Instalación del Proyecto
3. Configuración del Entorno
4. Migraciones
5. Ejecución del Proyecto
6. Estructura del Proyecto
7. Rutas Principales
8. Panel Administrativo
9. Problemas Frecuentes
10. Comandos Útiles
11. Despliegue en Producción
12. Autores

=======================================================
1. REQUISITOS PREVIOS
=======================================================

Antes de ejecutar el proyecto es necesario contar con:

• PHP 8.3 o superior

• Composer

• Node.js

• npm

• Git

• Base de datos MySQL

• Servidor local (Laragon, XAMPP, Herd o similar)

=======================================================
2. INSTALACIÓN DEL PROYECTO
=======================================================

1. Clonar el repositorio

git clone https://github.com/TheRorry/proyecto_relojes.git

2. Ingresar a la carpeta

cd proyecto_relojes

3. Instalar dependencias PHP

composer install

4. Instalar dependencias de JavaScript

npm install

=======================================================
3. CONFIGURACIÓN DEL ENTORNO
=======================================================

Copiar el archivo de ejemplo

cp .env.example .env

Generar la clave de Laravel

php artisan key:generate

Editar el archivo .env con los datos correspondientes.

Ejemplo

APP_NAME=ProyectoRelojes

APP_ENV=local

APP_DEBUG=true

APP_URL=http://localhost

DB_CONNECTION=mysql

DB_HOST=127.0.0.1

DB_PORT=3306

DB_DATABASE=proyecto_relojes

DB_USERNAME=root

DB_PASSWORD=

=======================================================
4. MIGRACIONES
=======================================================

Ejecutar las migraciones

php artisan migrate

Si el proyecto posee seeders

php artisan db:seed

o

php artisan migrate --seed

=======================================================
5. EJECUCIÓN DEL PROYECTO
=======================================================

Servidor Laravel

php artisan serve

Compilar archivos CSS y JavaScript

npm run dev

Para producción

npm run build

La aplicación quedará disponible en

http://127.0.0.1:8000

=======================================================
6. ESTRUCTURA GENERAL DEL PROYECTO
=======================================================

proyecto_relojes/

│

├── app/

│ ├── Http/

│ ├── Models/

│ ├── Providers/

│

├── bootstrap/

│

├── config/

│

├── database/

│ ├── migrations/

│ ├── seeders/

│

├── public/

│

├── resources/

│ ├── css/

│ ├── js/

│ └── views/

│

├── routes/

│ ├── web.php

│ └── console.php

│

├── storage/

│

├── tests/

│

└── vendor/

=======================================================
7. RUTAS PRINCIPALES
=======================================================

Página principal

/

-------------------------------------------------------

Inicio de sesión

/login

-------------------------------------------------------

Registro

/register

-------------------------------------------------------

Catálogo

/productos

-------------------------------------------------------

Detalle del producto

/productos/{id}

-------------------------------------------------------

Carrito

/carrito

-------------------------------------------------------

Finalizar compra

/checkout

-------------------------------------------------------

Contacto

/contacto

-------------------------------------------------------

Perfil

/perfil

-------------------------------------------------------

Panel administrativo

/admin

=======================================================
8. PANEL ADMINISTRATIVO
=======================================================

El panel administrativo permite gestionar el contenido del sitio.

Funciones disponibles

• Alta de productos

• Baja de productos

• Modificación de productos

• Gestión de pedidos

• Administración de usuarios

• Gestión de consultas

• Control de stock

Solo los usuarios administradores podrán acceder a estas funciones.

=======================================================
9. PROBLEMAS FRECUENTES
=======================================================

ERROR

No application encryption key

Solución

php artisan key:generate

-------------------------------------------------------

ERROR

Class not found

Solución

composer dump-autoload

-------------------------------------------------------

ERROR

Migraciones pendientes

Solución

php artisan migrate

-------------------------------------------------------

ERROR

Cambios no visibles

Solución

php artisan optimize:clear

-------------------------------------------------------

ERROR

Assets sin compilar

Solución

npm install

npm run dev

=======================================================
10. COMANDOS ÚTILES
=======================================================

Limpiar caché

php artisan cache:clear

-------------------------------------------------------

Limpiar configuración

php artisan config:clear

-------------------------------------------------------

Limpiar rutas

php artisan route:clear

-------------------------------------------------------

Limpiar vistas

php artisan view:clear

-------------------------------------------------------

Limpiar todo

php artisan optimize:clear

-------------------------------------------------------

Listar rutas

php artisan route:list

-------------------------------------------------------

Recrear base de datos

php artisan migrate:fresh

-------------------------------------------------------

Recrear base de datos con seeders

php artisan migrate:fresh --seed

=======================================================
11. DESPLIEGUE EN PRODUCCIÓN
=======================================================

1. Configurar el archivo .env

APP_ENV=production

APP_DEBUG=false

2. Instalar dependencias

composer install --no-dev

3. Ejecutar migraciones

php artisan migrate --force

4. Compilar recursos

npm run build

5. Optimizar Laravel

php artisan optimize

=======================================================
12. REGLAS DE NEGOCIO
=======================================================

• Solo usuarios registrados pueden realizar compras.

• El stock nunca puede ser negativo.

• Los pedidos quedan asociados al usuario que los creó.

• Cada compra genera automáticamente un registro de pedido.

• Solo administradores pueden administrar productos.

• Solo administradores pueden modificar el estado de los pedidos.

• El sistema valida toda la información antes de almacenarla.

=======================================================
13. TECNOLOGÍAS UTILIZADAS
=======================================================

Backend

Laravel

PHP

Frontend

HTML5

CSS3

JavaScript

Base de datos

DBeaver

Control de versiones

Git

GitHub

=======================================================
14. AUTORES
=======================================================

Proyecto desarrollado para la materia correspondiente utilizando
Laravel como framework principal.

Integrantes:

• Duarte Rodrigo y Sardi Gustavo

Repositorio:

https://github.com/TheRorry/proyecto_relojes


