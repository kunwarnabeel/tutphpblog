const div = document.querySelector('.menuVerticalParent');
window.onscroll = function() {
    var top = window.scrollY;

    if (top >= 50) {
        div.classList.add('active')
    } else {
        div.classList.remove('active')
    }
}