const darkModeBtn = document.querySelector('#dark-mode-btn');
const body = document.body;

darkModeBtn.addEventListener('click', function() {
	body.classList.toggle('dark-mode');
});
