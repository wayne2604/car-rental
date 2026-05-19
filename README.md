<div align="center">
  <img src="https://readme-typing-svg.herokuapp.com?font=Fira+Code&size=32&pause=1000&color=F7F7F7&center=true&vCenter=true&width=900&lines=🚗+Car+Rental+Management+System" alt="Title" />
</div>

A robust web-based car rental application built with PHP and MySQL. It allows customers to browse and book available vehicles, hire professional drivers, and manage active rentals, while providing admin clients with a comprehensive dashboard to oversee the vehicle fleet, driver registrations, and booking summaries.

---

### 📦 Stack
- PHP 8.x
- MySQL / MariaDB
- Bootstrap 3.x
- Vanilla CSS & W3.CSS
- jQuery & Custom JS

---

### ✨ Quick start
```bash
# Clone the repository
git clone https://github.com/wayne2604/car-rental.git

# Navigate to the directory
cd car-rental
```
Ensure you have a local server environment (like XAMPP) running. Import the database schema `carrentalp.sql` from the `DATABASE FILE/` directory into your local MySQL/MariaDB server (via phpMyAdmin or CLI), and configure the database credentials inside `connection.php` to get started.

---

### ⚙️ Features
- **Secure Auth** — Multi-role login and registration system for customers (users) and clients (admins).
- **Fleet & Driver Management** — Add, view, and delete vehicles and drivers, with real-time status and availability tracking.
- **Seamless Booking Flow** — Dynamic car booking options including rental duration, distance charge-type, AC vs. non-AC fares, and driver hiring.
- **Automated Billing System** — Real-time cost calculations and printing of detailed receipts upon vehicle return.

---

### 🛠️ How it works
The system follows a modular PHP architecture designed for reliability and ease of use:
- **Database Connectivity**: Uses native `mysqli` functions encapsulated in `connection.php` with database error-handling to manage robust CRUD operations.
- **Decoupled Architecture**: Front-end page rendering (like booking, registration, and confirmation) is structured with standard forms pointing to processing endpoints.
- **Multi-Role Session Control**: Uses isolated customer and client sessions (`session_customer.php` and `session_client.php`) to secure user dashboards and restrict access to unauthorized sections.

---

### 📁 Project structure
```text
/
├── assets/                 # CSS/JS framework resources and car image files
├── DATABASE FILE/          # Directory containing the SQL schema (carrentalp.sql)
├── booking.php             # Vehicle booking form and driver selection
├── bookingconfirm.php      # Form processing logic for reserving a vehicle
├── clientlogin.php         # Admin/Client login page
├── clientsignup.php        # Admin/Client registration page
├── clientview.php          # Admin/Client dashboard listing all active bookings
├── connection.php          # Database connectivity setup
├── customerlogin.php       # Customer login page
├── customersignup.php      # Customer registration page
├── entercar.php            # Form for adding a new car to the fleet
├── enterdriver.php         # Form for registering a new driver
├── index.php               # Homepage displaying available cars for rent
├── mybookings.php          # Customer booking history and rental tracking
├── prereturncar.php        # Customer dashboard to select rented cars to return
├── printbill.php           # Invoice generation page with print styling
├── returncar.php           # Vehicle return and final cost calculation logic
└── README.md               # Project documentation
```

---

### 👤 Author
**Wayne** — [github.com/wayne2604](https://github.com/wayne2604)
