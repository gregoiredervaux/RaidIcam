function backgroundColor_plus(r,g,b,a,element)
{

	element.style.backgroundColor="rgba("+r+", "+g+", "+b+","+a+")";
	a=a+0.01
	if (a<=1)
	{
		setTimeout(backgroundColor_plus(r,g,b,a,element),200);
	}
}

function backgroundColor_moins(r,g,b,a,element)
{
	element.style.backgroundColor="rgba("+r+", "+g+", "+b+","+a+")";
	a=a-0.01;
	if (a>=0)
	{
		setTimeout(backgroundColor_moins(r,g,b,a,element),200);
	}
}

function aff_contenu(element)
{
	conteneur_image=document.querySelector('#'+element+' .container img');
	conteneur_image.style.opacity='1';
	conteneur=document.querySelector('#'+element+' .container');
	conteneur.style.backgroundImage='none';
	display_text('explication_'+element,'white');
	column=document.getElementById(element);
	backgroundColor_plus(255,165,0,0,column);
	column.style.boxShadow="0px 0px 20px white";
	
}

function cacher_contenu(element)
{
	conteneur_image=document.querySelector('#'+element+' .container img');
	conteneur_image.style.opacity='0';
	conteneur=document.querySelector('#'+element+' .container');
	conteneur.style.backgroundImage='url(\'/library/img/'+element+'.png\')';
	clear_text('explication_'+element);
	column=document.getElementById(element);
	backgroundColor_moins(255,165,0,1,column);
	column.style.boxShadow="none";
}