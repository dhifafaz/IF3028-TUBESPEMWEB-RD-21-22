
// Get the modal
var modal = document.getElementById('modal-hapus');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

var modal = document.getElementById('modal-edit');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

const form = document.getElementById("form");
const title = document.getElementById("title");
const description = document.getElementById("description");


form.addEventListener("submit", e => {
  e.preventDefault();
  const [err1, err2] = checkInputs();
  if (err1 && err2) {
    form.submit();
  }
});

function checkInputs() {
  const titleValue = title.value.trim(); 
  const descriptionValue = description.value.trim(); 
  const descriptionLength = descriptionValue.length;
  let titleErr = true;
  let descriptionErr = true;

  if (titleValue === "") {
    titleErr = false;
    setErrorInput(title, "Judul laporan tidak boleh kosong");
  } else {
    setSuccessInput(title);
  }
  
  if (descriptionLength < 20) {
    descriptionErr = false;
    setErrorInputDesc(description, "Deskripis laporan terlalu singkat tolong diperjelas");
  } else {
    setSuccessInputDesc(description);
  }

  return [titleErr, descriptionErr];
}

function setErrorInput(input, errorMessage) {
  const formControl = input.parentElement;
  const small = formControl.querySelector("span");

  small.innerText = errorMessage;
  formControl.className = "title-laporan form-control invalid";
}

function setErrorInputDesc(input, errorMessage) {
  const formControl = input.parentElement;
  const small = formControl.querySelector("span");

  small.innerText = errorMessage;
  formControl.className = "detail-laporan form-control invalid";
}

function setSuccessInput(input) {
  const formControl = input.parentElement;
  formControl.className = "title-laporan form-control success";
}

function setSuccessInputDesc(input) {
  const formControl = input.parentElement;
  formControl.className = "detail-laporan form-control success";
}

