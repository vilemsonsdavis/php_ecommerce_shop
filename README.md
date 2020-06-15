SnackShop projekts

Lai palaistu šo projektu būs nepieciešams:
1) uzinstalēt XAMPP vai kādu citu programmu, kas spēj attēlot browserī .php failus.
2) Tālāk šo projektu būs nepieciešams panest zem XAMP uzinstalētās direktorijas htdocs mapes. Manā gadījumā '/opt/lampp/htdocs/snackshop'
3) Pēc tam var doties uz web browseri un ievadīt "http://localhost/snackshop/", kur vajadzētu pavērties visiem failiem un folderiem, kas atrodas zem šī projekta.
4) Tālāk varam vērt vaļā jebkuru no .php lapām (izņemot includes) un vajadzētu jau atvērties mājaslapai pa kuru pēc tam ar podziņu palīdzību jau varam droši staigāt šurpu turpu.
5) Vēl jāņem vērā, ka ja šo projektu skatīsieties lokāli, tad jums nebūs saveidota datubāze un līdz ar to visticamāk nestrādās ne login un register sistēma, ne iespēja "nopirkt" produktus. Lai saveidotu datubāzi ir nepieciešams iet uz "http://localhost/phpmyadmin/", tur jāizveido datubāzi ar precīzu nosaukumu "snackshop" un vēlams neuzlikt/nenomainīt paroli un username - noklusējumā parolei vajadzētu būt tukšai, bet username "root". Šis ir svarīgi, jo failā "icnludes/dbh.inc.php" man ir sarakstīti šie mainīgie priekš konekcijas izveides ar datubāzi, un ja tie nesakritīs, tad nebūs iespējams savienoties.
6) Kad datubāze ir veiksmīgi izveidota, tad no "http://localhost/phpmyadmin/db_sql.php?db=snackshop" varam palaist visus 4 sql skriptus, kas atrodas "sql_scripts/". Tie saveidos 3 tabulas: products, products_bought un users, kā arī 1 skripts sainsertēs informāciju par produktiem tabulā products.

Ja viss ir sanācis veiksmīgi, tad visam vajadzētu strādāt.

Par pašu projekta ideju - neliels e-veikals, kurā var nopirkt 10 dažādus produktus. Homepage (poga SnackShop) ir tīri ilustratīva, bilde ar informatīvu tekstu. Lapā "Products" mēs jau varam redzēt produktus, kas ir piedāvājumā. Zem katra produkta ir poga "ADD TO CART", nospiežot to mums produkts pievienojas grozā. Grozu mēs varam apskatīt zem lapas "Cart". Tur mēs redzēsim visus produktus, kas ir salikti grozā, kā arī redzēsim to kopējo summu un varam arī nospiest pogu "BUY NOW", kas imitēs pirkumu - datubāzē tabulā products_bought pievienosies ieraksti ar nopirktajiem produktiem un useri, kas to ir pircis. Ja kāds produkts nepatīk, tad varam šeit pat nospiest "REMOVE FROM CART" un produktam vajadzētu pazust no pirkuma groza. Ir arī login un register (headerī varēs redzēt lapas "Login" un "Register") sistēma, kā arī ielogojoties būs opcija "Logout". Visās lapās ir arī headeris (kur ir navigācijas pogas) un footeris ar nelielu tekstu. Protams, ir vēl kaudze visādu citādu sīku detaļu - paroles pārbaude pie logina, username eksistences pārbaude gan pie login, gan pie reģistrācijas, tukša groza gadījumā tiek attēlota bilde ar tekstu, ielogojoties var saņemt 10% atlaidi utt.

Vienkārša UML diagramma, kas attēlo datubāzes tabulu sasaisti, attēla veidā atrodas "images/database_diagram.png".

Bonusa darbs: ir poga "Donate" ar pieņemajām kartēm headerī, aiz pogas Products. Nospiežot uz šo pogu, Jūs nokļūsiet paypal mājaslapā ar iespēju noziedot naudu manam kontam. Tur būs redzams mans e-pasts. 

