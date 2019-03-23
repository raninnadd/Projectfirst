 function validation()
              {
                var subject = document.getElementById('inputSubject').value; 
                var body = document.getElementById('inputBody').value;
                if ((subject == subject) && (body == body)) {
                  swal('success');
                }
                else {
                  alert('error!'')
                }
              }