var buttons;

window.onload = function() {
  httpRequest = new XMLHttpRequest();

  httpRequest.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById('content').innerHTML = this.responseText;
    }
  };

  httpRequest.open("GET", "getbug.php?q=*", true);
  httpRequest.send();

  $('#addIssue').click(function(){
    userPage = new XMLHttpRequest();

    userPage.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById('content').innerHTML = this.responseText;
      }
    };

    userPage.open("GET", "addIssue.html", true);
    userPage.send();

  });

  $('#addUser').click(function(){
    userPage = new XMLHttpRequest();

    userPage.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById('content').innerHTML = this.responseText;
      }
    };

    userPage.open("GET", "addUser.html", true);
    userPage.send();

  });

    buttons = document.getElementsByClassName("problemButton");
    for (i=0; i<buttons.length; i++) {
      buttons[i].addEventListener('click', buttonEvent());
    }

}

function buttonEvent() {
  alert("hi");
  alert("HI");
  bug = new XMLHttpRequest();
  bug.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById('content').innerHTML = this.responseText;
    }
  };

  bug.open("GET", "bugDetail.php?q="+$(this).val(), true);
  bug.send();
}
