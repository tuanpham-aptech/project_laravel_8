// slider
var sliderItem = document.querySelectorAll('.slider-item');
var sliderList = document.querySelector('.slider-list');
var nextBtn = document.querySelector('.next-btn');
var prevBtn = document.querySelector('.prev-btn');
var navigationDots = document.querySelector('.navigation-dots');

var numberOfItems = sliderItem.length;
// CHIỀU RỘNG CỦA thẻ
var sliderWith = sliderItem[0].clientWidth;
var currentSlider = 0;

// set up the slider
function init(){
    /*
    slideItem[0]= 0
    slideItem[1] = 100%
    slideItem[2] = 200%
    */
   sliderItem.forEach((img,i)=>{
       img.style.left=i * 100 +"%";
   });
}

init();

// next button click
nextBtn.addEventListener('click',function(){
    if(currentSlider >= numberOfItems - 1){
        goToSlider(0);
        return;
    }
    currentSlider++;
    goToSlider(currentSlider);
})

// prev button click
prevBtn.addEventListener('click',function(){
    if(currentSlider <=0){
        goToSlider(numberOfItems - 1);
        return;
    }
    currentSlider--;
    goToSlider(currentSlider);
})

function goToSlider(sliderNumber){
    // mỗi lần nhấn trừ đi bằng đúng kích thước của thẻ đó
    sliderList.style.transform = 'translateX(-'+ (sliderWith * sliderNumber) +'px)';

    currentSlider = sliderNumber;

    // {{-- setActiveClass(); --}}
}
