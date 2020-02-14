<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

</div><!-- end .row -->
</div>
</div><!-- end #body -->

<footer id="footer" role="contentinfo">
    &copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>. All rights reserved. Power by <a href="http://typecho.org">Typecho.</a> Theme designed by <a href="https://niekun.net">Marco Nie.</a>
</footer><!-- end #footer -->

<script type="text/javascript">
    navItemSytle();
</script>

<?php $this->footer(); ?>
</body>

<script src="https://niekun.net/webcdn/jquery-3.4.1/jquery.min.js"></script>
<script src="https://niekun.net/webcdn//popper.js-1.16.0/popper.min.js"></script>
<script src="https://niekun.net/webcdn/bootstrap-4.4.1-dist/js/bootstrap.min.js"></script>

<script src="<?php $this->options->themeUrl('navItem.js'); ?>"></script>

</html>