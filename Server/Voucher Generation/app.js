 const bcrypt = require('bcrypt');
document.querySelector('.get-jokes').addEventListener('click', getCodes);

function getCodes(e) {
 // const number = document.querySelector('input[type="number"]').value;

  const xhr = new XMLHttpRequest();
  xhr.code.json.parse()

  xhr.open('POST', `https://random.api.randomkey.io/v1/regex`, true);

  xhr.onload = function() {
    if(this.status === 200) {
      const response = JSON.parse(this.responseText);
      console.log(responseText);
      let output = '';

      if(response.type === 'success') {
        response.value.forEach(function(code){
          output += `<li>${code.code}</li>`;
        });
      } else {
        output += '<li>Something went wrong</li>';
      }

      document.querySelector('.codes').innerHTML = output;
    }
  }

const saltRounds = 10;
const myPwd = output;
//const someOtherPlaintextPassword = 'not_bacon';
 
//Technique : (generate a salt and hash on separate function calls):

bcrypt.genSalt(saltRounds, function(err, salt) {
    bcrypt.hash(myPwd, salt, function(err, hash) {
        // Store hash in your password DB.
    });
});
  xhr.send();

  e.preventDefault();
}
