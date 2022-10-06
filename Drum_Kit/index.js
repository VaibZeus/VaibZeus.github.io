let arr = document.querySelectorAll("button");
let keys = [];


for (i = 0; i < arr.length; i++) {
    keys.push(arr[i].innerHTML);
}

for (i = 0; i < arr.length; i++) {
    arr[i].addEventListener("click", function () {
        var btn = this.innerHTML;
        sound(btn);
        buttonAnimation(btn)
    })
}

document.addEventListener("keypress", function (event) {
    sound(event.key)
    buttonAnimation(event.key)
})

function sound(key) {

    switch (key) {
        case "w":
            var w = new Audio("sounds/tom-4.mp3");
            w.play();
            break;
        case "a":
            var a = new Audio("sounds/tom-3.mp3");
            a.play();
            break;
        case "s":
            var s = new Audio("sounds/tom-2.mp3");
            s.play();
            break;
        case "d":
            var d = new Audio("sounds/tom-1.mp3");
            d.play();
            break;
        case "j":
            var j = new Audio("sounds/snare.mp3");
            j.play();
            break;
        case "k":
            var k = new Audio("sounds/kick-bass.mp3");
            k.play();
            break;
        case "l":
            var l = new Audio("sounds/crash.mp3");
            l.play();
            break;

        default:
            console.log(key);
            break;
    }
}

function buttonAnimation(currentKey) {
    var ckey=document.querySelector("."+currentKey);
    ckey.classList.add("pressed");
    setTimeout(() => {
        ckey.classList.remove("pressed");   
    }, 200);
}