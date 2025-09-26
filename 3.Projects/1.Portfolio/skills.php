<?php $pageTitle = 'Skills · CIT Student Portfolio'; $metaDescription='Technical skills and proficiency charts.'; include __DIR__ . '/partials/header.php'; ?>
<?php include __DIR__ . '/partials/nav.php'; ?>

<main id="main" class="container">
    <section class="page-header">
        <h1>Skills</h1>
        <p>Programming languages, tools, and technologies with proficiency charts.</p>
    </section>

    <section class="section">
        <h2>Proficiency</h2>
        <div class="charts">
            <div>
                <p>Python <strong>70%</strong></p>
                <div class="bar" style="--value:70%"><div class="fill"></div></div>
            </div>
            <div>
                <p>Java <strong>60%</strong></p>
                <div class="bar" style="--value:60%"><div class="fill"></div></div>
            </div>
            <div>
                <p>HTML/CSS <strong>80%</strong></p>
                <div class="bar" style="--value:80%"><div class="fill"></div></div>
            </div>
        </div>
    </section>

    <section class="section">
        <h2>Technologies</h2>
        <ul class="tags">
            <li>PHP</li><li>SQL</li><li>Git</li><li>Linux</li><li>Networking</li>
        </ul>
    </section>
</main>

<?php include __DIR__ . '/partials/footer.php'; ?>

