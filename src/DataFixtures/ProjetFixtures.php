<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Projet;

class ProjetFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for($i = 1;$i <= 10; $i++){
            $projet = new Projet();
            $projet -> setTitre("Projet n° $i")
                    -> setPhoto("https://via.placeholder.com/300x150")
                    -> setDate(new \DateTime())
                    -> setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi scelerisque sapien eu eros laoreet mattis a quis est. Sed at eleifend mi, lacinia bibendum magna. Nam sapien felis, efficitur quis suscipit iaculis, eleifend et libero. Donec sollicitudin tempor arcu quis gravida. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Morbi facilisis in est commodo tristique. Sed quis lorem lacus. Aliquam nulla arcu, gravida sed accumsan ut, condimentum et quam. Morbi gravida mollis massa sed lacinia. Fusce cursus augue ut iaculis fringilla. Pellentesque porta, dolor a pulvinar sollicitudin, elit quam bibendum augue, id placerat mauris erat non ex.")
                    -> setTexte(" Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi scelerisque sapien eu eros laoreet mattis a quis est. Sed at eleifend mi, lacinia bibendum magna. Nam sapien felis, efficitur quis suscipit iaculis, eleifend et libero. Donec sollicitudin tempor arcu quis gravida. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Morbi facilisis in est commodo tristique. Sed quis lorem lacus. Aliquam nulla arcu, gravida sed accumsan ut, condimentum et quam. Morbi gravida mollis massa sed lacinia. Fusce cursus augue ut iaculis fringilla. Pellentesque porta, dolor a pulvinar sollicitudin, elit quam bibendum augue, id placerat mauris erat non ex.<br>Aliquam mollis mi sit amet arcu ornare, sit amet lobortis sapien mollis. Duis bibendum ullamcorper euismod. Nam id augue ante. Suspendisse potenti. Integer rhoncus sapien libero, ac condimentum tellus vestibulum at. Vivamus sit amet nulla ut eros imperdiet tempus vitae eu mauris. Donec vitae metus eu risus hendrerit vulputate eget et nulla. Maecenas finibus vel nisi posuere interdum. Cras eget rhoncus justo. Fusce eget nibh ligula. In blandit nunc sit amet mi suscipit mattis. In elementum pharetra lectus, ultrices laoreet erat feugiat convallis. In bibendum lacus quis est ornare consectetur nec at ante. Vivamus non semper libero, ut porttitor nisl. Donec luctus nisi ac eleifend varius.");
            $manager->persist($projet);
        }
        $manager->flush();
    }
}
