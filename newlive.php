
<html lang="en">
<head>
    <script type="text/javascript"
            src="https://cdn.jsdelivr.net/npm/clappr@latest/dist/clappr.min.js">
    </script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/clappr-ima-plugin@latest/dist/clappr-ima-plugin.min.js"></script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-96048777-6"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-96048777-6');
</script>
    <style>
        #player-wrapper {
            position: fixed;
            width: 100%!important;
            height: 100%!important;
        }
    </style>
</head>
<body>
    <script data-cfasync="false" type="text/javascript" src="//fourthchoseark.com/riE2UjzGEkRZgetFe/25837"></script><div id="player-wrapper"></div>
<script>
    var playerElement = document.getElementById("player-wrapper");

    var ErrorPlugin = Clappr.ContainerPlugin.extend({
        name: 'error_plugin',
        background: 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAoAAAAFoBAMAAAA1HFdiAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAG1BMVEX5+fn//wAA//8A/wD/AP//AAAAAP8XFxf///8H5gWfAAAAAWJLR0QIht6VegAAAAd0SU1FB98IBRIsAXmGk48AAAI5SURBVHja7dJBDYBADADBs4AFLGABC1iohbOPhv1BMvu+NLlp10odqTN1pe7Uk5pQ8wMIECBAgAABAgQIECBAgAABAgQIECBAgAABAgQIECBAgAABAgQIECBAgAABAgQIECBAgAABAgQIECBAgAABAgQIECBAgAABAgQIECBAgAABAgQIECBAgAABAgQIECBAgAABAgQIECBAgAABAgQIECBAgAABAgQIECBAgAABAgQIECBAgAABAgQIECBAgAABAgQIECBAgAABAgQIECBAgAABAgQIECBAgAABAgQIECBAgAABAgQIECBAgAABAgQIECBAgAABAgQIECBAgAABAgQIECBAgAABAgQIECBAgAABAgQIECBAgAABAgQIECBAgAABAgQIECBAgAABAgQIECBAgAABAgQIECBAgAABAgQIECBAgAABAgQIECBAgAABAgQIECBAgAABAgQIECBAgAABAgQIECBAgAABAgQIECBAgAABAgQIECBAgAABAgQIECBAgAABAgQIECBAgAABAgQIECBAgAABAgQIECBAgAABAgQIECBAgAABAgQIECBAgAABAgQIECBAgAABAgQIECBAgAABAgQIECBAgAABAgQIECBAgAABAgQIECBAgAABAgQIECBAgAABAgQIECDA/wKWxzM71T7ZZrfltNnppgACBAgQIECAAAECBAgQIECAAAECBAgQIECAAAECBAgQIECAAAECBAgQIECAAAECBAgQIECAAL8B+ALjSfYzPnmdzgAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAxNS0wOC0wNVQxODo0NDowMSswMTowMCL95a4AAAAldEVYdGRhdGU6bW9kaWZ5ADIwMTUtMDgtMDVUMTg6NDQ6MDErMDE6MDBToF0SAAAAAElFTkSuQmCC',
        bindEvents: function() { this.listenTo(this.container, Clappr.Events.CONTAINER_ERROR, this.onError) },
        hide: function() { this._err && this._err.remove() },
        show: function() {
            var $ = Clappr.$
            this.hide();
            var txt = (this.options.errorPlugin && this.options.errorPlugin.text) ? this.options.errorPlugin.text : 'A fatal error occured.';
            this._err = $('<div>')
                .css({
                    'position': 'absolute',
                    'z-index': '999',
                    'width': '100%',
                    'height': '100%',
                    'background-image': 'url(' + this.background + ')',
                    'background-size': 'contain',
                    'background-repeat': 'no-repeat',
                    'padding-top': '15%',
                    'text-align': 'center',
                    'font-weight': 'bold',
                    'text-shadow': '1px 1px #fff',
                })
                .append($('<h2>')
                    .text(txt)
                    .css({
                        'font-size': '200%',
                    }))
                .append($('<p>').html('Retrying in <span class="retry-counter">5</span> seconds ...')
                    .css({
                        'font-size': '120%',
                        'margin': '15px',
                    }));
            this.container && this.container.$el.prepend(this._err);
        },
        onError: function(e) {
            if (!this.container) return;
            this.show();
            this.container.getPlugin('click_to_pause').disable();
            var tid, t = 5, retry = function() {
                clearTimeout(tid);
                if (t === 0) {
                    this.container.getPlugin('click_to_pause').enable();
                    if (this.options.errorPlugin && this.options.errorPlugin.onRetry) {
                        this.options.errorPlugin.onRetry(e);
                        return;
                    } else {
                        this.container.stop();
                        this.container.play();
                        return;
                    }
                }
                $('.retry-counter').text(t);
                t--;
                tid = setTimeout(retry, 500);
            }.bind(this);
            retry();
        }
    });

    var player = new Clappr.Player({
        disableErrorScreen: true, // Disable the internal error screen plugin
        source: 'https://fs10.bonsaiprolink.xyz/ipl/bonsaihd.m3u8',
		 playback: {
			playInline: true, // Required by skippable ads on iOS (not fullscreen)
		  },
        plugins: [ErrorPlugin, ClapprImaPlugin],
        errorPlugin: {
            // text: 'My custom error message.',
            onRetry: function(e) {
                // simulate successful recovery
                // or decide here what to do between each retry
                player.configure({
                    source: 'https://fs10.bonsaiprolink.xyz/ipl/bonsaihd.m3u8',
                    autoPlay: true,
                });
            }
        },
		imaPlugin: {
			// requestAdIfNoAutoplay: true,
			// disableNonLinearForIOS: true,
			// resetAdOnEnded: true,
			// onAdPlayerReady: function (adPlayer) { adPlayer.on('midpoint', function(o) { console.log(o); }); },
			imaAdPlayer: {
			  tag: 'https://v.adtrue.com/tag/vast?pzoneid=20461&page_url=[PAGE_URL_ENCODED]&width=1920&height=1080',
			  // vpaidMode: 2,
			  // locale: 'fr',
			  // maxDuration: 30000,
			  // nonLinearMaxDuration: 8000,
			  // adsRenderingOptions: {
			  //   useStyledNonLinearAds: true,
			  // },
			},
		  },
        width: '100%',
        height: '100%',
    });

    player.attachTo(playerElement);
</script>
</body>
</html>