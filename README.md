
# Red Bull Racing Web

Sitio web temático dedicado a **Red Bull Racing**, desarrollado con **CodeIgniter 4**, que presenta información detallada sobre el equipo, su monoplaza y permite contacto con los visitantes.

---

## 📝 Descripción

Este proyecto es una página web **dinámica** y **responsiva** que muestra diferentes secciones relacionadas con el equipo de Fórmula 1 Red Bull Racing:

- Página principal con información sobre el equipo, logros y perfiles clave.
- Sección dedicada al monoplaza Oracle Red Bull Racing con detalles técnicos y multimedia.
- Página de contacto con formulario funcional, redes sociales y ubicación geográfica.

La aplicación está desarrollada en **PHP** usando el framework **CodeIgniter 4** y se sirve localmente con **XAMPP**. La interfaz se construyó con **Bootstrap 5** y animaciones con **Animate.css**, complementadas con estilos personalizados.

---

## 🚀 Tecnologías usadas

- CodeIgniter 4  
- PHP 8+  
- XAMPP (Apache + MySQL)  
- Bootstrap 5  
- Animate.css  
- Google Fonts (Rajdhani)  
- Visual Studio Code  
- Git  

---

## 📁 Estructura del proyecto

/app  
└── /Views  
  └── /front  
    ├── head_view.php         # Head HTML con metadatos, estilos y scripts globales  
    ├── navbar_view.php       # Barra de navegación responsiva y dinámica  
    ├── footer_view.php       # Pie de página con información y enlaces  
    ├── form_view.php         # Formularios modales de login y registro  
    ├── principal.php         # Página principal con banner, equipo y logros  
    ├── monoplaza.php         # Sección con descripción y multimedia del monoplaza  
    └── contacto.php          # Página de contacto con formulario, redes y mapa  

/assets  
├── css/  
│  ├── bootstrap.min.css  
│  └── style.css              # Estilos personalizados para todas las vistas  
├── js/  
│  ├── bootstrap.min.js  
│  ├── contacto.js            # Validación y alertas del formulario de contacto  
│  └── buscador-navbar.js     # Funcionalidad de buscador en la navbar  
└── img/  
  ├── banner/  
  │  ├── principal/  
  │  ├── monoplaza/  
  │  └── contacto/  
  ├── icons/  
  │  ├── logo/  
  │  ├── redes-small/  
  │  └── redes-medium/  
  ├── monoplaza/  
  ├── perfil/  
  └── videos/  

/app/Controllers  
└── Home.php                 # Controlador que carga vistas para principal, monoplaza y contacto  

/app/Config  
└── Routes.php               # Define las rutas para cada sección principal  

---

## 📌 Detalles importantes

- `head_view.php`: Meta tags, favicon, Bootstrap, Animate.css y fuente Rajdhani de Google Fonts.  
- `navbar_view.php`: Barra responsive con enlaces dinámicos, menú usuario, buscador y animaciones.  
- `form_view.php`: Modales de login y registro (Bootstrap) con validaciones y navegación sin recarga.  
- `principal.php`: Carrusel, sección "Quiénes Somos", perfiles del equipo y logros destacados.  
- `monoplaza.php`: Imágenes y descripciones técnicas del monoplaza, video y detalles de neumáticos F1.  
- `contacto.php`: Formulario con validación, enlaces a redes sociales y mapa interactivo del Red Bull Technology Campus.  
- `Home.php`: Controlador que gestiona vistas principales (carga head, navbar, form, vista específica y footer).  
- `Routes.php`: Rutas configuradas para acceder a cada sección mediante el controlador.  

---

## ▶️ Cómo ejecutar el proyecto

1. Clona el repositorio:

```bash
git clone https://github.com/Dev-Leandr0/ProT2_789402.git
```

2. Coloca la carpeta del proyecto dentro de tu servidor local (por ejemplo, `htdocs` en XAMPP).  
3. Asegúrate de que Apache y MySQL estén corriendo en XAMPP.  
4. Configura el archivo `.env` que está en la raíz del proyecto para establecer la baseURL:

```
app.baseURL = 'http://localhost/ProT2_789402'
```

5. Accede desde tu navegador a:

```
http://localhost/ProT2_789402
```

6. Navega entre las páginas usando la barra de navegación.

---

## 🤝 Cómo contribuir

1. Haz un fork del repositorio.  
2. Crea una nueva rama:  

```bash
git checkout -b feature/nombre-de-tu-funcion
```

3. Realiza tus cambios y haz commits con mensajes claros.  
4. Envía un pull request describiendo tus modificaciones.

---

## 🐞 Reportar errores o sugerencias

- Abre un **issue** en GitHub con una descripción clara.  
- Expón el problema o la mejora que propones.  
- También puedes enviar un pull request con la solución propuesta.

---

## 📄 Licencia

Este proyecto está bajo la licencia **MIT**. Consulta el archivo `LICENSE` para más información.

---

## 📬 Contacto

Para cualquier duda o comentario, puedes:  
- Abrir un issue en el repositorio.

---

**¡Disfruta explorando Red Bull Racing en la web! 🏁**