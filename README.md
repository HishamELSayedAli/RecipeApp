# 🍜 Recipe App Project

**Short Description:** A simple application to display your favorite recipes. Recipe App project built with PHP and MySQL.

---

## 🌟 Overview

This is a dynamic web application designed to create a complete system for managing and viewing recipes. Users can browse the list of available recipes, add their own creations, and easily view detailed instructions and ingredients.

### Key Goals:

* Provide a user-friendly interface for browsing recipes.
* Enable users to add and save recipes to the database.
* Serve as a practical learning application for PHP and MySQL development.

---

## 🚀 Core Features

* **Recipe Management (CRUD):** Functionality to **C**reate, **R**ead, **U**pdate, and **D**elete recipes.
* **Detailed View:** Dedicated single pages to display all ingredients and preparation steps for each recipe.
* **Recipe Submission Form:** Utilizes a script (e.g., `addRecipe.php`) to handle user input and database insertion.
* **Data Persistence:** Uses a relational database (MySQL) to store application data.

---

## 🛠 Technology Stack

This project is built using the following core technologies:

| Technology | Type | Purpose |
| :--- | :--- | :--- |
| **PHP** | Back-end (Server) | Handling web requests, database connection, and application logic. |
| **MySQL** | Database | Storing recipe data, ingredients, and categories. |
| **HTML5 & CSS3** | Front-end (Interface) | Structuring and styling the application's web pages. |
| **Git & GitHub** | Version Control | Managing code versions and facilitating deployment. |

---

## ⚙️ Local Setup Guide

To run the Recipe App on your local machine, please follow these instructions:

### Prerequisites:

1.  A local web server environment (e.g., **XAMPP**, **WAMP**, or **MAMP**).
2.  **Git** installed on your system.

### Installation Steps:

1.  **Clone the Repository:**
    Navigate to your local server's document root (e.g., `htdocs` for XAMPP) and clone the project:
    ```bash
    git clone [Insert Your Repository URL Here]
    ```

2.  **Database Setup:**
    * Open `phpMyAdmin` or your preferred database management tool.
    * Create a new database named `recipe_db` (or the name used in your connection files).
    * **Crucial Step:** Import the database schema by executing the SQL file (likely named `recipes.sql` and found in a `database/` folder) to create the necessary tables.

3.  **Configure Database Connection:**
    * Review and update your database connection file (e.g., `config.php` or `db_connect.php`) with your local server credentials (usually `localhost`, username `root`, and an empty password).

4.  **Run the Application:**
    * Start your server services (Apache and MySQL).
    * Open your web browser and navigate to the project URL (assuming the folder name is `recipeApp`):
        ```
        http://localhost/recipeApp/
        ```

---

## 🤝 Author

Hisham EL-Sayed Ali  - Project Developer and Maintainer.
