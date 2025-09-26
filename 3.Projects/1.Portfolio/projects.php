<?php $pageTitle = 'Projects · CIT Student Portfolio'; $metaDescription='Academic and personal projects with brief descriptions.'; include __DIR__ . '/partials/header.php'; ?>
<?php include __DIR__ . '/partials/nav.php'; ?>

<main id="main" class="container">
    <section class="page-header">
        <h1>Projects</h1>
        <p>Highlights of academic and personal work. Add screenshots to the cards.</p>
    </section>

    <section class="grid cols-3">
        <article class="card">
            <h3>Network Subnet Calculator</h3>
            <p>Simple tool to understand subnetting and CIDR ranges (UI demo).</p>
            <ul class="tags"><li>Networking</li><li>JavaScript</li><li>UI</li></ul>
        </article>
        <article class="card">
            <h3>Student DB Schema</h3>
            <p>Normalized relational schema with example SQL queries.</p>
            <ul class="tags"><li>SQL</li><li>ERD</li></ul>
        </article>
        <article class="card">
            <h3>Portfolio Website</h3>
            <p>Professional portfolio with PHP partials and external CSS.</p>
            <ul class="tags"><li>PHP</li><li>HTML</li><li>CSS</li></ul>
        </article>
    </section>
</main>

<?php include __DIR__ . '/partials/footer.php'; ?>

