<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Categorie;
use App\Models\Sous_categorie;
use App\Models\Ville;
use App\Models\Commune;
use App\Models\User;
use App\Models\Marque_ordinateur;
use App\Models\Marque_vehicule;
use App\Models\Marque_telephone;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categorie1 = Categorie::create(['nom' => 'ELECTRONIQUES']);
        $electroniques = ['Appareils Photo & Caméra','Audio, Hifi & Casques','Autre','Imprimantes & Scanners','Jeux Vidéos & Consoles','Logiciels','Ordinateurs Bureaux','Ordinateurs Portable','Péripherique & Accessoires Informatiques','Stockage de données','Télévision','Unité centrale','Accessoires TV, Box & Vidéos projecteurs'];
        foreach ($electroniques as $electronique) {
            Sous_categorie::create([
                'nom' => $electronique,
                'categorie_id' => $categorie1->id,
            ]);
        }

        $categorie2 = Categorie::create(['nom' => 'IMMOBILIERS']);
        $immobiliers = ['Villas', 'Terrains', 'Appartements', 'Immeubles', 'Bureaux & Commerces', 'Appartements meublés' , 'autre'];
        foreach ($immobiliers as $immobilier) {
            Sous_categorie::create([
                'nom' => $immobilier,
                'categorie_id' => $categorie2->id,
            ]);
        }

        $categorie3 = Categorie::create(['nom' => 'TELEPHONES & TABLETTES']);
        $telephones = ['Téléphne portable', 'Tablettes', 'Accessoires Téléphone', 'Montres connectées','autre'];
        foreach ($telephones as $telephone) {
            Sous_categorie::create([
                'nom' => $telephone,
                'categorie_id' => $categorie3->id,
            ]);
        }

        $categorie4 = Categorie::create(['nom' => 'VEHICULES']);
        $voitures = ['Camions & Bus', 'Accessoires & pièces détachées', 'Location Véhicules', 'voitures', 'Moto & vélos', 'autre'];
        foreach ($voitures as $voiture) {
            Sous_categorie::create([
                'nom' => $voiture,
                'categorie_id' => $categorie4->id,
            ]);
        }


        $data = [
            'marques_ordinateurs' => [
                'Acer', 'Apple', 'Asus', 'Dell', 'Google', 'HP', 'Huawei', 'LG', 'Microsoft', 'MSI', 'Razer', 'Samsung', 'Sony', 'Toshiba',
            ],
            'marques_vehicules' => [
                'Acura', 'Alfa Romeo', 'Aston Martin', 'Audi', 'Bentley', 'BMW', 'Bugatti', 'Cadillac', 'Chrysler', 'Dodge', 'Ferrari', 'Fiat', 'Ford', 'GMC', 'Honda', 'Hyundai', 'Infiniti', 'Jaguar', 'Jeep', 'Kia', 'Land Rover', 'Lexus', 'Lincoln', 'Maserati', 'Mazda', 'McLaren', 'Mercedes-Benz', 'Mini', 'Mitsubishi', 'Nissan', 'Porsche', 'Rolls-Royce', 'Subaru', 'Tesla', 'Toyota', 'Volkswagen', 'Volvo',
            ],
            'marques_telephones' => [
                'Alcatel', 'Apple', 'Asus', 'Blackberry', 'Coolpad', 'Gionee', 'Google', 'Honor', 'HTC', 'Huawei', 'Infinix', 'Itel', 'Lava', 'Lenovo', 'LG', 'Meizu', 'Microsoft', 'Micromax', 'Motorola', 'Nokia', 'OnePlus', 'Oppo', 'Panasonic', 'Realme', 'Samsung', 'Sony', 'Sony Ericsson', 'Tecno', 'Vivo', 'Xiaomi', 'ZTE'
            ],
        ];


        foreach ($data['marques_ordinateurs'] as $marque) {
            Marque_ordinateur::create([
                'nom' => $marque,
            ]);
        }

        foreach ($data['marques_vehicules'] as $marque) {
            Marque_vehicule::create([
                'nom' => $marque,
            ]);
        }

        foreach ($data['marques_telephones'] as $marque) {
            Marque_telephone::create([
                'nom' => $marque,
            ]);
        }

        $villes = [
            'Abengourou', 'Abidjan', 'Aboisso', 'Adiaké', 'Adzopé', 'Agnibilékrou', 'Akoupé', 'Arrah',
            'Bangolo', 'Bassawa', 'Bettié', 'Bocanda', 'Bondoukou', 'Bonoua', 'Botro', 'Bouaké', 'Bouna', 'Boundiali',
            'Dabou', 'Daloa', 'Danané', 'Daoukro', 'Dianra', 'Dimbokro', 'Divo', 'Duekoué',
            'Facobly', 'Ferkessédougou',
            'Gagnoa', 'Grand-Bassam', 'Grand-Lahou', 'Gouiné', 'Guiglo', 'Guitry', 'Gbon',
            'Issia',
            'Jacqueville',
            'Katiola', 'Kong', 'Korhogo', 'Kounahiri', 'Kouassi-Datékro', 'Kouibly',
            'Lakota', 'Lomokankro',
            'Man', 'Mankono', 'Marcory', 'Méagui', 'Minignan', 'M’Bahiakro',
            'Nassian', 'Niakaramandougou',
            'Odienné', 'Oumé', 'Ouellé',
            'San-Pédro', 'Sakassou', 'Samoé', 'Sassandra', 'Séguéla', 'Sikensi', 'Sinfra', 'Sipilou', 'Soubré',
            'Tabou', 'Tanda', 'Tiassalé', 'Tiapoum', 'Tiébissou', 'Tengréla', 'Toulepleu', 'Touba', 'Toumodi', 'Transua',
            'Vavoua',
            'Yamoussoukro',
            'Zouan-Hounien', 'Zoukougbeu'
        ];


        // Ajout des villes à la table `villes`
        foreach ($villes as $ville) {
            Ville::create(['nom' => $ville]);
        }

        // Liste des communes par ville
        $data = [
            'Abidjan' => ['Yopougon', 'Cocody', 'Abobo', 'Marcory', 'Treichville', 'Adjame', 'Koumassi', 'Plateau', 'Attécoubé', 'Port-Bouet', 'Bingerville', 'Songon'],
        ];

        // Ajout des communes à la table `communes`
        foreach ($data as $villeNom => $communes) {
            $ville = Ville::where('nom', $villeNom)->first();
            foreach ($communes as $commune) {
                Commune::create(['nom' => $commune, 'ville_id' => $ville->id]);
            }
        }

        User::create(['name' => 'Admin','email' => 'admin@gmail.com','password' => bcrypt('Admin001'),'role' => 'admin',]);
        User::create(['name' => 'User','email' => 'user@gmail.com','password' => bcrypt('User0001'),'role' => 'user',]);

        // $data = ['Abidjan' => ['Yopougon', 'Cocody', 'Abobo', 'Marcory', 'Treichville', 'Adjame', 'Koumassi', 'Plateau', 'Attécoubé', 'Port-Bouet'],'Yamoussoukro' => ['Kossou', 'Attiégouakro', 'Lomokankro'],'Bouaké' => ['Djidje', 'Belleville', 'Koko', 'Air-France'],'Daloa' => ['Lobia', 'Orly', 'Garahio'],'Korhogo' => ['Sinématiali', 'Dikodougou', 'Komborodougou'],'San-Pédro' => ['Grand-Béréby', 'Tabou', 'Sassandra'],'Man' => ['Zouan-Hounien', 'Bangolo', 'Biankouma'],'Gagnoa' => ['Ouragahio', 'Gnagbodougnoa', 'Sérihio'],'Divo' => ['Hiré', 'Didoko', 'Divo-Sous-préfecture'],'Abengourou' => ['Niablé', 'Agnibilékrou', 'Bettie'],'Odienné' => ['Minignan', 'Gbon', 'Timbé'],'Bingerville' => ['Ebimpé', 'Akouedo', 'Akouédo'],'Anyama' => ['Attinguié', 'Brofodoumé', 'Agboville'],'Grand-Bassam' => ['Bonoua', 'Adiaké', 'Assinie-Mafia'],'Bondoukou' => ['Tanda', 'Sandégué', 'Bouna'],'Dimbokro' => ['Bocanda', 'Kouassi-Kouassikro', 'Nofou'],'Soubré' => ['Buyo', 'Mayo', 'Lacote'],'Aboisso' => ['Noé', 'Adiaké', 'Affiénou'],'Séguéla' => ['Mankono', 'Kani', 'Duékoué'],'Touba' => ['Ouaninou', 'Biankouma', 'Facobly'],'Issia' => ['Saïoua', 'Nahio', 'Iboguhé'],'Katiola' => ['Niakaramandougou', 'Tafiré', 'Badikaha'],'Lakota' => ['Goudouko', 'Zikisso', 'Djidji'],'Zuénoula' => ['Sinfra', 'Vavoua', 'Bouaflé'],'Tiassalé' => ['N’douci', 'Agboville', 'Tiapoum'],'Adzopé' => ['Agou', 'Akoupé', 'Yakassé-Attobrou'],'Bongouanou' => ['Arrah', 'M’Batto', 'Assikoi'],'Ferkessédougou' => ['Kong', 'Dikodougou', 'Ouangolodougou'],'Gagnoa' => ['Galebre-Galébouo', 'Guibéroua', 'Ouragahio'],'Guiglo' => ['Duekoué', 'Bloléquin', 'Toulepleu'],'Boundiali' => ['Kouto', 'Tengrela', 'Kong'],'Sakassou' => ['Béoumi', 'Botro', 'Bouaké'],'Toumodi' => ['Djékanou', 'Taabo', 'Attiégouakro'],'Sassandra' => ['Fresco', 'Grand-Lahou', 'Lakota'],'Danané' => ['Biankouma', 'Zouan-Hounien', 'Man'],'Tengrela' => ['Kouto', 'Ouangolodougou', 'Korhogo'],'Bangolo' => ['Kouibly', 'Man', 'Biankouma'],'Katiola' => ['Ferkessédougou', 'Niakaramandougou', 'Tafiré'],'Odienné' => ['Minignan', 'Gbon', 'Seguelon'],'Dimbokro' => ['Bocanda', 'Kouassi-Kouassikro', 'Nofou'],'Soubré' => ['Mayo', 'Buyo', 'Grand-Zattry'],'Aboisso' => ['Noé', 'Adiaké', 'Affiénou'],'Séguéla' => ['Mankono', 'Kani', 'Duékoué'],'Touba' => ['Ouaninou', 'Biankouma', 'Facobly'],'Kouto' => ['Tengrela', 'Boundiali', 'Ferkessédougou'],'Oumé' => ['Gagnoa', 'Issia', 'Sinfra'],'Sinématiali' => ['Korhogo', 'Dikodougou', 'Komborodougou'],'Sinfra' => ['Zuénoula', 'Vavoua', 'Bouaflé'],'Toulepleu' => ['Guiglo', 'Bloléquin', 'Duekoué'],'Sassandra' => ['Fresco', 'Grand-Lahou', 'Lakota'],'Adzopé' => ['Agou', 'Akoupé', 'Yakassé-Attobrou'],'Mankono' => ['Kani', 'Séguéla', 'Kong'],'Nassian' => ['Bouna', 'Doropo', 'Téhini'],'Koro' => ['Boundiali', 'Kaniasso', 'Odienné'],'Botro' => ['Béoumi', 'Bouaké', 'Sakassou'],'Tanda' => ['Bondoukou', 'Sandégué', 'Koun-Fao'],'Bangolo' => ['Kouibly', 'Man', 'Biankouma'],'Tiassalé' => ['N’douci', 'Agboville', 'Tiapoum'],'Toumodi' => ['Djékanou', 'Taabo', 'Attiégouakro'],'Biankouma' => ['Man', 'Danané', 'Zouan-Hounien'],'Ferkessédougou' => ['Kong', 'Dikodougou', 'Ouangolodougou'],'Kani' => ['Séguéla', 'Mankono', 'Kong'],'Mayo' => ['Soubré', 'Grand-Zattry', 'Buyo'],'Arrah' => ['Bongouanou', 'M’Batto', 'Assikoi'],'Bloléquin' => ['Guiglo', 'Touba', 'Duekoué'],'Minignan' => ['Odienné', 'Seguelon', 'Gbon'],'Zuénoula' => ['Sinfra', 'Vavoua', 'Bouaflé'],'Djékanou' => ['Toumodi', 'Taabo', 'Attiégouakro'],'Attiégouakro' => ['Yamoussoukro', 'Toumodi', 'Djékanou'],'Taabo' => ['Djékanou', 'Toumodi', 'Attiégouakro'],'Akoupé' => ['Agou', 'Adzopé', 'Yakassé-Attobrou'],'Agou' => ['Akoupé', 'Adzopé', 'Yakassé-Attobrou'],'Yakassé-Attobrou' => ['Adzopé', 'Akoupé', 'Agou'],];

    }
}
