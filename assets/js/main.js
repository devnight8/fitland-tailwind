const loginBtn = document.querySelector("#login");
const popUpLogin = document.querySelector("#popup-login");
loginBtn.addEventListener("click", function (e) {
  e.preventDefault();
popUpLogin.classList.toggle("flex");
popUpLogin.style.display = popUpLogin.classList.contains("flex") ? "flex" : "none";

// Close popup when clicking outside
document.addEventListener('click', function(event) {
  if (popUpLogin.classList.contains('flex') && 
      !popUpLogin.contains(event.target) && 
      event.target !== loginBtn) {
    popUpLogin.classList.remove('flex');
    popUpLogin.style.display = 'none';
  }
});
});
