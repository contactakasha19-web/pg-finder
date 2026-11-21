<?php
$pageTitle = $pageTitle ?? 'StayNest';
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="<?= e($_SESSION['csrf']) ?>">
  <title><?= e($pageTitle) ?> - StayNest</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:wght@600;700&family=DM+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body data-logged-in="<?= is_logged_in() ? '1' : '0' ?>">
<nav class="navbar navbar-expand-md sn-nav" aria-label="Main navigation">
  <div class="container">
    <a class="navbar-brand sn-brand" href="index.php"><i class="bi bi-house-heart-fill me-1"></i>StayNest</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-nav" aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="main-nav">
      <ul class="navbar-nav ms-auto align-items-md-center">
        <li class="nav-item"><a class="nav-link" href="index.php">Browse PGs</a></li>
        <?php if (is_logged_in()): ?>
          <li class="nav-item"><a class="nav-link" href="shortlist.php">My shortlist</a></li>
          <li class="nav-item ms-md-2"><span class="nav-link sn-hi"><?= e($_SESSION['user_name'] ?? 'Student') ?></span></li>
          <li class="nav-item"><a class="nav-link" href="logout.php">Log out</a></li>
        <?php else: ?>
          <li class="nav-item"><a class="nav-link" href="login.php">Log in</a></li>
          <li class="nav-item ms-md-2"><a class="btn sn-btn" href="signup.php">Sign up</a></li>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</nav>
<main class="container py-3">
