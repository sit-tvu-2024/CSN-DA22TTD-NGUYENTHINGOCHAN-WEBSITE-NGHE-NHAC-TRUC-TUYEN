<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="taylor.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Document</title>
</head>
<body> 
      <div class="khung">
        
        <a href="welcome.php" id="backToHome"><i class="bi bi-house-door"></i></a>
        <div class="ten_casi">
            <div class="ten">
                <h1>
                    Taylor Swift
                </h1> 
            </div>
            <div class="thongtin">
                <h3>Taylor Alison Swift (sinh ngày 13 tháng 12 năm 1989) là một ca sĩ kiêm nhạc sĩ người Mỹ.
                     Được biết đến với việc sáng tác tiểu sử, tái tạo nghệ thuật và tác động văn hóa, Swift là một nhân vật hàng đầu trong âm nhạc 
                     đại chúng và là chủ đề được truyền thông đưa tin rộng rãi.<br>
                     Swift là một trong những nghệ sĩ âm nhạc bán chạy nhất thế giới, với kỷ lục bảy album bán được một triệu bản trong tuần đầu tiên. Cô là nghệ sĩ có doanh thu cao nhất, tỷ phú đầu tiên từ âm nhạc chủ yếu và là nữ nhạc sĩ giàu nhất thế giới.<br>
                     - Một số album nổi bật: Fearless(2008), 1989(2014), Midnight(2022),...
                </h3>
            </div>
        </div>
        <div class="popular">
            <h3>Bài hát nổi tiếng </h3>
        </div>
        <div class="menu_song">
            <li class="song_item">
                <span>01</span>
                <img src="Picture_CSN/anhtaylor/1.jpg" alt="">
                <h5>Cruel Summmer<br>
                    <div class="subtitle">Taylor Swift</div>
                </h5>
                <i class="bi playlistPlay bi-play-circle-fill" id="1"></i>
            </li>
            <div class="menu_song">
                <li class="song_item">
                    <span>02</span>
                    <img src="Picture_CSN/anhtaylor/2.jpg" alt="">
                    <h5>Look what to made me do<br>
                        <div class="subtitle">Taylor Swift</div>
                    </h5>
                    <i class="bi playlistPlay bi-play-circle-fill" id="2"></i>
                </li>
                <div class="menu_song">
                    <li class="song_item">
                        <span>03</span>
                        <img src="Picture_CSN/anhtaylor/3.jpg" alt="">
                        <h5>Love Story<br>
                            <div class="subtitle">Taylor Swift</div>
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
                        <img src="Picture_CSN/anhtaylor/1.jpg" alt="" id="poster_masterplay">
                        <h5 id="title"><font size="4" color="pink">
                            Cruel Summer
                        </font>
                            <div class="subtitle">Taylor Swift</div>
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
     <script src="taylor.js"></script>
</body>
</html>