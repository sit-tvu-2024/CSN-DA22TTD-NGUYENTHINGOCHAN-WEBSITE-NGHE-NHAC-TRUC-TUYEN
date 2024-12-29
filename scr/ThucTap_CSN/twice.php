<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="twice.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Document</title>
</head>
<body> 
      <div class="khung">
        
        <a href="welcome.php" id="backToHome"><i class="bi bi-house-door"></i></a>
        <div class="ten_casi">
            <div class="ten">
                <h1>
                    TWICE
                </h1> 
            </div>
            <div class="thongtin">
                <h3>Là một nhóm nhạc nữ Hàn Quốc được thành lập bởi JYP Entertainment. Nhóm bao gồm thành viên:
                     Nayeon, Jeongyeon, Momo, Sana, Jihyo, Mina, Dahyun, Chaeyoung và Tzuyu. Twice được ra mắt vào ngày 20 tháng 10 năm 2015 và đã nhận được danh hiệu danh dự "Nhóm nhạc nữ của quốc gia" ở quê nhà của họ.
                     <br>Là nghệ sĩ nữ Hàn Quốc đầu tiên đồng thời đứng đầu bảng xếp hạng Billboard's World Albums và World Digital Song Sales với việc phát hành album phòng thu đầu tiên của họ Twicetagram và đĩa đơn chính "Likey" vào năm 2017.
                </h3>
            </div>
        </div>
        <div class="popular">
            <h3>Bài hát nổi tiếng </h3>
        </div>
        <div class="menu_song">
            <li class="song_item">
                <span>01</span>
                <img src="Picture_CSN/anhtwice/1.jpg" alt="">
                <h5>Cheer up<br>
                    <div class="subtitle">TWICE</div>
                </h5>
                <i class="bi playlistPlay bi-play-circle-fill" id="1"></i>
            </li>
            <div class="menu_song">
                <li class="song_item">
                    <span>02</span>
                    <img src="Picture_CSN/anhtwice/2.jpg" alt="">
                    <h5>Fancy<br>
                        <div class="subtitle"> TWICE</div>
                    </h5>
                    <i class="bi playlistPlay bi-play-circle-fill" id="2"></i>
                </li>
                <div class="menu_song">
                    <li class="song_item">
                        <span>03</span>
                        <img src="Picture_CSN/anhtwice/3.jpg" alt="">
                        <h5>I can't stop me<br>
                            <div class="subtitle"> TWICE</div>
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
                        <img src="Picture_CSN/anhtwice/1.jpg" alt="" id="poster_masterplay">
                        <h5 id="title"><font size="4" color="white">
                            Cheer up
                        </font>
                            <div class="subtitle"> TWICE</div>
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
     <script src="twice.js"></script>
</body>
</html>