<?php include 'includes/header.php'; ?>
<div class="container mt-5">
  <h2>Contact Us</h2>
  <form action="contact-handler.php" method="post">
    <div class="mb-3">
      <input type="text" name="name" class="form-control" placeholder="Your Name" required>
    </div>
    <div class="mb-3">
      <input type="email" name="email" class="form-control" placeholder="Your Email" required>
    </div>
    <div class="mb-3">
      <textarea name="message" class="form-control" placeholder="Message" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Send</button>
  </form>
</div>
<?php include 'includes/footer.php'; ?>