const audioPath = '../Audio/';
const audioElement = document.getElementById('audio-element');
const audioItems = document.querySelectorAll('.audio-item');
audioItems.forEach(item => {
  item.addEventListener('mouseover', (e) => {
    audioElement.src = audioPath + e.target.getAttribute('data-audio');
    audioElement.load()
    audioElement.play()
  })
  item.addEventListener('mouseout', () => {
    audioElement.pause() 
    audioElement.currentTime = 0;
  })
})