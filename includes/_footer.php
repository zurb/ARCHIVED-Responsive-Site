  <footer class="row">
    <section class="five columns">
      <h6><strong>Brought to You by ZURB</strong></h6>
      <p>This site is maintained and curated by <a href="http://www.zurb.com/">ZURB</a>, a product design agency in Campbell, California. Responsive design is the future, and we want to do what we can to make the Web a more responsive place. <a href="http://zurb.com">More About ZURB &rarr;</a></p>
    </section>

    <section class="four columns">
      <h6><strong>Want a head start?</strong></h6>
      <p>We created <a href="http://foundation.zurb.com">Foundation</a>, the most advanced responsive front-end framework in the world. Try it out and get a jump on responsive design.</p>
    </section>

    <section class="three columns">
      <h6><strong>Follow Along With Us</strong></h6>
      <p>We share all kinds of goodies online.</p>

      <ul class="link-list">
      	<li>
    	    <a href="http://www.facebook.com/ZURB" target="_blank"><span class="glyph social">d</span></a>
    		</li>
    		<li>
          <a href="https://plusone.google.com/_/+1/confirm?url=http://foundation.zurb.com&title=Foundation%20from%20ZURB" target="_blank"><span class="glyph social">l</span></a>
    		</li>
    		<li>
    			<a href="http://www.twitter.com/foundationzurb" target="_blank"><span class="glyph social">e</span></a>
    		</li>
    	</ul>

    </section>
  </footer>

  <div id="copyright">
    <div class="row">
      <div class="four columns">
        <p>&copy; 2012 ZURB, inc.</p>
      </div>
      <div class="eight columns">
        <ul class="link-list right">
          <li><a href="index.php">Home</a></li>
          <li><a href="articles.php">Articles</a></li>
          <li><a href="tools.php">Tools and Tips</a></li>
          <li><a href="http://feeds.feedburner.com/zurb/blog">Subscribe to the Articles</a></li>
        </ul>
      </div>
    </div>
  </div>

  <script src="javascripts/foundation/jquery.min.js"></script>
	<script src="javascripts/foundation/modernizr.foundation.js"></script>
	<script src="jswipe.js"></script>
	<script src="javascripts/foundation/jquery.reveal.js"></script>
	<script src="javascripts/foundation/jquery.orbit-1.4.0.js"></script>
	<script src="javascripts/foundation/jquery.customforms.js"></script>
	<script src="javascripts/foundation/jquery.placeholder.min.js"></script>
	<script src="javascripts/foundation/jquery.tooltips.js"></script>
  <script src="javascripts/foundation.top-bar.js"></script>
  <script src="javascripts/download.js"></script>
	<script src="javascripts/foundation/app.js"></script>
	<script src="swipe.js"></script>
	<script src="github.js"></script>
	<script src="http://www.zurb.com/assets/zurb.mega-drop.js"></script>

  <script>

    var _gaq = _gaq || [];
  	_gaq.push(
  	  ['_setAccount', 'UA-2195009-2'],
  	  ['_trackPageview'],
  	  ['b._setAccount', 'UA-2195009-27'],
  	  ['b._trackPageview']
  	);

    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();

		$(document).on('click', '.src-download', function (event) {
			_gaq.push(['_trackEvent', 'Foundation', 'Downloaded']);
		});
  </script>
</body>
</html>
