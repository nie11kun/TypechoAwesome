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

</html>