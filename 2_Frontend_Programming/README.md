# 🛒 Front-End Programming — Shopping Cart Interface (JavaScript Web App)

This project demonstrates front-end programming principles by building a simple shopping cart interface using **HTML forms, JavaScript, and Web Storage (sessionStorage)**. The user can enter product information, submit an order, and view the contents of their cart through dynamically generated HTML.

This project highlights how front-end code interacts with users and updates the page without requiring a full page reload or back-end processing.

---

## 🔹 Core Front-End Concepts Demonstrated

### ✔ Document Object Model (DOM) Manipulation
The project uses JavaScript to dynamically create and update HTML elements such as:

- Tables  
- Table rows  
- Cells  
- Form interactions  
- Event handlers  

DOM manipulation allows the page to react instantly to user actions.

---

### ✔ Event Handling and User Interaction
The shopping cart uses:

- `onclick` events  
- Form field reading  
- Page load events (`window.addEventListener("load", ...)`)  

This shows how front-end interfaces respond to user actions to update content in real time.

---

### ✔ Web Storage (sessionStorage)
The project saves item details using:

- `sessionStorage.setItem()`  
- `sessionStorage.getItem()`  

This allows data to persist while the user navigates pages during the same browser session — a common technique in modern web applications.

Stored values include:

- Product name  
- Price  
- Quantity  
- Size  
- Color  

---

### ✔ Dynamic HTML Table Generation
On page load, the cart page extracts stored items and constructs a table entirely in JavaScript:

```javascript
let cartTable = document.createElement("table");
cartTable.innerHTML = `
   <tr>
      <th>Product</th>
      <th>Description</th>
      <th>Qty</th>
      <th>Price</th>
   </tr>`;
