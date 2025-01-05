# CRUD Application with REST API and SOAP

This project demonstrates the implementation of a CRUD (Create, Read, Update, Delete) application using two different communication protocols: **REST API** and **SOAP**. 

CRUD operations form the backbone of most applications, allowing users to interact with data in a structured manner. Integrating both REST and SOAP protocols provides flexibility and compatibility with various systems.

## Key Features
- **REST API**
  - Uses HTTP methods (GET, POST, PUT, DELETE).
  - Lightweight and stateless communication.
  - JSON format for data exchange.

- **SOAP**
  - XML-based protocol for message exchange.
  - Built-in error handling and security features.
  - Suitable for enterprise-level applications requiring strict standards.

## Getting Started

### Prerequisites
- Install Node.js (for REST) or JDK (for SOAP implementation).
- Install a database such as MySQL or MongoDB.

### Installation
1. Clone this repository:
   ```bash
   git clone https://github.com/Void071202/CRUD-REST-SOAP.git
   cd CRUD-REST-SOAP
   ```

2. Install dependencies (for REST):
   ```bash
   npm install
   ```

3. Configure the database connection in `config/`.

### Running the Application
- **REST API**
  ```bash
  npm run start:rest
  ```
  Access the REST API at `http://localhost:3000`.

- **SOAP Service**
  ```bash
  npm run start:soap
  ```
  Access the WSDL at `http://localhost:4000/wsdl`.

### API Endpoints
#### REST API
| Method | Endpoint       | Description          |
|--------|----------------|----------------------|
| GET    | /items         | Retrieve all items  |
| GET    | /items/:id     | Retrieve an item    |
| POST   | /items         | Create a new item   |
| PUT    | /items/:id     | Update an item      |
| DELETE | /items/:id     | Delete an item      |

#### SOAP Operations
- `GetItem(id)`
- `CreateItem(data)`
- `UpdateItem(id, data)`
- `DeleteItem(id)`

## Testing
Run unit tests for REST and SOAP using the following commands:
```bash
npm run test
```

## License
This project is licensed under the MIT License. See `LICENSE` for more details.
