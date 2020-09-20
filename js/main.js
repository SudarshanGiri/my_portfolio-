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

    var frontend_tab_skills=document.querySelector('.frontend-tab-skills');
    var backend_tab=document.querySelector('.backend-tab');
    var others_tab=document.querySelector('.others-tab');
    frontend_tab_skills.addEventListener("click",function(){
        backend_tab.classList.remove('active');
        frontend_tab_skills.classList.add('active');
        others_tab.classList.remove('active');

        frontend_skills.style.display='flex';
        backend_skills.style.display='none';
        others_skills.style.display='none';

    });
    backend_tab.addEventListener("click",function(){
        backend_tab.classList.add('active');
        frontend_tab_skills.classList.remove('active');
        others_tab.classList.remove('active');

        frontend_skills.style.display='none';
        backend_skills.style.display='flex';
        others_skills.style.display='none';

      

    });
    others_tab.addEventListener("click",function(){
        backend_tab.classList.remove('active');
        frontend_tab_skills.classList.remove('active');
        others_tab.classList.add('active');

        frontend_skills.style.display='none';
        backend_skills.style.display='none';
        others_skills.style.display='flex';

    });

    //set the height dynamically of the project-item-container
    var portfolio_items_wrapper=document.querySelector('.portfolio_items_wrapper');


    var frontend_items_wrapper=document.querySelector('.frontend_items_wrapper');
    var height=frontend_items_wrapper.offsetHeight;
    portfolio_items_wrapper.style.height=height + 'px';

    var fullstack_items_wrapper=document.querySelector('.fullstack_items_wrapper');
    var graphics_design_items_wrapper=document.querySelector('.graphics_design_items_wrapper');

    var frontend_tab=document.querySelector('.frontend_tab');
    var fullstack_tab=document.querySelector('.fullstack_tab');
    var graphics_design_tab=document.querySelector('.graphics_design_tab');

    frontend_tab.addEventListener('click',function(){
        frontend_items_wrapper.style.display="flex";
        fullstack_items_wrapper.style.display="none";
        graphics_design_items_wrapper.style.display="none";

        frontend_tab.classList.add('active');
        graphics_design_tab.classList.remove('active');
        fullstack_tab.classList.remove('active');

        var height=frontend_items_wrapper.offsetHeight;
        portfolio_items_wrapper.style.height=height + 'px';
    });
    fullstack_tab.addEventListener('click',function(){
        frontend_items_wrapper.style.display="none";
        fullstack_items_wrapper.style.display="flex";
        graphics_design_items_wrapper.style.display="none";

        frontend_tab.classList.remove('active');
        graphics_design_tab.classList.remove('active');
        fullstack_tab.classList.add('active');

        var height=fullstack_items_wrapper.offsetHeight;
        portfolio_items_wrapper.style.height=height + 'px';
    });
    graphics_design_tab.addEventListener('click',function(){
        frontend_items_wrapper.style.display="none";
        fullstack_items_wrapper.style.display="none";
        graphics_design_items_wrapper.style.display="flex";

        frontend_tab.classList.remove('active');
        fullstack_tab.classList.remove('active');
        graphics_design_tab.classList.add('active');

        var height=graphics_design_items_wrapper.offsetHeight;
        portfolio_items_wrapper.style.height=height + 'px';
    });


});

//onscroll change the background of nav
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




