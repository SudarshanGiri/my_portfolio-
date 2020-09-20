//navbar burger click event
document.querySelector('.burger').addEventListener('click',function(){
    document.querySelector('.nav-links').classList.toggle('nav-links-show');
    document.querySelector('.burger').classList.toggle('burger-animate');
})
window.addEventListener('DOMContentLoaded', (event) => {
    console.log('DOM fully loaded and parsed');
    // skills tab toggle
    var frontend_skills=document.querySelector('.frontend-skills');
    var backend_skills=document.querySelector('.backend-skills');
    var others_skills=document.querySelector('.others-skills');

    var frontend_tab=document.querySelector('.frontend-tab');
    var backend_tab=document.querySelector('.backend-tab');
    var others_tab=document.querySelector('.others-tab');
    frontend_tab.addEventListener("click",function(){
        backend_tab.classList.remove('active');
        frontend_tab.classList.add('active');
        others_tab.classList.remove('active');

        frontend_skills.style.display='flex';
        backend_skills.style.display='none';
        others_skills.style.display='none';

    });
    backend_tab.addEventListener("click",function(){
        backend_tab.classList.add('active');
        frontend_tab.classList.remove('active');
        others_tab.classList.remove('active');

        frontend_skills.style.display='none';
        backend_skills.style.display='flex';
        others_skills.style.display='none';

      

    });
    others_tab.addEventListener("click",function(){
        backend_tab.classList.remove('active');
        frontend_tab.classList.remove('active');
        others_tab.classList.add('active');

        frontend_skills.style.display='none';
        backend_skills.style.display='none';
        others_skills.style.display='flex';

    });


});

//onscroll
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    var nav=document.querySelector("nav");
    if (document.body.scrollTop > 70 || document.documentElement.scrollTop > 70) {
    nav.style.background="#000";
    nav.style.borderBottom="1px solid #646464";
    } 
    else{
        nav.style.background="transparent";
        nav.style.borderBottom="none";




    }
}


