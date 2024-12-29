<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="hth.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Document</title>
</head>
<body> 
      <div class="khung">
        <a href="welcome.php" id="backToHome"><i class="bi bi-house-door"></i></a>
        <div class="ten_casi">
            <div class="ten">
                <h1>
                    HIEUTHUHAI
                </h1> 
            </div>
            <div class="thongtin">
                <h3>Trần Minh Hiếu (sinh ngày 28 tháng 9 năm 1999), Anh bắt đầu trở nên nổi tiếng sau khi tham gia chương trình Thế giới Rap – King of Rap mùa đầu tiên. Ngoài ra, anh cũng là thành viên chính trong chương trình truyền hình thực tế 2 ngày 1 đêm. Anh đã được đề cử Ca sĩ đột phá Giải thưởng Làn Sóng Xanh 2022.
                     Năm 2024, anh tham gia chương trình Anh trai "say hi" mùa 1 và đã đạt được Giải đội trưởng tài năng và cũng là Quán quân của chương trình.<br>
                     - Trong năm 2022, Hiếu đã cho ra mắt 3 ca khúc lần lượt là "Dynamic Duo", "Vệ tinh",[12] và "Ngủ một mình".[13] Anh cũng đã có mặt trong hạng mục Ca sĩ đột phá của Giải thưởng Làn Sóng Xanh
                </h3>
            </div>
        </div>
        <div class="popular">
            <h3>Bài hát nổi tiếng </h3>
        </div>
        <div class="menu_song">
            <li class="song_item">
                <span>01</span>
                <img src="Picture_CSN/anhhth/1.jpg" alt="">
                <h5>Không phải gu<br>
                    <div class="subtitle">HIEUTHUHAI</div>
                </h5>
                <i class="bi playlistPlay bi-play-circle-fill" id="1"></i>
            </li>
            <div class="menu_song">
                <li class="song_item">
                    <span>02</span>
                    <img src="Picture_CSN/anhhth/2.jpg" alt="">
                    <h5>Ngủ một mình<br>
                        <div class="subtitle">HIEUTHUHAI</div>
                    </h5>
                    <i class="bi playlistPlay bi-play-circle-fill" id="2"></i>
                </li>
                <div class="menu_song">
                    <li class="song_item">
                        <span>03</span>
                        <img src="Picture_CSN/anhhth/3.jpg" alt="">
                        <h5>Exit Sign<br>
                            <div class="subtitle">HIEUTHUHAI</div>
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
                        <img src="Picture_CSN/anhhth/1.jpg" alt="" id="poster_masterplay">
                        <h5 id="title">
                            Không Phải Gu
                            <div class="subtitle">HIEUTHUHAI</div>
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
     <script src="hth.js"></script>
</body>
</html>