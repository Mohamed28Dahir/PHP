<?php $pageTitle = 'Contact · CIT Student Portfolio'; $metaDescription='Contact form and social links.'; include __DIR__ . '/partials/header.php'; ?>
<?php include __DIR__ . '/partials/nav.php'; ?>

<main id="main" class="container">
    <section class="page-header">
        <h1>Contact</h1>
        <p>This is a frontend-only demo. The form is UI only.</p>
    </section>

    <section class="contact section">
        <form class="form" aria-label="Contact form">
            <div class="field">
                <label for="name">Name</label>
                <input id="name" type="text" placeholder="Your name" />
            </div>
            <div class="field">
                <label for="email">Email</label>
                <input id="email" type="email" placeholder="you@example.com" />
            </div>
            <div class="field">
                <label for="message">Message</label>
                <textarea id="message" rows="5" placeholder="Say hello!"></textarea>
            </div>
            <button class="btn primary" type="button">Send</button>
        </form>

        <div style="margin-top:16px;">
            <a class="btn" href="#">LinkedIn</a>
            <a class="btn" href="#">GitHub</a>
            <a class="btn" href="mailto:you@example.com">Email</a>
        </div>
    </section>
</main>

<?php include __DIR__ . '/partials/footer.php'; ?>

