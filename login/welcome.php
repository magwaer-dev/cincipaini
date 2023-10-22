
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="shortcut icon" href="images/fav-icon.png" type="image/x-icon">
    <link rel="stylesheet" href="plugin/bootstrap-4.5.0/css/bootstrap-grid.css">
    <link rel="stylesheet" href="plugin/bootstrap-4.5.0/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="plugin/bootstrap-4.5.0/css/bootstrap.css">
    <link rel="stylesheet" href="plugin/bootstrap-4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="plugin/fontawesome-5.13.1/css/all.css">
    <link rel="stylesheet" href="plugin/fontawesome-5.13.1/css/all.min.css">
    <link rel="stylesheet" href="plugin/fontawesome-5.13.1/css/fontawesome.css">
    <link rel="stylesheet" href="plugin/fontawesome-5.13.1/css/fontawesome.min.css">

    <link rel="stylesheet" href="../style.css">
    <script src="../javascript.js"> </script>
    <title>Bun venit <?php echo $_SESSION['username']; ?></title>
</head>

<body>

<div class="maindiv">
		<div class="nav_div">
		<div class="nav">
                        <a href="../index.html">Poveste</a>
			&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
			<a href="../biografie.html">Biografie</a>
			&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
			<a href="../rezumat.html">Rezumat</a>
			&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
			<a href="../video.html">Video</a>
                        &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
                        <a href="../contacte/contact.php">Contacte</a>
                        &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
                        <a href="../feedback.html">Feedback</a>
                        &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
                        <a href="../crud/display.php">Lupta personajelor</a>    
                                            
                        
            
			
		</div>
		</div>

        
        
        <h1 style="color:yellow">Bun venit! <?php echo $_SESSION['username']; ?></h1>
        <div id="button">
        
        
        <a href="inc/logout.inc.php"><button>Iesire</button></a>
        </div>
        </div>

    <div class="intro">
        <img src="../img/breadmini.png" style="width: 10vw;height: 12vw">

        <div class="title">
        <h1>Cinci  Pâini</h1>
        </div>
    </div>

        <div class="img_div">
        <div>
                
        </div>


<div class="Slideimg">

        
        <div class="img_div" class="Photoslide">
        <img src="../img/bgcincipaini.jpg" class="title_img" style="width:100%" title="Cinci Paini">
        </div>  

        <div class="Photoslide"> 
        <img src="../img/bgcincipaini2.jpg" class="title_img" style="width:100%" title="Cinci Paini">
        </div> 

        <div class="Photoslide">
        <img src="../img/bgcincipaini3.png" class="title_img" style="width:100%" title="Cinci Paini">
        </div> 

        <a class="prev" onclick="arrow(-1)">&#10094;</a>
        <a class="next" onclick="arrow(1)">&#10095;</a>
        </div>
        </div>


    <div id="textascuns">
    
    <div style="border-top: 30px solid black" > 
        
        <div class="poveste">	
            <div class="text">

                <button id="butonascundere" onclick="hide()">Ascunde textul</button>

                <h1 style="font-size: 3vw;text-decoration: underline;">Povestea</h1>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Doi oameni, cunoscuţi unul cu altul, călătoreau odată, vara, pe un drum. Unul avea în traista sa trei pâni, şi celalalt două pâni. De la o vreme, fiindu-le foame, poposesc la umbra unei răchiţi pletoase, lângă o fântână cu ciutură, scoate fiecare pânile ce avea şi se pun să mănânce împreună, ca să aibă mai mare poftă de mâncare. 
                    <br>Tocmai când scoaseră pânile din traiste, iaca un al treile drumeţ, necunoscut, îi ajunge din urmă şi se opreşte lângă dânşii, dându-le ziua bună. Apoi se roagă să-i deie şi lui ceva de mâncare, căci e tare flămând şi n-are nimica merinde la dânsul, nici de unde cumpăra. <br>

                    <br>– Poftim, om bun, de-i ospăta împreună cu noi, ziseră cei doi drumeţi călătorului străin; căci mila Domnului! unde mănâncă doi mai poate mânca şi al treilea.
            
                    <br>Călătorul străin, flămând cum era, nemaiaşteptând multă poftire, se aşază jos lângă cei doi, şi încep a mânca cu toţii pâne goală şi a be apă rece din fântână, căci altă udătură nu aveau. Şi mănâncă ei la un loc tustrei, şi mănâncă, până ce gătesc de mâncat toate cele cinci pâni, de parcă n-au mai fost.
            <br>
                    <br>După ce-au mântuit de mâncat, călătorul străin scoate cinci lei din pungă şi-i dă, din întâmplare, celui ce avusese trei pâni, zicând:  – Primiţi, vă rog, oameni buni, această mică mulţămire de la mine, pentru că mi-aţi dat demâncare la nevoie; veţi cinsti mai încolo câte un pahar de vin, sau veţi face cu banii ce veţi pofti. Nu sunt vrednic să vă mulţămesc de binele ce mi-aţi făcut, căci nu vedeam lumea înaintea ochilor de flămând ce eram.
<br>
                    <br>Cei doi nu prea voiau să primească, dar, după multă stăruinţă din partea celui al treilea, au primit. De la o vreme, călătorul străin şi-a luat ziua bună de la cei doi şi apoi şi-a căutat de drum. Ceilalţi mai rămân oleacă sub răchită, la umbră, să odihnească bucatele. Şi, din vorbă în vorbă, cel ce avuse trei pâni dă doi lei celui cu două pâni, zicând:
             <br>
                    <br>– Ţine, frate, partea dumitale, şi fă ce vrei cu dânsa. Ai avut două pâni întregi, doi lei ţi se cuvin. Şi mie îmi opresc trei lei, fiindc-am avut trei pâni întregi, şi tot ca ale tale de mari, după cum ştii.
            <br>
                    <br>– Cum aşa?! zise celălalt cu dispreţ! pentru ce numai doi lei, şi nu doi şi jumătate, partea dreaptă ce ni se cuvine fiecăruia? Omul putea să nu ne deie nimic, şi atunci cum rămânea?
            <br>
                    <br>– Cum să rămâie? zise cel cu trei pâni; atunci aş fi avut eu pomană pentru partea ce mi se cuvine de la trei pâni, iar tu, de la două, şi pace bună. Acum, însă, noi am mâncat degeaba, şi banii pentru pâne îi avem în pungă cu prisos: eu trei lei şi tu doi lei, fiecare după numărul pânilor ce am avut. Mai dreaptă împărţeală decât aceasta nu cred că se mai poate nici la Dumnezeu sfântul…
            <br>
                    <br>– Ba nu, prietene, zice cel cu două pâni. Eu nu mă ţin că mi-ai făcut parte dreaptă. Haide să ne judecăm, şi cum a zice judecata, aşa să rămâie.
            <br>
                    <br>– Haide şi la judecată, zise celălalt, dacă nu te mulţămeşti. Cred că şi judecata are să-mi găsească dreptate, deşi nu m-am târât prin judecăţi de când sunt.
            <br>
                    <br>Şi aşa, pornesc ei la drum, cu hotărârea să se judece. Şi cum ajung într-un loc unde era judecătorie, se înfăţoşează înaintea judecătorului şi încep a spune împrejurarea din capăt, pe rând fiecare; cum a venit întâmplarea de au călătorit împreună, de au stat la masă împreună, câte pâni a avut fiecare, cum a mâncat drumeţul cel străin la masa lor, deopotrivă cu dânşii, cum le-a dat cinci lei drept mulţămită şi cum cel cu trei pâni a găsit cu cale să-i împartă.
            <br>
                    <br>Judecătorul, după ce-i ascultă pe amândoi cu luare aminte, zise celui cu două pâni:
            <br>
                    <br>– Şi nu eşti mulţămit cu împărţeala ce s-a făcut, omule?
            <br>
                    <br>– Nu, domnule judecător, zise nemulţămitul; noi n-am avut de gând să luăm plată de la drumeţul străin pentru mâncarea ce i-am dat; dar, dac-a venit întâmplarea de-aşa, apoi trebuie să împărţim drept în două ceea ce ne-a dăruit oaspetele nostru. Aşa cred eu că ar fi cu cale, când e vorba de dreptate.
            <br>
                    <br>– Dacă e vorba de dreptate, zise judecătorul, apoi fă bine de înapoieşte un leu istuialalt, care spui c-a avut trei pâni.
            <br>
                    <br>– De asta chiar mă cuprinde mirare, domnule judecător, zise nemulţămitul cu îndrăzneală. Eu am venit înaintea judecăţei să capăt dreptate, şi văd că dumneata, care ştii legile, mai rău mă acufunzi. De-a fi să fie tot aşa şi judecata dinaintea lui Dumnezeu, apoi vai de lume!
            <br>
                    <br>– Aşa ţi se pare dumitale, zise judecătorul liniştit, dar ia să vezi că nu-i aşa. Ai avut dumneata două pâni?
            <br>
                    <br>– Da, domnule judecător, două am avut.
            <br>
                    <br>– Tovarăşul dumitale, avut-a trei pâni?
            <br>
                    <br>– Da, domnule judecător, trei a avut.
            <br>
                    <br>– Udătură ceva avut-aţi vreunul?
            <br>
                    <br>– Nimic, domnule judecător, numai pâne goală şi apă răce din fântână, fie de sufletul cui a făcut-o acolo, în calea trecătorilor.
            <br>
                    <br>– Adineauri, parcă singur mi-ai spus, zise judecătorul, că aţi mâncat toţi tot ca unul de mult; aşa este?
            <br>
                    <br>– Aşa este, domnule judecător.
            <br>
                    <br>– Acum, ia să statornicim rânduiala următoare, ca să se poată şti hotărât care câtă pâne a mâncat. Să zicem că s-a tăiat fiecare pâne în câte trei bucăţi deopotrivă de mari; câte bucăţi ai fi avut dumneata, care spui că avuşi două pâni?
            <br>
                    <br>– Şese bucăţi aş fi avut, domnule judecător.
            <br>
                    <br>– Dar tovarăşul dumitale, care spui că avu trei pâni?
            <br>
                    <br>– Nouă bucăţi ar fi avut, domnule judecător.
            <br>
                    <br>– Acum, câte fac la un loc şese bucăţi şi cu nouă bucăţi?
            <br>
                    <br>– Cincisprezece bucăţi, domnule judecător.
            <br>
                    <br>– Câţi oameni aţi mâncat aceste cincisprezece bucăţi de pâne?
            <br>
                    <br>– Trei oameni, domnule judecător.
            <br>
                    <br>– Bun! Câte câte bucăţi vin de fiecare om?
            <br>
                    <br>– Câte cinci bucăţi, domnule judecător.
            <br>
                    <br>– Acum, ţii minte câte bucăţi ai fi avut dumneta?
            <br>
                    <br>– Şese bucăţi, domnule judecător.
            <br>
                    <br>– Dar de mâncat, câte ai mâncat dumneta?
            <br>
                    <br>– Cinci bucăţi, domnule judecător.
            <br>
                    <br>– Şi câte ţi-au mai rămas de întrecut?
            <br>
                    <br>-Numai o bucată, domnule judecător.
            <br>
                    <br>– Acum să stăm aici, în ceea ce te priveşte pe dumneta, şi să luăm pe istalalt la rând. Ţii minte câte bucăţi de pâne ar fi avut tovarăşul d-tale?
            <br>
                    <br>– Nouă bucăţi, domnule judecător.
            <br>
                    <br>-Şi câte a mâncat el de toate?
            <br>
                    <br>– Cinci bucăţi, ca şi mine, domnule judecător.
            <br>
                    <br>– Dar de întrecut, câte i-au mai rămas?
            <br>
                    <br>– Patru bucăţi, domnule judecător.
            <br>
                    <br>– Bun! Ia, acuş avem să ne înţelegem cât se poate de bine! Vra să zică, dumneta ai avut numai o bucată de întrecut, iar tovarăşul dumitale, patru bucăţi. Acum, o bucată de pâne rămasă de la dumneta şi cu patru bucăţi de la istalalt fac la un loc cinci bucăţi?
            <br>
                    <br>– Taman cinci, domnule judecător.
            <br>
                    <br>– Este adevărat că aceste bucăţi de pâne le-a mâncat oaspetele dumneavoastră, care spui că v-a dat cinci lei drept mulţămită?
            <br>
                    <br>– Adevărat este, domnule judecător.
            <br>
                    <br>– Aşadar, dumitale ţi se cuvine numai un leu, fiindcă numai o bucată de pâne ai avut de întrecut, şi aceasta ca şi cum ai fi avut-o de vânzare, deoarece aţi primit bani de la oaspetele dumneavoastră. Iar tovarăşul dumitale i se cuvin patru lei, fiindcă patru bucăţi de pâne a avut de întrecut. Acum, dară, fă bine de înapoieşte un leu tovarăşului dumitale. Şi dacă te crezi nedreptăţit, du-te şi la Dumnezeu, şi las’ dacă ţi-a face şi el judecată mai dreaptă decât aceasta!
            <br>
                    <br>Cel cu două pâni, văzând că nu mai are încotro şovăi, înapoieşte un leu tovarăşului său, cam cu părere de rău, şi pleacă ruşinat. Cel cu trei pâni însă, uimit de aşa judecată, mulţămeşte judecătorului şi apoi iese, zicând cu mirare:
            <br>
                    <br>– Dac-ar fi pretutindene tot asemenea judecători, ce nu iubesc a li cânta cucul din faţă, cei ce n-au dreptate n-ar mai năzui în veci şi-n pururea la judecată.
            <br>
                    <br>Corciogarii, porecliţi şi apărători, nemaiavând chip de traiu numai din minciuni, sau s-ar apuca de muncă, sau ar trebui, în toată viaţa lor, să tragă pe dracul de coadă… Iar societatea bună ar rămâne nebântuită. </p>
            </div>

        </div>
</div>



<div class="centrat" >
        <button onclick="toTop()" class="button-53" role="button">Înapoi în sus.</button>  
</div>

</div>


</div>
</div>

    

    <script src="js/jQuery-v3.5.1.js"></script>
    <script src="js/main.js"></script>
    <script src="plugin/bootstrap-4.5.0/js/bootstrap.bundle.js"></script>
    <script src="plugin/bootstrap-4.5.0/js/bootstrap.bundle.min.js"></script>
    <script src="plugin/bootstrap-4.5.0/js/bootstrap.js"></script>
    <script src="plugin/bootstrap-4.5.0/js/bootstrap.min.js"></script>
    <script src="plugin/bootstrap-4.5.0/js/bootstrap.min.js"></script>
    <script src="plugin/fontawesome-5.13.1/js/all.js"></script>
    <script src="plugin/fontawesome-5.13.1/js/all.min.js"></script>
    <script src="plugin/fontawesome-5.13.1/js/fontawesome.js"></script>
    <script src="plugin/fontawesome-5.13.1/js/fontawesome.min.js"></script>
</body>

</html>