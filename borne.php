<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>3annales, borne de commande de glace ex4</title>
    <style type="text/css" media="screen">
    	 th, td {
    	 	border-style: solid;
    	 	border-width: 1px;
    	 	padding: 30px;

    	 }
    	 table {
    	 	border-collapse: collapse;
    	 }
	</style>

    <script type="text/javascript">
        function nombreParfumChoisis() {

                var select = byId("parfum");
                var nbPArfum = 0;
                for(var i=0;i<select.options.length;i++) {
                    if {select.options[i].selected)
                    nbParfum++;
                    }
                }

                document.getElementById('viewNbParfum').innerHTML = nbParfum;
        }

        function validerForm() {

        }

    </script>

</head>
<body>

<h3>3annales, borne de commande de glace ex4</h3>

<ul>
	<li><a href="http://localhost/3annales/index.html">index</a></li>
	<li><a href="http://localhost/3annales/produitsenstockex1.html">produits en stock, ex1</a></li>
	<li><a href="http://localhost/3annales/journaldenfa016.html">le journal de nfa016, ex3</a></li>
    <li><a href="http://localhost/3annales/borne.php">borne de commande de glace ex4</a></li>
    <li><a href="http://localhost/3annales/practice.html">practice test</a></li>
    <li><a href="http://localhost/3annales/listjsex5.html">liste js ex5</a></li>
</ul>

	<h1>ex4</h1>

<p>
    <form action="commande.php" type="get" value="Glaces">
        <p>numero de table<input type="text"></input>
        <p>parfum<br />
            <select multiple="multiple" namme="parfum[]" id="parfum">
                <option value="chocolat">chocolat</option>
                <option value="fraise">fraise</option>
                <option value="vanille">vanille</option>
                <option value="café">café</option>
                <option value="citron">citron</option>
            </select>
        </p>
        <p>options: chantilly<input type="checkbox" /></p>
        <p><input type="submit" value="commander" /></p>
    </form>
</p>


<input type="submit" id="butNbParfum" onsubmit="nombreParfumChoisis()" />
<p id="viewNbParfum" placeholder="nombre de parfum">nombre de parfum</p>



</body>
</html>