function openForm04() {
    document.getElementById("myForm04").style.display = "block";
  }
  
  function closeForm04() {
    document.getElementById("myForm04").style.display = "none";
  }

  document.addEventListener('mouseup', function(e) {
    var container = document.getElementById('myForm04');
    if (!container.contains(e.target)) {
      container.style.display = 'none';
    }
  });