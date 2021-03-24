const VIS = document.getElementById('visual-impairment-simulator');
const sims = ['none','macular-degeneration', 'glaucoma', 'hemianopia', 'cataracts'];
let currentSim = 0;

const toggleVIS = () => {
  VIS.classList.toggle('hidden');
  document.getElementsByClassName('container')[0].classList.toggle('blur-filter');
}

const nextSim = () => {
  VIS.classList.remove(sims[currentSim]);
  currentSim = currentSim == sims.length-1 ? 0 : currentSim+1;
  VIS.classList.add(sims[currentSim])
}

document.addEventListener('keydown', (e) => {
  if(e.key === 'p' || e.key === 'P'){
    nextSim();
    return;
  }
  if(e.key === 'o' || e.key === 'O'){
    toggleVIS();
    return;
  }
});

const audioPath = './Audio/';
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


let currentTask;
if(localStorage.getItem('currentTask')){
  currentTask = localStorage.getItem('currentTask');
}else{
  currentTask = 0;
}

const solutions = document.querySelectorAll('.solution');

const nextTask = () => {
  console.log('go next')
  //stop timer here, save to localstorage
  currentTask++;
  localStorage.setItem('currentTask', currentTask)
}

const handleSolutionClick = (e) => {
  const target = e.target.getAttribute('data-solution');
  console.log(target, currentTask, target == currentTask)
  if(target == currentTask){
    nextTask();
  }
}

solutions.forEach(solution => {
  solution.addEventListener('click', handleSolutionClick);
})