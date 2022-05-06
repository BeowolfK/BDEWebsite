<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Partenariat;

class PartenariatFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for($i = 1;$i <= 10; $i++){
            $partenariat = new Partenariat();
            $partenariat-> setTitre("partenariat n° $i")
                        -> setLogo("https://via.placeholder.com/150x150")
                        -> setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi scelerisque sapien eu eros laoreet mattis a quis est. Sed at eleifend mi, lacinia bibendum magna. Nam sapien felis, efficitur quis suscipit iaculis, eleifend et libero. Donec sollicitudin tempor arcu quis gravida. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Morbi facilisis in est commodo tristique. Sed quis lorem lacus. Aliquam nulla arcu, gravida sed accumsan ut, condimentum et quam. Morbi gravida mollis massa sed lacinia. Fusce cursus augue ut iaculis fringilla. Pellentesque porta, dolor a pulvinar sollicitudin, elit quam bibendum augue, id placerat mauris erat non ex.")
                        -> setURl("https://www.google.com");
            $manager->persist($partenariat);
        }
        $manager->flush();
    }
}
