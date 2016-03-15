<? slot('breadcrumb') ?>
  <?= link_to('トップ', 'homepage') ?> >
  <?= $page->getCategory() ?>
<? end_slot() ?>
<div id="content">
  <h2><?= $page->getTitle() ?></h2>
</div>

<div id="block">
  <h3><?= link_to('ポートフォリオサイト', 'homepage') ?></h3>
  <div id="frame">
    このポートフォリオサイトを作成する上で、サーバーの立ち上げから制作を行いました。<br>
    今回初めての試みだったのですが、PHPやApacheの導入をはじめ、
    前職で使っていたフレームワークであるSymfonyの導入まで行うことができ、
    業務ではあまり触れなかったサーバー設定などの理解を深めることができました。<br>
    このサイトの特徴として、『お知らせ』の管理はfixtures.ymlを使いDBに保存、追加、削除などを
    簡単にできるように設計しました。今後はcsvでのDB更新を行ったり、admin機能をつけるなどして
    より簡単に情報の更新をできるようにと考えています。

  </div>

  <table class="spec">
    <tbody>
      <tr>
        <th class="arrow_box">OS</div></th>
        <td>Linux version 4.1.17-22.30.amzn1.x86_64</td>
      </tr>
      <tr>
        <th>Apache</th>
        <td>2.4.16</td>
      </tr>
      <tr>
        <th class="arrow_box">仕様言語</th>
        <td>
          PHP 5.5.31
        </td>
      </tr>
      <tr>
        <th>Framework</th>
        <td>
          symfony1.4
        </td>
      </tr>
      <tr>
        <th>制作期間</th>
        <td>2016/03/15~2016/03/16</td>
      </tr>
      <tr>
        <th>ソース</th>
        <td>
          bitbucket<br>
          <?= link_to('https://bitbucket.org/k0kada/portfolio','https://bitbucket.org/k0kada/portfolio') ?></td>
  </table>
      </tr>
    </tbody>
  </table>
</div>
