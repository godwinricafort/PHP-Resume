<?php
session_start();

// Redirect to login page if the user is not logged in
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Godwin Miles Ricafort - Resume</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <header>
        <img src="images/profile.png" alt="Profile Picture" class="profile-pic">
        <h1>Godwin Miles Ricafort</h1>
        <p>Santa Rosa City, Laguna</p>
        <p>3rd Year, BS Computer Science</p>
        <p>Phone: 09393451104</p>
    </header>

    <section class="about">
        <h2>About Me</h2>
        <p>
            I'm Godwin, a third-year BS Computer Science student in Batangas State University - 
            Alangilan Campus. I enjoy learning new things that are aligned with innovation and technology.
        </p>
    </section>

    <section class="tech-stack">
        <h2>Tech Stack</h2>
        <ul>
            <li>Python</li>
            <li>C++</li>
            <li>HTML</li>
            <li>CSS</li>
        </ul>
    </section>

    <section class="education">
        <h2>Education</h2>
        <ul>
            <li>
                <strong>2023 - Present</strong><br>
                Bachelor of Science in Computer Science<br>
                Batangas State University, The National Engineering University - Alangilan Campus
            </li>
            <li>
                <strong>2021 - 2023</strong><br>
                Senior High School | STEM<br>
                Santa Rosa Science and Technology High School
            </li>
            <li>
                <strong>2017 - 2021</strong><br>
                Junior High School<br>
                Santa Rosa Science and Technology High School
            </li>
            <li>
                <strong>2011 - 2017</strong><br>
                Primary School<br>
                Santa Rosa Elementary School - Central III
            </li>
        </ul>
    </section>

    <footer>
        <p>Welcome, <?= htmlspecialchars($_SESSION['username']) ?>!</p>
        <a href="logout.php">Logout</a>
    </footer>
</div>
</body>
</html>
