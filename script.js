function goBack() {
  window.history.back();
}

// let tabHeader = document.getElementsByClassName("lsc_page_tabs")[0];
// // let tabIndicator = document.getElementsByClassName("tab-indicator")[0];
// let tabBody = document.getElementById("lsc_body")[0];

// let tabsPane = tabHeader.getElementsByTagName("li");

// for(let i=0;i<tabsPane.length;i++){
//   tabsPane[i].addEventListener("click",function(){
//     tabHeader.getElementsByClassName("active")[0].classList.remove("active");
//     tabsPane[i].classList.add("active");
//     tabBody.getElementsByClassName("active")[0].classList.remove("active");
//     tabBody.getElementsByTagName("lsc_match_stats_row")[i].classList.add("active");
    
//     // tabIndicator.style.left = `calc(calc(100% / 4) * ${i})`;
//   });
// }


$(document).keydown(function(e){
  if(e.which === 123){
     return false;
     console.log("disabled");
  }
});

// var tryCount = 0;
// var minimalUserResponseInMiliseconds = 200;

// function check() {
//     before = new Date().getTime();
//     debugger;
//     after = new Date().getTime();
//     if (after - before > minimalUserResponseInMiliseconds) {
//         document.write(" Alert!! Close Developer Tools Now... ");
//         self.location.replace(window.location.protocol + window.location.href.substring(window.location.protocol.length));
//     } else {
//         before = null;
//         after = null;
//         delete before;
//         delete after;
//     }
//     setTimeout(check, 100);
// }
// check();
// window.onload = function() {
//     document.addEventListener("contextmenu", function(e) {
//         e.preventDefault();
//     }, false);
//     document.addEventListener("keydown", function(e) { //document.onkeydown = function(e) {// "I" key
//         if (e.ctrlKey && e.shiftKey && e.keyCode == 73) {
//             disabledEvent(e);
//         } // "J" key
//         if (e.ctrlKey && e.shiftKey && e.keyCode == 74) {
//             disabledEvent(e);
//         } // "S" key + macOS
//         if (e.keyCode == 83 && (navigator.platform.match("Mac") ? e.metaKey : e.ctrlKey)) {
//             disabledEvent(e);
//         } // "U" key
//         if (e.ctrlKey && e.keyCode == 85) {
//             disabledEvent(e);
//         } // "F12" key
//         if (event.keyCode == 123) {
//             disabledEvent(e);
//         }
//     }, false);

//     function disabledEvent(e) {
//         if (e.stopPropagation) {
//             e.stopPropagation();
//         } else if (window.event) {
//             window.event.cancelBubble = true;
//         }
//         e.preventDefault();
//         return false;
//     }
// };