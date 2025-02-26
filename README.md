# Wardrobe Management App

The Wardrobe Management App, currently has the backend which is built using Laravel. It provides a RESTful API for managing clothing items.

## Setup Instructions

### 1. Clone the Repository
```bash
git clone https://github.com/Willys12/wardrobe-management-app.git
cd wardrobe-management-app
```

### 2. Install Dependencies
```bash
composer install
```

### 3. Set Up Environment Variables
```bash
cp .env.example .env
php artisan key:generate
```

### 4. Configure Database
Edit the `.env` file and set your database credentials:
```plaintext
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=wardrobe_db
DB_USERNAME=root
DB_PASSWORD=*****Create your own password for MySQL*****
```

### 5. Run Migrations
```bash
php artisan migrate
```

### 6. Start the Server
```bash
php artisan serve
```
### 7. To rollback the migration
```bash
php artisan migrate:rollback
```
### 8. API Endpoints

| Method   | Endpoint           | Description             |
|----------|--------------------|-------------------------|
| **GET**  | `/api/cloths`      | To get all cloths         |
| **POST** | `/api/cloths`      | To create a new cloth      |
| **GET**  | `/api/cloths/{id}` | To get a specific cloth    |
| **PUT**  | `/api/cloths/{id}` | To update a cloth         |
| **DELETE** | `/api/cloths/{id}` | To delete a cloth         |

### 9. Testing API in Postman
For a **POST** request to `/api/cloths`, use:
```json
{
    "name": "woolen sweater",
    "category": "Tops",
    "is_new": true
}
```
For a ***DELETE** request use `https://127.0.0.1:8000/api/cloths/{id}`.
Expected message: 
```json
{
    "message": "Cloth is deleted successfully"
}
```

### 10. Future Development
This is only the backend of this application. I will be developing the frontend later using this API.

---

This README provides you with the setup instructions and API documentation for the project.

