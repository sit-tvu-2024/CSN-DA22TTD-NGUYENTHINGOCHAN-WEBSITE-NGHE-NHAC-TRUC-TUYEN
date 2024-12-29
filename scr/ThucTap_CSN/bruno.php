<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bruno.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Document</title>
</head>
<body> 
      <div class="khung">
        <div class="ten_casi">
            <div class="ten">
                <h1>
                    Bruno Mars 
                </h1> 
            </div>
            <div class="thongtin">
                <h3>Peter Gene Hernandez (sinh ngày 8 tháng 10 năm 1985), được biết đến với cái tên chuyên nghiệp là Bruno Mars, 
                    là một ca sĩ kiêm nhạc sĩ người Mỹ . Anh được biết đến với các buổi biểu diễn sân khấu, 
                    nghệ thuật biểu diễn cổ điển và hát theo nhiều phong cách âm nhạc, bao gồm pop, R & B, funk,...<br>
                    Bruno Mars cũng sở hữu những album xuất sắc như "Doo-Wops & Hooligans" (2010), album đầu tay với các bản hit như "Just the Way You Are" 
                    và "Grenade." Tiếp đó là "Unorthodox Jukebox" (2012) với những bài hát nổi bật như "Locked Out of Heaven" và "When I Was Your Man.",...
                </h3>
            </div>
        </div>
        <div class="popular">
            <h3>Bài hát nổi tiếng </h3>
        </div>
        <div class="menu_song">
            <li class="song_item">
                <span>01</span>
                <img src="Picture_CSN/anhbruno/1.jpg" alt="">
                <h5>Die with a smile<br>
                    <div class="subtitle">Bruno Mars - Lady Gaga</div>
                </h5>
                <i class="bi playlistPlay bi-play-circle-fill" id="1"></i>
            </li>
           
                <li class="song_item">
                    <span>02</span>
                    <img src="Picture_CSN/anhbruno/2.jpg" alt="">
                    <h5>Talking to the moon<br>
                        <div class="subtitle">Bruno Mars</div>
                    </h5>
                    <i class="bi playlistPlay bi-play-circle-fill" id="2"></i>
                </li>
                
                    <li class="song_item">
                        <span>03</span>
                        <img src="Picture_CSN/anhbruno/3.jpg" alt="">
                        <h5>That’s What I Like <br>
                            <div class="subtitle">Bruno Mars </div>
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
                        <img src="Picture_CSN/anhbruno/1.jpg" alt="" id="poster_masterplay">
                        <h5 id="title">
                            Die With A Smile
                            <div class="subtitle">Bruno - Mars</div>
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
     <script src="bruno.js"></script>
</body>
</html>