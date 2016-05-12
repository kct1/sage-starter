<footer class="content-info">
  <div class="container">
    <?php dynamic_sidebar('sidebar-footer'); ?>
<div class="footer-left">
    <p id="footer-info">
        <a href="#">
            <?php echo bloginfo();?>
        </a> | All Rights Reserved &copy; <?php echo date("Y") ?>
    </p>
</div>

      <div class="footer-right">
          <?php include 'social_media.php'; ?>
          <?php include 'phone_number.php'; ?>
      </div>


  </div>
</footer>
