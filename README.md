# Project Setup Guide for PHP, MySQL, and Docker on Windows

This guide will help you set up and deploy a PHP backend project using **Docker**, **MySQL**, and **Render**. You will also learn how to connect your project to a MySQL database hosted on **Railway.app**.

---

## 📂 Project Directory Structure

Below is the structure of the project:

```
project-root/
│── docker/
│   ├── php/
│   │   ├── Dockerfile
│   │   ├── index.php
│   ├── mysql/
│   │   ├── Dockerfile
│── docker-compose.yml
│── README.md
│── init.sql
│── public/
│   ├── index.php
│   ├── style.css
│── src/
│   ├── db.php
│── logs/
│── env.example
│── .env
```

---

## 🛠 Step 1: Install Required Software

To get started, you need to install the following software on your Windows system:

### ✅ Install Docker for Windows
1. **Download Docker Desktop** from the [Docker official website](https://www.docker.com/products/docker-desktop).
2. **Enable WSL 2 integration** if prompted during installation.
3. **Restart your system** after installation.

---

## 📂 Step 2: Create Project Directory

1. Open **PowerShell** or **Command Prompt** and create your project directory:
   ```bash
   mkdir my-php-project
   cd my-php-project
   ```

---

## 📝 Step 3: Create `index.php` (Frontend)

Inside the `public/` folder, create the `index.php` file. This file will contain the frontend code that will communicate with the backend.

📁 **Example directory:** `public/index.php`

---

## 🛢 Step 4: Create `db.php` (Database Connection)

Inside the `src/` folder, create the `db.php` file. This will handle the database connection using PHP’s **PDO (PHP Data Objects)**.

📁 **Example directory:** `src/db.php`

---

## 📄 Step 5: Create `Dockerfile` for PHP

In the `docker/php/` folder, create the **Dockerfile** that will set up the PHP environment.

📁 **Example directory:** `docker/php/Dockerfile`

---

## 📄 Step 6: Create `Dockerfile` for MySQL

In the `docker/mysql/` folder, create the **Dockerfile** to set up the MySQL container.

📁 **Example directory:** `docker/mysql/Dockerfile`

---

## 🛢 Step 7: Create `init.sql` (Database Initialization)

Create the `init.sql` file that will initialize the MySQL database. This will define the database schema and populate it with any initial data.

📁 **Example directory:** `init.sql`

---

## 📝 Step 8: Create `docker-compose.yml`

The `docker-compose.yml` file will define and run multi-container Docker applications. It will specify the **PHP** and **MySQL** services.

📁 **Example directory:** `docker-compose.yml`

---

## 🚀 Step 10: Run the Project Locally Using Docker

1. Open **PowerShell** or **CMD** and navigate to your project folder.
2. Run the following command to build and start the Docker containers:
   ```bash
   docker-compose up -d --build
   ```
3. Open your browser and go to **[http://localhost:8000](http://localhost:8000)**. You should see the message:
   > "Connected to MySQL successfully!"

---

## 🚀 Step 11: Deploy to Render

1. Sign up for **Render** at [Render.com](https://render.com/).
2. Create a new **Web Service** and connect it to your **GitHub repository**.
3. **Setup Render Service:**
   - **Runtime:** Select **Docker**.
   - **Dockerfile Path:** `docker/php/Dockerfile`.
   - **Add environment variables** (same as `.env` file).

---

## 🚀 Step-by-Step Guide to Using Railway.app for MySQL Database

**Railway.app** provides a simple way to host your MySQL database and connect it to your project. Follow these steps:

### 📝 Step 1: Sign Up & Create a Project on Railway

1. Go to [Railway.app](https://railway.app/) and **sign up using GitHub**.
2. Click on **New Project** → **Create a Project**.
3. Click on **Provision Database** to create a MySQL database.

### 🔑 Step 2: Get Connection Details

1. Click on your newly created **MySQL database**.
2. Go to the **Connect** tab and copy the connection string:
   ```bash
   mysql://root:password@mysql-host.railway.app:port/database-name
   ```
3. Extract the following details:
   ```
   Host: mysql-host.railway.app
   User: root
   Password: your_password
   Database Name: your_database_name
   Port: your_port_number (usually 3306)
   ```

### 🌐 Step 3: Add Environment Variables in Render

1. Go to the **Render Dashboard** and select your **Web Service**.
2. Navigate to the **Environment Variables** section.
3. Add the following environment variables:
   ```env
   DATABASE_HOST=mysql-host.railway.app
   DATABASE_USER=root
   DATABASE_PASSWORD=your_password
   DATABASE_NAME=your_database_name
   DATABASE_PORT=3306 (or the port number provided by Railway)
   ```

---

## 🎉 Conclusion

Now you have your project set up with **Docker**, **PHP**, **MySQL**, and deployed on **Render**. Your database is hosted on **Railway.app**, and you've connected it to your **Render web service** using **environment variables**.

---

🔥 **Happy Coding!** 🚀
