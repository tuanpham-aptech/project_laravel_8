var collectionSelect = document.querySelector('.collection-select');
var collectionSublist = document.querySelector('.collection_sub-list');

collectionSelect.addEventListener('click',function(){
    if(collectionSublist.style.display == 'none'){
        collectionSublist.style.display = 'block';
    }else{
        collectionSublist.style.display = 'none';
    }
});

var headerIcon = document.querySelector('.header-icon');
var cartMe = document.querySelector('.cart-me');

headerIcon.addEventListener('click',function(){
    if(cartMe.style.display == 'none'){
        cartMe.style.display ='block';
    }else{
        cartMe.style.display ='none';
    }
});

var iconShow = document.querySelector('.icon-show');
var menuSubMobile = document.querySelector('.menu-sub-mobile');

iconShow.addEventListener('click',function(){
    if(menuSubMobile.style.display == 'none'){
        menuSubMobile.style.display ='block';
    }else{
        menuSubMobile.style.display ='none';
    }
})

var btnMenu = document.querySelector('.btn-menu');
var menuSelectMobi = document.querySelector('.menu-select-mobi');

btnMenu.addEventListener('click',function(){
    if(menuSelectMobi.style.display == 'none'){
        menuSelectMobi.style.display ='block';
    }else{
        menuSelectMobi.style.display ='none';
    }
})

