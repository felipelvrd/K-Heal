function $_GET(param)
{
	url = document.URL;
	url = String(url.match(/\?+.+/));
	url = url.replace("?", "");
	url = url.split("&");
	x = 0;
	while (x < url.length)
		{
			p = url[x].split("=");
			if (p[0] == param)
			{
				return decodeURIComponent(p[1]);
		}
		x++;
	}
}

// pagina de Inicio











