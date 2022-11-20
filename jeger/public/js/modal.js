function reset()
{
  document.getElementById('btnSubmit').addEventListener('click',function(){
    document.getElementById('emailLabel').classList.add('d-none');
    document.getElementById('chooseFileLabel').classList.add('d-none');
    document.getElementById('chooseFileType').classList.add('d-none');
  });
}

function success()
{
  $("div.modalBodyResponse").html("<h3 class='modal-title text-center c-text' style='font-family: Potsdam, sans-serif'>Thank you for participating. Good luck!</h3>");
  $('#modalResponse').modal('show');
  setTimeout(() => {
    $('#modalResponse').modal('hide');
  }, 2500)
}

function error()
{
  $("div.modalBodyResponse").html("<h3 class='modal-title text-center c-text' style='font-family: Potsdam, sans-serif'>The receipt is not valid. Please try another.</h3>");
  $('#modalResponse').modal('show');
  setTimeout(() => {
    $('#modalResponse').modal('hide');
  }, 2500)
}

function errorStatus()
{
  $("div.modalBodyResponse").html("<h3 class='modal-title text-center c-text' style='font-family: Potsdam, sans-serif'>Something went wrong.Please try again.</h3>");
  $('#modalResponse').modal('show');
  setTimeout(() => {
    $('#modalResponse').modal('hide');
  }, 2500)
}


function errorAJAX()
{
  $("div.modalBodyResponse").html("<h3 class='modal-title text-center text-danger font-weight-bold' style='font-family: Potsdam, sans-serif'>Something went terribly wrong.Please try again.</h3>");
  $('#modalResponse').modal('show');
  setTimeout(() => {
    $('#modalResponse').modal('hide');
  }, 2500)
}

function startLoader()
{
  document.getElementById('loader').classList.remove('d-none');
  document.getElementById('loader').classList.add('d-block');
}

function endLoader()
{
  document.getElementById('loader').classList.remove('d-block');
  document.getElementById('loader').classList.add('d-none');
}
