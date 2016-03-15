<div id="content">
  <h2><?= $page->getTitle() ?></h2>
  <p><?= nl2br($page->getRawValue()->getBody()) ?></p>
  <div id="author"><?= $page->getAuthor() ?></div>
</div>
