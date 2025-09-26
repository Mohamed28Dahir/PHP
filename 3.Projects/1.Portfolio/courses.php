<?php $pageTitle = 'Courses · CIT Student Portfolio'; $metaDescription='University courses organized by category with a simple timeline.'; include __DIR__ . '/partials/header.php'; ?>
<?php include __DIR__ . '/partials/nav.php'; ?>

<main id="main" class="container">
    <section class="page-header">
        <h1>Courses</h1>
        <p>Core CIT coursework organized by topic.</p>
    </section>

    <section class="section two-col">
        <div>
            <h2>Programming</h2>
            <ul class="timeline">
                <li><span class="time">Sem 1</span><div>Introduction to Programming (Python)</div></li>
                <li><span class="time">Sem 2</span><div>Object-Oriented Programming (Java)</div></li>
            </ul>
            <h2>Databases</h2>
            <ul class="timeline">
                <li><span class="time">Sem 2</span><div>Database Systems (SQL, ER models)</div></li>
            </ul>
        </div>
        <div>
            <h2>Networking</h2>
            <ul class="timeline">
                <li><span class="time">Sem 1</span><div>Computer Networks (TCP/IP, Subnetting)</div></li>
                <li><span class="time">Sem 3</span><div>Routing & Switching Basics</div></li>
            </ul>
            <h2>Cybersecurity</h2>
            <ul class="timeline">
                <li><span class="time">Sem 3</span><div>Information Security Fundamentals</div></li>
            </ul>
        </div>
    </section>
</main>

<?php include __DIR__ . '/partials/footer.php'; ?>

