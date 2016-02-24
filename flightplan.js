var plan = require("flightplan");

var appName = "tamaraejoaomilton";
var username = "u650145686";
var startFile = "";
var stagingSettings = {
    host: "31.170.166.19",
    username: username,
    port: 65002,
    agent: process.env.SSH_AUTH_SOCK
  }

// Deploy to Staging and Sandbox
plan.target("tamaraejoaomilton", [stagingSettings]);


// run commands on localhost
plan.local(function(local) {
  local.log('Copy files to remote hosts');
  var filesToCopy = local.exec('git ls-files', {silent: true});
  local.transfer(filesToCopy, '~/public_html');
});

// Run on remote after sync
// plan.remote(function(remote) {
//   remote.with('cd /var/www/html2', function() {
//     // remote.log('[NPM - Install dependencies]');
//     // remote.sudo('npm install', {user: username});
//
//   });
// });

