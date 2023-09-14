// ----------------card code------------

const buttons = document.querySelectorAll(".Explore");
buttons.forEach(function(currentBtn) {
  currentBtn.addEventListener('click', toggleCardData);
});

function toggleCardData(event) {
  const card = event.target.closest('.first-col');
  
  const explore = card.querySelectorAll(".explore-info");
  const cardInfo = card.querySelectorAll(".card-id");

  explore.forEach(function(data) {
    data.classList.add("explore-js");
  });

  cardInfo.forEach(function(val) {
    val.classList.add("card-1-js");
  });

  const close=card.querySelectorAll(".close");
  close.forEach(function(btn){
    btn.addEventListener('click', function(){
        explore.forEach(function(data) {
            data.classList.remove("explore-js");
          });
          cardInfo.forEach(function(val) {
            val.classList.remove("card-1-js");
          });
          const slider = card.querySelectorAll(".slid");
          const info = card.querySelectorAll(".info");
        
          slider.forEach(function(a) {
            a.style.width = a.style.width === "50%" ? "50%" : "50%";
            a.style.height = a.style.height === "100%" ? "100%" : "100%";
          });
        
          info.forEach(function(b) {
            b.style.width = b.style.width === "50%" ? "50%" : "50%";
            b.style.height = b.style.height === "100%" ? "100%" : "100%";
          });
    });
  });

  const slider = card.querySelectorAll(".slid");
  const info = card.querySelectorAll(".info");

  slider.forEach(function(a) {
    a.style.width = a.style.width === "100%" ? "100%" : "100%";
    a.style.height = a.style.height === "50%" ? "50%" : "50%";
  });

  info.forEach(function(b) {
    b.style.width = b.style.width === "100%" ? "100%" : "100%";
    b.style.height = b.style.height === "100%" ? "100%" : "100%";
  });
}
// ----------------card code------------



