const playButton = document.getElementById('play-audio');
const audio = document.getElementById('audio');

playButton.addEventListener('click', () => {
  audio.play();
});