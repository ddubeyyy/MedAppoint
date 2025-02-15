# MedAppoint

## Description
MedAppoint is a simple web-based application designed for e-channeling, specifically aimed at facilitating online appointment scheduling for clients or patients of medical establishments like clinics and hospitals. This PHP-based application supports three key roles: administrator, doctor, and patient, each with their specific functionalities to manage their appointments efficiently.

![Uploading Screenshot 2024-07-20 224004.png…]()  ![Alt text](Screenshot 2024-07-20 224004.png)


## Features

### Admin
- Add, edit, and delete doctors
- Schedule and remove doctors sessions
- View patient details and bookings

### Doctors
- View appointments and scheduled sessions
- Access and manage patient details
- Delete and edit account settings

### Patients (Clients)
- Make appointments online
- Create and manage accounts
- View and manage old bookings
- Delete and edit account settings

## Getting Started

### Prerequisites
- XAMPM (Apache, MySQL, PHP)
- Web browser

### Installation
1. Open your XAMPP Control Panel and start Apache and MySQL.
2. Extract the downloaded source code zip file.
3. Copy the extracted source code folder and paste it into the XAMPP's "htdocs" directory.
4. Access PHPMyAdmin via http://localhost/phpmyadmin
5. Create a new database named `edoc`.
6. Import the SQL file located in the source code root folder, named `DATABASE edoc.sql`.
7. Visit http://localhost/MedAppoint to access the Doctor's Appointment System.

## Built With
- Apache Version: 2.4.39
- PHP Version: 7.3.5
- Server Software: Apache/2.4.39 (Win64) PHP/7.3.5
- MySQL Version: 5.7.26
ils.
