const delayAnObj = document.querySelectorAll('.delayAnimation');

observer = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.intersectionRatio > 0) {
      entry.target.classList.add('runAnimation');
    } 
    // else {
    //   entry.target.classList.remove('fancy');
    // }
  });
});

delayAnObj.forEach(obj => {
  observer.observe(obj);
});