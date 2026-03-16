<?php
include 'get-ip.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:url" content="https://boo.milkieverse.cc/">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Boo its me!">
    <meta property="og:site_name" content="Boo! Boo!">
    <meta property="og:image" content="https://boo.milkieverse.cc/milkie_boo_meta.png">
    <meta property="twitter:card" content="summary_large_image"/>
    <meta property="twitter:url" content="https://boo.milkieverse.cc/"/>
    <meta property="twitter:title" content="boo ♥"/>
    <meta property="twitter:description" content=""/>
    <meta property="twitter:image" content="https://boo.milkieverse.cc/milkie_boo_meta.png"/>
    <title>boo ♥</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div id="particles-js2"></div>

    <img id="img" src="milkie_boo.png" alt="Boo Boo Boo" onclick="showBoo()">

    <div id="boo-div" onclick="hideBoo()" style="display: none;">
        <p id="boo" class="Boo">
            <strong><span style="background: #ff006c;">BOO! Your IP is:</span>&nbsp;</strong>
        </p>
        <p id="address" class="address">
            <strong><span style="background: #ff006c;"><?php echo htmlspecialchars(getUserIP()); ?></span>&nbsp;</strong>
        </p>
    </div>

    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            function initParticles() {
                if (typeof particlesJS === "undefined" || !document.getElementById("particles-js2")) {
                    return setTimeout(initParticles, 100);
                }

                particlesJS("particles-js2", {
                    "particles": {
                        "number": {
                            "value": 150,
                            "density": {
                                "enable": true,
                                "value_area": 1500
                            }
                        },
                        "color": {
                            "value": "#ff1578"
                        },
                        "shape": {
                            "type": "circle",
                            "stroke": {
                                "width": 0,
                                "color": "#ffffff"
                            },
                            "polygon": {
                                "nb_sides": 5
                            },
                            "image": {
                                "src": "https://cdn.discordapp.com/attachments/1275849583494430742/1437039351510077590/I_love_milk_-_VRC_Emoji.png",
                                "width": 500,
                                "height": 500
                            }
                        },
                        "opacity": {
                            "value": 1,
                            "random": false,
                            "anim": {
                                "enable": true,
                                "speed": 2.5,
                                "opacity_min": 0,
                                "sync": false
                            }
                        },
                        "size": {
                            "value": 5,
                            "random": true,
                            "anim": {
                                "enable": true,
                                "speed": 4,
                                "size_min": 0.5,
                                "sync": false
                            }
                        },
                        "line_linked": {
                            "enable": false
                        },
                        "move": {
                            "enable": true,
                            "speed": 2,
                            "direction": "none",
                            "random": true,
                            "straight": false,
                            "out_mode": "out",
                            "bounce": false
                        }
                    },
                    "interactivity": {
                        "detect_on": "canvas",
                        "events": {
                            "onhover": {
                                "enable": true,
                                "mode": "bubble"
                            },
                            "onclick": {
                                "enable": true,
                                "mode": "repulse"
                            },
                            "resize": true
                        },
                        "modes": {
                            "bubble": {
                                "distance": 250,
                                "size": 0,
                                "duration": 2,
                                "opacity": 0,
                                "speed": 3
                            },
                            "repulse": {
                                "distance": 400,
                                "duration": 0.4
                            }
                        }
                    },
                    "retina_detect": true
                });
            }

            initParticles();
        });

        function showBoo() {
            const imageDiv = document.getElementById('img');
            const textDiv = document.getElementById('boo-div');
            imageDiv.style.display = 'none';
            textDiv.style.display = 'block';
        }

        function hideBoo() {
            const imageDiv = document.getElementById('img');
            const textDiv = document.getElementById('boo-div');
            imageDiv.style.display = 'block';
            textDiv.style.display = 'none';
        }
    </script>
</body>
</html>
