# 🌐 Web Development Project — Simple Product Page (PHP + HTML + CSS)

This project demonstrates core web development skills by building a small e‑commerce-style product page using **HTML**, **CSS**, and **PHP**. The user can view a product, enter a quantity, submit the form, and receive a dynamically generated order confirmation page.

This project highlights full front-end and back-end integration and includes secure form handling and basic input validation.

---

## 🔹 Features Demonstrated

### ✔ Front-End (HTML + CSS)
- Clean user interface  
- Product description and pricing  
- Order form with fields for quantity and email  
- Responsive layout through CSS  
- Use of images stored locally within the project folder  

### ✔ Back-End (PHP)
- Processing form submissions  
- Validating numeric and email input  
- Sanitizing form data to prevent injection  
- Performing total cost calculation  
- Dynamically rendering results in the confirmation page  

---

## 🔐 Security Considerations

This project incorporates essential web security principles:

### ✔ Input Validation  
User-submitted data is validated using:

```php
FILTER_VALIDATE_INT
FILTER_VALIDATE_EMAIL
