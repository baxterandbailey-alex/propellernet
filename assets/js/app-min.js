function headerHideShow(){let e,t=0;const n=document.querySelector("#site-header"),o=n.offsetHeight;window.addEventListener("scroll",(()=>{e=!0})),setInterval((function(){e&&(!function(){let e=window.pageYOffset;if(Math.abs(t-e)<=5)return;e>t&&e>2*o?(n.classList.remove("nav-down"),n.classList.add("nav-up")):e+window.innerHeight<document.body.clientHeight&&(n.classList.remove("nav-up"),n.classList.add("nav-down"));t=e}(),e=!1)}),250)}function smoothScroll(){const e=document.querySelectorAll("a[href*='#']:not([href='#']):not([href='#0'])");for(const n of e)n.addEventListener("click",t);function t(e){e.preventDefault();const t=this.getAttribute("href"),n=document.querySelector(t).offsetTop;scroll({top:n-100,behavior:"smooth"})}}const DOMReady=function(e){"interactive"===document.readyState||"complete"===document.readyState?e():document.addEventListener?document.addEventListener("DOMContentLoaded",e()):document.attachEvent&&document.attachEvent("onreadystatechange",(function(){"loading"!=document.readyState&&e()}))};DOMReady((function(){headerHideShow(),smoothScroll()}));