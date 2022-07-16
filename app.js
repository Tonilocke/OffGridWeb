// variables
let burger = document.querySelector(".navbar-burger");
let menu = document.querySelector("#navMenu");
let navItems = document.querySelectorAll(".navbar-item");
let phraseHandler = document.querySelector("#phrase");
let btns = document.querySelectorAll(".myBtn");

let phrasesArr = ["Right, here we are. So that's the thing: hug the mushroom and squeeze the rope tight. That's it, your job is done. The other guy will collect the white oil from the head of the mushroom. Trust me, you got the easy part...",
                "Now listen carefully, lad: you see this chain here? Hold it, hold it tight. It's a hour trip at max speed, and you need to hold it the whole way, or the wheel will fly off, you understand? That godamn mech forgot to fix it yesterday, tsk!",
                "Let's start the lesson, little girl. The mushroom juices have many colours and uses: so pay attention. The green and smelly one is good for your stomach; bright yellow is a disinfectant; the dark blue one is for… damn, I can't remember, we'll have to test it: Pekky! Pekky! Here, here, good dog… look at what I’ve got for you...",
                "Mulif13, look, it's not that difficult, so don't be scared. The rule is simple: little monster, little gun; big monster, big gun!",
                "Dry World is 100% cat-free.",
                "No dog was hurt during the production of this game."
                ];


// burger handler
burger.addEventListener("click",()=>{
    menu.classList.toggle("is-active");
    menu.classList.toggle("navbar-end");
 
});

// phrasechanger
let interval = setInterval(changePhrase,5000);

function changePhrase(){
    
    phraseHandler.innerHTML = phrasesArr[Math.floor(Math.random()*phrasesArr.length)];
}

btns.forEach(btn=>{
    btn.addEventListener("click",()=>{
        btn.classList.add("clicked");
    })
})