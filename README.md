# MedAppoint

## Description
MedAppoint is a simple web-based application designed for e-channeling, specifically aimed at facilitating online appointment scheduling for clients or patients of medical establishments like clinics and hospitals. This PHP-based application supports three key roles: administrator, doctor, and patient, each with their specific functionalities to manage their appointments efficiently.

![Screenshot](Screenshots/Screenshot%20(1).png)
![Screenshot 2](Screenshots/Screenshot%20(2).png)


## Features

### Admin
- Add, edit, and delete doctors
- Schedule and remove doctors sessions
- View patient details and bookings
![Screenshot 3](Screenshots/Screenshot%20(3).png)
![Screenshot 4](Screenshots/Screenshot%20(4).png)
![Screenshot 5](Screenshots/Screenshot%20(5).png)


### Doctors
- View appointments and scheduled sessions
- Access and manage patient details
- Delete and edit account settings
![Screenshot 9](Screenshots/Screenshot%20(9).png)
![Screenshot 10](Screenshots/Screenshot%20(10).png)

### Patients (Clients)
- Make appointments online
- Create and manage accounts
- View and manage old bookings
- Delete and edit account settings
![Screenshot 6](Screenshots/Screenshot%20(6).png)
![Screenshot 7](Screenshots/Screenshot%20(7).png)
![Screenshot 8](Screenshots/Screenshot%20(8).png)

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
