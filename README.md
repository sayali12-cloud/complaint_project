# Complaint Management System (Docker + AWS Deployment)

## 🚀 Project Overview
This is a PHP-based Complaint Management System deployed using Docker on AWS EC2.  
It allows users to submit complaints and admins to manage and update their status.

---

## 🛠 Tech Stack
- PHP
- MySQL
- Docker & Docker Compose
- AWS EC2 (Ubuntu)
- Git & GitHub

---

## 📦 Features
- User complaint submission
- Admin view for unsolved complaints
- Mark complaints as solved
- Separate pages for solved and unsolved complaints
- Fully containerized application

---

## 📁 Project Structure
- Dockerfile → Builds PHP Apache container
- docker-compose.yml → Runs web + database services
- connection.php → Database connection
- complaint.sql → Database schema
- index.php → Entry point (redirects to login)
- unsolved.php → Shows pending complaints
- solve.php → Shows solved complaints
- update.php → Updates complaint status

---

## ⚙️ Prerequisites
Make sure you have:
- Docker installed
- Docker Compose installed
- Git installed

---

## 📥 Clone Repository

```bash
git clone https://github.com/sayali12-cloud/complaint_project.git
cd complaint_project
```

---

## ⚙️ Setup Environment Variables

Create `.env` file:

```env
DB_HOST=db
DB_USER=root
DB_PASSWORD=your_password_here
DB_NAME=complaint
```

---

## 🐳 Run Project Using Docker

```bash
docker-compose up -d --build
```

---

## 🗄️ Import Database

```bash
docker cp complaint.sql complaint_project_db_1:/complaint.sql
docker exec -it complaint_project_db_1 bash
mysql -u root -proot complaint < /complaint.sql
```

---

## 🌐 Access Application

Local:
```
http://localhost
```

AWS:
```
http://<your-ec2-public-ip>
```

---

## 🔧 Configuration Notes

In `connection.php`, use:
```php
$host = "db";
```

Do NOT use `localhost` in Docker.

---

## 🔐 AWS Setup

1. Launch EC2 (Ubuntu)
2. Install Docker & Docker Compose
3. Open ports:
   - 80 (HTTP)
   - 8080 (if used)
4. Clone repo and run project

---

## ⚠️ Common Issues & Fixes

### MySQL connection error
- Use `db` as host
- Check password

### Port already in use
- Change MySQL port to 3307

### 403 Forbidden
- Fix Apache permissions in Dockerfile

### No index file
- Create index.php

### Tables not found
- Import complaint.sql

---

## 🔄 Complaint Flow

1. User submits complaint → unsolved
2. Admin checks unsolved.php
3. Click "Mark as Solved"
4. Moves to solve.php

---

## 📌 Important Notes

- Do NOT upload `.env`
- Use `.gitignore`
- Rebuild after changes:
```bash
docker-compose up -d --build
```

---

## 👩‍💻 Author
Sayali Adsul

---

## ⭐ If you like this project
Give it a star ⭐
