// open many page in single tab

function openPage(pageName, elmnt) {
  var i, tabcontent, tablink;
  tabcontent = document.getElementsByClassName("sc_cc_tab");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("sc_staffs_status");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].style.backgroundColor = "grey";
    tablinks[i].style.color = "white";
    tablinks[i].style.padding = "8px 30px";
  }
  document.getElementById(pageName).style.display = "block";
  elmnt.style.backgroundColor = "#dddddd";
  elmnt.style.padding = "8px 60px";
  elmnt.style.color = "#2a435b";
}
document.getElementById("defaultOpen").click();


// open many page in single tab exception for edit tab

function openAnotherPage(pageName, elmnt) {
  var i, tabcontent, tablink, newTab;
  tabcontent = document.getElementsByClassName("sc_cc_tab");
  newTab = document.getElementById('edit_tab');
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("sc_staffs_status");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].style.backgroundColor = "grey";
    tablinks[i].style.color = "white";
    tablinks[i].style.padding = "8px 30px";
  }
  document.getElementById(pageName).style.display = "block";
  newTab.style.backgroundColor = "#dddddd";
  newTab.style.padding = "8px 60px";
  newTab.style.color = "#2a435b";
}
document.getElementById("defaultOpen").click();


// open form and close form for Pop Up

function openform(call_id) {
  document.getElementById(call_id).style.display = "block";
}

function closeform(call_id) {
  document.getElementById(call_id).style.display = "none";
}

// upload img

function loadFile(event, id_name) {
  var upload = document.getElementById(id_name);
  upload.src = URL.createObjectURL(event.target.files[0]);
  upload.onload = function() {
    URL.revokeObjectURL(upload.src) // free memory
  }
};

// for editable or notEditable input tag

function edit_input(id_name, btn_name){
  var input_tag = document.getElementById(id_name);
  input_tag.removeAttribute('readonly');
  var element = document.getElementById(btn_name);
  element.classList.add("sc_sz_editbutton_active");
}

function edit_wage(id_name, btn_name, save_btn){
  var input_tag = document.getElementById(id_name);
  input_tag.removeAttribute('readonly');
  input_tag.style.border = '2px solid #2a435b';
  var element = document.getElementById(btn_name);
  element.classList.add("sc_sz_editbutton_active");
  element.style.display = 'none';
  var save_tag = document.getElementById(save_btn);
  save_tag.style.display = 'inline'
}

