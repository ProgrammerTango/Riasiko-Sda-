/*==========================typing animation======================*/
var typed = new Typed(".typing", {
    strings:["","Web designer","Web developer", " and Graphic designer"],
    typeSpeed:80,
    backspeed:60,
    loop:true 
})


/*==============================Aside================================ */
const nav = document.querySelector(".nav"),
    navList = nav.querySelectorAll("li"),
    totalNavList = navList.length;
    for(let i=0; i<totalNavList; i++)
    {
        const a = navList[i].querySelector("a");
        a.addEventListner("click", function()
        {
            for(let j=0; j<totalNavList; j++)
            {
                navList[j].querySelector("a").classList.remove("active");
            }
            this.classList.add("active")
        })
    }
