<?php $pageTitle = 'Home · CIT Student Portfolio'; $metaDescription='Portfolio of a CIT student: skills, courses, projects, and contact.'; include __DIR__ . '/partials/header.php'; ?>
<?php include __DIR__ . '/partials/nav.php'; ?>

<main id="main" class="container">
    <section class="hero">
        <p class="eyebrow">CIT Student | Future IT Professional</p>
        <h1>Hi, I'm Your Name</h1>
        <p>I’m studying Computer Information Technology, building skills in programming, networking, databases, and cybersecurity.</p>
        <div class="hero-cta">
            <a class="btn primary" href="skills.php">View Skills</a>
            <a class="btn" href="courses.php">View Courses</a>
        </div>
        <div class="social">
            <a aria-label="GitHub" href="#">GitHub</a>
            <span aria-hidden="true">·</span>
            <a aria-label="LinkedIn" href="#">LinkedIn</a>
            <span aria-hidden="true">·</span>
            <a aria-label="Email" href="contact.php">Email</a>
        </div>
    </section>

    <section class="section" id="skills">
        <h2>Top Skills</h2>
        <div class="grid cols-3">
            <div class="card"><h3>Programming</h3><p>Python, Java, PHP, HTML/CSS</p></div>
            <div class="card"><h3>Networking</h3><p>TCP/IP, Subnetting, Routing basics</p></div>
            <div class="card"><h3>Databases</h3><p>SQL, ER models, normalization</p></div>
        </div>
    </section>

    <section class="section" id="projects">
        <h2>Featured Projects</h2>
        <div class="grid cols-3">
            <article class="card"><h3>Project One</h3><p>Short description of an academic or personal project.</p></article>
            <article class="card"><h3>Project Two</h3><p>Short description focusing on tools used.</p></article>
            <article class="card"><h3>Project Three</h3><p>Short description and outcome/learning.</p></article>
        </div>
        <p><a class="btn" href="projects.php">See all projects</a></p>
    </section>
</main>

<?php include __DIR__ . '/partials/footer.php'; ?>

