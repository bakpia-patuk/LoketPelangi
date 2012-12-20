<?php
// auto-generated by sfViewConfigHandler
// date: 2012/12/21 01:20:42
$response = $this->context->getResponse();


  $templateName = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_template', $this->actionName);
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());



  if (null !== $layout = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_layout'))
  {
    $this->setDecoratorTemplate(false === $layout ? false : $layout.$this->getExtension());
  }
  else if (null === $this->getDecoratorTemplate() && !$this->context->getRequest()->isXmlHttpRequest())
  {
    $this->setDecoratorTemplate('' == 'layout' ? false : 'layout'.$this->getExtension());
  }
  $response->addHttpMeta('content-type', 'text/html', false);
  $response->addMeta('title', 'POS Loket Pelangi', false, false);
  $response->addMeta('description', 'POS Loket Pelangi', false, false);
  $response->addMeta('keywords', 'pos, loket pelangi', false, false);
  $response->addMeta('language', 'id', false, false);
  $response->addMeta('robots', 'index, follow', false, false);

  $response->addStylesheet('main.css', '', array ());
  $response->addStylesheet('bootstrap.css', '', array ());
  $response->addStylesheet('bootstrap-responsive.css', '', array ());
  $response->addJavascript('html5.js', '', array ());
  $response->addJavascript('js/jquery/jquery.js', '', array ());
  $response->addJavascript('bootstrap-transition.js', '', array ());
  $response->addJavascript('bootstrap-alert.js', '', array ());
  $response->addJavascript('bootstrap-modal.js', '', array ());
  $response->addJavascript('bootstrap-dropdown.js', '', array ());
  $response->addJavascript('bootstrap-scrollspy.js', '', array ());
  $response->addJavascript('bootstrap-tab.js', '', array ());
  $response->addJavascript('bootstrap-tooltip.js', '', array ());
  $response->addJavascript('bootstrap-popover.js', '', array ());
  $response->addJavascript('bootstrap-button.js', '', array ());
  $response->addJavascript('bootstrap-collapse.js', '', array ());
  $response->addJavascript('bootstrap-carousel.js', '', array ());
  $response->addJavascript('bootstrap-typeahead.js', '', array ());


