<? slot('breadcrumb') ?>
  <?= link_to('トップ', 'homepage') ?> >
  <?= $page->getCategory() ?>
<? end_slot() ?>
<div id="content">
   <h2><?= $page->getTitle() ?></h2>
</div>
<? if (count($pageList)) { ?>
  <ul>
    <? foreach ($pageList as $page) { ?>
      <li>
        <?= $page->getDateTimeObject('created_at')->format('m/d') ?>
        <?= link_to($page->getTitle(), 'news_show', array('slug' => $page->getSlug())) ?>
      </li>
    <? } ?>
  </ul>
<? } else { ?>
お知らせはありません
<? } ?>
