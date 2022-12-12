const button = document.getElementById('themeSwitch');

button.onclick = function () {
	let item = document.querySelector('header > .profil');
	item.classList.toggle('darkTheme');
	item = document.querySelector('main');
	item.classList.toggle('darkTheme');
}