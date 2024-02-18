<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Article::create([
            'title' => 'Notre chef',
            'subtitle' => 'Notre chef : Don Cornéo',
            'description' => 'Le Wall Market, ce quartier bouillonnant situé au cœur de la métropole tentaculaire de Midgar, est un véritable melting-pot d\'activités et de personnages hauts en couleur. Parmi ces figures emblématiques, Don Cornéo se distingue par sa présence imposante et son influence sur les affaires clandestines qui se trament dans les recoins sombres de ce quartier animé.

            Lorsque vous arpentez les rues pavées du Wall Market, vous ne pouvez pas manquer la magnificence opulente du palais de Don Cornéo, perché sur une colline, surplombant le quartier avec une aura de pouvoir et de mystère. Les rumeurs vont bon train sur les extravagances qui se déroulent derrière ses portes dorées, des fêtes somptueuses aux jeux de pouvoir orchestrés par le maître incontesté de la pègre.
            
            Dans ce bouillon de vie où se mêlent commerçants exubérants et passants affairés, Don Cornéo se démarque par son charisme sinistre et son regard perçant, qui laisse présager une intelligence rusée et une capacité redoutable à manipuler les fils invisibles qui dirigent les destinées du Wall Market. Certains murmurent que ses tentacules s\'étendent bien au-delà des limites de son royaume de la pègre, influençant les événements de Midgar de manière insidieuse et subtile.
            
            Le Colisée du Wall Market, un lieu où les guerriers s\'affrontent pour la gloire et la fortune, est souvent le théâtre des machinations de Don Cornéo, où il mise sur ses champions pour asseoir son autorité et étendre son emprise sur les quartiers environnants. Les bars et les salles de jeu clandestines de ce quartier fourmillent également de ses agents, œuvrant dans l\'ombre pour protéger ses intérêts et faire respecter sa volonté.
            
            Malgré son statut de baron du crime, Don Cornéo reste une énigme pour ceux qui osent s\'aventurer dans son territoire. Sa présence omniprésente imprègne chaque ruelle, chaque recoin obscur du Wall Market, rappelant à tous les habitants de Midgar que derrière le glamour et l\'extravagance de la ville se cachent des forces obscures prêtes à tout pour maintenir leur domination.'
        ]);

        Article::create([
            'title' => 'Massage',
            'subtitle' => 'Les massages de "Madame M"',
            'description' => 'En arrivant au Wall Market, parlez à Chocobo Sam et choisissez l’option « Elle gère un bar ». Allez ensuite directement chez Cornéo, sans rien faire ni parler à qui que ce soit dans la Wall Market. Après avoir discuté avec Leslie, rejoignez Chocobo Sam et choisissez « Face ». Lorsque vous serez chez Madame M, choisissez le massage à 3000 Gils, puis lorsqu’Aerith le demandera, dites-lui que ses vêtements ont « L’air confortables ».',
            'place_id' => '4'
        ]);

        Article::create([
            'title' => 'Les chocobos de Sam',
            'subtitle' => 'Cabane Chocobo',
            'description' => 'Les chocobos de Sam ont été effrayés par l\'effondrement de la plaque du secteur 7 et se sont enfuis, le forçant à interrompre temporairement ses activités. Un employé d\'écurie a engagé le groupe de Cloud pour retrouver les chocobos disparus et les nourrir afin qu\'ils retournent au Wall Market, dans \" Chocobo Search \". Une fois le travail terminé, ils retournèrent vers Sam qui les accueillit avec enthousiasme, heureux que les affaires puissent reprendre. Il les a remerciés pour leurs efforts et leur a offert un pass à vie Sam\'s Delivery, qui leur permettait de monter gratuitement dans ses calèches à tout moment. Sam a expliqué que les chocobos sont d\'excellents compagnons et qu\'il doit remercier ses oiseaux pour lui avoir fourni un toit au-dessus de sa tête. Il comprit que Cloud doutait de ses paroles, mais lui assura qu\'elles étaient authentiques. Sam a dit à Cloud qu\'il devrait rattraper le temps perdu avec ses chocobos de retour, qu\'ensemble ils avaient traversé « des moments difficiles » mais qu\'ils persévéreraient, mais il ne savait pas par où commencer. ',
            'place_id' => '12'
        ]);
    }
}
