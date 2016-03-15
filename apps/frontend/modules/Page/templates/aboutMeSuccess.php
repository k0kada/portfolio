<script>
  $(function(){
    $().timelinr({
      arrowKeys: 'true'
    })
  });
</script>

<? slot('breadcrumb') ?>
  <?= link_to('トップ', 'homepage') ?> >
  <?= $page->getCategory() ?>
<? end_slot() ?>
<div id="content">
   <h2><?= $page->getTitle() ?></h2>
</div>

  <div id="timeline">
    <ul id="dates">
      <li><a href="#2007">2007</a></li>
      <li><a href="#2011">2011</a></li>
      <li><a href="#2015">2013</a></li>
      <li><a href="#2015">2015</a></li>

    </ul>
    <ul id="issues">
      <li id="2007">
        <h1>2007</h1>
        <h4>広島国際大学 入学</h4>
        <p>心理学を専攻し、対話におけるコミュニケーションについて研究しました。</p>
        <p>また、サークルでは子どもを対象としたボランティア部で活動していました。</p>
      </li>
      <li id="2011">
        <h1>2011</h1>
        <h4>立教大学 大学院 入学</h4>
        <p>社会学を専攻し、集団におけるコミュニケーションについて研究しました。</p>
        <p>特にソーシャルメディアの観点から、『ナラティブ』というものをテーマにしていました。</p>
      </li>
      <li id="2013">
        <h1>2013</h1>
        <h4>TINAMI株式会社 入社</h4>
        <?= link_to('http://www.tinami.com/', 'http://www.tinami.com/') ?>
        <p>
            イラスト投稿コミュニティサイトであるTINAMIに企画・営業として入社し、<br>
            主に自社で行うイラストコンテストの企画や、広告出稿などの営業を行っていました。
        </p>
      </li>
      <li id="2015">
        <h1>2015</h1>
        <h4>株式会社ごちぽん 入社</h4>
        <?= link_to('http://gcpn.jp/', 'http://gcpn.jp/') ?>
        <p>
          すごろくをベースにご当地の賞品が当たるソーシャルゲーム『ごちぽん』を運営している<br>
          ごちぽんにサーバーサイドエンジニアとして入社しました。<br>
          主にPHPを使い、『ごちぽん』でのイベント作成やアップデート業務を行っていました。
        </p>
        <p>また、独学でもPHPやJavaなどを学び、twitterのような一言掲示板なども作成していました。</p>
      </li>
    </ul>
    <div id="grad_left"></div>
    <div id="grad_right"></div>
    <a href="#" id="next">+</a>
    <a href="#" id="prev">-</a>
  </div>
