<?php $current = basename($_SERVER['PHP_SELF']); ?>
<header class="site-header">
    <div class="container header-inner">
        <a class="logo" href="index.php">CIT Portfolio</a>
        <nav class="site-nav" aria-label="Main navigation">
            <a href="index.php" class="<?= $current === 'index.php' ? 'active' : '' ?>">Home</a>
            <a href="skills.php" class="<?= $current === 'skills.php' ? 'active' : '' ?>">Skills</a>
            <a href="courses.php" class="<?= $current === 'courses.php' ? 'active' : '' ?>">Courses</a>
            <a href="projects.php" class="<?= $current === 'projects.php' ? 'active' : '' ?>">Projects</a>
            <a href="about.php" class="<?= $current === 'about.php' ? 'active' : '' ?>">About</a>
            <a href="contact.php" class="<?= $current === 'contact.php' ? 'active' : '' ?>">Contact</a>
        </nav>
    </div>
    <div class="subnav">
        <div class="container subnav-inner">
            <a href="#skills" class="subnav-link">Skills</a>
            <a href="#courses" class="subnav-link">Courses</a>
            <a href="#projects" class="subnav-link">Projects</a>
            <a href="#about" class="subnav-link">About</a>
        </div>
    </div>
</header>

