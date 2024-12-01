# Course Catalog Project

This project is a Dockerized web application for managing a course catalog, including front-end, back-end API, and MySQL database services. It utilizes **Traefik** as a reverse proxy to route requests and manage load balancing.

---

## **Table of Contents**

- [Project Structure](#project-structure)
- [Setup Instructions](#setup-instructions)
- [Accessing the Application](#accessing-the-application)
- [API Endpoints](#api-endpoints)
- [Troubleshooting](#troubleshooting)
- [Contributing](#contributing)
- [License](#license)

---

## **Project Structure**

The project consists of the following services:

- **Front-end (`front`)**: Pure JS.
- **Back-end API (`api`)**: PHP 8.3 with Apache for handling API requests.
- **Database (`course-catalog-db-1`)**: MySQL 8 for storing course data.
- **Reverse Proxy (`course-catalog-reverse-proxy-1`)**: Traefik for routing requests.

---

## **Setup Instructions**

### 1. Clone the Repository

```bash
git clone git@github.com:EsraaEissa123/course-catalog.git
cd course-catalog
### 2. Build and Start the Containers
```bash
docker-compose up --build



```bash
git clone git@github.com:EsraaEissa123/course-catalog.git
cd course-catalog
