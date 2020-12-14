function openForm03() {
    document.getElementById("myForm03").style.display = "block";
  }
  
  function closeForm03() {
    document.getElementById("myForm03").style.display = "none";
  }



  document.addEventListener('mouseup', function(e) {
    var container = document.getElementById('myForm03');
    if (!container.contains(e.target)) {
      container.style.display = 'none';
    }
  });
