
(function(){

    const sidebarSelcetion = document.getElementsByClassName('scroll-to') ??[];
    for(var i=0; i<sidebarSelcetion.length;i++){
        sidebarSelcetion[i].addEventListener('click',pageScroll);
    }
    document.getElementById("search").addEventListener(oninput,refresh);
}
)();
function pageScroll(ev){
    let x=ev.clientX
    let y=ev.clientY
    let selection = document.elementFromPoint(x,y)
    let selectedSectionId =selection.innerText;
    let selectedSection = document.getElementById(selectedSectionId);
    let elementtop =selectedSection.getBoundingClientRect(); // used https://stackoverflow.com/questions/442404/retrieve-the-position-x-y-of-an-html-element and https://developer.mozilla.org/en-US/docs/Web/API/Element/getBoundingClientRect to find how to get x and y coords of an element.
    let bodytop = document.body.getBoundingClientRect();
    let offset = elementtop.top - bodytop.top;
    window.scrollTo({ //used https://developer.mozilla.org/en-US/docs/Web/API/Window/scrollTo to find how to implement scroll function
        top:offset,
        behavior:"smooth",
    })

}
function refresh(){
    let courses=document.getElementById("refresh");
    let content =courses.innerHTML;
    courses.innerHTML=content;
    console.dir("refershed");
}