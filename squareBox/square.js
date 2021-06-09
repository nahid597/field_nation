var xPos = 0;
var yPos = 50;
var dx = 10;
var dy = 10;
const heightOfBox = 100;
const widthOfBox = 100;
var interAnimation = null;
var blueBox;
const heightOfWindow = window.innerHeight;
const widthOfWindow = window.innerWidth;

setTimeout(() => {
    animateBox();
}, 500);

const animateBox = () => {
    clearInterval(interAnimation);
    blueBox = document.getElementById("blueBox");
   interAnimation = setInterval(frame, 1000);
};

const frame = () => {
    xPos += dx;
    yPos += dy;

    if(xPos < 0) {
        xPos = 0;
        dx = -1*dx;
    }

    if(xPos > widthOfWindow - widthOfBox) {
        xPos = widthOfWindow - widthOfBox;
        dx = -1*dx;
    }

    if(yPos < 0) {
        yPos = 0;
        dy = -1*dy;
    }

    if(yPos > heightOfWindow - heightOfBox) {
        yPos = heightOfWindow - heightOfBox;
        dy = -1*dy;
    }

    blueBox.style.left = xPos + "px";
    blueBox.style.top = yPos + "px";
}

