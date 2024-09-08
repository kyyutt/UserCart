# E-commerce Management System

This repository contains the code for an e-commerce management system built using CodeIgniter 4 (CI4). The system includes features such as user authentication, product management, order processing, and more.

## Features

- **User Management**: Authentication, registration, and profile management.
- **Product Management**: Add, edit, and manage products.
- **Order Processing**: Manage customer orders, apply coupons, and track order statuses.
- **Payment Handling**: Integration for payment processing with support for multiple payment methods.
- **Reviews**: Customers can leave reviews for products.
- **Admin Dashboard**: Centralized dashboard for managing all aspects of the system.

## Requirements

- PHP 7.4 or higher
- MySQL 5.7 or higher
- Composer

## Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/yourusername/your-repo-name.git
   cd your-repo-name
   ```

2. Install dependencies:
   ```bash
   composer install
   ```

3. Set up your environment:
   - Copy `.env.example` to `.env` and configure your database and other settings.

4. Run database migrations:
   ```bash
   php spark migrate
   ```

5. Start the development server:
   ```bash
   php spark serve
   ```

## Usage

- Access the application via `http://localhost:8080` (or the configured server address).
- Use the admin panel for managing products, orders, and users.

## Contributing

Contributions are welcome! Please submit a pull request or open an issue for any suggestions or improvements.

## License

This project is licensed under the MIT License.

---
