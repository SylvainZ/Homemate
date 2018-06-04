
function cocher(){
	
		var cochage= document.getElementsByClassName('messagecheck');
		var tout = document.getElementById('coche').checked;
		if (tout== true)
		{

			for(var i=0;i<document.F1.length;i++)
			{

				cochage[i].checked=true;

				/*document.F1.elements[i].checked=true; */			
			} 
		}
		else
		{

			for (var i=0;i<document.F1.length;i++)
			{
				/*document.F1.elements[i].name=="message") */
				cochage[i].checked=false;			 
			}
		}		
}
		


