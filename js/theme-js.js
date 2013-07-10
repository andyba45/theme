jQuery(document).ready( function() {

	$("#registerTld, #transferTld, #registerName").bind("change",function(){
		$('#domainSearchResults').html('');
	});

	$("#registerName, #transferName, #subDomain").bind("keyup input paste",function(){
		$('#domainSearchResults').html('');
	});



	// Detect a change of radio button
	$("input[name$='domainAction']").click(function(){

	 	// Clear any residual results in the div below
	 	$('#domainSearchResults').html('')

 		// Get the radio value
  		var radio_value = $(this).val();

 		// Handle the work
  		if(radio_value=='register') {
    		$("#domainRegister").show();
     		$("#domainTransfer").hide();
     		$("#domainSubdomain").hide();
     		$("#domainManage").hide();
  		} else if(radio_value=='transfer') {
    		$("#domainRegister").hide();
     		$("#domainTransfer").show();
     		$("#domainSubdomain").hide();
     		$("#domainManage").hide();
   		} else if(radio_value=='subdomain') {
    		$("#domainRegister").hide();
     		$("#domainTransfer").hide();
     		$("#domainSubdomain").show();
     		$("#domainManage").hide();
   		} else if(radio_value=='manage') {
   			searchDomain('1','1', 'selfmanage', false);
    		$("#domainRegister").hide();
     		$("#domainTransfer").hide();
     		$("#domainSubdomain").hide();
     		$("#domainManage").show();
   		}
  	});

 	// Hide the other options initially
 	$("#domainManage").hide();
	$("#domainTransfer").hide();
	$("#domainSubdomain").hide();

	// Add some keyup events to trigger search functions
	$("#registerName").keyup(function(event){ if(event.keyCode == 13){ $("#buttonRegisterCheck").click(); } });
	$("#transferName").keyup(function(event){ if(event.keyCode == 13){ $("#buttonTransferCheck").click(); } });

    $.validator.addMethod("domain", function(value, element) {
        return this.optional(element) || /^([-0-9A-Z]+\.)+([0-9A-Z]){2,4}$/i.test(value);
    }, 'Invalid domain name.');
	$.validator.addMethod("domain2", function(value, element) {
        return this.optional(element) || /^([-0-9A-Z]+)$/i.test(value);
    }, 'Invalid domain name.');
    var validator = $("#domainForm").validate({
        rules: {
            manageName: {
            	domain: true,
            	required: true
            },
            registerName: {
            	required: true,
            	domain2: true
            },
            transferName: {
            	required: true,
            	domain2: true
            },
            subDomain: "required"
        },
		errorPlacement: function(error, element) {
		     error.appendTo( element.parent("td") );
	    }
    });

});


// Function to trigger the search of a domain
function triggerSearch(name, tld) {

    // Update the form fields
    document.getElementById('registerName').value = name;
    document.getElementById('registerTld').value=tld;

    // Do the search
    searchDomain(name, tld, 'register', true);
}

// Function to animiate the searching
function animateSearch() {
    var dotspan = document.getElementById('dots');
    window.setInterval(function(){
        if(dotspan.innerHTML == '....'){
           dotspan.innerHTML = '.';
        } else {
           dotspan.innerHTML += '.';
        }
     }, 1000);
}


function validateForm() {
	$('#domainSearchResults').html('');
    return $('#domainForm').valid();
}

function doSubmitForm() {
    $('#domainForm').submit();
    return false;
}

function checkAvailabilityRegister()
{
    searchDomain(document.getElementById('registerName').value,document.getElementById('registerTld').options[document.getElementById('registerTld').selectedIndex].text, 'register', true);
}

function checkAvailabilityTransfer()
{
    searchDomain(document.getElementById('transferName').value,document.getElementById('transferTld').options[document.getElementById('transferTld').selectedIndex].text, 'transfer', true);
}

function checkAvailabilitySubDomain(){
    var tld = false;
    if(document.getElementById('subDomainTld') != undefined){
        tld = document.getElementById('subDomainTld').options[document.getElementById('subDomainTld').selectedIndex].value;
    }
    searchSubDomain(document.getElementById('subDomain').value,tld,true,false);
}

function checkAvailabilitySelfManage(){
    var manageName = document.getElementById('manageName').value;
    var firstDotPosition = 0;
    var name = false;
    var tld = false;
    if(manageName != ''){
        firstDotPosition = manageName.indexOf('.');
        if(firstDotPosition != -1){
            name = manageName.substring(0,firstDotPosition);
            tld = manageName.substring(firstDotPosition+1);
        }
    }
    searchSubDomain(name,tld,true,false);
}

// Function to manage what to do when submiting the subdomain
function submitSubDomain(){
    if(document.getElementById('subDomain') == undefined || document.getElementById('subDomain').value == ''){
        return true;
    }else if(typeof submitSubDomainOnRegister != 'function') {
        var tld = false;
        if(document.getElementById('subDomainTld') != undefined){
            tld = document.getElementById('subDomainTld').options[document.getElementById('subDomainTld').selectedIndex].value;
        }
        searchSubDomain(document.getElementById('subDomain').value,tld,true,true);
        return false;
    }else{
        return submitSubDomainOnRegister(true);
    }
}


