<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="doja.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Document</title>
</head>
<body> 
      <div class="khung"> 
        <a href="welcome.php" id="backToHome"><i class="bi bi-house-door"></i></a>
        <div class="ten_casi">
            <div class="ten">
                <h1>
                    Doja Cat
                </h1> 
            </div>
            <div class="thongtin">
                <h3>Amala Ratna Zandile Dlamini (phát âm tiếng Zulu: [ˈzandile ˈɮamini]; sinh ngày 21 tháng 10 năm 1995), được biết đến với cái tên chuyên nghiệp Doja Cat (/ˈdoʊdʒə/), là một rapper, ca sĩ, nhạc sĩ và nhà sản xuất thu âm người Mỹ. Sinh ra và lớn lên ở Los Angeles, California, cô bắt đầu sáng tác và phát hành nhạc trên SoundCloud khi còn là một thiếu niên.<br>-  Bài hát "So High" của cô đã thu hút sự chú ý của Kemosabe và RCA Records, những người mà cô đã ký hợp đồng thu âm 
                    trước khi phát hành vở kịch mở rộng đầu tay của mình, Purrr! vào năm 2014.Cô đã nhận được nhiều giải thưởng trong suốt sự nghiệp của mình, bao gồm một giải Grammy từ mười sáu đề cử, năm Giải thưởng Âm nhạc Billboard, năm Giải thưởng Âm nhạc Hoa Kỳ và năm Giải thưởng Âm nhạc Video MTV. 
                </h3>
            </div>
        </div>
        <div class="popular">
            <h3>Bài hát nổi tiếng </h3>
        </div>
        <div class="menu_song">
            <li class="song_item">
                <span>01</span>
                <img src="Picture_CSN/anhdoja/1.jpg" alt="">
                <h5>Paint The Town Red<br>
                    <div class="subtitle"> Doja Cat</div>
                </h5>
                <i class="bi playlistPlay bi-play-circle-fill" id="1"></i>
            </li>
            <div class="menu_song">
                <li class="song_item">
                    <span>02</span>
                    <img src="Picture_CSN/anhdoja/2.jpg" alt="">
                    <h5>Agora Hills<br>
                        <div class="subtitle">  Doja Cat</div>
                    </h5>
                    <i class="bi playlistPlay bi-play-circle-fill" id="2"></i>
                </li>
                <div class="menu_song">
                    <li class="song_item">
                        <span>03</span>
                        <img src="Picture_CSN/anhdoja/3.jpg" alt="">
                        <h5>Woman<br>
                            <div class="subtitle"> Doja Cat</div>
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
                        <img src="Picture_CSN/anhdoja/1.jpg" alt="" id="poster_masterplay">
                        <h5 id="title"><font size="4" color="white">
                            Paint The Town Red
                        </font>
                            <div class="subtitle"> Doja Cat</div>
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
     <script src="doja.js"></script>
</body>
</html>