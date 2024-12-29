const music = new Audio('Music/45.mp3');

/*music.play();*/


const songs = [
    {
        id: '1',
        songName: `Die For You<br>
                    <div class="subtitle">The Weeknd</div>`,
        poster: "Picture_CSN/anhwkn/1.jpg",          
    },
    {
        id: '2',
        songName: `Earned<br>
                        <div class="subtitle">The Weeknd</div>`,
        poster: "Picture_CSN/anhwkn/2.jpg",          
    },
    {
        id: '3',
        songName: `I Was Never There<br>
                            <div class="subtitle">The Weeknd</div>`,
        poster: "Picture_CSN/anhwkn/3.jpg",          
    }
]

let master_play = document.getElementById('master_play');
let wave = document.getElementById('wave');

master_play.addEventListener('click', () => {
    if (music.paused || music.currentTime <= 0 ){
        music.play();
        wave.classList.add('active1');
        master_play.classList.remove('bi-play-fill');
        master_play.classList.add('bi-pause-fill');
    }else{
        music.pause();
        wave.classList.remove('active1');
        master_play.classList.add('bi-play-fill');
        master_play.classList.remove('bi-pause-fill');
    }
});

const makeAllPlays = () =>{
    Array.from(document.getElementsByClassName('playlistPlay')).forEach((el)=>{
            el.classList.add('bi-play-circle-fill');
            el.classList.remove('bi-pause-circle-fill');
})
}

let index = 0;
let poster_masterplay = document.getElementById('poster_masterplay');
let download_music = document.getElementById('download_music');
let title = document.getElementById('title');
Array.from(document.getElementsByClassName('playlistPlay')).forEach((e)=>{
    e.addEventListener('click',(el) =>{
        index = el.target.id;
        music.src = `Music/wkn/${index}.mp3`;
        poster_masterplay.src =`Picture_CSN/anhwkn/${index}.jpg`;
        music.play();
        master_play.classList.remove('bi-play-fill');
        master_play.classList.add('bi-pause-fill');
        download_music.href = `Music/wkn/${index}.mp3`;
 
        let song_title = songs.filter((els) => {
            return els.id == index;
        });
        song_title.forEach(elss =>{
            let {songName} = elss;
            title.innerHTML = songName;
            
            download_music.setAttribute("download", `${songName}.mp3`); // Đặt tên file tải về
        });
        makeAllPlays();
        el.target.classList.remove('bi-play-circle-fill');
        el.target.classList.add('bi-pause-circle-fill');
        wave.classList.add('active1');
       
       
    })
})

let currentStart = document.getElementById('currentStart');
let currentEnd = document.getElementById('currentEnd');
let seek = document.getElementById('seek');
let bar2 = document.getElementById('bar2');
let dot = document.getElementsByClassName('dot')[0];

music.addEventListener('timeupdate',()=>{
    let music_cur = music.currentTime;
    let music_duration = music.duration;
    let min = Math.floor(music_duration/60);
    let sec = Math.floor(music_duration%60);
    if(sec<10){
        sec =`0${sec}`
    }
    currentEnd.innerText = `${min}:${sec}`;

    let min1 = Math.floor(music_cur/60);
    let sec1 = Math.floor(music_cur%60);
    if(sec1<10){
        sec1 =`0${sec1}`
    }
    currentStart.innerText = `${min1}:${sec1}`;
    let progressbar = parseInt((music.currentTime/music.duration)*100);
    seek.value = progressbar;
    let seekbar = seek.value;
    bar2.style.width = `${seekbar}%`;
    dot.style.left = `${seekbar}%`;
})
seek.addEventListener('change',()=>{
    music.currentTime = seek.value * music.duration/100;
})

let vol_icon = document.getElementById('vol_icon');
let vol = document.getElementById('vol');
let vol_bar = document.getElementsByClassName('vol_bar')[0];
let vol_dot = document.getElementById('vol_dot');

vol.addEventListener('change',()=>{
    if(vol.value == 0){
        vol_icon.classList.remove('bi-volume-up-fill');
        vol_icon.classList.remove('bi-volume-down-fill');
        vol_icon.classList.add('bi-volume-off-fill');
    }
    if(vol.value > 0){
        vol_icon.classList.remove('bi-volume-up-fill');
        vol_icon.classList.add('bi-volume-down-fill');
        vol_icon.classList.remove('bi-volume-off-fill');
    }
    if(vol.value > 50){
        vol_icon.classList.add('bi-volume-up-fill');
        vol_icon.classList.remove('bi-volume-down-fill');
        vol_icon.classList.remove('bi-volume-off-fill');
    }
    let vol_a = vol.value;
    vol_bar.style.width =`${vol_a}%`;
    vol_dot.style.left =`${vol_a}%`;
    music.volume = vol_a / 100;
});

let back = document.getElementById('back');
let next = document.getElementById('next');

back.addEventListener('click', ()=>{
    index -= 1;
    if(index < 1){
        index = Array.from(document.getElementsByClassName('song_item')).length;
    }     
    music.src = `Music/wkn/${index}.mp3`;
    poster_masterplay.src =`Picture_CSN/anhwkn/${index}.jpg`;
    music.play();
    master_play.classList.remove('bi-play-fill');
    master_play.classList.add('bi-pause-fill');
    download_music.href = `Music/wkn/${index}.mp3`;

    let song_title = songs.filter((els) => {
        return els.id == index;
    });
    song_title.forEach(elss =>{
        let {songName} = elss;
        title.innerHTML = songName;
        
        download_music.setAttribute("download", `${songName}.mp3`); // Đặt tên file tải về
    });
    makeAllPlays();
    el.target.classList.remove('bi-play-circle-fill');
    el.target.classList.add('bi-pause-circle-fill');
    wave.classList.add('active1');
})

next.addEventListener('click', ()=>{
    index ++;
    if(index > Array.from(document.getElementsByClassName('song_item')).length){
        index = 1;
    }     
    music.src = `Music/wkn/${index}.mp3`;
    poster_masterplay.src =`Picture_CSN/anhwkn/${index}.jpg`;
    music.play();
    master_play.classList.remove('bi-play-fill');
    master_play.classList.add('bi-pause-fill');
    download_music.href = `Music/wkn/${index}.mp3`;

    let song_title = songs.filter((els) => {
        return els.id == index;
    });
    song_title.forEach(elss =>{
        let {songName} = elss;
        title.innerHTML = songName;
        
        download_music.setAttribute("download", `${songName}.mp3`); // Đặt tên file tải về
    });
    makeAllPlays();
    el.target.classList.remove('bi-play-circle-fill');
    el.target.classList.add('bi-pause-circle-fill');
    wave.classList.add('active1');
})


let shuffle = document.getElementsByClassName('shuffle')[0];
shuffle.addEventListener('click',()=>{
    let b = shuffle.innerHTML;
   
    switch (b) {
        case "next":
        shuffle.classList.add('bi-repeat');
            shuffle.classList.remove('bi-music-note-beamed');
            shuffle.classList.remove('bi-shuffle');
            shuffle.innerHTML = 'repeat';
            break;
        case "repeat":
        shuffle.classList.remove('bi-repeat');
            shuffle.classList.remove('bi-music-note-beamed');
            shuffle.classList.add('bi-shuffle');
            shuffle.innerHTML = 'random';
            break;
        case "random":
        shuffle.classList.remove('bi-repeat');
            shuffle.classList.add('bi-music-note-beamed');
            shuffle.classList.remove('bi-shuffle');
            shuffle.innerHTML = 'next';
            break;
    }
});

const next_music = () => {
    if (index == songs.length) {
        index = 1
    } else {
        index ++;
    }
    music.src = `Music/wkn/${index}.mp3`;
    poster_masterplay.src =`Picture_CSN/anhwkn/${index}.jpg`;
    music.play();
    master_play.classList.remove('bi-play-fill');
    master_play.classList.add('bi-pause-fill');
    download_music.href = `Music/wkn/${index}.mp3`;

    let song_title = songs.filter((els) => {
        return els.id == index;
    });
    song_title.forEach(elss =>{
        let {songName} = elss;
        title.innerHTML = songName;
        
        download_music.setAttribute("download", `${songName}.mp3`); // Đặt tên file tải về
    });
    makeAllPlays();
    el.target.classList.remove('bi-play-circle-fill');
    el.target.classList.add('bi-pause-circle-fill');
    wave.classList.add('active1'); 
}

const repeat_music = () => {
    index;
    music.src = `Music/wkn/${index}.mp3`;
    poster_masterplay.src =`Picture_CSN/anhwkn/${index}.jpg`;
    music.play();
    master_play.classList.remove('bi-play-fill');
    master_play.classList.add('bi-pause-fill');
    download_music.href = `Music/wkn/${index}.mp3`;

    let song_title = songs.filter((els) => {
        return els.id == index;
    });
    song_title.forEach(elss =>{
        let {songName} = elss;
        title.innerHTML = songName;
        
        download_music.setAttribute("download", `${songName}.mp3`); // Đặt tên file tải về
    });
    makeAllPlays();
    el.target.classList.remove('bi-play-circle-fill');
    el.target.classList.add('bi-pause-circle-fill');
    wave.classList.add('active1'); 
}
const random_music = () => {
    if (index == songs.length) {
        index = 1
    } else {
        index = Math.floor((Math.random() * songs.length) + 1);
    }
    music.src = `Music/wkn/${index}.mp3`;
    poster_masterplay.src =`Picture_CSN/anhwkn/${index}.jpg`;
    music.play();
    master_play.classList.remove('bi-play-fill');
    master_play.classList.add('bi-pause-fill');
    download_music.href = `Music/wkn/${index}.mp3`;

    let song_title = songs.filter((els) => {
        return els.id == index;
    });
    song_title.forEach(elss =>{
        let {songName} = elss;
        title.innerHTML = songName;
        
        download_music.setAttribute("download", `${songName}.mp3`); // Đặt tên file tải về
    });
    makeAllPlays();
    el.target.classList.remove('bi-play-circle-fill');
    el.target.classList.add('bi-pause-circle-fill');
    wave.classList.add('active1'); 
}


music.addEventListener('ended', ()=>{
   let b = shuffle.innerHTML;
    switch (b) {
        case 'repeat':
            repeat_music();
            break;
        case 'next':
            next_music();
            break;
        case 'random':
            random_music();
            break;
    }
})
