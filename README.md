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
<br>
<h3 align="center">This is User Table</h3>
<br>

    | SI No   | Name    |    Email              | Role      | Status      | Action       |
    | ------- | --------| --------------------- | --------------| ------ | -------------|
    | 01 | Super Admin  | superadmin@gmail.com  | superadmin| Status     | ............ |
    | 02 |  Admin  | admin@gmail.com  | admin| Status   |Edit   Delete  |
    | 03 | Pulock  | Pulock@gmail.com  | oparetor| Status  |Edit   Delete   |
    | 04 | Mushahedur  | Mushahedur@gmail.com  | Manager| Status     |Edit   Delete   |

2. Create Category: 
    - Category can show navbar . 
    - Category Create , Read, Update , delete. and also status manage by admin.

<br>
<h3 align="center">This is Category Table</h3>
<br>

    | SI No   | Category Name    | Status                 | Action       |
    | ------- | -----------------| --------------------- | -------------- | 
    | 01 | Bussiness Card  |  is_Active     | Edit   Delete |
    | 02 |  Pen    | is_Active     |Edit   Delete  |
    | 03 | Cup   | is_Active     |Edit   Delete   |
    | 04 | Phone Cover  |  is_Active |Edit   Delete   |

3. Several Types of Image: 
    - Create a database of Vista-Print with attributes such as title, subtitle, category, and Several images. 
    - Implement a RESTful API 
    - information (GET request) and allow administrators to add, update, or delete  (POST, PUT, DELETE requests).
 4. User Roles: 
    - Define user roles such as "User" and "Administrator." 
    - Admins have additional privileges like managing Image and user accounts.