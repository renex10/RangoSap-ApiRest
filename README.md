![rango_sap_actaulizado2](https://github.com/user-attachments/assets/a9e515ee-91ea-4c6b-8531-48c44a7908e6)


# Clonar el proyecto desde GitHub
 ```bash
git clone https://github.com/renex10/RangoSap-ApiRest.git

```

# Ingresar al directorio del proyecto
```bash
cd RangoSap-ApiRest
```
# Instalar dependencias de Composer
```bash
 composer install
```

# Copiar el archivo de entorno de ejemplo
```bash
cp .env.example .env
```

# Generar la clave de la aplicación
```bash
php artisan key:generate
```

# Configurar las variables de entorno en el archivo .env (modificar manualmente si es necesario)

# Instalar dependencias de Node.js

```bash
npm install
```
# Compilar los assets
```bash
npm run dev  # Para desarrollo
```
```bash
php artisan migrate
```
```bash
php artisan db:seed
```
```bash
php artisan serve
```

```bash
npm run dev
```















