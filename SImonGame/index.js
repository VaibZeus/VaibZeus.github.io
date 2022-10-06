
var level = 0;
var quest = [];
var answer = [];
var start = false;

/* Handling Keypress to Start */
$(document).keypress(function (event) {
    if (!start) {
        quest = [];
        answer = [];
        start = true;
        nextLevel();
        console.log(event.key)
    }
})

function nextLevel() {
    level++
    answer = []
    heading(level);
    var newColor = randomColor();
    quest.push(newColor);
    questRender(newColor);
}

/* heading the level */
function heading(i) {
    $("h1").text("Level " + i)

}

/* generating random quest */
function randomColor() {
    var rand = Math.floor(Math.random() * 4);
    var tiles = ["#red", "#green", "#yellow", "#blue"];
    return tiles[rand];
}

/* rendering current quest */
function questRender(colr) {
    $(colr).addClass("active");
    setTimeout(function () {
        $(colr).removeClass("active")
    }, 200);
}

/* Handling user response */
$(".tile").click(function () {
    var clickedTile = "#" + $(this).attr("id");
    answer.push(clickedTile);
    checkResponse(answer.length - 1);
})

/* Checking user response */
function checkResponse(currentClick) {

    /* used hints to create this one */
    if (answer[currentClick] === quest[currentClick]) {
        if (answer.length === quest.length) {
            setTimeout(function () {
                nextLevel();
            }, 500);
        }
    }
    else {
        gameOver();
    }

    /* this one was created by me,,, works the same just lengthy code */
    /* for (i = 0; i < answer.length; i++) {
         if (i != quest.length - 1) {
             if (answer[i] == quest[i]) {
                 continue;
             }
             else {
                 gameOver();
                 break;
 
             }
         }
         else {
             if (answer[i] == quest[i]) {
                 setTimeout(() => {
                     nextLevel();
                 }, 1000);
             }
             else {
                 gameOver();
                 break;
             }
       }
     } */
}

/* GameOver handler */
function gameOver() {
    $("h1").text("Game Over Press any key again!")
    $("body").css("background-color", "red")
    setTimeout(() => {
        $("body").css("background-color", "rgb(43, 12, 100)")
    }, 200);
    start = false;
    quest = [];
    answer = [];
    level = 0;
}

/* Show Rules */
$("button").click(
    function () {
        alert(`                             Rules of the SIMON GAME: 
        After starting the game you need to click the blinked sqaure.
As the level increases click the recently blinked tile after clicking all the 
                    previous tiles in their order of occurence!`)
    }
)