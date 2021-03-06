<?php include('includes/header.php');?>
    <div class="container">
        <div class="row" align="center">
            <div class="col-md-8 col-md-offset-3 header">
                <h1 class="text-left">En voiture !</h1>    
                <p class="text-left lead">Prenez la route en bonne compagnie.</p>
            </div>    
        </div>
        <div class="row">
            <div class="col-md-4 col-md-offset-3">
                <form action="search.php" method="post" class="form-horizontal" id="searchForm">
                    <div class="form-group">
                        <label for="">Départ</label>
                        <select class="form-control" name="from" id="from">
                            <option value="" disabled selected>--- Ville du départ ---</option>
                                                   <option value="Agadir">Agadir</option>
                                                   <option value="Agdez">Agdez</option>
                                                   <option value="Ahfir">Ahfir</option>
                                                   <option value="Ain Dfali">Ain Dfali</option>
                                                   <option value="Ait Melloul">Ait Melloul</option>
                                                   <option value="Al Hoceima">Al Hoceima</option>
                                                   <option value="Azrou">Azrou</option>
                                                   <option value="Bejaad">Bejaad</option>
                                                   <option value="Beni Ensar">Beni Ensar</option>
                                                   <option value="Beni Mathar">Beni Mathar</option>
                                                   <option value="Beni Mellal">Beni Mellal</option>
                                                   <option value="Fkih Ben Salah">Fkih Ben Salah</option>
                                                   <option value="Berkane">Berkane</option>
                                                   <option value="Bouarfa">Bouarfa</option>
                                                   <option value="Boujdour">Boujdour</option>
                                                   <option value="Boumalne">Boumalne</option>
                                                   <option value="Casablanca">Casablanca</option>
                                                   <option value="Chefchaouen">Chefchaouen</option>
                                                   <option value="Dakhla">Dakhla</option>
                                                   <option value="Dardara">Dardara</option>
                                                   <option value="Driouch">Driouch</option>
                                                   <option value="El hajeb">El Hajeb</option>
                                                   <option value="Eljadida">Eljadida</option>
                                                   <option value="Errachidia">Errachidia</option>
                                                   <option value="Essaouira">Essaouira</option>
                                                   <option value="Fes">Fes</option>
                                                   <option value="Figuig">Figuig</option>
                                                   <option value="Fnidek">Fnidek</option>
                                                   <option value="Goulmima">Goulmima</option>
                                                   <option value="Guelmim">Guelmim</option>
                                                   <option value="Ifrane">Ifrane</option>
                                                   <option value="Imzouren">Imzouren</option>
                                                   <option value="Inzegane">Inzegane</option>
                                                   <option value="Jbel Al-Aroui">Jbel Al-Aroui</option>
                                                   <option value="Jorf el malha">Jorf El Malha</option>
                                                   <option value="Kasbat Tadla">Kasbat Tadla</option>
                                                   <option value="Kassita">Kassita</option>
                                                   <option value="Kelaa Magouna">Kelaat Magouna</option>
                                                   <option value="Kelaa Sraghna">Kelaa Sraghna</option>
                                                   <option value="Khemisset">Khemisset</option>
                                                   <option value="Khenifra">Khenifra</option>
                                                   <option value="Khouribga">Khouribga</option>
                                                   <option value="Ksar El Kébir">Ksar El Kébir</option>
                                                   <option value="Ktama Issaguen">Ktama Issaguen</option>
                                                   <option value="Laayoune">Laayoune</option>
                                                   <option value="Larache">Larache</option>
                                                   <option value="Marrakech">Marrakech</option>
                                                   <option value="Mechra Bel Ksiri">Mechra Bel Ksiri</option>
                                                   <option value="Meknes">Meknes</option>
                                                   <option value="Midar">Midar</option>
                                                   <option value="Midelt">Midelt</option>
                                                   <option value="Mirleft">Mirleft</option>
                                                   <option value="Mrirt">Mrirt</option>
                                                   <option value="Nador">Nador</option>
                                                   <option value="Oualidia">Oualidia</option>
                                                   <option value="Ouarzazate">Ouarzazate</option>
                                                   <option value="Ouazzane">Ouazzane</option>
                                                   <option value="Oued Zem">Oued Zem</option>
                                                   <option value="Oujda">Oujda</option>
                                                   <option value="Ouled Teima">Ouled Teima</option>
                                                   <option value="Rabat">Rabat</option>
                                                   <option value="Rich">Rich</option>
                                                   <option value="Rissani">Rissani</option>
                                                   <option value="Safi">Safi</option>
                                                   <option value="Saidia">Saidia</option>
                                                   <option value="Sidi Allal Tazi">Sidi Allal Tazi</option>
                                                   <option value="Sidi Bennour">Sidi Bennour</option>
                                                   <option value="Sidi Ifni">Sidi Ifni</option>
                                                   <option value="Sidi Kacem">Sidi Kacem</option>
                                                   <option value="Smara">Smara</option>
                                                   <option value="Souk Larbaa">Souk Larbaa</option>
                                                   <option value="Tafraout">Tafraout</option>
                                                   <option value="Taliouine">Taliouine</option>
                                                   <option value="Tamegroute">Tamegroute</option>
                                                   <option value="Tamelelt">Tamelelt</option>
                                                   <option value="Tan Tan">Tan Tan</option>
                                                   <option value="Tanger">Tanger</option>
                                                   <option value="Taounate">Taounate</option>
                                                   <option value="Targuist">Targuist</option>
                                                   <option value="Taroudant">Taroudant</option>
                                                   <option value="Taza">Taza</option>
                                                   <option value="Tata">Tata</option>
                                                   <option value="Tetouan">Tetouan</option>
                                                   <option value="Tiflet">Tiflet</option>
                                                   <option value="Tighssaline">Tighssaline</option>
                                                   <option value="Tinghir">Tinghir</option>
                                                   <option value="Tinjdad">Tinjdad</option>
                                                   <option value="Tinzouline">Tinzouline</option>
                                                   <option value="Tiznit">Tiznit</option>
                                                   <option value="Zagora">Zagora</option>
                                                   <option value="Zaouit Echeikh">Zaouit Echeikh</option>
                        </select>

                    </div>
                    <div class="form-group">
                        <label for="">Destination</label>
                        <select class="form-control" name="to" id="to">
                            <option value="" disabled selected>--- Ville d'arrivée ---</option>
                                                   <option value="Agadir">Agadir</option>
                                                   <option value="Agdez">Agdez</option>
                                                   <option value="Ahfir">Ahfir</option>
                                                   <option value="Ain Dfali">Ain Dfali</option>
                                                   <option value="Ait Melloul">Ait Melloul</option>
                                                   <option value="Al Hoceima">Al Hoceima</option>
                                                   <option value="Azrou">Azrou</option>
                                                   <option value="Bejaad">Bejaad</option>
                                                   <option value="Beni Ensar">Beni Ensar</option>
                                                   <option value="Beni Mathar">Beni Mathar</option>
                                                   <option value="Beni Mellal">Beni Mellal</option>
                                                   <option value="Fkih Ben Salah">Fkih Ben Salah</option>
                                                   <option value="Berkane">Berkane</option>
                                                   <option value="Bouarfa">Bouarfa</option>
                                                   <option value="Boujdour">Boujdour</option>
                                                   <option value="Boumalne">Boumalne</option>
                                                   <option value="Casablanca">Casablanca</option>
                                                   <option value="Chefchaouen">Chefchaouen</option>
                                                   <option value="Dakhla">Dakhla</option>
                                                   <option value="Dardara">Dardara</option>
                                                   <option value="Driouch">Driouch</option>
                                                   <option value="El hajeb">El Hajeb</option>
                                                   <option value="Eljadida">Eljadida</option>
                                                   <option value="Errachidia">Errachidia</option>
                                                   <option value="Essaouira">Essaouira</option>
                                                   <option value="Fes">Fes</option>
                                                   <option value="Figuig">Figuig</option>
                                                   <option value="Fnidek">Fnidek</option>
                                                   <option value="Goulmima">Goulmima</option>
                                                   <option value="Guelmim">Guelmim</option>
                                                   <option value="Ifrane">Ifrane</option>
                                                   <option value="Imzouren">Imzouren</option>
                                                   <option value="Inzegane">Inzegane</option>
                                                   <option value="Jbel Al-Aroui">Jbel Al-Aroui</option>
                                                   <option value="Jorf el malha">Jorf El Malha</option>
                                                   <option value="Kasbat Tadla">Kasbat Tadla</option>
                                                   <option value="Kassita">Kassita</option>
                                                   <option value="Kelaa Magouna">Kelaat Magouna</option>
                                                   <option value="Kelaa Sraghna">Kelaa Sraghna</option>
                                                   <option value="Khemisset">Khemisset</option>
                                                   <option value="Khenifra">Khenifra</option>
                                                   <option value="Khouribga">Khouribga</option>
                                                   <option value="Ksar El Kébir">Ksar El Kébir</option>
                                                   <option value="Ktama Issaguen">Ktama Issaguen</option>
                                                   <option value="Laayoune">Laayoune</option>
                                                   <option value="Larache">Larache</option>
                                                   <option value="Marrakech">Marrakech</option>
                                                   <option value="Mechra Bel Ksiri">Mechra Bel Ksiri</option>
                                                   <option value="Meknes">Meknes</option>
                                                   <option value="Midar">Midar</option>
                                                   <option value="Midelt">Midelt</option>
                                                   <option value="Mirleft">Mirleft</option>
                                                   <option value="Mrirt">Mrirt</option>
                                                   <option value="Nador">Nador</option>
                                                   <option value="Oualidia">Oualidia</option>
                                                   <option value="Ouarzazate">Ouarzazate</option>
                                                   <option value="Ouazzane">Ouazzane</option>
                                                   <option value="Oued Zem">Oued Zem</option>
                                                   <option value="Oujda">Oujda</option>
                                                   <option value="Ouled Teima">Ouled Teima</option>
                                                   <option value="Rabat">Rabat</option>
                                                   <option value="Rich">Rich</option>
                                                   <option value="Rissani">Rissani</option>
                                                   <option value="Safi">Safi</option>
                                                   <option value="Saidia">Saidia</option>
                                                   <option value="Sidi Allal Tazi">Sidi Allal Tazi</option>
                                                   <option value="Sidi Bennour">Sidi Bennour</option>
                                                   <option value="Sidi Ifni">Sidi Ifni</option>
                                                   <option value="Sidi Kacem">Sidi Kacem</option>
                                                   <option value="Smara">Smara</option>
                                                   <option value="Souk Larbaa">Souk Larbaa</option>
                                                   <option value="Tafraout">Tafraout</option>
                                                   <option value="Taliouine">Taliouine</option>
                                                   <option value="Tamegroute">Tamegroute</option>
                                                   <option value="Tamelelt">Tamelelt</option>
                                                   <option value="Tan Tan">Tan Tan</option>
                                                   <option value="Tanger">Tanger</option>
                                                   <option value="Taounate">Taounate</option>
                                                   <option value="Targuist">Targuist</option>
                                                   <option value="Taroudant">Taroudant</option>
                                                   <option value="Taza">Taza</option>
                                                   <option value="Tata">Tata</option>
                                                   <option value="Tetouan">Tetouan</option>
                                                   <option value="Tiflet">Tiflet</option>
                                                   <option value="Tighssaline">Tighssaline</option>
                                                   <option value="Tinghir">Tinghir</option>
                                                   <option value="Tinjdad">Tinjdad</option>
                                                   <option value="Tinzouline">Tinzouline</option>
                                                   <option value="Tiznit">Tiznit</option>
                                                   <option value="Zagora">Zagora</option>
                                                   <option value="Zaouit Echeikh">Zaouit Echeikh</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success">Recherche</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div id="map">

                </div>
            </div>    
        </div> -->
    </div>