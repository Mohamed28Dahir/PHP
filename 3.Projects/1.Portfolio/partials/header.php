<?php
    $pageTitle = $pageTitle ?? 'CIT Student Portfolio';
    $metaDescription = $metaDescription ?? 'Computer Information Technology student portfolio: skills, courses, projects, and contact.';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?= htmlspecialchars($pageTitle) ?></title>
    <meta name="description" content="<?= htmlspecialchars($metaDescription) ?>" />
    <meta name="theme-color" content="#0b1020" />
    <link rel="canonical" href="http://localhost/Portfolio/" />
    <link rel="icon" type="image/svg+xml" href="assets/img/favicon.svg" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?= htmlspecialchars($pageTitle) ?>" />
    <meta property="og:description" content="<?= htmlspecialchars($metaDescription) ?>" />
    <meta property="og:url" content="http://localhost/Portfolio/" />
    <meta name="twitter:card" content="summary" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/style.css" />
</head>
<body>
<a class="skip-link" href="#main">Skip to content</a>

