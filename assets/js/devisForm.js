/*
Please consider that the JS part isn't production ready at all, I just code it to show the concept of merging filters and titles together !
*/
$(document).ready(function(){
   
	$("#marque").hide();
	$("#model").hide();
	$("#circulation").hide();
	$("#adresseDeclarant").hide();
	

	
	$("#produit").click(function(){
	if($("#produit").val()=='voiture'){
        $("#marque").show();
		$("#model").show();
		}
		else {
		$("#marque").hide();
	    $("#model").hide();
		}
    });
	
		$("#produit").click(function(){
	if($("#produit").val()=='voiture'||$("#produit").val()=='camion'||$("#produit").val()=='camionnette'
	||$("#produit").val()=='engin'||$("#produit").val()=='tracteur'||$("#produit").val()=='benne'
	||$("#produit").val()=='moto'||$("#produit").val()=='avion'||$("#produit").val()=='bateau'){
        $("#circulation").show();
		}
		else {
		$("#circulation").hide();
	    }
    });
	
	$("#declarant").click(function(){
	if($("#declarant").val()=='1'){
        $("#adresseDeclarant").show();
		}
		else {
		$("#adresseDeclarant").hide();
		}
    });
});