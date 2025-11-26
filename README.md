# ALLAPP — Multi-Vendor Backend API & Admin Panel  
*Freelance Project (2019) — Backend, APIs & Admin Panel Developed by Waheed Shah*  
*CodeIgniter (API + HMVC) • MySQL • Android/iOS App Integration*

**ALLAPP** is a commercial freelance project built for a client who required a complete backend solution for a **multi-vendor retail and grocery mobile application**.  

The primary scope was the **API system** (used by Android/iOS apps), while the web-based **Admin Panel** was built to visually monitor activity, onboard shops, and manage categories/products/orders.

The system supports multiple shops, product catalogs, orders, customer data, and in-app notifications — all powered by a custom backend designed and engineered by me.

This repository contains the **backend code, APIs, and admin dashboard**, and is **private**, intended only for **portfolio and work evidence**.

---

# 🔍 Project Background

The client required:

- A backend system for **mobile e-commerce applications**  
- A structured API layer for communicating with the apps  
- A dashboard to manage shops, categories, orders, and products  
- A centralized database to connect all modules  
- Secure and optimized endpoints for the mobile apps  
- Ability to scale features as per budget and future enhancements  

I was hired as the **freelance full-stack developer**, responsible for:

- Backend architecture  
- All REST APIs  
- Admin panel development  
- Database modelling  
- App data synchronization  
- QA testing & deployment support  

---

# 🎯 Project Objectives

- Build a stable API system connecting mobile clients to the backend  
- Provide admin tools for managing shops, categories, orders & customers  
- Validate store/product data for reliable app usage  
- Enable seamless communication between app and server  
- Handle product images and media uploads  
- Maintain activity logs and notifications for the client  
- Provide a scalable foundation for future development  

---

# 🚀 Core Features Developed by Me

## 🔗 **REST API Layer (Main Project Scope)**
I designed and implemented the API structure powering the mobile apps:

- Shop listing API  
- Category & subcategory APIs  
- Product catalog APIs  
- Add/update product API  
- Order creation & tracking APIs  
- Customer management API  
- Authentication logic for admin/user  
- JSON-based API responses with validation  
- Error handling & status messaging  
- Secure routing and token-based access (scope-based)  

## 🖥 **Admin Panel (Dashboard)**
Built for internal management:

- Add/Block/Update Shops  
- Assign categories to shops  
- Product CRUD with image upload  
- Order management  
- Customer management  
- Notifications & activity logs  
- User role management  
- Settings & system configuration  

## 🗂 Category & Sub-Category Management
- Parent/child structure  
- Dynamic linking to shops  
- Auto-reflection in APIs for mobile apps  

## 📦 Product Management
- Product details  
- Pricing  
- Status (Active/Blocked)  
- Images  
- Shop assignment  

## 🛒 Order Management
- Track customer orders from the mobile app  
- Update order status  
- Admin review workflow  

---

# 🧠 System Architecture


This architecture allowed:

- Clean separation between API and admin views  
- Reusable business logic  
- Scalable modules for future features (push notifications, wallet, etc.)  

---

# 📚 Database Overview (High-Level)

shops → Shop details & images
categories → Parent level categories
sub_categories → Nested categories
products → Linked with shop & category
orders → Created from mobile app
customers → App user data
notifications → Internal system notifications
users → Admin users
settings → System configuration


---

# 🛠 Technology Stack

- **Backend:** PHP (CodeIgniter 3)  
- **API Layer:** CodeIgniter REST-like controllers  
- **Database:** MySQL  
- **Frontend:** Bootstrap, jQuery  
- **Media Uploads:** Product & shop images  
- **Server:** Apache (cPanel / XAMPP)  
- **Architecture:** HMVC + API Layer  

---

# 💡 Engineering Decisions & Contributions

As the **sole developer**, I built:

- API system architecture  
- Business logic layer  
- Database schema  
- Admin panel UI/UX  
- Validation, error handling & response structure  
- Optimized endpoints for app performance  
- Admin workflows & CRUD modules  

Key decisions included:

### ✔ API-first development  
Since the mobile apps were the main deliverable, I designed the system **API-first**, then mapped admin panel functionality onto the same data model.

### ✔ Modular category structure  
Created a flexible category/subcategory model to support thousands of products.

### ✔ Lightweight, fast CodeIgniter implementation  
Ensured low memory usage and high performance for mobile API calls.

### ✔ Scalable shop & order architecture  
Prepared for multi-vendor scalability as the system grows.

---

# 📷 Screenshots (Admin Panel)

- Customer Table
<img width="1901" height="712" alt="image" src="https://github.com/user-attachments/assets/0f1d5559-c826-4395-b14a-f5085a2020d0" />

- Shops
<img width="1887" height="694" alt="image" src="https://github.com/user-attachments/assets/7a1004a1-26b5-45f3-a6c9-e5f3b84f9bf4" />

- Product Categories
<img width="1888" height="893" alt="image" src="https://github.com/user-attachments/assets/cd7a181d-1cd3-4356-9388-1aca15fa86f2" />

- Shop Products
<img width="1915" height="861" alt="image" src="https://github.com/user-attachments/assets/9c24a5ec-94ad-4654-b4e3-34600ab4ef0f" />


# Repository Status (Private)

This repository is private and used strictly for portfolio and work evidence.
No real customer or store data is stored here.

© 2019 — Waheed Shah. All rights reserved.
