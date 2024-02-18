<?php

namespace Database\Seeders;

use App\Models\Place;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PlaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Place::create([
            'title' => 'Honeybee Inn',
            'subtitle' => '...',
            'description' => 'Bienvenue dans le célèbre Honeybee Inn, un établissement connu dans tout le Wall Market pour ses divertissements exquis et ses soirées animées. Situé au cœur du quartier, cet endroit est bien plus qu\'un simple cabaret ; c\'est une expérience sensorielle à part entière. Les invités sont accueillis par une façade élégante et une atmosphère enchanteresse dès qu\'ils franchissent ses portes. À l\'intérieur, un décor somptueux, des lumières tamisées et une musique envoûtante créent une ambiance captivante. Le bar propose une sélection raffinée de cocktails et de boissons exotiques, tandis que les spectacles sur scène éblouissent les spectateurs avec des performances artistiques de haut niveau. Que vous soyez là pour profiter du spectacle ou simplement vous détendre avec des amis, le Honeybee Inn promet une expérience inoubliable de divertissement et d\'évasion.',
            'latitude' => '9%',
            'longitude' => '16%',
            'category_id' => '6'
        ]);

        Place::create([
            'title' => 'Don Corneo\'s Mansion',
            'subtitle' => '...',
            'description' => 'Surplombant majestueusement le Wall Market, le manoir de Don Corneo est une demeure imposante qui intrigue et fascine les habitants et les visiteurs. Niché au sommet d\'une colline verdoyante, cet édifice élégant est le repaire du célèbre mafieux de la ville. Les portes massives et les jardins luxuriants entourent cette résidence impressionnante, créant une aura de mystère et d\'intrigue. Bien que l\'accès soit souvent limité aux invités triés sur le volet, les rumeurs affluent sur les fêtes extravagantes et les rassemblements somptueux qui se déroulent à l\'intérieur. Pour ceux qui osent s\'aventurer dans ses couloirs, une expérience exclusive et inoubliable les attend, où le luxe et la dangerosité se rencontrent dans un mélange saisissant.',
            'latitude' => '91%',
            'longitude' => '43%',
            'category_id' => '1'
        ]);

        Place::create([
            'title' => 'Colosseum',
            'subtitle' => '...',
            'description' => 'Le Colisée du Wall Market est un spectacle à voir absolument pour les amateurs de compétitions épiques et de combats spectaculaires. Situé au centre du quartier, cet immense amphithéâtre est le lieu de rassemblement pour les guerriers intrépides et les spectateurs avides de sensations fortes. Les murs de pierre résonnent des acclamations de la foule alors que les combattants s\'affrontent sur le sable de l\'arène, démontrant leur courage et leur habileté au combat. Des tournois réguliers et des duels enflammés sont organisés ici, attirant des compétiteurs de tous horizons. Que vous soyez un combattant courageux prêt à défier vos adversaires ou un simple spectateur à la recherche d\'émotions fortes, le Colisée du Wall Market offre une expérience inoubliable de compétition et de bravoure.',
            'latitude' => '76%',
            'longitude' => '33%',
            'category_id' => '6'
        ]);

        Place::create([
            'title' => 'Pharmacy',
            'subtitle' => '...',
            'description' => 'Bienvenue à la pharmacie du Wall Market, votre destination de confiance pour tous vos besoins en matière de santé et de bien-être. Niché au cœur du quartier, cet établissement accueillant offre une gamme complète de produits pharmaceutiques de qualité, ainsi que des conseils et des services personnalisés. Que vous ayez besoin de médicaments pour guérir vos maux ou de conseils sur la manière de prendre soin de votre santé, l\'équipe attentionnée de la pharmacie est là pour vous aider. Avec une atmosphère chaleureuse et des prix abordables, c\'est l\'endroit idéal pour trouver des solutions à tous vos problèmes de santé',
            'latitude' => '32%',
            'longitude' => '56%',
            'category_id' => '5'
        ]);

        Place::create([
            'title' => 'Weapons Shop',
            'subtitle' => '...',
            'description' => 'Si vous recherchez des armes puissantes et des équipements de qualité, ne cherchez pas plus loin que le magasin d\'armes du Wall Market. Cet établissement emblématique propose une vaste sélection d\'armes de toutes sortes, allant des épées étincelantes aux pistolets de précision. Que vous soyez un guerrier chevronné ou un novice en quête de protection, vous trouverez sûrement ce que vous cherchez parmi les rayons bien garnis de ce magasin. L\'équipe compétente et passionnée est là pour vous guider dans votre choix et répondre à toutes vos questions sur les armes et les équipements disponibles.',
            'latitude' => '79%',
            'longitude' => '52%',
            'category_id' => '5'
        ]);

        Place::create([
            'title' => 'Item Shop',
            'subtitle' => '...',
            'description' => 'Entrez dans le magasin d\'objets du Wall Market et découvrez une vaste sélection de produits essentiels pour votre voyage. Des potions revitalisantes aux accessoires magiques, cet établissement offre tout ce dont vous avez besoin pour vous préparer aux défis à venir. L\'atmosphère accueillante et le service attentionné font de ce magasin un lieu de passage incontournable pour tous ceux qui cherchent à s\'approvisionner avant de partir à l\'aventure. Que vous soyez à la recherche de fournitures de base ou de trésors rares, vous trouverez sûrement ce que vous cherchez parmi les trésors de ce magasin.',
            'latitude' => '34%',
            'longitude' => '66%',
            'category_id' => '5'
        ]);

        Place::create([
            'title' => 'Materia Shop',
            'subtitle' => '...',
            'description' => 'Plongez dans le monde mystérieux de la matéria au magasin du Wall Market. Cet établissement propose une vaste sélection de sphères magiques et de gemmes enchantées, chacune offrant des pouvoirs uniques et des capacités spéciales. Que vous soyez un magicien chevronné ou un novice en quête de connaissances, vous trouverez sûrement quelque chose pour élever vos compétences et améliorer votre maîtrise de la magie. L\'équipe compétente et passionnée est là pour vous guider dans votre choix et répondre à toutes vos questions sur les matéria disponibles.',
            'latitude' => '11%',
            'longitude' => '43%',
            'category_id' => '5'
        ]);

        Place::create([
            'title' => 'Clothing Store',
            'subtitle' => '...',
            'description' => 'Découvrez les dernières tendances de la mode au magasin de vêtements du Wall Market. Cet établissement élégant propose une collection éclectique de tenues et d\'accessoires à la pointe de la mode, parfaits pour ceux qui cherchent à exprimer leur style unique. Que vous recherchiez une tenue spectaculaire pour une soirée spéciale ou des vêtements décontractés pour une journée en ville, vous trouverez sûrement quelque chose pour satisfaire votre goût dans ce magasin. L\'atmosphère chic et sophistiquée vous mettra immédiatement à l\'aise, tandis que l\'équipe attentionnée sera là pour vous aider à trouver la tenue parfaite pour chaque occasion.',
            'latitude' => '49%',
            'longitude' => '32%',
            'category_id' => '5'
        ]);

        Place::create([
            'title' => 'Gym',
            'subtitle' => '...',
            'description' => 'Mettez-vous en forme au gymnase du Wall Market, un lieu de rencontre populaire pour les amateurs de fitness et les passionnés de musculation. Doté d\'équipements de pointe et d\'instructeurs compétents, cet établissement offre tout ce dont vous avez besoin pour atteindre vos objectifs de remise en forme. Que vous soyez un débutant cherchant à améliorer sa condition physique ou un athlète chevronné en quête de nouveaux défis, vous trouverez sûrement quelque chose pour vous inspirer dans ce gymnase. L\'ambiance animée et l\'énergie contagieuse vous motiveront à repousser vos limites et à donner le meilleur de vous-même à chaque séance d\'entraînement.',
            'latitude' => '62%',
            'longitude' => '31%',
            'category_id' => '1'
        ]);

        Place::create([
            'title' => 'Restaurant',
            'subtitle' => '...',
            'description' => 'Plongez dans un monde de saveurs et de délices au restaurant du Wall Market. Cet établissement chaleureux et accueillant propose une cuisine délicieuse et une ambiance conviviale, parfaite pour partager un repas mémorable avec des amis et des proches. Que vous soyez un amateur de cuisine locale ou un aventurier gastronomique en quête de nouvelles découvertes, vous trouverez sûrement quelque chose pour satisfaire votre appétit dans ce restaurant. L\'équipe attentionnée est là pour vous servir et vous offrir une expérience culinaire inoubliable à chaque visite.',
            'latitude' => '58%',
            'longitude' => '53%',
            'category_id' => '2'
        ]);

        Place::create([
            'title' => 'Massage Parlor',
            'subtitle' => '...',
            'description' => 'Échappez au stress et aux tensions de la vie quotidienne au salon de massage du Wall Market. Cet établissement paisible et relaxant offre une gamme de massages apaisants et thérapeutiques, conçus pour soulager les muscles fatigués et apaiser l\'esprit. Que vous soyez à la recherche d\'un massage suédois revitalisant, d\'un massage des tissus profonds pour soulager les tensions ou simplement d\'un moment de détente, vous trouverez sûrement quelque chose pour vous ressourcer dans ce salon. L\'atmosphère paisible et l\'attention personnalisée vous permettront de vous détendre et de vous revitaliser, prêt à affronter les défis à venir.',
            'latitude' => '2%',
            'longitude' => '56%',
            'category_id' => '1'
        ]);

        Place::create([
            'title' => 'Chocobo Sam\'s Delivery Service',
            'subtitle' => '...',
            'description' => 'Besoin d\'un coup de main pour livrer des colis ou des messages dans tout le Wall Market ? Ne cherchez pas plus loin que le service de livraison de Chocobo Sam. Avec ses fidèles compagnons à plumes et son équipe de messagers expérimentés, ce service fiable et efficace assure une livraison rapide et sécurisée à chaque fois. Que vous ayez besoin d\'envoyer un cadeau à un être cher ou de faire parvenir un message urgent, vous pouvez compter sur Chocobo Sam et son équipe pour s\'occuper de tout avec professionnalisme et précision.',
            'latitude' => '46%',
            'longitude' => '78%',
            'category_id' => '6'
        ]);

        Place::create([
            'title' => 'Auberge de Wall Market',
            'subtitle' => '...',
            'description' => 'L\'auberge de Wall Market est un refuge tranquille au cœur de l\'agitation du quartier. Nichée dans une rue calme, cette auberge offre un havre de paix aux voyageurs fatigués et aux aventuriers en quête de repos. La façade modeste de l\'établissement ne laisse pas présager la chaleur et le confort qui attendent ceux qui franchissent ses portes. À l\'intérieur, les clients sont accueillis par une atmosphère chaleureuse et accueillante. Les chambres sont simples mais confortables, offrant un lieu de repos bien mérité après une journée d\'exploration dans le Wall Market ou de combats dans l\'arène du Colisée. Les lits sont douillets et les draps propres invitent à une nuit de sommeil réparateur. En plus de ses services d\'hébergement, l\'auberge propose également un distributeur automatique, offrant une sélection d\'articles essentiels pour les voyageurs. Des potions revigorantes aux accessoires utiles, les articles disponibles peuvent être précieux pour ceux qui se préparent à affronter les défis qui les attendent dans le Wall Market et au-delà. En tant que lieu de repos et de récupération, l\'auberge de Wall Market est également le point de départ de certaines quêtes secondaires. Les clients peuvent interagir avec d\'autres personnages et recevoir des missions qui les mèneront à des aventures fascinantes et parfois périlleuses à travers le quartier animé. Que vous soyez un voyageur fatigué en quête d\'un refuge temporaire ou un aventurier intrépide en quête de nouvelles opportunités, l\'auberge de Wall Market est là pour vous accueillir et vous offrir un moment de répit bien mérité dans votre périple.',
            'latitude' => '46%',
            'longitude' => '66%',
            'category_id' => '3'
        ]);

        // Place::create([
        //     'title' => 'Clothing Store (Andrea)',
        //     'subtitle' => '...',
        //     'description' => 'Entrez dans le monde de la mode avec une touche de sophistication au magasin de vêtements d\'Andrea. Situé dans une rue animée du Wall Market, cet établissement élégant propose une sélection chic de vêtements et d\'accessoires tendance, parfaits pour ceux qui recherchent un style raffiné et contemporain. Que vous soyez à la recherche d\'une tenue élégante pour une occasion spéciale ou de pièces classiques pour votre garde-robe quotidienne, vous trouverez sûrement ce que vous cherchez parmi les collections soigneusement sélectionnées de ce magasin. L\'équipe attentionnée est là pour vous aider à trouver la tenue parfaite qui mettra en valeur votre style personnel et vous fera vous sentir confiant et élégant.',
        //     'latitude' => '1%',
        //     'longitude' => '20%',
        //     'category_id' => '5'
        // ]);

        // Place::create([
        //     'title' => 'Dress Shop (Andrea)',
        //     'subtitle' => '...',
        //     'description' => 'Découvrez l\'élégance intemporelle au magasin de robes d\'Andrea, un paradis pour les amateurs de mode et les passionnés de style. Niché dans une rue pittoresque du Wall Market, cet établissement chaleureux propose une collection exquise de robes de soirée et de tenues formelles, parfaites pour toutes les occasions spéciales. Que vous soyez à la recherche d\'une robe spectaculaire pour un gala glamour ou d\'une tenue élégante pour un cocktail chic, vous trouverez sûrement quelque chose pour vous inspirer dans ce magasin. L\'équipe attentionnée est là pour vous guider à travers les choix et vous aider à trouver la robe parfaite qui vous fera vous sentir magnifique et confiante.',
        //     'latitude' => '1%',
        //     'longitude' => '20%',
        //     'category_id' => '5'
        // ]);

        // Place::create([
        //     'title' => 'Chap\'s Diner',
        //     'subtitle' => '...',
        //     'description' => 'Le Chap\'s Diner est un repère animé situé dans une rue animée du Wall Market. Avec sa façade accueillante et son ambiance décontractée, cet établissement est un lieu de rencontre populaire pour les habitants du quartier et les voyageurs de passage. À l\'intérieur, le bar propose une atmosphère chaleureuse et conviviale, où les clients peuvent déguster des boissons rafraîchissantes et des plats savoureux tout en socialisant avec d\'autres habitants du quartier. Le décor est simple mais accueillant, avec des tables et des tabourets en bois et un comptoir bien approvisionné. Le Chap\'s Diner n\'est pas seulement un endroit pour se détendre et se rafraîchir ; c\'est aussi un lieu où les joueurs peuvent rencontrer une variété de personnages intrigants et participer à des quêtes secondaires. De la discussion avec des habitués du bar à l\'aide de personnes ayant des problèmes, il y a toujours quelque chose à découvrir et à faire dans cet établissement animé. En particulier, une quête secondaire unique implique une rencontre mystérieuse dans les toilettes du bar. Cette interaction inattendue peut conduire les joueurs à des récompenses spéciales ou à des développements intéressants dans l\'histoire du jeu. Que vous cherchiez à étancher votre soif après une longue journée d\'exploration ou à relever de nouveaux défis dans le quartier, le Chap\'s Diner est un arrêt incontournable dans votre aventure à travers le Wall Market.',
        //     'latitude' => '20%',
        //     'longitude' => '1%',
        //     'category_id' => '4'
        // ]);
    }
}