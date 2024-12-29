<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ari.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Document</title>
</head>
<body> 
      <div class="khung">
        
        <a href="welcome.php" id="backToHome"><i class="bi bi-house-door"></i></a>
        <div class="ten_casi">
            <div class="ten">
                <h1>
                    Ariana Grande
                </h1> 
            </div>
            <div class="thongtin">
                <h3> Ariana Grande-Butera(sinh ngày 26 tháng 6 năm 1993) là một ca sĩ, nhạc sĩ và diễn viên người Mỹ. Được coi là một biểu tượng nhạc pop, cô là một nhân vật có ảnh hưởng trong âm nhạc đại chúng và được
                     biết đến với quãng giọng bốn quãng tám kéo dài đến thanh ghi còi.<br>Trong số các nghệ sĩ âm nhạc bán chạy nhất thế giới, Grande đã bán được hơn 90 triệu đĩa trên toàn thế giới. Các giải thưởng khác nhau của cô bao gồm hai giải Grammy, một giải Brit, hai Giải thưởng Âm nhạc Billboard, ba Giải thưởng Âm nhạc Mỹ, mười Giải thưởng Âm nhạc Video MTV và 36 Kỷ lục Guinness Thế giới. 
                </h3>
            </div>
        </div>
        <div class="popular">
            <h3>Bài hát nổi tiếng </h3>
        </div>
        <div class="menu_song">
            <li class="song_item">
                <span>01</span>
                <img src="Picture_CSN/anhari/1.jpg" alt="">
                <h5>Positions<br>
                    <div class="subtitle">Ariana Grande</div>
                </h5>
                <i class="bi playlistPlay bi-play-circle-fill" id="1"></i>
            </li>
            <div class="menu_song">
                <li class="song_item">
                    <span>02</span>
                    <img src="Picture_CSN/anhari/2.jpg" alt="">
                    <h5>7 Rings<br>
                        <div class="subtitle">Ariana Grande</div>
                    </h5>
                    <i class="bi playlistPlay bi-play-circle-fill" id="2"></i>
                </li>
                <div class="menu_song">
                    <li class="song_item">
                        <span>03</span>
                        <img src="Picture_CSN/anhari/3.jpg" alt="">
                        <h5>One Last Time<br>
                            <div class="subtitle">Ariana Grande</div>
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
                        <img src="Picture_CSN/anhari/1.jpg" alt="" id="poster_masterplay">
                        <h5 id="title">
                            Positions
                        
                            <div class="subtitle">Ariana Grande</div>
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
     <script src="ari.js"></script>
</body>
</html>