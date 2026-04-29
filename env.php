<?php
// ============================================================
// env.php — SUBE ESTE ARCHIVO FUERA DE public_html
//
// Ejemplo de rutas según tu hosting:
//   Hostinger:  /home/u123456789/env.php
//   cPanel:     /home/tunombredeusuario/env.php
//   VPS:        /var/secrets/env.php
//
// NUNCA lo pongas dentro de public_html/ o httpdocs/
// ============================================================

define('DB_HOST', 'localhost');
define('DB_NAME', 'menu_system');      // nombre de tu base de datos
define('DB_USER', 'usuario_aqui');     // usuario MySQL de cPanel
define('DB_PASS', 'contraseña_aqui'); // contraseña MySQL

define('APP_URL', 'https://tudominio.com/menu-system'); // sin / al final
define('SESSION_NAME', 'menu_session');
define('COOKIE_SECURE', true); // true si tienes HTTPS
