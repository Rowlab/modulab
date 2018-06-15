var loader = document.querySelector('.login__loader');


if (loader) {
  setTimeout(function()
  {
    loader.style.opacity = "0"
    loader.style.transition = "0.6s ease all"
    loader.addEventListener('transitionend', function(){
      loader.style.display = 'none'
    })

  }, 5150);
}
