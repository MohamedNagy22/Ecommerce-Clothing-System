const bar = document.getElementById('bar');
const nav = document.getElementById('navbar');
const close = document.getElementById('close');
var mainimg = document.getElementById('mainImg');
var imgs = document.getElementsByClassName('small-img');
var productCard = document.getElementsByClassName('pro');
if (bar) {

    bar.addEventListener('click', () => {
        nav.classList.add('active');
    })


}

if (close) {
    close.addEventListener('click', () => {
        nav.classList.remove('active');
    })

}

imgs[0].onclick = function() {
    mainimg.src = imgs[0].src
}
imgs[1].onclick = function() {
    mainimg.src = imgs[1].src
}
imgs[2].onclick = function() {
    mainimg.src = imgs[2].src
}
imgs[3].onclick = function() {
    mainimg.src = imgs[3].src
}