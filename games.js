const pirate = document.getElementById("pirate");
const enemy = document.getElementById("enemy");

document.addEventListener("keydown", function(event){
    jump();
});

function jump(){
    if(pirate.classList != "jump"){
        pirate.classList.add("jump");
    }
    setTimeout( function() {
        pirate.classList.remove("jump")
    }, 300)
}
let isAlive = setInterval(function(){
    let pirateTop = parseInt(window.getComputedStyle(pirate).getPropertyValue("top"));
    let enemyLeft = parseInt(window.getComputedStyle(enemy).getPropertyValue("left"));
    if(enemyLeft < 50 && enemyLeft > 0 && pirateTop >= 120){
        alert("Game over((");
    }
},10)