<script>
$(function(){
  $('#slider1').bxSlider({
    auto:true,
    speed:1000,
    pause:3000,
    captions: true,

  });
});

</script>

<? slot('breadcrumb') ?>
  <?= link_to('トップ', 'homepage') ?> >
  <?= $page->getCategory() ?>
<? end_slot() ?>
<div id="content">
  <h2><?= $page->getTitle() ?></h2>
</div>

<div id="block">
  <h3>アクションゲーム(アンドロイドアプリ)</h3>

  <div id="slider1">
    <div><img src="/images/jumpman/menu.png" title="menu"></div>
    <div><img src="/images/jumpman/stage1.png" title="stage1"></div>
    <div><img src="/images/jumpman/stage2.png" title="stage2"></div>
    <div><img src="/images/jumpman/stage3.png" title="stage3"></div>
    <div><img src="/images/jumpman/stage4.png" title="stage4"></div>
    <div><img src="/images/jumpman/dialog.png" title="確認ダイアログ"></div>
  </div>
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
        <th>DB</th>
        <td>MySQL 5.6.29</td>
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
    </tbody>
  </table>
</div>
