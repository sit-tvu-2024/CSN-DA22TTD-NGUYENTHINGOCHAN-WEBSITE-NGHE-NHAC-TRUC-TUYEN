<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bts.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Document</title>
</head>
<body> 
      <div class="khung">
        
        <a href="welcome.php" id="backToHome"><i class="bi bi-house-door"></i></a>
        <div class="ten_casi">
            <div class="ten">
                <h1>
                    BTS
                </h1> 
            </div>
            <div class="thongtin">
                <h3>BTS còn được gọi là Bangtan Boys, là một nhóm nhạc nam Hàn Quốc được thành lập vào năm 2010. Ban nhạc bao gồm Jin, Suga, J-Hope, RM, Jimin, V và Jungkook.
                BTS ra mắt vào năm 2013 dưới thời Big Hit Entertainment với album đơn 2 Cool 4 Skool. BTS đã phát hành album phòng thu tiếng Hàn và tiếng Nhật đầu tiên của họ, Dark & Wild và Wake Up, vào năm 2014.<br>
                Tính đến năm 2023, BTS là nghệ sĩ âm nhạc bán chạy nhất trong lịch sử Hàn Quốc theo Circle Chart, đã bán được hơn 40 triệu album. [2] Album phòng thu Map of the Soul: 7 (2020) của họ là album bán chạy thứ tư mọi thời đại ở Hàn Quốc, cũng như album đầu tiên ở nước này vượt qua cả bốn đến năm triệu doanh số đăng ký.
                </h3>
            </div>
        </div>
        <div class="popular">
            <h3>Bài hát nổi tiếng </h3>
        </div>
        <div class="menu_song">
            <li class="song_item">
                <span>01</span>
                <img src="Picture_CSN/anhbts/1.jpg" alt="">
                <h5>Boy with luv<br>
                    <div class="subtitle">BTS</div>
                </h5>
                <i class="bi playlistPlay bi-play-circle-fill" id="1"></i>
            </li>
            <div class="menu_song">
                <li class="song_item">
                    <span>02</span>
                    <img src="Picture_CSN/anhbts/2.jpg" alt="">
                    <h5>Idol<br>
                        <div class="subtitle">BTS</div>
                    </h5>
                    <i class="bi playlistPlay bi-play-circle-fill" id="2"></i>
                </li>
                <div class="menu_song">
                    <li class="song_item">
                        <span>03</span>
                        <img src="Picture_CSN/anhbts/3.jpg" alt="">
                        <h5>Love Maze<br>
                            <div class="subtitle">BTS</div>
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
                        <img src="Picture_CSN/anhbts/1.jpg" alt="" id="poster_masterplay">
                        <h5 id="title"><font size="4" color="white">
                            Boy with luv
                        </font>
                            <div class="subtitle">BTS</div>
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
     <script src="bts.js"></script>
</body>
</html>