(function(){
    const sidebarSelcetion = document.getElementsByClassName('scroll-to') ??[]; //used https://stackoverflow.com/questions/19655189/javascript-click-event-listener-on-class to find how to add event listener to elements with same class
    var pageScroll = function(selection){
        let selectedSectionId = document.sidebarSelcetion[selection].textContent;
         let selectedSection = document.getElementById(selectedSectionId)
         scrollTo(selectedSection)
    }
    var bruh = function(){
        alert('bruh')
    }
    for(var i=0; i<=sidebarSelcetion.length;i++){
        sidebarSelcetion[i].addEventListener('click',pageScroll)
    }
    //sidebarSelcetion[1].addEventListener('click',bruh);

    //document.getElementById('About Us').addEventListener('click',pageScroll(i));
    
}
)();