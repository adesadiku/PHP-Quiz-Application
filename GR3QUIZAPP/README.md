//Add by Sadiku Adeshina(adesadiku)
 🎓 GR3QUIZAPP — PHP & SQL Quiz Web Application
 
 📘 Overview
**GR3QUIZAPP** is a dynamic, database-driven quiz web application designed to test knowledge of **PHP** and **SQL**.  
The system displays **60 randomized multiple-choice questions** (40 PHP + 20 SQL), calculates results automatically, and provides users with their performance summary and review.  

This project was developed as part of a group assignment to demonstrate teamwork, backend integration, and modern front-end design using **HTML, CSS, JavaScript, PHP, and MySQL**.


 🚀 Features
✅ Randomized question order each session  
✅ Automatic numbering for questions  
✅ One-page quiz view (scrollable layout)  
✅ Real-time validation and smooth animations  
✅ Automatic result calculation and scoring  
✅ Review page showing correct answers  
✅ Responsive design for all screen sizes  
✅ Clean code structure and reusable components  


 🧠 Technologies Used
| Technology | Purpose |
|-------------|----------|
| **PHP** | Backend logic, data handling, and scoring |
| **MySQL** | Database for storing quiz questions |
| **HTML5** | Page structure and form design |
| **CSS3** | Styling, layout, and animations |
| **JavaScript (ES6)** | Interactive UI, dynamic behavior |
| **XAMPP** | Local development environment |
| **Git & GitHub** | Version control and collaboration |


 🗂️ Folder Structure
C:\xampp\htdocs\GR3QUIZAPP
│
├── db_connect.php # Database connection file
├── index.php # Landing page (Start Quiz button)
├── quiz.php # Displays all 60 randomized questions
├── result.php # Calculates and shows final score
├── review.php # Displays correct answers for review
├── style.css # Styling and responsive layout
└── script.js # Frontend interactions and animations

## 🛠️ Setup & Installation

Follow these simple steps to set up the project locally:

 1️⃣ Prerequisites
- Install **XAMPP** (or any local server)
- Install **Git** (for version control)
- Have a **web browser** (Chrome, Edge, or Firefox)
- MySQL should be running

 2️⃣ Clone the Repository
Open your terminal (CMD or Git Bash) and run:

```bash
git clone https://github.com/adesadiku/PHP-Quiz-Application.git

cd PHP=Quiz-Application

3️⃣ Move to XAMPP Directory

Copy or move the folder to:

C:\xampp\htdocs\

4️⃣ Start Apache and MySQL

Open XAMPP Control Panel → Start Apache and MySQL

5️⃣ Import the Database

Go to http://localhost/phpmyadmin

Create a database named: quiz_db

Click Import and upload your questions.sql file (contains 60 questions)

6️⃣ Run the App

Open your browser and go to:

http://localhost/GR3QUIZAPP/

👥 Group Members & Roles
Name	Role	Responsibilities
Omatiga Joshua Iko-ojo (23/2000) - Backend Developer	Built database connection, question logic, and PHP scripts
Ukere Kelvin (23/0945)	- Frontend Developer	Designed layout, color theme, and page responsiveness
Otukoya Michael Abdulganiu (23/0369) - Database Engineer	Created and managed the questions table and imports
Obediah Miracle Mmesoma (23/2994) - JavaScript Engineer	Added interactivity, scroll effects, and animations
Talson Seyilnen Bege (23/2386) - Quality Assurance	Tested functionality, scoring accuracy, and responsiveness
Sadiku Adeshina (23/0412)	- Documentation Lead	Prepared README, project report, and in-code comments
Olubiyo David Victor (23/2821)	- Project Coordinator	Oversaw version control, progress, and presentation prep


🧩 How It Works

User visits index.php and clicks Start Quiz

quiz.php loads 60 random questions from the database

User answers and submits

result.php calculates and displays the score

review.php optionally shows correct and wrong answers

style.css and script.js power the UI and effects

🖌️ Design Highlights

🎨 Gradient backgrounds with hover animations
📱 Fully responsive design (mobile-friendly)
⚡ Smooth transitions between pages
📊 Clean question layout with numbered formatting
🌈 Scroll-triggered highlights and button effects

🧰 Future Improvements

Add user login & progress tracking

Include timer functionality for timed quizzes

Add question categories (PHP, SQL, HTML, etc.)

Store scores and display leaderboard


💬 Credits

Developed by Group 3 — Department of Information Technology,
Babcock University, Ilishan-Remo, Ogun State, Nigeria.

Guided by our passion for learning, teamwork, and practical application of web technologies.

🧩 End of README.md

