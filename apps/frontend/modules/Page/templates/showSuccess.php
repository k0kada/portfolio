<div id="content">
  <h2><?= $page->getTitle() ?></h2>
  <p><?= nl2br($page->getRawValue()->getBody()) ?></p>
  <div id="author"><?= $page->getAuthor() ?></div>
</div>

<div id="block">
  <table class="spec">
    <tbody>
      <tr>
        <th class="arrow_box">言語</div></th>
        <td>PHP<br>Java<br>JavaScript<br>HTML<br>CSS<br>MySQL</td>
      </tr>
      <tr>
        <th>GitHub</th>
        <td>
          <?= link_to("https://github.com/k0kada", "https://github.com/k0kada") ?>
        </td>
      </tr>
    </tbody>
  </table>
</div>
