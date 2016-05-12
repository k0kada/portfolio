<script>
$(function(){
  $('#slider1').bxSlider({
    auto:true,
    speed:1000,
    pause:4000,
    captions: true
  });
  $('#slider2').bxSlider({
    auto:true,
    speed:1000,
    pause:4000,
    captions: true
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
  <h3 id="breakout"><?= link_to('ブロック崩し', '/breakout') ?>
</h3>
  <div id="frame">
    JavaScriptでブロック崩しを作成しました。<br>
    今回はゲームライブラリ『phina.js』を使い作成しました。<br>
    phina.jsを利用した理由としては、enchant.js・cocos2d-x・Unityなどの機能を<br>
    取り込んで作成されていることもありこちらを利用しました。
  </div>
  <div align="center">
      <iframe width="400" height="650" src="/breakout"></iframe>
  </div>
  <table class="spec">
    <tbody>
      <tr>
        <th class="arrow_box">使用言語</div></th>
        <td>JavaScript</td>
      </tr>
      <tr>
        <th>URL</th>
        <td>
          <?= link_to("http://ko-okada.net/breakout", "/breakout") ?>
        </td>
      </tr>
      <tr>
        <th>GitHub</th>
        <td>
          <?= link_to("https://github.com/k0kada/breakout", "https://github.com/k0kada/breakout") ?>
        </td>
      </tr>
    </tbody>
  </table>
</div>

<div id="block">
  <h3 id="puzzle"><?= link_to('15スライドパズル', '/puzzle') ?>
</h3>
  <div id="frame">
    JavaScriptで15スライドパズルを作成しました。<br>
    パズルをシャッフルした時にパズルを解くことができるのかの判定に特に注力しました。<br>
    解答可能かのアルゴリズムとしては、奇置換なのか隅置換なのかで判定しています。
  </div>
  <div align="center">
      <iframe width="400" height="700" src="/puzzle"></iframe>
  </div>
  <table class="spec">
    <tbody>
      <tr>
        <th class="arrow_box">使用言語</div></th>
        <td>JavaScript</td>
      </tr>
      <tr>
        <th>URL</th>
        <td>
          <?= link_to("http://ko-okada.net/puzzle", "/puzzle") ?>
        </td>
      </tr>
      <tr>
        <th>GitHub</th>
        <td>
          <?= link_to("https://github.com/k0kada/puzzle", "https://github.com/k0kada/puzzle") ?>
        </td>
      </tr>
    </tbody>
  </table>
</div>

<div id="block">
  <h3 id="bbs"><?= link_to('掲示板', '/datawrite') ?>
</h3>
  <div id="frame">
    実務ではPHPフレームワークを使っていたので、今回は使わずに掲示板を作成しました。<br>
    ログインではtwitterやFacebookなどのApiを使ってログインできるようにしました。<br>
    また画像の保存はMySQLへバイナリデータで保存するようにしました。
  </div>

  <div id="slider1">
    <div><img src="/sf14/web/images/bbs/1.png" title="ログインページ"></div>
    <div><img src="/sf14/web/images/bbs/2.png" title="スレッドページ"></div>
    <div><img src="/sf14/web/images/bbs/3.png" title="コメントページ"></div>
    <div><img src="/sf14/web/images/bbs/4.png" title="検索ページ"></div>
  </div>

  <table class="spec">
    <tbody>
      <tr>
        <th class="arrow_box">使用言語</div></th>
        <td>PHP</td>
      </tr>
      <tr>
        <th>URL</th>
        <td>
          <?= link_to("http://ko-okada.net/datawrite", "http://ko-okada.net/datawrite") ?>
        </td>
      </tr>
      <tr>
        <th>GitHub</th>
        <td>
          <?= link_to("https://github.com/k0kada/bbs", "https://github.com/k0kada/bbs") ?>
        </td>
      </tr>
    </tbody>
  </table>
</div>

<div id="block">
  <h3 id="jumpman">アクションゲーム(Androidアプリ)</h3>

  <div id="frame">
    今回初めてAndroidアプリの制作に挑戦し、Android Studioを使いアクションゲームを作成いたしました。<br>
    Javaについては独学で使ったことがあり、今回の制作ではライフサイクルなどのAndroidの仕様について理解することを重点的に行いました。<br><br>
    ゲーム内容としては、ジャンプで障害物をかわしていくアクションゲームになります。<br>
    このゲームでは遊べるステージを4つ用意し、<br>
    ・ステージ１では、スクロールしてくる地面の段差を上手くジャンプで避けるステージ<br>
    ・ステージ２では、その地面に穴を追加し穴と段差に落ちないようにするステージ<br>
    ・ステージ３では、上の画面にも地面を作成しタッチの長さを上手く調整してジャンプするステージ<br>
    ・ステージ４では、敵オブジェクトを配置し敵にぶつからないにするステージ<br>
    として遊べるゲームとして作成いたしました。
  </div>

  <div id="slider2">
    <div><img src="/sf14/web/images/jumpman/menu.png" title="menu"></div>
    <div><img src="/sf14/web/images/jumpman/stage1.png" title="stage1"></div>
    <div><img src="/sf14/web/images/jumpman/stage2.png" title="stage2"></div>
    <div><img src="/sf14/web/images/jumpman/stage3.png" title="stage3"></div>
    <div><img src="/sf14/web/images/jumpman/stage4.png" title="stage4"></div>
    <div><img src="/sf14/web/images/jumpman/dialog.png" title="確認ダイアログ"></div>
  </div>

  <table class="spec">
    <tbody>
      <tr>
        <th class="arrow_box">使用言語</div></th>
        <td>Java</td>
      </tr>
      <tr>
        <th>IDE</th>
        <td>Android Studio</td>
      </tr>
      <tr>
        <th>デバッグ実機</th>
        <td>Galaxy Note3</td>
      </tr>
      <tr>
        <th>GitHub</th>
        <td>
          <?= link_to("https://github.com/k0kada/jumpMan", "https://github.com/k0kada/jumpMan") ?>
        </td>
      </tr>
    </tbody>
  </table>
</div>


<div id="block">
  <h3 id="portfolio"><?= link_to('ポートフォリオサイト', 'homepage') ?></h3>
  <div id="frame">
    このポートフォリオサイトを作成する上で、サーバーの立ち上げから制作を行いました。<br>
    今回初めての試みだったのですが、PHPやApacheの導入をはじめ、
    前職で使っていたフレームワークであるSymfonyの導入まで行うことができ、
    業務ではあまり触れなかったサーバー設定などの理解を深めることができました。<br>

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
        <th>使用言語</th>
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
        <th>GitHub</th>
        <td>
          <?= link_to("https://github.com/k0kada/portfolio", "https://github.com/k0kada/portfolio") ?>
        </td>
      </tr>
    </tbody>
  </table>
</div>
