# Food Ordering System

## Project Description

This is a web-based Food Ordering System designed to allow users to browse food items, add them to a cart, place orders, and manage room bookings. The system provides a user-friendly interface for both food ordering and room reservation, making it suitable for restaurants or hotels that offer both services.

## Features

- User Registration and Login with secure password hashing
- Browse various food categories (e.g., Foods, Desserts, Buns, Cakes, Juice)
- Add items to a shopping cart
- Checkout and place orders
- Room booking functionality
- Contact form for user inquiries
- Responsive design for various devices

## Technologies Used

- **Frontend:** HTML, CSS, JavaScript
- **Backend:** PHP
- **Database:** MySQL

## Installation

To set up this project locally, follow these steps:

1.  **Clone the repository:**
    ```bash
    git clone <repository_url>
    ```
    (Replace `<repository_url>` with the actual URL of your GitHub repository)

2.  **Set up a web server:**
    Ensure you have a web server environment like XAMPP, WAMP, or LAMP installed, which includes Apache, MySQL, and PHP.

3.  **Place project files:**
    Copy the `Food Ordering System` folder (which contains all the project files) into your web server's document root directory (e.g., `htdocs` for XAMPP, `www` for WAMP).

    Example path:
    `C:\xampp\htdocs\Food Ordering System`

## Database Setup

1.  **Create a MySQL database and tables:**
    Open phpMyAdmin (usually accessible via `http://localhost/phpmyadmin`) or your preferred MySQL client.
    Execute the SQL commands from the `create_tables.sql` file (located in the `Food Ordering System/` directory) to create the `silver_spoon` database and its necessary tables (`users`, `cart`, `orders`, `room_bookings`).

    The `users` table has the following structure:

    | Column         | Type         | Description                                   |
    | :------------- | :----------- | :-------------------------------------------- |
    | `id`           | `INT`        | Primary Key, Auto-increment                   |
    | `username`     | `VARCHAR(50)`| User's chosen username                        |
    | `phone_number` | `VARCHAR(20)`| User's phone number                           |
    | `address`      | `TEXT`       | User's address                                |
    | `password`     | `VARCHAR(255)`| Hashed password (using `password_hash`)       |

    The `cart` table has the following structure:

    | Column      | Type          | Description                                   |
    | :---------- | :------------ | :-------------------------------------------- |
    | `id`        | `INT`         | Primary Key, Auto-increment                   |
    | `user_id`   | `INT`         | Foreign Key referencing `users.id`            |
    | `item_name` | `VARCHAR(100)`| Name of the food item                         |
    | `item_price`| `DECIMAL(10,2)`| Price of the food item                        |

    The `orders` table has the following structure:

    | Column       | Type          | Description                                   |
    | :----------- | :------------ | :-------------------------------------------- |
    | `id`         | `INT`         | Primary Key, Auto-increment                   |
    | `user_id`    | `INT`         | Foreign Key referencing `users.id`            |
    | `items`      | `TEXT`        | JSON string of ordered items                  |
    | `total_price`| `DECIMAL(10,2)`| Total price of the order                      |
    | `order_date` | `TIMESTAMP`   | Timestamp of the order                        |

    The `room_bookings` table has the following structure:

    | Column        | Type          | Description                                   |
    | :------------ | :------------ | :-------------------------------------------- |
    | `id`          | `INT`         | Primary Key, Auto-increment                   |
    | `room_name`   | `VARCHAR(255)`| Name of the booked room                       |
    | `price`       | `DECIMAL(10,2)`| Price per unit of the room                    |
    | `total_price` | `DECIMAL(10,2)`| Total price of the room booking               |
    | `booking_date`| `TIMESTAMP`   | Timestamp of the room booking                 |

2.  **Configure database connection:**
    The database connection details are hardcoded in `login.php`, `register.php`, `add_to_cart.php`, `get_cart.php`, `clear_cart.php`, `book_room.php`, and `thanks.php`.
    Ensure the database connection details match your MySQL setup:

    ```php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "silver_spoon";
    ```
    - `localhost`: Your database host (usually `localhost`)
    - `root`: Your MySQL username (default is `root` for XAMPP/WAMP)
    - ``: Your MySQL password (default is empty for XAMPP/WAMP)
    - `silver_spoon`: The name of the database you created

## Usage

1.  **Start your web server:**
    Ensure Apache and MySQL services are running in your XAMPP/WAMP/LAMP control panel.

2.  **Access the application:**
    Open your web browser and navigate to `http://localhost/Food Ordering System`.

3.  **Register/Login:**
    You can register a new user account or log in with existing credentials to access the system's features.

## Screenshots

![Home Page]
<img width="1916" height="978" alt="image" src="https://github.com/user-attachments/assets/1a87d466-c786-438d-9273-24c0a582e6ab" />
<img width="1891" height="698" alt="image" src="https://github.com/user-attachments/assets/3dc079e7-d5ac-449a-bcd3-df9e72c74366" />
<img width="1889" height="796" alt="image" src="https://github.com/user-attachments/assets/9feadff0-2d63-4c77-be35-30a277d57ca2" />
<img width="1882" height="384" alt="image" src="https://github.com/user-attachments/assets/f8075978-eac3-47c7-bc79-a4f064d3d711" />

![Food Menu]
<img width="1883" height="917" alt="image" src="https://github.com/user-attachments/assets/6d8ce25c-15b2-44a8-9e9d-ca5d2765a21e" />
<img width="1886" height="800" alt="image" src="https://github.com/user-attachments/assets/76bdc1a2-3223-42d5-b1bb-b52df81d3bb4" />

![Cart Page]
<img width="1898" height="917" alt="image" src="https://github.com/user-attachments/assets/c4aba4a6-e122-4e8a-a298-45d539e2957e" />

![Room Booking]
<img width="1890" height="927" alt="image" src="https://github.com/user-attachments/assets/6a0e78de-9232-44e4-af34-661b621ab701" />

## Contributing

Contributions are welcome! If you'd like to contribute to this project, please follow these steps:

1.  Fork the repository.
2.  Create a new branch (`git checkout -b feature/YourFeature`).
3.  Make your changes.
4.  Commit your changes (`git commit -m 'Add some feature'`).
5.  Push to the branch (`git push origin feature/YourFeature`).
6.  Open a Pull Request.

## License

This project is open-source and available under the [MIT License](LICENSE.md).

---


