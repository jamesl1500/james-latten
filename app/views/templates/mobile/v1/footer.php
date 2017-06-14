</main>
<script src="<?php echo JAVASCRIPT; ?>core/jquery.js" type="text/javascript" ></script>
<?php require $this->sidebar; ?>
<?php if(isset($this->page)){ ?>
    <input type="hidden" id="page" value="<?php echo $this->page; ?>" />
<?php } ?>
<script src="<?php echo JAVASCRIPT; ?>core/tether.js" type="text/javascript"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<script src="<?php echo JAVASCRIPT; ?>Main.js" type="text/javascript"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-97387679-1', 'auto');
  ga('send', 'pageview');

</script>
<script>
    $.ajaxSetup({
        data: {
            'xhr_csrf_token' : '<?php echo $_SESSION['JAMESLATTEN_TOKEN_CSRF']; ?>',
            'xhr_true' : 'true',
            'xhr_is_mobile' : <?php $mobile = new Mobile(); if($mobile->isMobile()){echo "true";}else{echo "false";}; ?>
        }
    });
</script>
<?php
if(isset($this->javascript) && $this->javascript != "") {
    ?>
    <script src="<?php echo JAVASCRIPT; ?><?php echo $this->javascript; ?>.js" type="text/javascript"></script>
    <?php
}
?>
<script src='https://plasso.com/embed/v3/e.js'></script>
</body>
</html>