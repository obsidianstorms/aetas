window.onload = initialize;

function initialize(){ 
  
}
function after_page_load(){
  populate_cell_functions();
}

function populate_cell_functions() {
  var table = document.getElementById("schedule_table");//.getElementsByTagName("table");
  

  for (var i=0; i<table.childNodes.length; i++){
    var tbody = table.childNodes[i];
    for (var j=0; j<tbody.childNodes.length; j++){
      var row = tbody.childNodes[j];
      for (var k=0; k<row.childNodes.length; k++){
	var cell = row.childNodes[k];
	
	//cell.onmouseover = switch_tool;
	cell.onclick = switch_tool;
      } //cell
    } //row
  } //tbody
    
}

function switch_tool() {
  //if (this.title == "start" || this.title== "end") {
  //  this.title = "hi";
  //}
  alert(this);
  alert("hi");
}
