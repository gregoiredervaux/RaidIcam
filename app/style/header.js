//on selectionne les sous menus non déroulés
titre_menu = document.querySelectorAll('#header div');

for (var i=0, len = titre_menu.length ; i<len ; i++ )
{
	//on ajoute une détection de clik sur chaque sous menu
	titre_menu[i].addEventListener('click', function(e)
	{
		var div_deroulant = e.currentTarget.querySelector(".menu_deroulant")

		if(div_deroulant.nodeType !== Node.ELEMENT_NODE)
		{}
		else if (getComputedStyle(div_deroulant).display == "none")
		{
			div_deroulant.style.display="flex";
		}
		else
		{
			div_deroulant.style.display = "none";
		}
	});
}

