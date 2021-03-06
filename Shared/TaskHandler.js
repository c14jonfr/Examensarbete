//array of tasks, this should be updated with the real tasks
const tasks = ['Find the green car by the company Wow\'s and click the "Buy"-button.',
 'Find the blue plane by Pop\'s and recommend it to a friend.',
  'Buy a blue car by the company Pop\'s.',
  'Find a red boat by Bob\'s and click the image of the boat.',
  'Recommend the company Wow\'s green plane to a friend.',
  'Find a blue boat by Wow\'s and buy it.',
  'Find the page which has a green car by Pop\'s. Click the image of the car.',
  'Buy a red plane by Bob\'s.',
  'Click an image of a blue boat by the company Wow\'s.',
  'Recommend the red car by the company Bob\'s to your friend',
]
//gets current task if there is one saved in localstorage, otherwise start from 0
let currentTask = parseInt(localStorage.getItem('currentTask')) || 0;

const solutions = document.querySelectorAll('.solution');
const startButton = document.getElementById('start-button');
const instructions = document.getElementById('instructions');
const instruction = document.getElementById('instruction-p');
const previousTask = document.getElementById('previous-task');
instruction.innerHTML = tasks[currentTask];
previousTask.textContent = currentTask > 0 ? 'Task '+(currentTask)+' completed' : 'This is your first task';

if(!localStorage.getItem('instructions-status') || localStorage.getItem('instructions-status') === 'fullsize'){
  instructions.classList.remove('instructions-minimized');
}else{
  instructions.classList.add('instructions-minimized');
}

//display audio-tip/hint only for users of the A version
if(window.location.href.includes('/A/') && currentTask >= 5){
  document.getElementById('audio-tip').style.display = 'block';
}

//start the timer and hide the instructions
const startTask = () => {
  instructions.classList.toggle('instructions-minimized')
  localStorage.setItem('instructions-status', 'minimized');
  const startTime = Date.now();
  localStorage.setItem('taskStart', startTime);
  currentTask === 0 && localStorage.setItem('totalStart', startTime);
}
startButton.addEventListener('click', startTask);

//get saved taskTimes from localstorage, if none available set to empty array
const taskTimes = JSON.parse(localStorage.getItem('taskTimes')) || [];

//stops timer, saves time in localstorage, increments currentTask. If all the tasks are done redirects to questionnaire page, otherwise show instructions for next task
const nextTask = () => {
  const stopTime = Date.now();
  const startTime = localStorage.getItem('taskStart');
  const totalTaskTime = (stopTime - startTime) / 1000;
  const taskTime = {task: currentTask, time: totalTaskTime}
  taskTimes.push(taskTime);
  if(currentTask === (tasks.length - 1)){
    const totalStartTime = localStorage.getItem('totalStart');
    const totalTime = {totalTime: (stopTime - totalStartTime) / 1000};
    taskTimes.push(totalTime);
  }
  localStorage.setItem('taskTimes', JSON.stringify(taskTimes))
  currentTask++;
  currentTask > tasks.length - 1 && (window.location.href = './Form.php');
  localStorage.setItem('currentTask', currentTask)
  previousTask.textContent = tasks[currentTask] ? 'Task '+(currentTask)+' completed' : 'This is your first task';
  instruction.textContent = tasks[currentTask];
  //instructions.style.display = 'flex';
  instructions.classList.toggle('instructions-minimized');
  localStorage.setItem('instructions-status', 'fullsize');
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

const closeIntroduction = document.getElementById('close-introduction');
const introduction = document.getElementById('introduction');

closeIntroduction.addEventListener('click', () => {
  introduction.style.display = 'none';
})