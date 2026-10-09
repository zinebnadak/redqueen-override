# RedQueen Override

A small PHP and MariaDB application where authorized users log in with a personal override code and can shut down or restart a simulated AI system. The status is stored in the database and persists across sessions.

### Features

Master frame layout (top, middle, bottom) shared by all pages
Login against a database using prepared statements
Persistent online/offline status stored in MariaDB
Shutdown confirmation with a randomly chosen colour code

### Stack
PHP, MariaDB, Apache (Fedora Server), HTML/CSS

Security notes: prepared statements (mysqli), hashed codes, session-based access control

## Skärmbilder

### MariaDB (databasen tecna)
<img src="mariadb.png" alt="mariadb.png" width="500">

### Tabellen executives (personer och hashade override-koder)
<img src="executives.png" alt="executives.png" width="500">

### Tabellen shutdown_codes (fem färgkoder per person)
<img src="shutdown_codes.png" alt="shutdown_codes.png" width="500">

### Inloggning
<img src="login.png" alt="login.png" width="500">

### Status: Online
<img src="online.png" alt="online.png" width="500">

### Shutdown-sidan (slumpvald färg)
<img src="shutdown.png" alt="shutdown.png" width="500">

### Status: Offline
<img src="offline.png" alt="offline.png" width="500">