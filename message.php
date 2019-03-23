<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title> send a message </title>

    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->


  <!-- Optional theme -->
      <link href="assets/vendor/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="css/style.css">

    
  </head>
  <body>
    <!-- form untuk pesan disini yaaaaaaaaa -->
    <div class="modal show" id="modalCompose">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title">Send A Message</h4>
          </div>
          <div class="modal-body">
                        <form action="" onSubmit="validation()">
              <div class="form-group">
                <label for="">Subject</label>
                <input type="text" class="form-control" id="messageSubject">
              </div>
              
              <div class="form-group">
                <label for="">Message</label>
                <textarea name="" id="messageBody" cols="15" rows="8" class="form-control"></textarea>
              </div>
              
              <button type="submit" class="btn btn-primary btn-block">Send</button>
            </form>
          </div>
          </div>
          </div>
          </div>

            <!-----ini respon alert pakai fungsi if--->
            <script src="alesrt.js"></script>
            <script type="text/javascript">
                           function validation() {
                var subject = document.getElementById('messageSubject').value;
                var message = document.getElementById('messageBody').value;
                
                if((subject == subject) && (message == message)) {
                  alert('success')
                }
                else {
                  alert('fail');
                }
              }
            </script>

            
          </div>
        </div>
      </div>
    </div>
    
  </body>
  </html>