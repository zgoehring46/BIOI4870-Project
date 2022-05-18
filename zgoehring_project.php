<!DOCTYPE html>
<html>
<body>


<!--
Displays the Header for the webpage providing some info on what is being done by the database
as well as differnet options you have available to search
-->
<?php
echo '<span style="font-size: 24px;">Insulin protein comparing database!</span>';
echo "<br><br>";
echo "Chose the orginism you wish to view information about on its insulin protein.";
echo "<br>";
echo "If none is chosen will just view the Human insulin protein informtaion.";
echo "<br>";
echo "Set the option to 'yes' if you wish to compare to the Human insulin protein.";
echo "<br><br>";
?>


<!--
Collect input from the web user using different drop down menu. The different options from
what is selected is provided in the header. Option 1 will give you differnet organisms with
option 2 being if you wnat to compare or not.
-->
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
	<div>
		<label for="org">Orginism you wish to view: </label>
		<select name="org" id="org">
			<option value="">--- SELECT ---</option>
			<option value="Oryctolagus cuniculus">Oryctolagus cuniculus</option>
			<option value="Cavia porcellus">Cavia porcellus</option>
			<option value="Octodon degus">Octodon degus</option>
			<option value="Ovis aries">Ovis aries</option>
			<option value="Ruditapes philippinarum">Ruditapes philippinarum</option>
			<option value="Conus lividus">Conus lividus</option>
			<option value="Seriola dumerili">Seriola dumerili</option>
			<option value="Gekko japonicus">Gekko japonicus</option>
			<option value="Gekko gecko">Gekko gecko</option>
			<option value="Gekko badenii">Gekko badenii</option>
			<option value="Eublepharis macularius">Eublepharis macularius</option>
			<option value="Coleonyx mitratus">Coleonyx mitratus</option>
			<option value="Danio rerio">Danio rerio</option>
			<option value="Myotis davidii">Myotis davidii</option>
			<option value="Ophiophagus hannah">Ophiophagus hannah</option>
			<option value="Elysia marginata">Elysia marginata</option>
			<option value="Camelus dromedarius">Camelus dromedarius</option>
			<option value="Oryzias melastigma">Oryzias melastigma</option>
			<option value="Ictidomys tridecemlineatus">Ictidomys tridecemlineatus</option>
			<option value="Nibea albiflora">Nibea albiflora</option>
			<option value="Galemys pyrenaicus">Galemys pyrenaicus</option>
			<option value="Microtus ochrogaster">Microtus ochrogaster</option>
			<option value="Stylophora pistillata">Stylophora pistillata</option>
			<option value="Ctenopharyngodon idella">Ctenopharyngodon idella</option>
			<option value="Mytilus galloprovincialis">Mytilus galloprovincialis</option>
			<option value="Taeniopygia guttata">Taeniopygia guttata</option>
			<option value="Jaculus jaculus">Jaculus jaculus</option>
			<option value="Echinops telfairi">Echinops telfairi</option>
			<option value="Mustela putorius furo">Mustela putorius furo</option>
			<option value="Haplochromis burtoni">Haplochromis burtoni</option>
			<option value="Bubalus bubalis">Bubalus bubalis</option>
			<option value="Peromyscus maniculatus bairdii">Peromyscus maniculatus bairdii</option>
			<option value="Chelonia mydas">Chelonia mydas</option>
			<option value="Callorhinchus milii">Callorhinchus milii</option>
			<option value="Saimiri boliviensis boliviensis">Saimiri boliviensis boliviensis</option>
			<option value="Corvus cornix cornix">Corvus cornix cornix</option>
			<option value="Bactrocera dorsalis">Bactrocera dorsalis</option>
			<option value="Clupea harengus">Clupea harengus</option>
			<option value="Mesocricetus auratus">Mesocricetus auratus</option>
			<option value="Salmo salar">Salmo salar</option>
			<option value="Macaca fascicularis">Macaca fascicularis</option>
			<option value="Ceratitis capitata">Ceratitis capitata</option>
			<option value="Neomonachus schauinslandi">Neomonachus schauinslandi</option>
			<option value="Folsomia candida">Folsomia candida</option>
			<option value="Chrysemys picta bellii">Chrysemys picta bellii</option>
			<option value="Oncorhynchus tshawytscha">Oncorhynchus tshawytscha</option>
			<option value="Ursus arctos horribilis">Ursus arctos horribilis</option>
			<option value="Zeugodacus cucurbitae">Zeugodacus cucurbitae</option>
			<option value="Ornithorhynchus anatinus">Ornithorhynchus anatinus</option>
			<option value="Oreochromis aureus">Oreochromis aureus</option>
			<option value="Amblyraja radiata">Amblyraja radiata</option>
			<option value="Catharus ustulatus">Catharus ustulatus</option>
			<option value="Hippoglossus stenolepis">Hippoglossus stenolepis</option>
			<option value="Scophthalmus maximus">Scophthalmus maximus</option>
			<option value="Bactrocera oleae">Bactrocera oleae</option>
			<option value="Sturnira hondurensis">Sturnira hondurensis</option>
			<option value="Nematolebias whitei">Nematolebias whitei</option>
			<option value="Arvicola amphibius">Arvicola amphibius</option>
			<option value="Micropterus salmoides">Micropterus salmoides</option>
			<option value="Tachyglossus aculeatus">Tachyglossus aculeatus</option>
			<option value="Salvelinus namaycush">Salvelinus namaycush</option>
			<option value="Hyaena hyaena">Hyaena hyaena</option>
			<option value="Mauremys reevesii">Mauremys reevesii</option>
			<option value="Pimephales promelas">Pimephales promelas</option>
			<option value="Passer montanus">Passer montanus</option>
			<option value="Polypterus senegalus">Polypterus senegalus</option>
			<option value="Perca fluviatilis">Perca fluviatilis</option>
			<option value="Pteropus giganteus">Pteropus giganteus</option>
			<option value="Simochromis diagramma">Simochromis diagramma</option>
			<option value="Hirundo rustica">Hirundo rustica</option>
			<option value="Xiphias gladius">Xiphias gladius</option>
			<option value="Gasterosteus aculeatus aculeatus">Gasterosteus aculeatus aculeatus</option>
			<option value="Oryx dammah">Oryx dammah</option>
			<option value="Rana temporaria">Rana temporaria</option>
			<option value="Bufo bufo">Bufo bufo</option>
			<option value="Puma yagouaroundi">Puma yagouaroundi</option>
			<option value="Cygnus olor">Cygnus olor</option>
			<option value="Ursus maritimus">Ursus maritimus</option>
			<option value="Ochotona curzoniae">Ochotona curzoniae</option>
			<option value="Toxotes jaculatrix">Toxotes jaculatrix</option>
			<option value="Aquila chrysaetos chrysaetos">Aquila chrysaetos chrysaetos</option>
			<option value="Onychostruthus taczanowskii">Onychostruthus taczanowskii</option>
			<option value="Pyrgilauda ruficollis">Pyrgilauda ruficollis</option>
			<option value="Microtus oregoni">Microtus oregoni</option>
			<option value="Vulpes lagopus">Vulpes lagopus</option>
			<option value="Cheilinus undulatus">Cheilinus undulatus</option>
			<option value="Coregonus clupeaformis">Coregonus clupeaformis</option>
			<option value="Chelmon rostratus">Chelmon rostratus</option>
			<option value="Melanotaenia boesemani">Melanotaenia boesemani</option>
			<option value="Corvus kubaryi">Corvus kubaryi</option>
			<option value="Alosa sapidissima">Alosa sapidissima</option>
			<option value="Thunnus maccoyii">Thunnus maccoyii</option>
			<option value="Sceloporus undulatus">Sceloporus undulatus</option>
			<option value="Plectropomus leopardus">Plectropomus leopardus</option>
			<option value="Dipodomys spectabilis">Dipodomys spectabilis</option>
			<option value="Centrocercus urophasianus">Centrocercus urophasianus</option>
			<option value="Lagopus leucura">Lagopus leucura</option>
			<option value="Panthera leo">Panthera leo</option>
			<option value="Panthera tigris">Panthera tigris</option>
			<option value="Puntigrus tetrazona">Puntigrus tetrazona</option>
			<option value="Cervus canadensis">Cervus canadensis</option>
			<option value="Prionailurus bengalensis">Prionailurus bengalensis</option>
			<option value="Dromiciops gliroides">Dromiciops gliroides</option>
			<option value="Solea senegalensis">Solea senegalensis</option>
		</select>
	</div>
	<br>
		<label for="x">Do you wish to compare to Homo sapiens: </label>
		<select name="x" id="x">
			<option value="">--- SELECT ---</option>
			<option value="yes">yes</option>
		</select>
	<input type="submit">
</form>


<?php
/* 
 * Process the input provided by the web user. This will then launch a SQL query into a database
 * based on several scenarios.
 *
 * 1) No option selected for option 1, option 2 seletion does not matter.
 * 	Show data on Human insulin protein.
 * 2) Option 1 has a selection, option 2 does not.
 * 	Show data on the selected organisms insulin.
 * 3) Option 1 has a selection, option 2 is 'yes'.
 * 	Show data on Human and selected organism as well as comparison data.
 */
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	// The default organism Human
	$o1 = "Homo sapiens";
	// The organism for option 1 from the user
	$o2 = $_POST['org'];
	// The option to compare or not from the user
	$x = $_POST['x'];
	// A simple tracker to assist the program based on the options
	$tracker = FALSE;

	echo "<br>";

	// Sets up the different prompts as well as sets tracker to true if needed
	if (empty($o2))
	{
		echo "Here is the insulin protein data for $o1.";
	}
	else
	{
		if (empty($x))
		{
			echo "Here is the insulin protein data on $o2.";
		}
		else
		{
			echo "This is the comparison the insulin protein of $o1 vs $o2.";
			$tracker = TRUE;
		}
	}

	echo "<br>";

	// Creates the SQL connection
	$server="localhost";
	$username="zgoehring";
	$password="";
	$database="zgoehring";
	$connect = mysqli_connect($server, $username, "", $database);
	if ($connect->connect_error)
	{
		echo "Something has gone wrong";
		echo "Connection error:" .$connect->connect_error;
	}

	// This query grabs basic data
	$query = "";
	// This query grabs the comparison data
	$query2 = "";
	// This query grabs additional data
	$query3 = "";

	// This section sets up our queries

	// If no organism is selected set queries to display Human data, q2 not needed
	if (empty($o2))
	{
		$query = "SELECT * FROM insulin_seq WHERE tseq_orgname = \"". $o1 . "\"";
		$query3 = "SELECT * FROM insulin_proteins WHERE title = \"". $o1 . "\"";
	}

	// An organism was selected, now determine to compare or not
	else
	{
		// Compare, set queries to display Human data, chosen data, and comparison data
		if ($tracker == TRUE)
		{
			$query = "SELECT * FROM insulin_seq WHERE tseq_orgname = \"". $o1 . "\" OR tseq_orgname = \"". $o2 . "\"";
			$query2 = "SELECT * FROM insulin_compare WHERE accver = (SELECT tseq_accver FROM insulin_seq WHERE tseq_orgname = \"". $o2 . "\")";
			$query3 = "SELECT * FROM insulin_proteins WHERE title = \"". $o1 . "\" OR title = \"". $o2 . "\"";
		}

		// No compare, set queries to display chosen data, q2 not needed
		else
		{
			$query = "SELECT * FROM insulin_seq WHERE tseq_orgname = \"". $o2 . "\"";
			$query3 = "SELECT * FROM insulin_proteins WHERE title = \"". $o2 . "\"";
		}
	}

	echo "<br>";

	// This section runs the queries and displays the data we wished to retrieve
	
	// If comparison is off
	if ($tracker == FALSE)
	{
		// If there is result continue, for basic data
		if ($result = mysqli_query($connect, $query))
		{
			// Pulls data for multiple results, if needed
			while ($row = mysqli_fetch_row($result))
			{
				printf("Accession Number: %s", $row[0]);
				echo "<br>";
				printf("Taxonomy ID: %s", $row[1]);
				echo "<br>";
				printf("Organism Name: %s", $row[2]);
				echo "<br>";
				printf("Insulin Protein Length: %s", $row[3]);
				echo "<br>";
				printf("Insulin Protein Sequence: %s", $row[4]);
			}
			mysqli_free_result($result);
		}

		// If no result
		else
		{
			echo "No result";
		}

		// If there is a result continue, for additional data
		if ($result = mysqli_query($connect, $query3))
		{
			// Pulls data for multiple results, if needed
			while ($row = mysqli_fetch_row($result))
			{
				echo "<br>";
				printf("Entrez UID: %s", $row[4]);
				echo "<br>";
				printf("URL for NCBI: ncbi.nlm.nih.gov%s", $row[1]);
			}
			mysqli_free_result($result);
		}

		// If no result
		else
		{
			echo "No result";
		}
	}

	// If comparison is on
	else
	{
		// If there is a result continue, for basic data
		if ($result = mysqli_query($connect, $query))
		{
			// Pulls data for multiple results, if needed
			while ($row = mysqli_fetch_row($result))
			{
				printf("Accession Number: %s", $row[0]);
				echo "<br>";
				printf("Taxonomy ID: %s", $row[1]);
				echo "<br>";
				printf("Organism Name: %s", $row[2]);
				echo "<br>";
				printf("Insulin Protein Length: %s", $row[3]);
				echo "<br>";
				printf("Insulin Protein Sequence: %s", $row[4]);
				echo "<br><br>";
			}
			mysqli_free_result($result);
		}

		// If no result
		else
		{
			echo "No result";
		}

		// If there is a result continue, for additional data
		if ($result = mysqli_query($connect, $query3))
		{
			// Pulls data for multiple results, if needed
			while ($row = mysqli_fetch_row($result))
			{
				printf("Organism Name: %s", $row[0]);
				echo "<br>";
				printf("Entrez UID: %s", $row[4]);
				echo "<br>";
				printf("URL for NCBI: ncbi.nlm.nih.gov%s", $row[1]);
				echo "<br><br>";
			}
			mysqli_free_result($result);
		}

		// If no result
		else
		{
			echo "No result";
		}

		// If there is a result continue, for comparison data
		if ($result = mysqli_query($connect, $query2))
		{
			echo "BLAST Comparison Values.";
			echo "<br>";

			// Pulls data for multiple results, if needed
			while ($row = mysqli_fetch_row($result))
			{
				printf("Total Score (Max-223): %s", $row[1]);
				echo "<br>";
				printf("E-Value: %s", $row[2]);
				echo "<br>";
				printf("Percent ID: %s", $row[3]);
				echo "<br><br>";
			}
			mysqli_free_result($result);
		}

		// If no results
		else
		{
			echo "No result";
		}
	}
	mysqli_close($connect);
}
?>

</body>
</html>
