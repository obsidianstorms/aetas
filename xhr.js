//value is the passed value to be sent via the GET/POST 
//script is the filename of the functional (php) script (eg: "outletstatus.php")
//label is applicable variable/label of the value being passed via GET/POST
//USAGE:  variable = getXHR(1,2,3);
//USAGE:  
function getXHR(value,script,label) {   
//function sendChangeRequest(num,cmd) {
	switchRequest = createRequest(); //from utils.js
	if (switchRequest == null) { //if the util.js script fails for some reason.
		alert("Unable to create request");
	} else {
		var url= script+"?"+label+" =" + value;
		//var url= "outletcontrol.php?outletnum=" + num + "&commandnum=" + cmd;
		//BETTER? -> 2 requests w/ 1 value each, 1 request with 2 values each?
		switchRequest.onreadystatechange = passResponse;
		//switchRequest.open("GET",url,true); //learn what true vs false again is for and learn security issues and uses of GET vs POST here
		switchRequest.open("GET",url,false); //http://www.codingforums.com/showthread.php?p=767027
		switchRequest.send(null); //learn what this line was for as well	
	}
	output = switchRequest.responseText;
	//alert("Result: "+output);
	return output;
}

//==================== PHP INTERACTION =========================	
function passResponse () { //for some reason this is responding 2 or 3 times - first is blank, that's if php is 'echo', there's no data at all if php is 'return', 
//apparently the 'repeats' are other responses per the readyState and status values...with the following two if statements, there's only "1" response.
  	if (switchRequest.readyState == 4) {
    	if ((switchRequest.status == 200) || (switchRequest.status == 0)) { //==0 for local file:// rather than localhost
			//var result = switchRequest.responseText;
			//var result = switchRequest.responseText;			
			return passResponse.responseText;
		} 
	}
}

