var database = firebase.database();
//var navbar = document.getElementsByClassName("navbar");
//var sticky = navbar.offsetTop;
function writeUserData(email,username,password,gender,favorite_console) {
    firebase.database().ref('users/' + username).set({
      username: username,
      email: email,
      password: password,
      gender: gender,
      favorite_console: favorite_console
    });
  }

  //function stickyNavbar(){
    //if(window.pageYOffset >= sticky){
      //navbar.classList.add("sticky");
    //}
    //else{
     // navbar.classList.remove("sticky");
   // }
 // }

  //window.onscroll = function() {stickyNavbar}

  

