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

//array of tasks, this should be updated with the real tasks
const tasks = ['do this', 'do that']
//gets current task if there is one saved in localstorage, otherwise start from 0
let currentTask = parseInt(localStorage.getItem('currentTask')) || 0;

const solutions = document.querySelectorAll('.solution');
const startButton = document.getElementById('start-button');
const instructions = document.getElementById('instructions');
const instruction = document.getElementById('instruction-p');
instruction.innerHTML = tasks[currentTask];

//start the timer and hide the instructions
const startTask = () => {
  instructions.style.display = 'none';
  const startTime = Date.now();
  localStorage.setItem('taskStart', startTime);
}
startButton.addEventListener('click', startTask);

//get saved taskTimes from localstorage, if none available set to empty array
const taskTimes = JSON.parse(localStorage.getItem('taskTimes')) || [];

//stops timer, saves time in localstorage, increments currentTask. If all the tasks are done redirects to questionnaire page, otherwise show instructions for next task
const nextTask = () => {
  const stopTime = Date.now();
  const startTime = localStorage.getItem('taskStart');
  const totalTime = (stopTime - startTime) / 1000;
  const taskTime = {task: currentTask, time: totalTime}
  taskTimes.push(taskTime);
  localStorage.setItem('taskTimes', JSON.stringify(taskTimes))
  currentTask++;
  currentTask > tasks.length - 1 && (window.location.href = '../questions.php');
  localStorage.setItem('currentTask', currentTask)
  instruction.textContent = tasks[currentTask];
  instructions.style.display = 'flex';
}

//if clicked item is solution for the task, complete task and go to next
const handleSolutionClick = (e) => {
  const target = e.target.getAttribute('data-solution');
  if(target == currentTask){
    nextTask();
  }
}

//eventlisteners for all solution-elements
solutions.forEach(solution => {
  solution.addEventListener('click', handleSolutionClick);
})