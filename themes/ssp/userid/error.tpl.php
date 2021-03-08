<?php
$this->data['header'] = $this->t('{userid:error:header}');
$this->data['jquery'] = array('core' => TRUE);

$this->data['head'] = <<<EOF
<meta name="robots" content="noindex, nofollow" />
<meta name="googlebot" content="noarchive, nofollow" />
EOF;

$this->includeAtTemplateBase('includes/header.php');
$retryUrl = $this->data['parameters']['%BASEDIR%'] . 'saml2/idp/initSLO.php?RelayState=' . urlencode($this->data['parameters']['%RESTARTURL%']);
$translationParams = [
  '%IDPNAME%' => $this->data['parameters']['%IDPNAME%'],
  '%IDPNAMEURLENCODED%' => urlencode($this->data['parameters']['%IDPNAME%']),
  '%IDPEMAILADDRESS%' => $this->data['parameters']['%IDPEMAILADDRESS%'],
  '%RETRY_URL%' => $retryUrl,
];
?>
<div class="row">
  <div class="col-sm-12">
  <h2><?php echo $this->t('{themeeosc:userid_error:title}'); ?></h2>
    <p><?php echo $this->t('{themeeosc:userid_error:descr_'.$this->data['errorCode'].'}', $translationParams); ?></p>
    <p><?php echo (!empty($this->data['parameters']['%CUSTOMRESOLUTION%'])) ? $this->t('{themeeosc:userid_error:'.$this->data['parameters']['%CUSTOMRESOLUTION%'].'}', $translationParams) : $this->t('{themeeosc:userid_error:resolution_'.$this->data['errorCode'].'}', $translationParams); ?></p>
  </div>
</div>
<div class="row">
  <div class="col-sm-12">
    <div class="text-center">
    <a href="<?php echo $retryUrl; ?>" class="ssp-btn btn ssp-btn__action text-uppercase">
        <?php echo (strpos($this->t('{themeeosc:userid_error:go2disco}'), 'not translated') === FALSE ? $this->t('{themeeosc:userid_error:go2disco}') : ''); ?>
      </a>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-sm-12">
    <h2><?php echo (strpos($this->t('{themeeosc:userid_error:details_title}'), 'not translated') === FALSE ? $this->t('{themeeosc:userid_error:details_title}') : ''); ?></h2>
    <p><?php echo (strpos($this->t('{themeeosc:userid_error:details_'.$this->data['errorCode'].'}'), 'not translated') === FALSE ? $this->t('{themeeosc:userid_error:details_'.$this->data['errorCode'].'}') : ''); ?></p>
    <pre class="ssp-error-code">
      <?php foreach ($this->data['parameters']['%ATTRIBUTES%'] as $attr) echo $attr . '<br>'; ?>
    </pre>
  </div>
</div>
<?php
$this->includeAtTemplateBase('includes/footer.php');
