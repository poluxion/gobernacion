</body>

<script  type="text/javascript"> const base = '<?=base_url()?>' </script>
<script src="<?php echo base_url(); ?>/public/js/jquery.min.js"></script>

<?php 
if (isset($scripts)) {

foreach ($scripts as $script) {

  ?>

  <script src="<?=$script?>" charset="utf-8"></script>

  <?php

}

}

?>
</html>
