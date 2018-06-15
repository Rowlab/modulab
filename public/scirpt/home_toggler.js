
var user = document.querySelector('.home__account__user');
var toggler = document.querySelector('.home__account__user__info__menu_toggler');

user.addEventListener('click', function()
{
  user.classList.toggle('droped');
  toggler.classList.toggle('toggled');
})
