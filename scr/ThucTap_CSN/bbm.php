<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bbm.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Document</title>
</head>
<body> 
      <div class="khung">
        
        <a href="welcome.php" id="backToHome"><i class="bi bi-house-door"></i></a>
        <div class="ten_casi">
            <div class="ten">
                <h1>
                    BABYMONSTER
                </h1> 
            </div>
            <div class="thongtin">
                <h3>BABYMONSTER (tiếng Hàn: 베이비몬스터; tiếng Nhật: ベイビーモンスター) là nhóm nhạc nữ Hàn Quốc gồm bảy thành viên được thành lập bởi YG Entertainment. Nhóm được tạo ra từ chương trình truyền hình thực tế “Last Evaluation” và đã chính thức ra mắt vào ngày 27/11/2023<br>
                BABYMONSTER đã nhanh chóng đạt 50 triệu lượt xem chỉ sau 4 ngày, 100 triệu lượt xem trong 18 ngày và 200 triệu lượt xem trong vòng 53 ngày.
                </h3>
            </div>
        </div>
        <div class="popular">
            <h3>Bài hát nổi tiếng </h3>
        </div>
        <div class="menu_song">
            <li class="song_item">
                <span>01</span>
                <img src="Picture_CSN/anhbbm/1.jpg" alt="">
                <h5>Drip<br>
                    <div class="subtitle">BABYMONSTER</div>
                </h5>
                <i class="bi playlistPlay bi-play-circle-fill" id="1"></i>
            </li>
            <div class="menu_song">
                <li class="song_item">
                    <span>02</span>
                    <img src="Picture_CSN/anhbbm/2.jpg" alt="">
                    <h5>Batter up<br>
                        <div class="subtitle"> BABYMONSTER</div>
                    </h5>
                    <i class="bi playlistPlay bi-play-circle-fill" id="2"></i>
                </li>
                <div class="menu_song">
                    <li class="song_item">
                        <span>03</span>
                        <img src="Picture_CSN/anhbbm/3.jpg" alt="">
                        <h5>Like That<br>
                            <div class="subtitle"> BABYMONSTER</div>
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
                        <img src="Picture_CSN/anhbbm/1.jpg" alt="" id="poster_masterplay">
                        <h5 id="title"><font size="4" color="white">
                            Drip
                        </font>
                            <div class="subtitle"> BABYMONSTER</div>
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
     <script src="bbm.js"></script>
</body>
</html>