</main>
<footer class="sn-footer">
  <div class="container py-4 d-flex flex-wrap justify-content-between gap-2">
    <span>StayNest &mdash; find a PG that feels like home.</span>
    <span>Student project &middot; PHP, MySQL, Bootstrap, AJAX, React</span>
  </div>
</footer>
<div id="toast-area" class="position-fixed bottom-0 start-50 translate-middle-x p-3" style="z-index:1080" aria-live="polite"></div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/app.js"></script>
<?php if (!empty($extraScripts)) foreach ($extraScripts as $s): ?>
<script src="<?= e($s) ?>"></script>
<?php endforeach; ?>
</body>
</html>
