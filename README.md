# BaseWordPress
Base de ficheros de configuración para una instalación limpia de WordPress, que incorpora aspectos de optimización (wp-admin.php), seguridad (.htaccess) y funcionalidades (functions.php)

------------------------

**.htaccess**

Conjunto de reglas para bloquear inyecciones de código, ataques de fuerza bruta, bots maliciosos y hotlinking. Además proporciona una capa de seguridad para proteger ficheros críticos del CMS y para esconder cabeceras que contengan datos que puedan ser usados para encontrar vulnerabilidades.

**contenido/uploads/.htaccess - wp-includes/.htaccess**

Conjunto de reglas para desactivar la ejecución de PHP en los directorios necesarios. Específicamente para proteger el sitio web de posibles archivos peligrosos que contengan código malicioso de acceso de puerta trasera.

**wp-config.php**

Conjunto de variables de entorno que contienen información vital y que definen el funcionamiento del CMS.

Algunas de estas variables son requisito obligatorio para que el CMS funcione, esenciales para el correcto desempeño del CMS (conexión a base de datos, prefijo de las tablas).

Otras de estas variables son opcionales, pero definen aspectos que potencian la seguridad y optimizan el desempeño del CMS (conexión FTP, correos a través de SMTP, rutas relativas y absolutas a carpetas).

**functions.php**

Conjunto de hooks de utilidad para incorporar como parte del tema del CMS.

Algunas de estas funciones son para optimizar el CMS y pueden funcionar como una base estándar con una configuración que puede ser considerada como un mínimo viable para un desarrollo robusto y escalable basado en WordPress.

Otras de estas funciones son más específicas y pueden no ser necesarias dependiendo del ámbito y el contexto del desarrollo: menús personalizados, zonas de widgets personalizadas, desactivación de la API, entre otras.