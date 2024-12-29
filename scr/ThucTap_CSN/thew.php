<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="thew.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Document</title>
</head>
<body> 
      <div class="khung"> 
        <a href="welcome.php" id="backToHome"><i class="bi bi-house-door"></i></a>
        <div class="ten_casi">
            <div class="ten">
                <h1>
                    The Weeknd
                </h1> 
            </div>
            <div class="thongtin">
                <h3>Abel Makkonen Tesfaye (tiếng Amharic: አቤል መኮንን ተስፋዬ; sinh ngày 16 tháng 2 năm 1990), được biết đến với cái tên chuyên nghiệp là Weeknd,
                     là một ca sĩ kiêm nhạc sĩ và diễn viên người Canada.Tesfaye đã bán được hơn 75 triệu đĩa nhạc, khiến anh trở thành một trong những nghệ sĩ bán chạy nhất thế giới. Anh đã giành được bảy chứng nhận kim cương từ Hiệp hội Công nghiệp Ghi âm Hoa Kỳ (RIAA) cho các đĩa đơn của mình và là nghệ sĩ đầu tiên đồng thời giữ ba vị trí hàng đầu trên bảng xếp hạng Hot R&B/Hip-Hop Songs.
                      "Blinding Lights" trở thành bài hát có thành tích tốt nhất trong lịch sử Billboard Hot 100,.. 
                </h3>
            </div>
        </div>
        <div class="popular">
            <h3>Bài hát nổi tiếng </h3>
        </div>
        <div class="menu_song">
            <li class="song_item">
                <span>01</span>
                <img src="Picture_CSN/anhwkn/1.jpg" alt="">
                <h5>Die For You<br>
                    <div class="subtitle">The Weeknd</div>
                </h5>
                <i class="bi playlistPlay bi-play-circle-fill" id="1"></i>
            </li>
            <div class="menu_song">
                <li class="song_item">
                    <span>02</span>
                    <img src="Picture_CSN/anhwkn/1.jpg" alt="">
                    <h5>Earned<br>
                        <div class="subtitle">The Weeknd</div>
                    </h5>
                    <i class="bi playlistPlay bi-play-circle-fill" id="2"></i>
                </li>
                <div class="menu_song">
                    <li class="song_item">
                        <span>03</span>
                        <img src="Picture_CSN/anhwkn/3.jpg" alt="">
                        <h5>I Was Never There<br>
                            <div class="subtitle">The Weeknd</div>
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
                        <img src="Picture_CSN/anhwkn/1.jpg" alt="" id="poster_masterplay">
                        <h5 id="title"><font size="4" color="white">
                            Die For You
                        </font>
                            <div class="subtitle">The Weeknd</div>
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
     <script src="thew.js"></script>
</body>
</html>