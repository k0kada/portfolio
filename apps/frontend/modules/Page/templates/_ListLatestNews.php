<h3>お知らせ一覧</h3>
<? if ($latestNewsPager->getNbResults()) { ?>
  <ul>
    <? foreach ($latestNewsPager->getResults() as $page) { ?>
      <li>
        <?= $page->getDateTimeObject('created_at')->format('m/d') ?>
        <?= link_to($page->getTitle(), 'news_show', array('slug'=>$page->getSlug())) ?>
      </li>
    <? } ?>
  </ul>
<? } else { ?>
  お知らせはありません
<? } ?>
