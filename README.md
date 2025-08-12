# Laravel CSV Table Display & Processing

## Project Overview

This is a simple Laravel project that reads a default CSV file included in the project, displays its content in a table, and performs basic calculations on certain CSV values. The results are shown in a second table below the original data.

---

## Features

- Reads CSV file (`public/files/Table_Input.csv`) and displays the data.
- Calculates:
  - **Alpha** = A5 + A20
  - **Beta** = A15 ÷ A7 (integer division)
  - **Charlie** = A13 × A12
- Shows calculation results in a separate table.

---

## What you need to prepare?
1. Make sure the CSV file exists in public/files/Table_Input.csv with this format:
<br>
Index,Value
A1,41
A2,18
A3,21
...
A20,10

2. Run the application
Start the built-in PHP server: <br>
php artisan serve

