<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}

// Resume Data
$name      = "Godwin Miles Ricafort";
$address   = "Santa Rosa City, Laguna";
$yearprog  = "3rd Year, BS Computer Science";
$phone     = "09393451104";
$about     = "I'm Godwin, a third-year BS Computer Science student in Batangas State University - Alangilan Campus. I enjoy learning new things that are aligned with innovation and technology.";
$techStack = ["Python", "C++", "HTML", "CSS"];

$education = [
    ["year"=>"2023 - Present","course"=>"Bachelor of Science in Computer Science","school"=>"Batangas State University, The National Engineering University - Alangilan Campus"],
    ["year"=>"2021 - 2023","course"=>"Senior High School | STEM","school"=>"Santa Rosa Science and Technology High School"],
    ["year"=>"2017 - 2021","course"=>"Junior High School","school"=>"Santa Rosa Science and Technology High School"],
    ["year"=>"2011 - 2017","course"=>"Primary School","school"=>"Santa Rosa Elementary School - Central III"]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title><?= $name ?> - Resume</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <div class="logout">
        Logged in as <strong><?= htmlspecialchars($_SESSION["username"]) ?></strong> |
        <a href="logout.php">Logout</a>
    </div>

    <header>
        <img src="images/profile.jpg" alt="Profile Picture" class="profile-pic">
        <h1><?= $name ?></h1>
        <p><?= $yearprog ?></p>
        <p><?= $address ?></p>
        <p>Phone: <?= $phone ?></p>
    </header>

    <section class="about">
        <h2>About Me</h2>
        <p><?= $about ?></p>
    </section>

    <section class="tech">
        <h2>Tech Stack</h2>
        <ul>
            <?php foreach ($techStack as $tech): ?>
                <li><?= $tech ?></li>
            <?php endforeach; ?>
        </ul>
    </section>

    <section class="education">
        <h2>Education</h2>
        <?php foreach ($education as $edu): ?>
            <div class="edu-item">
                <h3><?= $edu['year'] ?></h3>
                <p><strong><?= $edu['course'] ?></strong></p>
                <p><?= $edu['school'] ?></p>
            </div>
        <?php endforeach; ?>
    </section>
</div>
</body>
</html>
