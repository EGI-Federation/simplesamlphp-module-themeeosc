<?php
$themeConfig = SimpleSAML_Configuration::getConfig('module_themeeosc.php');
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
            <img class="ssp-footer__item__logo" src="<?php echo SimpleSAML_Module::getModuleURL('themeeosc/resources/images/logo_w.png'); ?>" alt="EOSC" />
        </div>
        <div class="col-sm-8 ssp-content-group--bottom">
                <div class="col-sm-9 text-right" id="copyright">
                    Copyright 2018 - All rights reserved
                </div>
                <div class="col-sm-3 text-right" id="privacy">
                    <a href="https://aai.eosc-portal.eu/privacy/en/">Privacy Policy</a>
                </div>


    <?php

    $includeLanguageBar = TRUE;
    if (!empty($_POST))
      $includeLanguageBar = FALSE;
    if (isset($this->data['hideLanguageBar']) && $this->data['hideLanguageBar'] === TRUE)
      $includeLanguageBar = FALSE;

    if ($includeLanguageBar) {

      $languages = $this->getLanguageList();
      if ( count($languages) > 1 ) {
        echo '<div class="col-sm-2 ssp-footer__item" style="display:none;">
          <div class="dropup ssp-footer__item__lang">';
        $langnames = array(
          'no' => 'Bokmål', // Norwegian Bokmål
          'nn' => 'Nynorsk', // Norwegian Nynorsk
          'se' => 'Sámegiella', // Northern Sami
          'sam' => 'Åarjelh-saemien giele', // Southern Sami
          'da' => 'Dansk', // Danish
          'en' => 'English',
          'de' => 'Deutsch', // German
          'sv' => 'Svenska', // Swedish
          'fi' => 'Suomeksi', // Finnish
          'es' => 'Español', // Spanish
          'fr' => 'Français', // French
          'it' => 'Italiano', // Italian
          'nl' => 'Nederlands', // Dutch
          'lb' => 'Lëtzebuergesch', // Luxembourgish
          'cs' => 'Čeština', // Czech
          'sl' => 'Slovenščina', // Slovensk
          'lt' => 'Lietuvių kalba', // Lithuanian
          'hr' => 'Hrvatski', // Croatian
          'hu' => 'Magyar', // Hungarian
          'pl' => 'Język polski', // Polish
          'pt' => 'Português', // Portuguese
          'pt-br' => 'Português brasileiro', // Portuguese
          'ru' => 'русский язык', // Russian
          'et' => 'eesti keel', // Estonian
          'tr' => 'Türkçe', // Turkish
          'el' => 'ελληνικά', // Greek
          'ja' => '日本語', // Japanese
          'zh' => '简体中文', // Chinese (simplified)
          'zh-tw' => '繁體中文', // Chinese (traditional)
          'ar' => 'العربية', // Arabic
          'fa' => 'پارسی', // Persian
          'ur' => 'اردو', // Urdu
          'he' => 'עִבְרִית', // Hebrew
          'id' => 'Bahasa Indonesia', // Indonesian
          'sr' => 'Srpski', // Serbian
          'lv' => 'Latviešu', // Latvian
          'ro' => 'Românește', // Romanian
          'eu' => 'Euskara', // Basque
        );

        $textarray = array();
        foreach ($languages AS $lang => $current) {
          $lang = strtolower($lang);
          if ($current) {
            $lang_current = $langnames[$lang];
          } else {
            $textarray[] = '<li class="ssp-dropdown__two_cols--item"><a href="' . htmlspecialchars(\SimpleSAML\Utils\HTTP::addURLParameters(\SimpleSAML\Utils\HTTP::getSelfURL(), array($this->languageParameterName => $lang))) . '">' .
              $langnames[$lang] . '</a></li>';
          }
        }
        echo '<button class="ssp-btn btn ssp-btn__footer dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">'
          . $lang_current
          . '<span class="caret"></span>
          </button>
          <ul class="dropdown-menu dropdown-menu-right ssp-dropdown__two_cols" aria-labelledby="dropdownMenu1">';
        echo join(' ', $textarray);
        echo '</ul></div></div>'; // /dropup /col-sm-4
      }
    }

    ?>
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
          src="<?php echo htmlspecialchars(SimpleSAML_Module::getModuleURL('themeeosc/resources/js/cookie.js')); ?>">
  </script>
  <script type="text/javascript"
          src="<?php echo htmlspecialchars(SimpleSAML_Module::getModuleURL('themeeosc/resources/js/dropdown.js')); ?>">
  </script>
  <script type="text/javascript"
          src="<?php echo htmlspecialchars(SimpleSAML_Module::getModuleURL('themeeosc/resources/js/modal.js')); ?>">
  </script>
  <script type="text/javascript"
          src="<?php echo htmlspecialchars(SimpleSAML_Module::getModuleURL('themeeosc/resources/js/tooltip.js')); ?>">
  </script>
  <script type="text/javascript"
          src="<?php echo htmlspecialchars(SimpleSAML_Module::getModuleURL('themeeosc/resources/js/theme.js')); ?>">
  </script>

</body>
</html>
