/*
 * Main Javascript File
 * ----
 * This is the main javascript file that will initiate everything
 */
var folder = '/jameslatten.com';

// Lets first figure out if there is a logged user
function checkLoginStatus()
{
    
}

// Start main socket
var socket = new WebSocket("ws://localhost:8083");

socket.onopen = function(e) {
    console.log("Connection established!");
};
