const VIS = document.getElementById('visual-impairment-simulator');
const sims = ['none','macular-degeneration', 'glaucoma', 'hemianopia', 'cataracts'];
let currentSim = 0;

const toggleVIS = () => {
  VIS.classList.toggle('hidden');
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

