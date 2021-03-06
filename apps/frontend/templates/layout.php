<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
  <head>
    <? include_http_metas() ?>
    <? include_metas() ?>
    <? include_title() ?>
    <? include_stylesheets() ?>
    <? include_javascripts() ?>
  </head>
  <body>
    <div id="wrapper">
      <div id="header">
        <div class="container_12">
          <div class="grid_12">
            <? include_partial('global/Header') ?>
          </div>
          <div id="menu">
            <div class="grid_12">
              <? include_partial('global/Menu') ?>
            </div>
          </div>
          <div class="clear"></div>
        </div>
      </div>
      <div id="main">
        <div class="container_12">
          <div class="grid_3">
            <div id="left">
              <? include_component('Page', 'ListLatestNews') ?>
            </div>
          </div>
          <div class="grid_9">
            <div id="breadcrumb">
              <? include_slot('breadcrumb') ?>
            </div>
            <div id="right">
              <?= $sf_content ?>
            </div>
          </div>
          <div class="clear"></div>
        </div>
      </div>
      <div id="footer">
        <div class="container_12">
          <div class="grid_12">
            <? include_partial('global/Footer') ?>
          </div>
          <div class="clear"></div>
        </div>
      </div>
    </div>
  </body>
</html>

