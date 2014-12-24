<script>

    var data = {
        <?= $this->draw('account/firefox/manifest'); ?>
    }

    function activate(node) {
        var event = new CustomEvent("ActivateSocialFeature");
        node.setAttribute("data-service", JSON.stringify(data));
        node.dispatchEvent(event);
    }

</script>

<div class="row">

    <div class="span10 offset1">
	            <?= $this->draw('account/menu') ?>
        <h1>Known for Firefox</h1>
    </div>
</div>
<div class="row">
	<div class="span4 offset1">
		<p style="padding-bottom: 25px; padding-top: 15px;"><img src="../../../../../gfx/other/firefox-long.png" alt="firefox" /></p>
				<p>Adding Known to Firefox is the easiest way to bookmark links, share content, and reply to posts from any page on the web.</p>
		        <p>
            <button class="firefox ff" onclick="activate(this)">Activate now            </button>
        </p>
                <p>
            <small>Requires <strong>Firefox 21</strong> or above. Download the latest version
            <a href="http://www.mozilla.org/en-US/firefox/new/" target="_blank">here</a>.</small>
        </p>
	</div>
	<div class="span5">
		<p style="text-align: right;">
		<img src="../../../../../gfx/other/firefoxsocial.png" alt="firefoxsocial" width="400" height="281" />
		</p>
	</div>
</div>

<div class="row">
	<div class="span8 offset1">
		<p>Click <strong>Enable Services</strong> to install Known in your Firefox toolbar.</p>
	</div>
</div>
	


</div>