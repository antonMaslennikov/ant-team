<?php
/*
Template Name: Редиректная страница
*/

get_header('default');
?>
    <style>

        div#content, main#main .container {
            min-height: calc(100vh - 210px);
        }
        main#main .container div {
            position: absolute;
            -webkit-transform-style: preserve-3d;
            transform-style: preserve-3d;
        }

        .paper_man_wrapper {
            width: 70%;
            margin-top: 30vh;
        }
        .paper_man_wrapper {
            -webkit-animation: cameraY 7000ms linear infinite;
            animation: cameraY 7000ms linear infinite;
            z-index: 20;
        }

        .paper_man {
            /*top: -100px;
             left: -50px;*/
            -webkit-animation: cameraX 5000ms ease-in-out infinite alternate;
            animation: cameraX 5000ms ease-in-out infinite alternate;
        }
        .paper_man .part {
            background: black;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
        }
        .paper_man .part::before {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            background: #646464;
            -webkit-transform: rotateY(180deg);
            transform: rotateY(180deg);
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
        }
        .paper_man_body {
            -webkit-transform-origin: 50% 100%;
            transform-origin: 50% 100%;
            -webkit-transform: rotateX(-20deg);
            transform: rotateX(-20deg);
            width: 60px;
            height: 100px;
            -webkit-animation: shake4 2000ms -100ms ease-in-out infinite;
            animation: shake4 2000ms -100ms ease-in-out infinite;
        }
        .paper_man_head {
            -webkit-transform-origin: 50% 100%;
            transform-origin: 50% 100%;
            top: -40px;
            left: calc(50% - 20px);
            width: 40px;
            height: 40px;
            -webkit-transform: rotateX(-10deg);
            transform: rotateX(-10deg);
            -webkit-animation: shake4 1000ms -800ms ease-in-out infinite;
            animation: shake4 1000ms -800ms ease-in-out infinite;
        }
        .paper_man_arm.left {
            -webkit-transform-origin: 0 0;
            transform-origin: 0 0;
            right: 0px;
            -webkit-animation: shake1 1000ms -400ms ease-in-out infinite;
            animation: shake1 1000ms -400ms ease-in-out infinite;
        }
        .paper_man_arm.right {
            -webkit-transform-origin: 100% 0;
            transform-origin: 100% 0;
            left: -20px;
            -webkit-animation: shake1 1000ms -900ms ease-in-out infinite;
            animation: shake1 1000ms -900ms ease-in-out infinite;
        }
        .paper_man_arm_1 {
            -webkit-transform-origin: 50% 0;
            transform-origin: 50% 0;
            width: 20px;
            height: 50px;
        }
        .paper_man_arm_2 {
            -webkit-transform-origin: 50% 0;
            transform-origin: 50% 0;
            bottom: -50px;
            width: 20px;
            height: 50px;
        }
        .left .paper_man_arm_2 {
            -webkit-animation: shake3 1000ms -800ms ease-in-out infinite;
            animation: shake3 1000ms -800ms ease-in-out infinite;
        }
        .right .paper_man_arm_2 {
            -webkit-animation: shake3 1000ms -300ms ease-in-out infinite;
            animation: shake3 1000ms -300ms ease-in-out infinite;
        }
        .paper_man_arm_hand {
            -webkit-transform-origin: 50% 0;
            transform-origin: 50% 0;
            bottom: -15px;
            width: 20px;
            height: 15px;
        }
        .left .paper_man_arm_hand {
            -webkit-animation: shake3 1000ms -200ms ease-in-out infinite;
            animation: shake3 1000ms -200ms ease-in-out infinite;
        }
        .right .paper_man_arm_hand {
            -webkit-animation: shake3 1000ms -700ms ease-in-out infinite;
            animation: shake3 1000ms -700ms ease-in-out infinite;
        }
        .paper_man_leg {
            -webkit-transform-origin: 50% 0;
            transform-origin: 50% 0;
            top: 100px;
        }
        .paper_man_leg.left {
            right: 30px;
            -webkit-animation: shake1 1000ms ease-in-out infinite;
            animation: shake1 1000ms ease-in-out infinite;
        }
        .paper_man_leg.right {
            left: 0;
            -webkit-animation: shake1 1000ms -500ms ease-in-out infinite;
            animation: shake1 1000ms -500ms ease-in-out infinite;
        }
        .paper_man_leg_1 {
            -webkit-transform-origin: 50% 0;
            transform-origin: 50% 0;
            width: 30px;
            height: 50px;
        }
        .paper_man_leg_2 {
            -webkit-transform-origin: 50% 0;
            transform-origin: 50% 0;
            bottom: -40px;
            width: 30px;
            height: 40px;
        }
        .left .paper_man_leg_2 {
            -webkit-animation: shake2 1000ms -600ms ease-in-out infinite;
            animation: shake2 1000ms -600ms ease-in-out infinite;
        }
        .right .paper_man_leg_2 {
            -webkit-animation: shake2 1000ms -100ms ease-in-out infinite;
            animation: shake2 1000ms -100ms ease-in-out infinite;
        }
        .paper_man_leg_foot {
            -webkit-transform-origin: 50% 0;
            transform-origin: 50% 0;
            bottom: -20px;
            width: 30px;
            height: 20px;
        }
        .left .paper_man_leg_foot {
            -webkit-animation: shake3 1000ms -400ms ease-in-out infinite;
            animation: shake3 1000ms -400ms ease-in-out infinite;
        }
        .right .paper_man_leg_foot {
            -webkit-animation: shake3 1000ms -900ms ease-in-out infinite;
            animation: shake3 1000ms -900ms ease-in-out infinite;
        }

        @-webkit-keyframes shake1 {
            0% {
                -webkit-transform: rotateX(80deg);
                transform: rotateX(80deg);
            }
            50% {
                -webkit-transform: rotateX(-80deg);
                transform: rotateX(-80deg);
            }
            100% {
                -webkit-transform: rotateX(80deg);
                transform: rotateX(80deg);
            }
        }

        @keyframes shake1 {
            0% {
                -webkit-transform: rotateX(80deg);
                transform: rotateX(80deg);
            }
            50% {
                -webkit-transform: rotateX(-80deg);
                transform: rotateX(-80deg);
            }
            100% {
                -webkit-transform: rotateX(80deg);
                transform: rotateX(80deg);
            }
        }
        @-webkit-keyframes shake2 {
            0% {
                -webkit-transform: rotateX(0deg);
                transform: rotateX(0deg);
            }
            50% {
                -webkit-transform: rotateX(-100deg);
                transform: rotateX(-100deg);
            }
            100% {
                -webkit-transform: rotateX(0deg);
                transform: rotateX(0deg);
            }
        }
        @keyframes shake2 {
            0% {
                -webkit-transform: rotateX(0deg);
                transform: rotateX(0deg);
            }
            50% {
                -webkit-transform: rotateX(-100deg);
                transform: rotateX(-100deg);
            }
            100% {
                -webkit-transform: rotateX(0deg);
                transform: rotateX(0deg);
            }
        }
        @-webkit-keyframes shake3 {
            0% {
                -webkit-transform: rotateX(10deg);
                transform: rotateX(10deg);
            }
            50% {
                -webkit-transform: rotateX(120deg);
                transform: rotateX(120deg);
            }
            100% {
                -webkit-transform: rotateX(10deg);
                transform: rotateX(10deg);
            }
        }
        @keyframes shake3 {
            0% {
                -webkit-transform: rotateX(10deg);
                transform: rotateX(10deg);
            }
            50% {
                -webkit-transform: rotateX(120deg);
                transform: rotateX(120deg);
            }
            100% {
                -webkit-transform: rotateX(10deg);
                transform: rotateX(10deg);
            }
        }
        @-webkit-keyframes shake4 {
            0% {
                -webkit-transform: rotateX(-30deg);
                transform: rotateX(-30deg);
            }
            50% {
                -webkit-transform: rotateX(-10deg);
                transform: rotateX(-10deg);
            }
            100% {
                -webkit-transform: rotateX(-30deg);
                transform: rotateX(-30deg);
            }
        }
        @keyframes shake4 {
            0% {
                -webkit-transform: rotateX(-30deg);
                transform: rotateX(-30deg);
            }
            50% {
                -webkit-transform: rotateX(-10deg);
                transform: rotateX(-10deg);
            }
            100% {
                -webkit-transform: rotateX(-30deg);
                transform: rotateX(-30deg);
            }
        }
        @-webkit-keyframes cameraY {
            0% {
                -webkit-transform: rotateY(0deg);
                transform: rotateY(0deg);
            }
            100% {
                -webkit-transform: rotateY(360deg);
                transform: rotateY(360deg);
            }
        }
        @keyframes cameraY {
            0% {
                -webkit-transform: rotateY(0deg);
                transform: rotateY(0deg);
            }
            100% {
                -webkit-transform: rotateY(360deg);
                transform: rotateY(360deg);
            }
        }
        @-webkit-keyframes cameraX {
            0% {
                -webkit-transform: rotateX(-50deg);
                transform: rotateX(-50deg);
            }
            100% {
                -webkit-transform: rotateX(50deg);
                transform: rotateX(50deg);
            }
        }
        @keyframes cameraX {
            0% {
                -webkit-transform: rotateX(-50deg);
                transform: rotateX(-50deg);
            }
            100% {
                -webkit-transform: rotateX(50deg);
                transform: rotateX(50deg);
            }
        }
    </style>
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <div class="container">


                <div class="paper_man_wrapper">
                    <div class="paper_man">
                        <div class="paper_man_body part">
                            <div class="paper_man_head part"></div>
                            <div class="paper_man_arm left">
                                <div class="paper_man_arm_1 part">
                                    <div class="paper_man_arm_2 part">
                                        <div class="paper_man_arm_hand part"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="paper_man_arm right">
                                <div class="paper_man_arm_1 part">
                                    <div class="paper_man_arm_2 part">
                                        <div class="paper_man_arm_hand part"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="paper_man_leg left">
                                <div class="paper_man_leg_1 part">
                                    <div class="paper_man_leg_2 part">
                                        <div class="paper_man_leg_foot part"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="paper_man_leg right">
                                <div class="paper_man_leg_1 part">
                                    <div class="paper_man_leg_2 part">
                                        <div class="paper_man_leg_foot part"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

        </main><!-- #main -->
    </div><!-- #primary -->

    </div>
<?php
 $url=get_post_meta(get_the_ID(),'redirect_url');
 if($url[0]){
     ?>
     <script>
         jQuery(document).ready(function () {
             setTimeout(window.location='<?php echo $url[0];?>',7000)
         });
     </script>
     <?php
     }
 ?>
<?php
get_footer();