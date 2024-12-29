<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="jk.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Document</title>
</head>
<body> 
      <div class="khung"> 
        <a href="welcome.php" id="backToHome"><i class="bi bi-house-door"></i></a>
        <div class="ten_casi">
            <div class="ten">
                <h1>
                    JungKook - BTS 
                </h1> 
            </div>
            <div class="thongtin">
                <h3>Jeon Jung-kook (tiếng Hàn: 전정국; sinh ngày 1 tháng 9 năm 1997),  là thành viên và ca sĩ của nhóm nhạc nam Hàn Quốc BTS. Anh ấy đã biểu diễn ba bài hát solo như một phần của danh sách đĩa nhạc của BTS - "Begin" vào năm 2016, "Euphoria" vào năm 2018 và "My Time" vào năm 2020 — tất cả đều lọt vào bảng xếp hạng Gaon Digital Chart của Hàn Quốc.
                     Anh cũng đã thu âm bài hát nhạc phim "Stay Alive" cho webtoon 7Fates. Cuối năm 2022, anh trở thành nghệ sĩ Hàn Quốc đầu tiên phát hành bài hát chính thức cho nhạc phim FIFA World Cup với "Dreamers", sau đó anh đã biểu diễn tại lễ khai mạc FIFA World Cup 2022. 
                </h3>
            </div>
        </div>
        <div class="popular">
            <h3>Bài hát nổi tiếng </h3>
        </div>
        <div class="menu_song">
            <li class="song_item">
                <span>01</span>
                <img src="Picture_CSN/anhjk/1.jpg" alt="">
                <h5>Stay Alive<br>
                    <div class="subtitle">JungKook (prod.Suga)</div>
                </h5>
                <i class="bi playlistPlay bi-play-circle-fill" id="1"></i>
            </li>
            <div class="menu_song">
                <li class="song_item">
                    <span>02</span>
                    <img src="Picture_CSN/anhjk/2.jpg" alt="">
                    <h5>Euphoria<br>
                        <div class="subtitle">JungKook</div>
                    </h5>
                    <i class="bi playlistPlay bi-play-circle-fill" id="2"></i>
                </li>
                <div class="menu_song">
                    <li class="song_item">
                        <span>03</span>
                        <img src="Picture_CSN/anhjk/3.jpg" alt="">
                        <h5>Still with you <br>
                            <div class="subtitle">JungKook</div>
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
                        <img src="Picture_CSN/anhjk/1.jpg" alt="" id="poster_masterplay">
                        <h5 id="title">
                            Stay Alive
                            <div class="subtitle">JungKook</div>
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
     <script src="jk.js"></script>
</body>
</html>