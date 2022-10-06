function randomNumberForDice(){
    return Math.floor(Math.random()*6+1);
}

function gameResult(x) {
    return `🚩Player${x} wins!`;
}

let randomForP1=randomNumberForDice();
let randomForP2=randomNumberForDice();

let imageP1="images/dice"+randomForP1+".png";
let imageP2="images/dice"+randomForP2+".png";

var a=document.getElementsByClassName("dice");
a[0].querySelector("img").setAttribute("src",imageP1);
a[1].querySelector("img").setAttribute("src",imageP2);

if (randomForP1>randomForP2) {
    document.querySelector("h1").textContent = gameResult(1);
}
else if(randomForP1<randomForP2){
    document.querySelector("h1").textContent = gameResult(2);
}
else{
    document.querySelector("h1").textContent = "🎌Draw";
}