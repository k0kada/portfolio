<link href="css/style-timelinr.css" rel="stylesheet">
<script>
    $(function(){
        $().timelinr({
            arrowKeys: 'true',
            autoPlayDirection: 'forward'
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
      <li><a href="#2012">2012</a></li>
      <li><a href="#2013">2013</a></li>
      <li><a href="#2014">2014</a></li>
  </ul>
  <ul id="issues">
      <li id="2012">
          <img src="/images/1.png" width="30" height="256" /> 
          <h1>2012年</h1>
          <p>東京スカイツリーが開業</p>
          <p>ロンドンオリンピック開催、史上最多のメダル獲得</p>
          <p>ノーベル生理学・医学賞に京都大学教授山中伸弥が受賞</p>
      </li>
      <li id="2013">
          <img src="/images/1.png" width="30" height="256" /> 
          <h1>2013年</h1>
          <p>ＴＰＰ交渉参加を表明</p>
          <p>長嶋茂雄氏と松井秀喜氏に国民栄誉賞</p>
      </li>
      <li id="2014">
          <img src="/images/1.png" width="30" height="256" /> 
          <h1>2014年</h1>
          <p>本田圭佑セリエＡデビュー</p>
          <p>マー君ヤンキースへ</p>
      </li>
  </ul>
  <div id="grad_left"></div>
  <div id="grad_right"></div>
  <a id="next">+</a>
  <a id="prev">-</a>
</div>
