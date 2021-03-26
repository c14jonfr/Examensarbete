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
  currentTask > tasks.length - 1 && (window.location.href = './Form.php');
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