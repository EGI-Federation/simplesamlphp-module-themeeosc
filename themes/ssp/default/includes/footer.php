<?php
$themeConfig = SimpleSAML\Configuration::getConfig('module_themeeosc.php');
$enable_cookies_banner = $themeConfig->getValue('enable_cookies_banner');

if(!empty($this->data['htmlinject']['htmlContentPost'])) {
  foreach($this->data['htmlinject']['htmlContentPost'] AS $c) {
    echo $c;
  }
}
?>
  </div><!-- /container -->
  </div><!-- /ssp-container -->

<?php if ($enable_cookies_banner) { ?>
  <!-- cookies popup -->
  <div id="cookies">
    <div id="cookies-wrapper">
      <p>
        <?php echo $this->t('{themeeosc:discopower:cookies_text}'); ?>
        <?php if(strpos($this->t('{themeeosc:discopower:cookies_link_text}'), 'not translated') === FALSE) { ?>
        <a href="<?php echo $this->t('{themeeosc:discopower:cookies_link_url}'); ?>" target="_blank"><?php echo $this->t('{themeeosc:discopower:cookies_link_text}'); ?></a>
        <?php } ?>
      </p>
      <a id="js-accept-cookies" class="cookies-ok" href="#">
        <?php echo $this->t('{themeeosc:discopower:cookies_accept_btn_text}'); ?>
      </a>
    </div>
  </div>
  <!-- /cookies popup -->
<?php
}
?>
  <footer class="ssp-footer text-center">
    <div class="container ssp-footer--container">
      <div class="row ssp-content-group--footer">
        <div class="col-sm-4">
            <img class="ssp-footer__item__logo" src="<?php echo SimpleSAML\Module::getModuleURL('themeeosc/resources/images/logo_w.png'); ?>" alt="EOSC" />
        </div>
        <div class="col-sm-8 ssp-content-group--bottom">
            <div class="col-sm-6 text-right" id="copyright">
                <?php echo $this->t('{themeeosc:discopower:copyright_text}'); ?>
            </div>
            <div class="col-sm-6 text-right" id="privacy">
                <a href="<?php echo $this->t('{themeeosc:discopower:contact_link_url}'); ?>" title="">
                    <?php echo $this->t('{themeeosc:discopower:contact_link_text}'); ?>
                </a>
                &nbsp;|&nbsp;
                <a href="<?php echo $this->t('{themeeosc:discopower:privacy_link_url}'); ?>" title="">
                    <?php echo $this->t('{themeeosc:discopower:privacy_link_text}'); ?>
                </a>
            </div>
        </div>
      </div>
    </div> <!-- /container-fluid -->
    <div class="ssp-footer--disclaimer">
      <div class="container">
        <p>
          <?php echo (strpos($this->t('{themeeosc:discopower:disclaimer}'), 'not translated') === FALSE ? $this->t('{themeeosc:discopower:disclaimer}') : ''); ?>
        </p>
      </div>
    </div>
  </footer>
  <script type="text/javascript"
          src="<?php echo htmlspecialchars(SimpleSAML\Module::getModuleURL('themeeosc/resources/js/cookie.js')); ?>">
  </script>
  <script type="text/javascript"
          src="<?php echo htmlspecialchars(SimpleSAML\Module::getModuleURL('themeeosc/resources/js/dropdown.js')); ?>">
  </script>
  <script type="text/javascript"
          src="<?php echo htmlspecialchars(SimpleSAML\Module::getModuleURL('themeeosc/resources/js/modal.js')); ?>">
  </script>
  <script type="text/javascript"
          src="<?php echo htmlspecialchars(SimpleSAML\Module::getModuleURL('themeeosc/resources/js/tooltip.js')); ?>">
  </script>
  <script type="text/javascript"
          src="<?php echo htmlspecialchars(SimpleSAML\Module::getModuleURL('themeeosc/resources/js/theme.js')); ?>">
  </script>

</body>
</html>
