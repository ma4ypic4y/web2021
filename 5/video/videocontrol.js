var myVideo = document.getElementById("video1");

function playPause() {
    if (myVideo.paused)
        myVideo.play();
    else
        myVideo.pause();
}

function makeBig() {
    myVideo.width = 1300;
    myVideo.height = 700;
}

function makeSmall() {
    myVideo.width = 500;
    myVideo.height = 400;
}

function makeNormal() {
    myVideo.width = 1050;
    myVideo.height = 590;
}