        <?php if (option('environment') == 'production') : ?>
        <?= snippet('matomo') ?>
        <?php endif ?>

        <!-- jQuery -->
        <?= js('assets/scripts/jquery.js') ?>

        <!-- Bootstrap Core JavaScript -->
        <?= js('assets/scripts/bootstrap.min.js') ?>

        <!-- Plugin JavaScript -->
        <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
        <?= js('assets/scripts/classie.js') ?>
        <?= js('assets/scripts/cbpAnimatedHeader.js') ?>

        <!-- Contact Form JavaScript -->
        <script>
            window.addEventListener('load', function () {
            var form = document.getElementById('contact-form');
            var message = document.getElementById('error-message');
            var fields = {};

            form.querySelectorAll('[name]').forEach(function (field) {
                fields[field.name] = field;
            });

            // Displays all error messages and adds 'error' classes to the form fields with
            // failed validation.
            var handleError = function (response) {
                var errors = [];
                for (var key in response) {
                    if (!response.hasOwnProperty(key)) continue;
                    if (fields.hasOwnProperty(key)) fields[key].classList.add('error');
                    Array.prototype.push.apply(errors, response[key]);
                }
                message.innerHTML = errors.join('<br>');
            }

            var onload = function (e) {
                if (e.target.status === 200) {
                    message.innerHTML = 'Success!'
                } else {
                    handleError(JSON.parse(e.target.response));
                }
            };

            var submit = function (e) {
                e.preventDefault();
                var request = new XMLHttpRequest();
                request.open('POST', e.target.action);
                request.onload = onload;
                request.send(new FormData(e.target));
                // Remove all 'error' classes of a possible previously failed validation.
                for (var key in fields) {
                    if (!fields.hasOwnProperty(key)) continue;
                    fields[key].classList.remove('error');
                }
            };
            form.addEventListener('submit', submit);
        });
        </script>

        <!-- Custom Theme JavaScript -->
        <?= js('assets/scripts/agency.js') ?>

        <!-- Lightbox 2 -->
        <?= css('assets/styles/lightbox.css') ?>
        <?= js('assets/scripts/lightbox.js') ?>

        <script>
            var audio;
            var playlist;
            var tracks;
            var current;

            init();
            function init(){
                current = 0;
                audio = $('#audio_projektvortrag');
                playlist = $('#playlist_projektvortrag');
                tracks = playlist.find('li a');
                len = tracks.length;
                audio[0].volume = .10;
            // audio[0].play();
                playlist.find('a').click(function(e){
                    e.preventDefault();
                    link = $(this);
                    current = link.parent().index();
                    run(link, audio[0]);
                });
                audio[0].addEventListener('ended',function(e){
                    current++;
                    if(current == len){
                        current = 0;
                        link = playlist.find('a')[0];
                    }else{
                        link = playlist.find('a')[current];
                    }
                    run($(link),audio[0]);
                });
            }
            function run(link, player){
                    player.src = link.attr('href');
                    par = link.parent();
                    par.addClass('active').siblings().removeClass('active');
                    audio[0].load();
                    audio[0].play();
            }
        </script>

        <?php
            $count = 1;
            foreach ($kirby->collection('compositions') as $composition) :

            if ($composition->samples()->isEmpty()) {
                $count++;
                continue;
            }
        ?>
        <script>
            var audio<?= $count ?>;
            var playlist<?= $count ?>;
            var tracks<?= $count ?>;
            var current<?= $count ?>;

            init<?= $count ?>();
            function init<?= $count ?>(){
                current<?= $count ?> = 0;
                audio<?= $count ?> = $('#audio_<?= $composition->uid() ?>');
                playlist<?= $count ?> = $('#playlist_<?= $composition->uid() ?>');
                tracks<?= $count ?> = playlist<?= $count ?>.find('li a');
                len = tracks<?= $count ?>.length;
                audio<?= $count ?>[0].volume = .10;
            // audio[0].play();
                playlist<?= $count ?>.find('a').click(function(e){
                    e.preventDefault();
                    link = $(this);
                    current<?= $count ?> = link.parent().index();
                    run<?= $count ?>(link, audio<?= $count ?>[0]);
                });
                audio<?= $count ?>[0].addEventListener('ended',function(e){
                    current<?= $count ?>++;
                    if(current<?= $count ?> == len){
                        current<?= $count ?> = 0;
                        link = playlist<?= $count ?>.find('a')[0];
                    }else{
                        link = playlist<?= $count ?>.find('a')[current<?= $count ?>];
                    }
                    run<?= $count ?>($(link),audio<?= $count ?>[0]);
                });
            }
            function run<?= $count ?>(link, player){
                    player.src = link.attr('href');
                    par = link.parent();
                    par.addClass('active').siblings().removeClass('active');
                    audio<?= $count ?>[0].load();
                    audio<?= $count ?>[0].play();
            }
        </script>
        <?php
            $count++;
            endforeach;
        ?>

        <?php
            $count = 1;
            foreach ($kirby->collection('compositions') as $composition) :
        ?>
        <script>
            $('#portfolio_<?= $composition->uid() ?>').on('show.bs.modal', function (e)
            {
                $('.komposition-video').show();
            });

            $('#portfolio_<?= $composition->uid() ?>').on('hide.bs.modal', function (e)
            {
                $("audio").each(function () { this.pause() });
                <?php if ($composition->video()->isNotEmpty()) : ?>
                $('.komposition-video').hide();
                jQuery("#youtube-player<?= $count ?>").attr("src", jQuery("#youtube-player<?= $count ?>").attr("src"));
                <?php endif ?>
            });
        </script>
        <?php
            $count++;
            endforeach;
        ?>
    </body>
</html>
