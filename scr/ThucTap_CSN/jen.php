<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="jen.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Document</title>
</head>
<body> 
      <div class="khung">
        
        <a href="welcome.php" id="backToHome"><i class="bi bi-house-door"></i></a>
        <div class="ten_casi">
            <div class="ten">
                <h1>
                    JENNIE
                </h1> 
            </div>
            <div class="thongtin">
                <h3>Jennie Kim (tiếng Hàn: 김제니; sinh ngày 16 tháng 1 năm 1996), được biết đến với cái tên đơn danh là Jennie, là một ca sĩ, rapper và diễn viên người Hàn Quốc. [1] Sinh ra và lớn lên ở Hàn Quốc và New Zealand, Jennie đã thử giọng thành công cho YG Entertainment vào năm 2010, cuối cùng ra mắt với tư cách là thành viên của nhóm nhạc nữ Hàn Quốc Blackpink vào tháng 8 năm 2016.<br>
                Vào tháng 11 năm 2018, Jennie phát hành đĩa đơn đầu tay "Solo", đứng đầu bảng xếp hạng Circle Digital Chart của Hàn Quốc và bảng xếp hạng Billboard World Digital Songs của Hoa Kỳ,...
                </h3>
            </div>
        </div>
        <div class="popular">
            <h3>Bài hát nổi tiếng </h3>
        </div>
        <div class="menu_song">
            <li class="song_item">
                <span>01</span>
                <img src="Picture_CSN/anhjen/1.jpg" alt="">
                <h5>Solo<br>
                    <div class="subtitle">JENNIE</div>
                </h5>
                <i class="bi playlistPlay bi-play-circle-fill" id="1"></i>
            </li>
            <div class="menu_song">
                <li class="song_item">
                    <span>02</span>
                    <img src="Picture_CSN/anhjen/2.jpg" alt="">
                    <h5>Mantra<br>
                        <div class="subtitle">JENNIE</div>
                    </h5>
                    <i class="bi playlistPlay bi-play-circle-fill" id="2"></i>
                </li>
                <div class="menu_song">
                    <li class="song_item">
                        <span>03</span>
                        <img src="Picture_CSN/anhjen/3.jpg" alt="">
                        <h5>One of the girls<br>
                            <div class="subtitle">JENNIE</div>
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
                        <img src="Picture_CSN/anhjen/1.jpg" alt="" id="poster_masterplay">
                        <h5 id="title"><font size="4">
                            Solo
                        </font>
                            <div class="subtitle">JENNIE</div>
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
     <script src="jen.js"></script>
</body>
</html>