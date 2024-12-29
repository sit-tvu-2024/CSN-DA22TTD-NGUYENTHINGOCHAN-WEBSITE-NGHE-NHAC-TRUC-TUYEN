<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="rose.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Document</title>
</head>
<body> 
      <div class="khung">
        <div class="ten_casi">
            <div class="ten">
                <h1>
                ROSÉ 
                </h1> 
            </div>
            <div class="thongtin">
                <h3>Rosé (sinh ngày 11 tháng 2 năm 1997) là thành viên của nhóm nhạc Blackpink thuộc công ty giải trí YG Entertaiment (Hàn Quốc)<br>
                - Vào tháng 3 năm 2021, Rosé phát hành album đĩa đơn đầu tay R, bán được 448.089 bản trong tuần đầu tiên, con số cao nhất của một nữ nghệ sĩ độc tấu Hàn Quốc.
                 Đĩa đơn chính "On the Ground" đã đưa cô trở thành nghệ sĩ đầu tiên đứng đầu Billboard Global 200.<br>
                - Những ca khúc nổi bật của Rosé: On The Ground, APT,...
                </h3>
            </div>
        </div>
        <div class="popular">
            <h3>Bài hát nổi tiếng </h3>
        </div>
        <div class="menu_song">
            <li class="song_item">
                <span>01</span>
                <img src="Picture_CSN/anhrose/1.jpg" alt="">
                <h5>On The Ground<br>
                    <div class="subtitle">Rosé</div>
                </h5>
                <i class="bi playlistPlay bi-play-circle-fill" id="1"></i>
            </li>
           
                <li class="song_item">
                    <span>02</span>
                    <img src="Picture_CSN/anhrose/2.jpg" alt="">
                    <h5>APT<br>
                        <div class="subtitle">Rosé</div>
                    </h5>
                    <i class="bi playlistPlay bi-play-circle-fill" id="2"></i>
                </li>
                
                    <li class="song_item">
                        <span>03</span>
                        <img src="Picture_CSN/anhrose/3.jpg" alt="">
                        <h5>Gone <br>
                            <div class="subtitle">Rosé </div>
                        </h5>
                        <i class="bi playlistPlay bi-play-circle-fill" id="3"></i>
                    </li>
</div>   
     <div class="masterplay">
                        <div class="wave" id="wave">
                            <div class="wave1"></div>
                            <div class="wave1"></div>
                            <div class="wave1"></div>
                        </div>
                        <img src="Picture_CSN/anhrose/3.jpg" alt="" id="poster_masterplay">
                        <h5 id="title">
                            Gone
                            <div class="subtitle">Rosé</div>
                        </h5>
                        <div class="icon">
                            <i class="bi shuffle bi-music-note-beamed">next</i>
                            <i class="bi bi-skip-start-fill" id="back"></i>
                            <i class="bi bi-play-fill" id="master_play"></i>
                            <i class="bi bi-skip-end-fill" id="next"></i>
                            <a href="" download id="download_music" ><i class="bi bi-cloud-arrow-down-fill" ></i></a>
                        </div>
                        <span id="currentStart">0:00</span>
                        <div class="bar">
                            <input type="range" id="seek" min="0" max="100">
                            <div class="bar2" id="bar2"></div>
                            <div class="dot"></div>
                        </div>
                        <span id="currentEnd">0:30</span>
                        <div class="vol">
                            <i class="bi bi-volume-up-fill" id="vol_icon"></i>
                            <input type="range" min="0" max="100" id="vol">
                            <div class="vol_bar"></div>
                            <div class="dot" id="vol_dot"></div>
                        </div>
                    </div>
     <script src="rose.js"></script>
</body>
</html>