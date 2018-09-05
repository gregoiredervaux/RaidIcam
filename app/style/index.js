function backgroundColor_plus(r,g,b,a,element)
{

	element.style.backgroundColor="rgba("+r+", "+g+", "+b+","+a+")";
	console.log("plus"+a);
	a=a+0.01
	if (a<=1)
	{
		setTimeout(backgroundColor_plus(r,g,b,a,element),200);
	}
}

function backgroundColor_moins(r,g,b,a,element)
{
	element.style.backgroundColor="rgba("+r+", "+g+", "+b+","+a+")";
	console.log("moins"+a);
	a=a-0.01;
	if (a>=0)
	{
		console.log("il entre dans la boucle");
		setTimeout(backgroundColor_moins(r,g,b,a,element),200);
	}
}

function aff_contenu(element)
{
	display_text('explication_'+element,'white');
	column=document.getElementById(element);
	console.log("column=" + column.className)
	backgroundColor_plus(255,165,0,0,column);
	column.style.boxShadow="0px 0px 20px white";

}

function cacher_contenu(element)
{
	clear_text('explication_'+element);
	column=document.getElementById(element);
	backgroundColor_moins(255,165,0,1,column);
	column.style.boxShadow="none";
}