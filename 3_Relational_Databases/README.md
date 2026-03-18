# 🗄️ Relational Databases — Data Processing & Analysis (Python / Pandas)

This section showcases my ability to work with relational datasets using Python, pandas, and data analysis techniques. The projects here demonstrate how to load structured data, clean and process it, handle missing values, perform grouping and sorting operations, and generate visual insights based on relational attributes.

The examples below highlight real-world database processing skills, similar to what is done in SQL-based systems, but applied programmatically within Python.

---

# 📂 Project Overview
This folder contains two exploratory data analysis (EDA) projects that use structured datasets from well-known public sources:

1. **Wine Quality Dataset** (UCI Machine Learning Repository)  
2. **Titanic Passenger Dataset** (Kaggle)

Both datasets follow relational structures — data organized into rows and columns — allowing operations such as:

- Filtering  
- Sorting  
- Grouping  
- Aggregation  
- Joining/combining tables  
- Handling missing values  
- Statistical summaries  

These tasks directly relate to relational database processing concepts taught in the BAS IT program.

---

# 🍷 Part 1 — Wine Quality Dataset (UCI Repository)

### 🔹 Key Skills Demonstrated
- Loading multiple CSV tables (`winequality-red.csv` and `winequality-white.csv`)  
- Adding a new attribute (“color”)  
- Combining tables with `concat()`  
- Descriptive statistics (`describe()`)  
- Checking for missing values  
- Filling missing values (forward-fill method)  
- Sorting rows by multiple columns (e.g., alcohol, quality)  
- Filtering subsets (quality ≥ 8)  
- Grouping and aggregating (average alcohol & quality by color)  
- Visualizations:
  - Histograms
  - Box plots
  - Bar charts

### 🔹 Summary
This project demonstrates the essential steps of preparing and exploring a relational dataset. Tasks like merging tables, handling missing values, summarizing data, and computing aggregates are core skills for database‑driven applications, data cleaning, and analytics workflows.

---

# 🚢 Part 2 — Titanic Dataset (Kaggle)

### 🔹 Key Skills Demonstrated
- Loading and combining separate datasets (train + test)  
- Adding a “source” flag to track data origin  
- Assessing missing values  
- Imputing missing data:
  - Filling `Embarked` with mode  
  - Filling `Age` with median grouped by Sex & Class  
  - Replacing missing Cabin values with “Unknown”  
  - Filling Fare with median  
- Sorting (by Fare, by class, by multiple keys)  
- Filtering subsets (e.g., adults in first class)  
- Grouping and aggregating:
  - Survival rate by sex  
  - Survival rate by passenger class  
  - Combined survival rate by sex & class  
- Visualizations:
  - Passenger count by class  
  - Age distribution  
  - Survival rate comparisons  
  - Histograms and bar charts  

### 🔹 Summary
This assignment demonstrates how relational data can be prepared and analyzed to uncover meaningful patterns — such as survival rates by demographic groups. It shows a strong understanding of data integrity, missing value treatment, and relational grouping.

---

# 🔐 Security Considerations

While these projects focus on data analysis rather than application security, several database-related security practices apply:

### ✔ Data Validation  
Before analysis, ensure values are in expected formats, valid ranges, and correct types.

### ✔ Handling Missing or Corrupt Data  
Failing to fill or treat missing values can produce misleading or unsafe results in analytical systems.

### ✔ Preventing Injection (in SQL contexts)  
Although pandas is used here, similar logic would apply to SQL queries where sanitizing parameters is critical.

### ✔ Protecting Sensitive Information  
Datasets like Titanic include personal information. Secure handling and anonymization are important considerations.

---

# ⭐ What I Learned
These projects strengthened my skills in:

- Working with relational datasets  
- Cleaning and preparing data  
- Understanding database-like operations through Python  
- Exploring and visualizing data patterns  
- Handling missing values responsibly  
- Thinking critically about data quality and integrity  

Combined, these tasks form a strong foundation for database programming, data analytics, and backend system development.

---

# 📁 Files Included
- `JCastillo_Project_01.docx` or `.ipynb`  
- Screenshot images of tables and plots  
- Supporting CSV files (optional upload)
