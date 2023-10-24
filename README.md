<h2 align="center">This is my Vista-Print-Project</h2>


## Indexing
- [About Project](#about)
- [Installing  Project](#installing)
- [Objective  ](#objective)
- [Key Features](#features)

### About Project <a name="about"></a>
VistaPrint has helped small business owners, entrepreneurs and dreamers create custom designs and professional marketing. Our online printing services are intended to help you find custom products you need – business cards, promotional marketing and more – to create a look you love.

<hr>

### Installing Project <a name="installing"></a>
It is php 8.1.2 version
- git clone
- composer install
- php artisan key:generate
- Setup .env file with Database
- php artisan migrate:fresh --seed
- npm install
- npm run dev


<hr>

### Objective Project <a name="objective"></a>
 Create an Vista Print Project application using PHP Laravel that allows users to browse, search, and purchase images. The application should showcase OOP principles, utilize Laravel's features, implement RESTful APIs, and demonstrate the use of middleware for authentication and authorization.

<hr>

### Key Features <a name="features"></a>
1. User Registration and Authentication: 
    - Users can register, login, and manage their profiles. 
    - Implement middleware for user authentication and authorization to ensure secure access to certain features.

2. Several Types of Image: 
    - Create a database of Vista-Print with attributes such as title, subtitle, category, and Several images. 
    - Implement a RESTful API 
    - information (GET request) and allow administrators to add, update, or delete  (POST, PUT, DELETE requests).
 3. User Roles: 
    - Define user roles such as "User" and "Administrator." 
    - Admins have additional privileges like managing Image and user accounts.