var socket = io.connect('127.0.0.1:3000', {secure: false});

let chatBox = document.getElementById("chat-box");
let msgInp = document.getElementById("msg-inp");
let msgSubmit = document.getElementById("msg-submit");
let nameInp = document.getElementById("name-inp");
let nameSubmit = document.getElementById("name-submit");

var name;
var nameCheck = false;

socket.on('connect',function() {
    console.log('Client has connected to the server!');
});

socket.on('clientConnected',function(id) {
    console.log('Client recevied ID: ' + id);
});

function sendMsg(username, msg) {
  if (nameCheck) {
    if (msgInp.value != "") {
      socket.emit('sendMessage', username, msg);
      msgInp.value = "";
    }
  } else {
    alert("Select a name first!");
  }
}

nameSubmit.onclick = function() {
    if (nameInp.value != "") {
      name = nameInp.value;
      nameInp.value = "";
      nameCheck = true;
    } else {
      alert("Select a name first!");
    }
};

msgSubmit.onclick = function() {
      sendMsg(name, msgInp.value);
};


socket.on('message',function(username, msg) {
    console.log('Client recevied message: ' + msg);

    chatBox.innerHTML += `

     <div class="msg-cell">
        <h2 class="username">${username}</h2>
        <h2 class="msg">${msg}</h2>
     </div>

    `;

});

window.addEventListener("keydown", checkKey, false);

function checkKey() {
  var x = event.keyCode;
  if ((x == 13) && (msgInp.value != "")) {
    sendMsg(name, msgInp.value);
  }
}
