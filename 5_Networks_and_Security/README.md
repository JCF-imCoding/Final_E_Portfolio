# 🔒 Networks & Security — Foundational Concepts & Applied Secure Coding

This section highlights my understanding of essential networking and cybersecurity concepts gained throughout the BAS‑IT curriculum. While I have not yet taken the dedicated Networks & Security course, many classes reinforced security principles that I applied directly in this portfolio.

A significant part of my security foundation comes from coursework such as **Data Security & Privacy**, where I studied the CIA Triad (Confidentiality, Integrity, Availability) and real-world data protection strategies. These principles are reflected in several of my programming projects, including PHP backend development, Python data processing, and secure front-end form handling.

---

# 🔹 The CIA Triad — Core Security Controls
*(Referenced from my Data Security & Privacy assignment)*

The CIA Triad represents the three most important security controls for protecting data:

### ✔ Confidentiality  
Ensuring only authorized individuals can access information.  
Controls include:
- Encryption (data at rest & in transit)  
- Multi-factor authentication (MFA)  
- Role-Based Access Control (RBAC)  
- Limiting data exposure  

I applied confidentiality concepts in my PHP projects by sanitizing and validating user inputs and ensuring that sensitive data (like email addresses) is processed safely.

---

### ✔ Integrity  
Ensuring data remains accurate and unaltered.  
Controls include:
- Hashing  
- Audit logs  
- Checksums  
- Change detection  

In my Python database projects, I protected data integrity by:
- Detecting and handling missing values  
- Preventing corrupted data from entering analysis  
- Using deterministic transformations  

Integrity is essential for trustworthy analytics and reliable system behavior.

---

### ✔ Availability  
Ensuring systems and data remain accessible when needed.  
Controls include:
- Backups and redundancy  
- Fault tolerance  
- Protection against DDoS attacks  
- Disaster recovery planning  

Through working with local servers (WAMP) and Python data files, I gained practical awareness of how availability affects real workflows — for example, ensuring required datasets, web services, and project files are always accessible.

---

# 🔹 Secure Coding Practices Seen Throughout My Projects

### ✔ Input Validation (PHP, JavaScript)
In my “Simple Product Page” PHP project, I validated:
- Integer quantities  
- Email formats  
- Minimum input requirements  

Using functions like:

```php
FILTER_VALIDATE_INT
FILTER_VALIDATE_EMAIL
FILTER_SANITIZE_EMAIL
htmlspecialchars()
