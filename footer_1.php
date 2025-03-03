<div class="">
    <div class="container">
        <hr/>
        <div class="fb-page" data-href="https://www.facebook.com/marubox" data-tabs="timeline" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="true">
            <div class="fb-xfbml-parse-ignore">
                <blockquote cite="https://www.facebook.com/marubox">
                    <a href="https://www.facebook.com/marubox">Electro Car</a>
                </blockquote></div>
        </div>
    </div>
</div>
<footer class="bg-footer"><!-- bg-footer -->
    <div class="container">
        <hr/>
        <div class="clearfix">
            <p class="pull-right softn">By <a href="http://softn.red/" title="Portal SoftN" target="_blank">SoftN</a></p>
            <p class="pull-left">&copy; Electro-Car.es - Arroyo de la Miel - Benalmádena - Málaga</p>
        </div>
    </div>
</footer><!-- bg-footer -->
<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/bootstrap.js" type="text/javascript"></script>
<script src="js/modernizr-custom.js"></script>
<script src="js/imagesloaded.pkgd.min.js"></script>
<script src="js/masonry.pkgd.min.js"></script>
<script src="js/classie.js"></script>
<script src="js/main.js"></script>
<script>
    (function () {
        var support = {transitions: Modernizr.csstransitions},
        // transition end event name
        transEndEventNames = {'WebkitTransition': 'webkitTransitionEnd', 'MozTransition': 'transitionend', 'OTransition': 'oTransitionEnd', 'msTransition': 'MSTransitionEnd', 'transition': 'transitionend'},
        transEndEventName = transEndEventNames[ Modernizr.prefixed('transition') ],
                onEndTransition = function (el, callback) {
                    var onEndCallbackFn = function (ev) {
                        if (support.transitions) {
                            if (ev.target != this)
                                return;
                            this.removeEventListener(transEndEventName, onEndCallbackFn);
                        }
                        if (callback && typeof callback === 'function') {
                            callback.call(this);
                        }
                    };
                    if (support.transitions) {
                        el.addEventListener(transEndEventName, onEndCallbackFn);
                    } else {
                        onEndCallbackFn();
                    }
                };

        new GridFx(document.querySelector('.grid'), {
            imgPosition: {
                x: 1,
                y: -0.75
            },
            onOpenItem: function (instance, item) {
                var win = {width: window.innerWidth, height: window.innerHeight};
                instance.items.forEach(function (el) {
                    if (item != el) {
                        var delay = Math.floor(Math.random() * 130);
                        el.style.WebkitTransition = 'opacity .5s ' + delay + 'ms cubic-bezier(.7,0,.3,1), -webkit-transform .5s ' + delay + 'ms cubic-bezier(.7,0,.3,1)';
                        el.style.transition = 'opacity .5s ' + delay + 'ms cubic-bezier(.7,0,.3,1), transform .5s ' + delay + 'ms cubic-bezier(.7,0,.3,1)';

                        var elOffset = el.getBoundingClientRect(),
                                elSize = {width: el.offsetWidth, height: el.offsetHeight};

                        el.style.WebkitTransform = 'translate3d(' + (win.width / 2 - elOffset.left - elSize.width / 2) + 'px,' + (win.height - elOffset.top - elSize.height / 2) + 'px,0) scale3d(0,0,1)';
                        el.style.transform = 'translate3d(' + (win.width / 2 - elOffset.left - elSize.width / 2) + 'px,' + (win.height - elOffset.top - elSize.height / 2) + 'px,0) scale3d(0,0,1)';
                        el.style.opacity = 0;
                    }
                });
            },
            onCloseItem: function (instance, item) {
                instance.items.forEach(function (el) {
                    if (item != el) {
                        el.style.WebkitTransition = 'opacity .3s, -webkit-transform .3s';
                        el.style.transition = 'opacity .3s, transform .3s';

                        el.style.WebkitTransform = 'translate3d(0,0,0) scale3d(1,1,1)';
                        el.style.transform = 'translate3d(0,0,0) scale3d(1,1,1)';
                        el.style.opacity = 1;

                        onEndTransition(el, function () {
                            el.style.transition = 'none';
                            el.style.WebkitTransform = 'none';
                        });
                    }
                });
            }
        });
    })();
</script>
<div id="fb-root"></div>
<script>(function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id))
            return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.5&appId=365892200191950";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
</body>
</html>
