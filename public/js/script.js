/************************************
 * banner cookies
 */

var aceptar = document.querySelector("#cookies-eu-accept");
var rechazar = document.querySelector("#cookies-eu-reject");
var bannerAceptar = document.querySelector("#cookies-eu-wrapper");
var bannerRechazar = document.querySelector("#cookies-eu-banner-closed");

function comprobarCookieBanner() {
  let cookie_banner = getCookie("banner-cookies");
  if (!cookie_banner) {
    bannerAceptar.style.display = "block";
    inicioBannerCookies();
  } else {
    bannerAceptar.style.display = "none";
  }
}
function bannerCookiesAceptado() {
  bannerAceptar.style.display = "none";
  setCookie("banner-cookies", "Aceptado", 365);
}
function bannerCookiesRechazado() {
  bannerAceptar.style.display = "none";
  bannerRechazar.style.display = "block";
}
function volverMostrarBannerCookies() {
  bannerRechazar.style.display = "none";
  bannerAceptar.style.display = "block";
}
function inicioBannerCookies() {
  aceptar.addEventListener("click", bannerCookiesAceptado);
  rechazar.addEventListener("click", bannerCookiesRechazado);
  bannerRechazar.addEventListener("click", volverMostrarBannerCookies);
}
window.addEventListener("load", comprobarCookieBanner);

/**********************************
 * funciones para cookies
 */
function getCookie(cname) {
  var name = cname + "=";
  var decodedCookie = decodeURIComponent(document.cookie);
  var ca = decodedCookie.split(";");
  for (var i = 0; i < ca.length; i++) {
    var c = ca[i];
    while (c.charAt(0) == " ") {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}

/***************************************
 * funcion para establecer una cookie
 * *************************************/
function setCookie(cname, cvalue, exdays) {
  var d = new Date();
  d.setTime(d.getTime() + exdays * 24 * 60 * 60 * 1000);
  var expires = "expires=" + d.toUTCString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}
function setCookie_por_minutos(cname, cvalue, exdays) {
  var d = new Date();
  d.setTime(d.getTime() + exdays * 60 * 1000);
  var expires = "expires=" + d.toUTCString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}
