# BlogSphere - Blog Management System

## 📌 Project Overview

BlogSphere is a web-based Blog Management System developed using PHP and MySQL. The application allows users to register, log in, and manage their blog posts through Create, Read, Update, and Delete (CRUD) operations. It also includes advanced features such as search functionality, pagination, and a modern responsive user interface.

---

## 🚀 Features

### User Authentication

* User Registration
* User Login
* Secure Password Hashing
* User Logout

### Blog Management

* Create New Blog Posts
* View Blog Posts
* Edit Existing Posts
* Delete Blog Posts

### Advanced Features

* Search Posts by Title or Content
* Pagination (3 Posts Per Page)
* Previous and Next Navigation Buttons
* User-Specific Posts Display

### User Interface

* Responsive Bootstrap Design
* Modern Dashboard
* Attractive Forms and Cards
* Mobile-Friendly Layout

---

## 🛠️ Technologies Used

* PHP
* MySQL
* HTML5
* CSS3
* Bootstrap 5
* JavaScript
* XAMPP

---

## 📂 Project Structure

blog-project-task3/

├── create.php

├── dashboard.php

├── db.php

├── delete.php

├── edit.php

├── index.php

├── login.php

├── logout.php

├── register.php

└── README.md

---

## ⚙️ Setup Instructions

1. Install XAMPP.

2. Start Apache and MySQL.

3. Create a database named `blog`.

4. Import the required tables (`users` and `posts`).

5. Copy the project folder into:

   C:/xampp_new/htdocs/

6. Open your browser and run:

   http://localhost/blog-project-task3/

---

## 📊 Database Tables

### Users Table

| Column   | Type    |
| -------- | ------- |
| id       | INT     |
| username | VARCHAR |
| password | VARCHAR |

### Posts Table

| Column     | Type      |
| ---------- | --------- |
| id         | INT       |
| title      | VARCHAR   |
| content    | TEXT      |
| user_id    | INT       |
| created_at | TIMESTAMP |

---

## 🎯 Learning Outcomes

Through this project, I learned:

* PHP CRUD Operations
* MySQL Database Integration
* User Authentication
* Session Management
* Search Functionality
* Pagination Implementation
* Bootstrap UI Development
* Git and GitHub Version Control

---

## 🔗 GitHub Repository

https://github.com/garagaumasri/blog-project-task3

---

## 👨‍💻 Developed By

Umasri Garaga

Web Development Internship - Task 3

Advanced Features Implementation
