var is_dark_mode = true;

function start()
{
   button = document.getElementById("mode");
   button.addEventListener("click", changeColor, false);
}

function changeColor()
{
   var theme = document.getElementById("theme");
   button = document.getElementById("mode");

   if (!is_dark_mode)
   {
      is_dark_mode = true;
      theme.setAttribute("href", "dark_mode.css")
      button.value = "Switch to Light Mode";
   }
   else
   {
      is_dark_mode = false;
      theme.setAttribute("href", "light_mode.css")
      button.value = "Switch to Dark Mode";
   }
}
window.addEventListener("load", start, false);