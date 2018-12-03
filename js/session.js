window.setInterval(function() {
  var el=document.createElement('img');
  el.src='../../php/refresh_session.php?rand='+Math.random();
  el.style.opacity=0.01;
  el.style.width=1;
  el.style.height=1;
  el.onload=function() {
    document.body.removeChild(el);
  };
  document.body.appendChild(el);
}, 6000);