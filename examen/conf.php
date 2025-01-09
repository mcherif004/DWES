<?php

return [
    [
        'pregunta' => '¿Qué recurso NO se comparte en un VPS?',
        'respuestas' => [
            'Aplicación web',
            'Núcleos de CPU',
            'Espacio en disco',
            'Memoria',
        ],
        'correcta' => 0
    ],
    [
        'pregunta' => '¿Qué protocolo se utiliza para una conexión remota y segura?',
        'respuestas' => [
            'HTTP',
            'SSH',
            'TELNET',
            'FTP',
        ],
        'correcta' => 1
    ],
    [
        'pregunta' => '¿Qué componente permite usar código Java dentro de aplicaciones web dinámicas?',
        'respuestas' => [
            'Express.js',
            'WAR',
            'Servlets',
            'Node.js',
        ],
        'correcta' => 2
    ],
    [
        'pregunta' => '¿Qué componente se utiliza para manejar múltiples solicitudes de clientes en Java?',
        'respuestas' => [
            'HTML',
            'Servlet',
            'XML',
            'JSON',
        ],
        'correcta' => 1
    ],
    [
        'pregunta' => '¿Qué característica ofrece HTTP/1.1 respecto a HTTP/1.0?',
        'respuestas' => [
            'Procesamiento único de solicitudes',
            'Conexiones reutilizables',
            'Compatibilidad limitada con HTTPS',
            'Soporte exclusivo para texto plano',
        ],
        'correcta' => 1
    ],
    [
        'pregunta' => '¿Qué función cumple un entorno de preproducción?',
        'respuestas' => [
            'Acelerar el despliegue de contenido estático.',
            'Simular el entorno real para realizar pruebas finales.',
            'Centralizar la gestión de usuarios y permisos.',
            'Mantener los datos encriptados.',
        ],
        'correcta' => 1
    ],
    [
        'pregunta' => '¿Cuál es una desventaja del hosting compartido en comparación con el VPS?',
        'respuestas' => [
            'Ofrece mayor estabilidad.',
            'Permite menos usuarios por servidor.',
            'No ofrece espacio de servidor dedicado.',
            'Es más barato que el VPS',
        ],
        'correcta' => 2
    ],
    [
        'pregunta' => '¿Cuál es el propósito principal del despliegue continuo (CD)?',
        'respuestas' => [
            'Configurar entornos de desarrollo local.',
            'Almacenar versiones anteriores del código',
            'Automatizar el traslado de código validado a producción.',
            'Realizar pruebas manuales de la aplicación.',
        ],
        'correcta' => 2
    ],
    [
        'pregunta' => '¿Qué función tiene la redirección en un servidor web?',
        'respuestas' => [
            'Eliminar datos innecesarios',
            'Controlar el acceso a documentos',
            'Enviar cookies a los clientes',
            'Redirigir solicitudes a otro recurso',
        ],
        'correcta' => 3
    ],
    [
        'pregunta' => '¿Cuál es una ventaja de las páginas web estáticas?',
        'respuestas' => [
            'Bajo consumo de recursos',
            'Integración con bases de datos',
            'Alta interactividad',
            'Capacidad para ejecutar programas',
        ],
        'correcta' => 0
    ],
    [
        'pregunta' => '¿Qué servicio NO es protegido por SSH?',
        'respuestas' => [
            'Envío de correos electrónicos.',
            'Copias de seguridad remotas.',
            'Transferencia segura de archivos.',
            'Gestión de servidores remotos.',
        ],
        'correcta' => 0
    ],
    [
        'pregunta' => '¿Qué práctica se recomienda para evitar problemas durante el despliegue en producción?',
        'respuestas' => [
            'Ignorar las fases de pruebas intermedias.',
            'Desplegar directamente desde el entorno de desarrollo.',
            'Actualizar los permisos de usuario en tiempo real.',
            'Revisar las diferencias entre los entornos antes del despliegue.',
        ],
        'correcta' => 3
    ],
    [
        'pregunta' => '¿Cuál es el propósito principal de un servlet en Java?',
        'respuestas' => [
            'Almacenar datos estáticos para la aplicación.',
            'Procesar solicitudes dinámicas y construir páginas web.',
            'Optimizar la conexión entre múltiples servidores.',
            'Configurar la seguridad de la base de datos.',
        ],
        'correcta' => 1
    ],
    [
        'pregunta' => '¿Qué hace el método HTTP DELETE?',
        'respuestas' => [
            'Actualiza un recurso existente.',
            'Consulta información de cabeceras.',
            'Elimina un recurso específico.',
            'Solicita recursos del servidor.',
        ],
        'correcta' => 2
    ],
    [
        'pregunta' => '¿Qué especifica el método HTTP HEAD?',
        'respuestas' => [
            'Elimina datos redundantes.',
            'Solicita solo metadatos de un recurso.',
            'Crea un nuevo recurso.',
            'Actualiza un recurso específico.',
        ],
        'correcta' => 1
    ],
    [
        'pregunta' => '¿Cuál es una desventaja del cifrado simétrico?',
        'respuestas' => [
            'Sólo funciona con datos no sensibles.',
            'Es más lento que el cifrado asimétrico.',
            'No garantiza la autenticidad del remitente.',
            'Requiere un canal seguro para transmitir la clave.',
        ],
        'correcta' => 3
    ],
    [
        'pregunta' => '¿Qué garantiza el uso de claves SSH?',
        'respuestas' => [
            'Que la conexión sea anónima.',
            'Que solo el cliente autorizado tenga acceso.',
            'Que el canal sea más rápido.',
            'Que las contraseñas sean innecesarias.',
        ],
        'correcta' => 1
    ],
    [
        'pregunta' => '¿Qué puerto utiliza HTTP por defecto?',
        'respuestas' => [
            '21',
            '443',
            '80',
            '25',
        ],
        'correcta' => 2
    ],
    [
        'pregunta' => '¿Qué se incluye generalmente en el archivo package.json?',
        'respuestas' => [
            'La configuración de seguridad de la aplicación.',
            'Un listado de usuarios autorizados.',
            'Las credenciales de acceso al servidor.',
            'Metadatos del proyecto como nombre y versión.',
        ],
        'correcta' => 3
    ],
    [
        'pregunta' => '¿Dónde se sitúa el servidor de aplicaciones?',
        'respuestas' => [
            'Directamente conectado a los usuarios finales.',
            'Antes del servidor de bases de datos y fuera del servidor web.',
            'En la misma ubicación que el servidor de archivos.',
            'Entre el servidor web y el servidor de bases de datos.',
        ],
        'correcta' => 3
    ],
    [
        'pregunta' => '¿Qué método HTTP es utilizado para enviar datos de formularios?',
        'respuestas' => [
            'POST',
            'GET',
            'DELETE',
            'HEAD',
        ],
        'correcta' => 0
    ],
    [
        'pregunta' => '¿Cuál es una característica del hosting VPS?',
        'respuestas' => [
            'Configuración limitada del sistema operativo.',
            'Exclusividad en el servidor completo.',
            'Acceso como administrador a bajo costo.',
            'Uso exclusivo de hardware físico.',
        ],
        'correcta' => 2
    ],
    [
        'pregunta' => '¿Qué define un tipo MIME?',
        'respuestas' => [
            'Una técnica de seguridad avanzada.',
            'Un comando para cargar páginas HTML.',
            'Un protocolo para transferir datos.',
            'Un estándar para identificar formatos de archivo.',
        ],
        'correcta' => 3
    ],
    [
        'pregunta' => '¿Qué hace la función "npm install" en Node.js?',
        'respuestas' => [
            'Instala las dependencias definidas en package.json.',
            'Lanza el servidor de producción.',
            'Genera un archivo WAR automáticamente.',
            'Actualiza la versión Node.js.',
        ],
        'correcta' => 0
    ],
    [
        'pregunta' => '¿Cuál es una ventaja del cifrado asimétrico?',
        'respuestas' => [
            'Funciona sin necesidad de claves privadas.',
            'Es más rápido que el cifrado simétrico.',
            'No requiere un canal seguro para transmitir la clave pública.',
            'Utiliza una sola clave para mayor simplicidad.',
        ],
        'correcta' => 2
    ],
    [
        'pregunta' => '¿Qué tipo de servidor se enfoca en procesar solicitudes de lógica de negocio?',
        'respuestas' => [
            'Servidor web.',
            'Servidor de aplicaciones.',
            'Servidor de almacenamiento.',
            'Servidor proxy.',
        ],
        'correcta' => 1
    ],
    [
        'pregunta' => '¿Cuál es el puerto TCP estándar para SSH?',
        'respuestas' => [
            '25',
            '22',
            '80',
            '21',
        ],
        'correcta' => 1
    ],
    [
        'pregunta' => '¿Qué paso del despliegue asegura que los cambios funcionan antes de llevarlos a producción?',
        'respuestas' => [
            'Desarrollo.',
            'Supervisión.',
            'Empaquetado.',
            'Pruebas.',
        ],
        'correcta' => 3
    ],
    [
        'pregunta' => '¿Qué es una conexión TCP/IP?',
        'respuestas' => [
            'Un protocolo base para HTTP',
            'Una forma de cifrar datos',
            'Un sistema de balanceo de carga',
            'Un método de autenticación avanzada',
        ],
        'correcta' => 0
    ],
    [
        'pregunta' => '¿Qué característica distingue a Node.js?',
        'respuestas' => [
            'Es un entorno exclusivo para desarrollo móvil.',
            'Es un framework para desarrollo backend',
            'Es un entorno de ejecución de JavaScript fuera del navegador.',
            'Es un sistema operativo basado en Java',
        ],
        'correcta' => 2
    ],
    [
        'pregunta' => '¿Cuál es el objetivo principal de la CI/CD?',
        'respuestas' => [
            'Garantizar acceso remoto a los desarrolladores.',
            'Mejorar la capacidad de almacenamiento del sistema',
            'Automatizar y agilizar el ciclo de desarrollo y despliegue',
            'Centralizar todos los recursos en un único servidor.',
        ],
        'correcta' => 2
    ],
    [
        'pregunta' => '¿Cuál es una característica de Apache?',
        'respuestas' => [
            'Diseñado exclusivamente para balanceo de carga',
            'Ofrece soporte limitado a HTTP/1.1',
            'Optimizado para tráfico estático',
            'Es adecuado para contenido dinámico',
        ],
        'correcta' => 3
    ],
    [
        'pregunta' => '¿Qué hace la cabecera HTTP “Host”?',
        'respuestas' => [
            'Proporciona información del navegador',
            'Especifica el nombre de dominio',
            'Autentica al cliente',
            'Controla el tiempo de respuesta',
        ],
        'correcta' => 1
    ],
    [
        'pregunta' => '¿Qué protocolo reemplazó a SSL en HTTPS?',
        'respuestas' => [
            'UDP',
            'QUIC',
            'TCP',
            'TLS',
        ],
        'correcta' => 3
    ],
    [
        'pregunta' => '¿Qué clave se utiliza para descifrar un mensaje cifrado con clave pública?',
        'respuestas' => [
            'Un código cifrado',
            'Una clave privada',
            'Una clave pública',
            'Una contraseña',
        ],
        'correcta' => 1
    ],
    [
        'pregunta' => '¿Qué ocurre en la etapa de supervisión dentro del flujo de despliegue?',
        'respuestas' => [
            'Se optimizan los recursos de la base de datos',
            'Se realizan ajustes manuales en el entorno de pruebas',
            'Se desarrollan nuevas características para la aplicación.',
            'Se asegura que los cambios funcionen según lo previsto.',
        ],
        'correcta' => 3
    ],
    [
        'pregunta' => '¿Qué herramienta de Node.js se utiliza para gestionar dependencias y librerías?',
        'respuestas' => [
            'NPM',
            'NFT',
            'NDB',
            'NPT',
        ],
        'correcta' => 0
    ],
    [
        'pregunta' => '¿Qué método de despliegue es más común en sistemas JavaEE?',
        'respuestas' => [
            'Configurar cada archivo manualmente en el servidor',
            'Transferir los archivos a través de FTP',
            'Hacer push directo desde el entorno local',
            'Copiar el archivo WAR al directorio del servidor',
        ],
        'correcta' => 3
    ],
    [
        'pregunta' => '¿Cuál es el objetivo principal del despliegue de metadatos?',
        'respuestas' => [
            'Crear una capa de seguridad en el entorno de producción.',
            'Automatizar el análisis de rendimiento del servidor.',
            'Verificar la consistencia del código y resolver conflictos.',
            'Actualizar el contenido visible al usuario.',
        ],
        'correcta' => 2
    ],
    [
        'pregunta' => '¿Qué elemento es necesario para el cifrado asimétrico?',
        'respuestas' => [
            'Una contraseña alfanumérica.',
            'Un par de claves: pública y privada.',
            'Un canal físico seguro.',
            'Una sola clave compartida entre emisor y receptor.',
        ],
        'correcta' => 1
    ],
    [
        'pregunta' => '¿Qué ventaja tiene usar un servidor dedicado?',
        'respuestas' => [
            'Compatibilidad con todos los sistemas',
            'No requiere configuración adicional',
            'Menor coste de mantenimiento',
            'Mayor control sobre los recursos',
        ],
        'correcta' => 3
    ],
    [
        'pregunta' => '¿Qué hace un servidor proxy inverso?',
        'respuestas' => [
            'Sirve exclusivamente archivos estáticos',
            'Procesa solicitudes SQL directamente.',
            'Optimiza los datos almacenados en caché.',
            'Añade una capa adicional de seguridad entre el cliente y la base de datos.',
        ],
        'correcta' => 3
    ],
    [
        'pregunta' => '¿Qué protocolo combina HTTP con seguridad adicional?',
        'respuestas' => [
            'SSL',
            'TLS',
            'HTTPS',
            'FTP',
        ],
        'correcta' => 2
    ],
    [
        'pregunta' => '¿Qué es un servidor web virtual?',
        'respuestas' => [
            'Un servidor que opera en hardware exclusivo',
            'Un servidor alojado en múltiples ubicaciones',
            'Un servidor compartido dentro de un host físico.',
            'Un servidor que requiere configuración manual.',
        ],
        'correcta' => 2
    ],
    [
        'pregunta' => '¿Cuál es una característica de los servidores web modernos?',
        'respuestas' => [
            'Son ineficientes con contenido estático',
            'Solo funcionan con HTML',
            'Soportan múltiples solicitudes simultáneamente',
            'Requieren acceso manual para cada solicitud',
        ],
        'correcta' => 2
    ],
    [
        'pregunta' => '¿Qué tipo de servidor se enfoca en procesar solicitudes de lógica de negocio?',
        'respuestas' => [
            'Servidores proxy',
            'Servidor web',
            'Servidor de aplicaciones',
            'Servidor de almacenamiento',
        ],
        'correcta' => 2
    ],
    [
        'pregunta' => '¿Qué indica el código de estado HTTP 404?',
        'respuestas' => [
            'Error del servidor',
            'Solicitud completada con éxito',
            'Redirección a otro recurso',
            'Recurso no encontrado',
        ],
        'correcta' => 3
    ],
    [
        'pregunta' => '¿Qué lenguaje se utiliza para el intercambio de datos entre servidor web y aplicaciones?',
        'respuestas' => [
            'SQL',
            'CSS',
            'JSON',
            'HTML',
        ],
        'correcta' => 2
    ],
    [
        'pregunta' => '¿Qué beneficio aporta trabajar en ramas dentro de un proyecto?',
        'respuestas' => [
            'Optimiza las consultas SQL de la aplicación.',
            'Permite trabajar simultáneamente.',
            'Automatiza la distribución de contenido.',
            'Reduce la necesidad de revisiones manuales.',
        ],
        'correcta' => 1
    ],
    [
        'pregunta' => '¿Qué ocurre en la etapa de supervisión dentro del flujo de despliegue?',
        'respuestas' => [
            'Se optimizan los recursos de la base de datos.',
            'Se realizan ajustes manuales en el entorno de pruebas.',
            'Se asegura que los cambios funcionen según lo previsto.',
            'Se desarrollan nuevas características para la aplicación.',
        ],
        'correcta' => 2
    ],
    [
        'pregunta' => '¿Qué tarea realiza un balanceador de carga?',
        'respuestas' => [
            'Procesar solicitudes HTTP directamente.',
            'Gestionar contraseñas de usuarios.',
            'Repartir tráfico entre múltiples servidores.',
            'Almacenar contenido dinámico.',
        ],
        'correcta' => 2
    ],
    [
        'pregunta' => '¿Cuál es una ventaja de un VPS?',
        'respuestas' => [
            'Ofrece control absoluto y recursos garantizados.',
            'Solamente se puede usar en una red privada.',
            'Permite acceso a varios servidores simultáneamente.',
            'Es más barato que un alojamiento compartido.',
        ],
        'correcta' => 0
    ],
    [
        'pregunta' => '¿Qué es un VPS?',
        'respuestas' => [
            'Una computadora personal con múltiples sistemas operativos.',
            'Un servidor en la nube que simula un servidor físico.',
            'Un dispositivo dedicado exclusivamente al alojamiento local.',
            'Un tipo de protocolo de conexión segura para servidores.',
        ],
        'correcta' => 1
    ],
    [
        'pregunta' => '¿Qué tipo de cifrado es más rápido?',
        'respuestas' => [
            'Cifrado doble factor.',
            'Cifrado híbrido.',
            'Cifrado simétrico.',
            'Cifrado asimétrico.',
        ],
        'correcta' => 2
    ],
    [
        'pregunta' => '¿Qué hace un proxy inverso en un servidor?',
        'respuestas' => [
            'Administra bases de datos.',
            'Encripta todas las comunicaciones.',
            'Distribuye solicitudes a otros servidores.',
            'Optimiza el rendimiento del cliente.',
        ],
        'correcta' => 2
    ],
    [
        'pregunta' => '¿Qué es un archivo WAR en JavaEE?',
        'respuestas' => [
            'Un archivo empaquetado que contiene todos los recursos de una aplicación web.',
            'Un sistema para manejar dependencias de Java.',
            'Una base de datos comprimida.',
            'Un archivo de texto que define las reglas de negocio.',
        ],
        'correcta' => 0
    ],
    [
        'pregunta' => '¿Qué característica distingue a un servidor de aplicaciones de uno web?',
        'respuestas' => [
            'Proporciona contenido estático.',
            'Procesa lógica de negocio.',
            'Soporta conexiones FTP.',
            'Optimiza recursos de hardware.',
        ],
        'correcta' => 1
    ],
    [
        'pregunta' => '¿Cuál de los siguientes NO es un entorno típico de desarrollo web?',
        'respuestas' => [
            'Entorno de pruebas o preproducción',
            'Entorno de seguridad',
            'Entorno de desarrollo local',
            'Entorno de producción',
        ],
        'correcta' => 1
    ],
    [
        'pregunta' => '¿Qué rol tiene el comando HTTP GET?',
        'respuestas' => [
            'Actualizar un recurso en el servidor',
            'Crear un recurso en el servidor',
            'Enviar datos en formularios',
            'Solicitar información de un recurso',
        ],
        'correcta' => 3
    ],
    [
        'pregunta' => '¿Cuál de las siguientes NO es una característica de un servidor de aplicaciones?',
        'respuestas' => [
            'Procesamiento de transacciones',
            'Gestión de recursos y conexiones',
            'Transmisión de datos multimedia en tiempo real',
            'Implementación de tareas de seguridad',
        ],
        'correcta' => 2
    ],
    [
        'pregunta' => '¿Qué ventaja principal ofrece CI (Integración continua)?',
        'respuestas' => [
            'Reduce la dependencia de herramientas externas',
            'Facilita la detección de conflictos en el código',
            'Aumenta el rendimiento de los servidores de bases de datos',
            'Automatiza el monitoreo de usuarios en tiempo real',
        ],
        'correcta' => 1
    ],
    [
        'pregunta' => '¿Qué método asegura la entrega frecuente y automatizada de nuevas versiones a producción?',
        'respuestas' => [
            'Compilación manual',
            'Despliegue estático',
            'CI/CD',
            'Gestión remota',
        ],
        'correcta' => 2
    ],
    [
        'pregunta' => '¿Qué componente utiliza Express en Node.js para construir aplicaciones web rápidamente?',
        'respuestas' => [
            'Framework',
            'Recursos estáticos',
            'Paquetes',
            'Servidores virtuales',
        ],
        'correcta' => 0
    ]
];
?>
