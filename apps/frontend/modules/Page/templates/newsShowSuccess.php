<? slot('breadcrumb') ?>
  <?= link_to('トップ', 'homepage') ?> >
  <?= link_to('お知らせ一覧', 'news_list') ?> >
  <?= $page->getSlug() ?>
<? end_slot() ?>
<div id="content">
  <h2><?= $page->getTitle() ?></h2>
  <p><?= nl2br($page->getRawValue()->getBody()) ?></p>
</div>
<div class="contentNav">
 <?= link_to('お知らせの一覧に戻る', 'news_list') ?>
</div>
