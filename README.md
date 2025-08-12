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
- Easy to update CSV file directly.
- Beginner-friendly code.
- Ready for deployment (e.g., Heroku).

---

## Setup Instructions

### Prerequisites

- PHP 8+
- Composer
- Git
- Code editor like VS Code

### Installation Steps

1. Clone the repo:

   ```bash
   git clone <your-repo-url>
   cd <your-project-folder>
