function changement_angle(event) {

	//on recupère la postion de la sourie

    var x = event.clientX;
    var y = event.clientY;

    //on selectionne tout les blocks devant pivoter

    ls_div = document.getElementsByClassName('pivot');

    for (var i=0, len = ls_div.length ; i<len ; i++)
    {
    	//on selectionne le premier pivot    	
    	div=ls_div[i];
    	//on recupère les coordonnées du centre du block
	    var angle;
		var posX, posY;
	    
	    posX = div.offsetLeft;
	    posY = div.offsetTop;

	    milieuX = posX + (div.offsetWidth/2);
	    milieuY = posY + (div.offsetHeight/2);

	    hauteur_page=window.innerHeight;

	    //on determine le vecteur entre le pointeur de la sourie et le centre du block

	    vecteur={
	    	'x': x-milieuX,
	    	'y': (hauteur_page-y)-(hauteur_page-milieuY)};

	    //on determine l'angle a donner au block pour qu'il suive la sourie

	    if (vecteur['x'] > -0.01 && vecteur['x'] < 0.01)
	    {
	    	if(vecteur['y']>=0)
	    	{
	    		angle_deg = 0;
	    	}
	    	else
	    	{
	    		angle_deg = 180;
	    	}
	    }
	    else
	    {
	    	angle = Math.atan(vecteur['y']/vecteur['x']);

		    if (vecteur['x']>0)
		    {
		    	angle_deg= 90-angle * 360/(2*Math.PI);
		    }
		    else
		   	{
		   		angle_deg= 270 - angle * 360/(2*Math.PI);
		   	}
		}

		//on fait tourner le block

		div.style.transform="rotate("+angle_deg+"deg)";
	}
}

function display (ClassName)
{
	//on recupère les block à afficher
	ls_div = document.getElementsByClassName(ClassName);

	for (var i=0, len = ls_div.length ; i<len ; i++)
    {
    	//on en selectionne un
    	ls_div[i].style.display="flex"

    }
}


function clear (ClassName)
{
	console.log("on cache");
	//on recupère les block à afficher
	ls_div = document.getElementsByClassName(ClassName);

	for (var i=0, len = ls_div.length ; i<len ; i++)
    {
    	console.log("on cache ce block la:" + ClassName);
    	//on en selectionne un
    	ls_div[i].style.display="none";

    }
}

function display_text (ClassName,couleur)
{
	//on recupère les block à afficher
	ls_div = document.getElementsByClassName(ClassName);

	for (var i=0, len = ls_div.length ; i<len ; i++)
    {
    	//on en selectionne un
    	ls_div[i].style.color=couleur;

    }
}


function clear_text (ClassName)
{
	//on recupère les block à afficher
	ls_div = document.getElementsByClassName(ClassName);

	for (var i=0, len = ls_div.length ; i<len ; i++)
    {
    	//on en selectionne un
    	ls_div[i].style.color="transparent";

    }
}
