const form = document.getElementById('form');

const handleSubmit = (e) => {
  e.preventDefault();
  const taskTimes = localStorage.getItem('taskTimes');
  const taskTimesInput = document.getElementById('taskTimes');
  taskTimesInput.value = taskTimes;
  form.submit();
}

form.addEventListener('submit', handleSubmit);