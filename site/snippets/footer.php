        <!-- jQuery -->
        <?= js('assets/scripts/jquery.js') ?>

        <!-- Bootstrap Core JavaScript -->
        <?= js('assets/scripts/bootstrap.min.js') ?>

        <!-- Plugin JavaScript -->
        <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
        <?= js('assets/scripts/classie.js') ?>
        <?= js('assets/scripts/cbpAnimatedHeader.js') ?>

        <!-- Contact Form JavaScript -->
        <?= js('assets/scripts/jqBootstrapValidation.js') ?>
        <?= js('assets/scripts/contact_me.js') ?>

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
                audio = $('#audio_neun_maersche');
                playlist = $('#playlist_neun_maersche');
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

        <script>
            var audio2;
            var playlist2;
            var tracks2;
            var current2;

            init2();
            function init2(){
                current2 = 0;
                audio2 = $('#audio_skizzenblock');
                playlist2 = $('#playlist_skizzenblock');
                tracks2 = playlist2.find('li a');
                len2 = tracks2.length;
                audio2[0].volume = .10;
            // audio[0].play();
                playlist2.find('a').click(function(e2){
                    e2.preventDefault();
                    link2 = $(this);
                    current2 = link2.parent().index();
                    run2(link2, audio2[0]);
                });
                audio2[0].addEventListener('ended',function(e2){
                    current2++;
                    if(current2 == len2){
                        current2 = 0;
                        link2 = playlist2.find('a')[0];
                    }else{
                        link2 = playlist2.find('a')[current2];
                    }
                    run2($(link2),audio2[0]);
                });
            }
            function run2(link2, player2){
                    player2.src = link2.attr('href');
                    par2 = link2.parent();
                    par2.addClass('active').siblings().removeClass('active');
                    audio2[0].load();
                    audio2[0].play();
            }
        </script>

        <script>
            var audio3;
            var playlist3;
            var tracks3;
            var current3;

            init3();
            function init3(){
                current3 = 0;
                audio3 = $('#audio_projektvortrag');
                playlist3 = $('#playlist_projektvortrag');
                tracks3 = playlist3.find('li a');
                len3 = tracks3.length;
                audio3[0].volume = .10;
            // audio[0].play();
                playlist3.find('a').click(function(e3){
                    e3.preventDefault();
                    link3 = $(this);
                    current3 = link3.parent().index();
                    run3(link3, audio3[0]);
                });
                audio3[0].addEventListener('ended',function(e3){
                    current3++;
                    if(current3 == len3){
                        current3 = 0;
                        link3 = playlist3.find('a')[0];
                    }else{
                        link3 = playlist3.find('a')[current3];
                    }
                    run3($(link3),audio3[0]);
                });
            }
            function run3(link3, player3){
                    player3.src = link3.attr('href');
                    par3 = link3.parent();
                    par3.addClass('active').siblings().removeClass('active');
                    audio3[0].load();
                    audio3[0].play();
            }
        </script>

        <script>
            var audio4;
            var playlist4;
            var tracks4;
            var current4;

            init4();
            function init4(){
                current4 = 0;
                audio4 = $('#audio_drei_miniaturen');
                playlist4 = $('#playlist_drei_miniaturen');
                tracks4 = playlist4.find('li a');
                len4 = tracks4.length;
                audio4[0].volume = .10;
            // audio[0].play();
                playlist4.find('a').click(function(e4){
                    e4.preventDefault();
                    link4 = $(this);
                    current4 = link4.parent().index();
                    run4(link4, audio4[0]);
                });
                audio4[0].addEventListener('ended',function(e4){
                    current4++;
                    if(current4 == len4){
                        current4 = 0;
                        link4 = playlist4.find('a')[0];
                    }else{
                        link4 = playlist4.find('a')[current4];
                    }
                    run4($(link4),audio4[0]);
                });
            }
            function run4(link4, player4){
                    player4.src = link4.attr('href');
                    par4 = link4.parent();
                    par4.addClass('active').siblings().removeClass('active');
                    audio4[0].load();
                    audio4[0].play();
            }
        </script>

        <script>
            var audio5;
            var playlist5;
            var tracks5;
            var current5;

            init5();
            function init5(){
                current5 = 0;
                audio5 = $('#audio_neutoenend');
                playlist5 = $('#playlist_neutoenend');
                tracks5 = playlist5.find('li a');
                len5 = tracks5.length;
                audio5[0].volume = .10;
            // audio[0].play();
                playlist5.find('a').click(function(e5){
                    e5.preventDefault();
                    link5 = $(this);
                    current5 = link5.parent().index();
                    run5(link5, audio5[0]);
                });
                audio5[0].addEventListener('ended',function(e5){
                    current5++;
                    if(current5 == len5){
                        current5 = 0;
                        link5 = playlist5.find('a')[0];
                    }else{
                        link5 = playlist5.find('a')[current5];
                    }
                    run5($(link5),audio5[0]);
                });
            }
            function run5(link5, player5){
                    player5.src = link5.attr('href');
                    par5 = link5.parent();
                    par5.addClass('active').siblings().removeClass('active');
                    audio5[0].load();
                    audio5[0].play();
            }
        </script>

        <script>
            var audio6;
            var playlist6;
            var tracks6;
            var current6;

            init6();
            function init6(){
                current6 = 0;
                audio6 = $('#audio_albumblaetter');
                playlist6 = $('#playlist_albumblaetter');
                tracks6 = playlist6.find('li a');
                len6 = tracks6.length;
                audio6[0].volume = .10;
            // audio[0].play();
                playlist6.find('a').click(function(e6){
                    e6.preventDefault();
                    link6 = $(this);
                    current6 = link6.parent().index();
                    run6(link6, audio6[0]);
                });
                audio6[0].addEventListener('ended',function(e6){
                    current6++;
                    if(current6 == len6){
                        current6 = 0;
                        link6 = playlist6.find('a')[0];
                    }else{
                        link6 = playlist6.find('a')[current6];
                    }
                    run6($(link6),audio6[0]);
                });
            }
            function run6(link6, player6){
                    player6.src = link6.attr('href');
                    par6 = link6.parent();
                    par6.addClass('active').siblings().removeClass('active');
                    audio6[0].load();
                    audio6[0].play();
            }
        </script>

        <script>
            var audio7;
            var playlist7;
            var tracks7;
            var current7;

            init7();
            function init7(){
                current7 = 0;
                audio7 = $('#audio_herbst');
                playlist7 = $('#playlist_herbst');
                tracks7 = playlist7.find('li a');
                len7 = tracks7.length;
                audio7[0].volume = .10;
            // audio[0].play();
                playlist7.find('a').click(function(e7){
                    e7.preventDefault();
                    link7 = $(this);
                    current7 = link7.parent().index();
                    run7(link7, audio7[0]);
                });
                audio7[0].addEventListener('ended',function(e7){
                    current7++;
                    if(current7 == len7){
                        current7 = 0;
                        link7 = playlist7.find('a')[0];
                    }else{
                        link7 = playlist7.find('a')[current7];
                    }
                    run7($(link7),audio7[0]);
                });
            }
            function run7(link7, player7){
                    player7.src = link7.attr('href');
                    par7 = link7.parent();
                    par7.addClass('active').siblings().removeClass('active');
                    audio7[0].load();
                    audio7[0].play();
            }
        </script>

        <script>
            var audio8;
            var playlist8;
            var tracks8;
            var current8;

            init8();
            function init8(){
                current8 = 0;
                audio8 = $('#audio_tiny_fly');
                playlist8 = $('#playlist_tiny_fly');
                tracks8 = playlist8.find('li a');
                len8 = tracks8.length;
                audio8[0].volume = .10;
            // audio[0].play();
                playlist8.find('a').click(function(e8){
                    e8.preventDefault();
                    link8 = $(this);
                    current8 = link8.parent().index();
                    run8(link8, audio8[0]);
                });
                audio8[0].addEventListener('ended',function(e8){
                    current8++;
                    if(current8 == len8){
                        current8 = 0;
                        link8 = playlist8.find('a')[0];
                    }else{
                        link8 = playlist8.find('a')[current8];
                    }
                    run8($(link8),audio8[0]);
                });
            }
            function run8(link8, player8){
                    player8.src = link8.attr('href');
                    par8 = link8.parent();
                    par8.addClass('active').siblings().removeClass('active');
                    audio8[0].load();
                    audio8[0].play();
            }
        </script>

        <script>
            // Show modal 1
            $('#portf_schoene_jugend').on('show.bs.modal', function (e)
            {
                $('.komposition-video').show();
            });
            // Hide modal 1
            $('#portf_schoene_jugend').on('hide.bs.modal', function (e)
            {
                $("audio").each(function () { this.pause() });
                $('.komposition-video').hide();
                jQuery("#youtube-player1").attr("src", jQuery("#youtube-player1").attr("src"));
            });

            // Show modal 11
            $('#portf_schoene_jugend').on('show.bs.modal', function (e)
            {
                $('.komposition-video').show();
            });
            // Hide modal 11
            $('#portf_schoene_jugend').on('hide.bs.modal', function (e)
            {
                $("audio").each(function () { this.pause() });
                $('.komposition-video').hide();
                jQuery("#youtube-player11").attr("src", jQuery("#youtube-player11").attr("src"));
            });

            // Show modal 2
            $('#portf_schiefer_marsch').on('show.bs.modal', function (e)
            {
                $('.komposition-video').show();
            });
            // Hide modal 2
            $('#portf_schiefer_marsch').on('hide.bs.modal', function (e)
            {
                $("audio").each(function () { this.pause() });
                $('.komposition-video').hide();
                jQuery("#youtube-player2").attr("src", jQuery("#youtube-player2").attr("src"));
            });

            // Show modal 4
            $('#portf_spinnen').on('show.bs.modal', function (e)
            {
                $('.komposition-video').show();
            });
            // Hide modal 4
            $('#portf_spinnen').on('hide.bs.modal', function (e)
            {
                $("audio").each(function () { this.pause() });
                $('.komposition-video').hide();
                jQuery("#youtube-player4").attr("src", jQuery("#youtube-player4").attr("src"));
            });

            // Show modal 5
            $('#portf_neun_maersche').on('show.bs.modal', function (e)
            {
                $('.komposition-video').show();
            });
            // Hide modal 5
            $('#portf_neun_maersche').on('hide.bs.modal', function (e)
            {
                $("audio").each(function () { this.pause() });
                $('.komposition-video').hide();
                jQuery("#youtube-player5").attr("src", jQuery("#youtube-player5").attr("src"));
            });

            // Show modal 7
            $('#portf_der_revolutionaer').on('show.bs.modal', function (e)
            {
                $('.komposition-video').show();
            });
            // Hide modal 7
            $('#portf_der_revolutionaer').on('hide.bs.modal', function (e)
            {
                $("audio").each(function () { this.pause() });
                $('.komposition-video').hide();
                jQuery("#youtube-player7").attr("src", jQuery("#youtube-player7").attr("src"));
            });

            // Show modal 9
            $('#portf_verwebungen').on('show.bs.modal', function (e)
            {
                $('.komposition-video').show();
            });
            // Hide modal 9
            $('#portf_verwebungen').on('hide.bs.modal', function (e)
            {
                $("audio").each(function () { this.pause() });
                $('.komposition-video').hide();
                jQuery("#youtube-player9").attr("src", jQuery("#youtube-player9").attr("src"));
            });

            // Show modal 10
            $('#portf_drei_miniaturen').on('show.bs.modal', function (e)
            {
                $('.komposition-video').show();
            });
            // Hide modal 10
            $('#portf_drei_miniaturen').on('hide.bs.modal', function (e)
            {
                $("audio").each(function () { this.pause() });
                $('.komposition-video').hide();
                jQuery("#youtube-player10").attr("src", jQuery("#youtube-player10").attr("src"));
            });

            // Show modal 121
            $('#portf_skizzenblock').on('show.bs.modal', function (e)
            {
                $('.komposition-video').show();
            });
            // Hide modal 121
            $('#portf_skizzenblock').on('hide.bs.modal', function (e)
            {
                $("audio").each(function () { this.pause() });
                $('.komposition-video').hide();
                jQuery("#youtube-player121").attr("src", jQuery("#youtube-player121").attr("src"));
            });

            // Show modal 122
            $('#portf_skizzenblock').on('show.bs.modal', function (e)
            {
                $('.komposition-video').show();
            });
            // Hide modal 122
            $('#portf_skizzenblock').on('hide.bs.modal', function (e)
            {
                $("audio").each(function () { this.pause() });
                $('.komposition-video').hide();
                jQuery("#youtube-player122").attr("src", jQuery("#youtube-player122").attr("src"));
            });

            // Show modal 123
            $('#portf_skizzenblock').on('show.bs.modal', function (e)
            {
                $('.komposition-video').show();
            });
            // Hide modal 123
            $('#portf_skizzenblock').on('hide.bs.modal', function (e)
            {
                $("audio").each(function () { this.pause() });
                $('.komposition-video').hide();
                jQuery("#youtube-player123").attr("src", jQuery("#youtube-player123").attr("src"));
            });

            // Show modal 124
            $('#portf_skizzenblock').on('show.bs.modal', function (e)
            {
                $('.komposition-video').show();
            });
            // Hide modal 124
            $('#portf_skizzenblock').on('hide.bs.modal', function (e)
            {
                $("audio").each(function () { this.pause() });
                $('.komposition-video').hide();
                jQuery("#youtube-player124").attr("src", jQuery("#youtube-player124").attr("src"));
            });

            // Show modal 13
            $('#portf_neutoenend').on('show.bs.modal', function (e)
            {
                $('.komposition-video').show();
            });
            // Hide modal 13
            $('#portf_neutoenend').on('hide.bs.modal', function (e)
            {
                $("audio").each(function () { this.pause() });
                $('.komposition-video').hide();
                jQuery("#youtube-player13").attr("src", jQuery("#youtube-player13").attr("src"));
            });

            // Show modal 15
            $('#portf_albumblaetter').on('show.bs.modal', function (e)
            {
                $('.komposition-video').show();
            });
            // Hide modal 15
            $('#portf_albumblaetter').on('hide.bs.modal', function (e)
            {
                $("audio").each(function () { this.pause() });
                $('.komposition-video').hide();
                jQuery("#youtube-player15").attr("src", jQuery("#youtube-player15").attr("src"));
            });

            // Show modal 151
            $('#portf_albumblaetter').on('show.bs.modal', function (e)
            {
                $('.komposition-video').show();
            });
            // Hide modal 151
            $('#portf_albumblaetter').on('hide.bs.modal', function (e)
            {
                $("audio").each(function () { this.pause() });
                $('.komposition-video').hide();
                jQuery("#youtube-player151").attr("src", jQuery("#youtube-player151").attr("src"));
            });

            // Show modal 16
            $('#portf_herbstliche_gedanken').on('show.bs.modal', function (e)
            {
                $('.komposition-video').show();
            });
            // Hide modal 16
            $('#portf_herbstliche_gedanken').on('hide.bs.modal', function (e)
            {
                $("audio").each(function () { this.pause() });
                $('.komposition-video').hide();
                jQuery("#youtube-player16").attr("src", jQuery("#youtube-player16").attr("src"));
            });

            // Show modal 20
            $('#portf_tiny_fly').on('show.bs.modal', function (e)
            {
                $('.komposition-video').show();
            });
            // Hide modal 20
            $('#portf_tiny_fly').on('hide.bs.modal', function (e)
            {
                $("audio").each(function () { this.pause() });
                $('.komposition-video').hide();
                jQuery("#youtube-player20").attr("src", jQuery("#youtube-player20").attr("src"));
            });

            // Show modal 21
            $('#portf_schachtel').on('show.bs.modal', function (e)
            {
                $('.komposition-video').show();
            });
            // Hide modal 21
            $('#portf_schachtel').on('hide.bs.modal', function (e)
            {
                $("audio").each(function () { this.pause() });
                $('.komposition-video').hide();
                jQuery("#youtube-player21").attr("src", jQuery("#youtube-player21").attr("src"));
            });

            // Show modal 22
            $('#portf_drei_marionetten').on('show.bs.modal', function (e)
            {
                $('.komposition-video').show();
            });
            // Hide modal 22
            $('#portf_drei_marionetten').on('hide.bs.modal', function (e)
            {
                $("audio").each(function () { this.pause() });
                $('.komposition-video').hide();
                jQuery("#youtube-player22").attr("src", jQuery("#youtube-player22").attr("src"));
            });

            // Show modal 221
            $('#portf_drei_marionetten').on('show.bs.modal', function (e)
            {
                $('.komposition-video').show();
            });
            // Hide modal 221
            $('#portf_drei_marionetten').on('hide.bs.modal', function (e)
            {
                $("audio").each(function () { this.pause() });
                $('.komposition-video').hide();
                jQuery("#youtube-player221").attr("src", jQuery("#youtube-player221").attr("src"));
            });

            // Show modal 23
            $('#portf_figuren').on('show.bs.modal', function (e)
            {
                $('.komposition-video').show();
            });
            // Hide modal 23
            $('#portf_figuren').on('hide.bs.modal', function (e)
            {
                $("audio").each(function () { this.pause() });
                $('.komposition-video').hide();
                jQuery("#youtube-player23").attr("src", jQuery("#youtube-player23").attr("src"));
            });

            // Show modal 24
            $('#portf_gespraech').on('show.bs.modal', function (e)
            {
                $('.komposition-video').show();
            });
            // Hide modal 24
            $('#portf_gespraech').on('hide.bs.modal', function (e)
            {
                $("audio").each(function () { this.pause() });
                $('.komposition-video').hide();
                jQuery("#youtube-player24").attr("src", jQuery("#youtube-player24").attr("src"));
            });

            // Show modal 25
            $('#portf_rocks').on('show.bs.modal', function (e)
            {
                $('.komposition-video').show();
            });
            // Hide modal 25
            $('#portf_rocks').on('hide.bs.modal', function (e)
            {
                $("audio").each(function () { this.pause() });
                $('.komposition-video').hide();
                jQuery("#youtube-player25").attr("src", jQuery("#youtube-player25").attr("src"));
            });

            //alert('Modal is successfully shown!');
                //$('.komposition-video').get(0).stopVideo();
                //$('body').removeClass('.komposition-video');
                //$('.komposition-video iframe').attr("src", jQuery(".komposition-video iframe").attr("src"));
                //$('#youtube-player').each(function () { this.stopVideo() });
                //jQuery(".komposition-video iframe").attr("src", jQuery(".komposition-video iframe").attr("src"));
        </script>
    </body>
</html>
