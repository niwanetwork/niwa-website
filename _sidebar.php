<div class="sidebar">
  <div class="box" id="box-twitter">
    <div class="title">Latest Tweets</div>
    <div class="post">
      <a class="twitter-timeline" data-dnt="true" href="https://twitter.com/NIWANetwork"
        data-widget-id="390347444321394689" height="350px">
        Tweets by @NIWANetwork
      </a>
      <script>
        ! function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0],
            p = /^http:/.test(d.location) ? 'http' : 'https';
          if (!d.getElementById(id)) {
            js = d.createElement(s);
            js.id = id;
            js.src = p + "://platform.twitter.com/widgets.js";
            fjs.parentNode.insertBefore(js, fjs);
          }
        }(document, "script", "twitter-wjs");
      </script>
    </div>
  </div>
  <div class="box" id="box-discord">
    <div class="title">Discord</div>
      <iframe src="https://discord.com/widget?id=701089448125005835&theme=dark" width="100%" height="300" style="min-width: 300px;" allowtransparency="true" frameborder="0" sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts"></iframe>
  </div>
  <div class="box" id="box-affiliates">
    <div class="title">Affiliates</div>
    <div class="post">
      <ul>
        <?php
          foreach ($dataHelper->getAffiliates() as $affiliate) {
            echo "
              <li>
                <a href=\"{$affiliate->url}\" title=\"{$affiliate->title}\" target=\"_blank\">
                  {$affiliate->name}
                </a>
              </li>
            ";
          }
        ?>
      </ul>
    </div>
  </div>
</div>
<p style="clear: both;"></p>
