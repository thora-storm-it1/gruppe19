var socket = io.connect('127.0.0.1:3000', {secure: false});

let chatBox = document.getElementById("chat-box");
let msgInp = document.getElementById("msg-inp");
let msgSubmit = document.getElementById("msg-submit");
let nameInp = document.getElementById("name-inp");
let nameSubmit = document.getElementById("name-submit");

var name = "Nova";

socket.on('connect',function() {
    console.log('Client has connected to the server!');
});

socket.on('clientConnected',function(id) {
    console.log('Client recevied ID: ' + id);
});

nameSubmit.onclick = function() {
    name = nameInp.value;
    console.log('Navnet ditt er satt til: ' + name);
};

function sendMsg(username, msg) {

    socket.emit('sendMessage', username, msg);
    msgInp.value = "";

}

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
