# Inventory System API v1

Base URL:
http://localhost:8000/api/v1

## Auth

POST /register

Body:

```json
{
  "name": "Indah",
  "email": "indah@gmail.com",
  "password": "password",
  "password_confirmation": "password"
}
```

POST /login

```json
{
  "email": "indah@gmail.com",
  "password": "password"
}
```

## Categories

GET /categories

POST /categories

GET /categories/{id}

PUT /categories/{id}

DELETE /categories/{id}

(Admin Only)

## Items

GET /items

POST /items

GET /items/{id}

PUT /items/{id}

DELETE /items/{id}

(Admin Only)