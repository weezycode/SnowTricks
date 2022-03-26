<?php

namespace App\DataFixtures;

use App\Entity\Trick;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\String\Slugger\SluggerInterface;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class TrickFixtures extends Fixture
{

    private  $hasher;

    public function __construct(UserPasswordHasherInterface $hasher, private SluggerInterface $slugger)
    {
        $this->hasher = $hasher;
    }
    public function load(ObjectManager $manager): void
    {
        $trick1 = (new Trick())
            ->setName('Tail grab')
            ->setUser($this->getReference('user' . rand(1, 5)))
            ->setContent('La main arrière attrape la queue du snowboard. Les variantes suivantes le redressement, ou le désossage de la jambe avant ou le peaufinage de la planche légèrement à l\'avant ou à l\'arrière.')
            ->setUpdatedAt(new \DateTimeImmutable())
            ->setCreatedAt(new \DateTimeImmutable());
        $trick1->setSlug($this->slugger->slug($trick1->getName())->lower());
        $trick1->setGroupe($this->getReference('Groupe1'));
        $trick1->addVideo($this->getReference('video1'));
        $manager->persist($trick1);
        $manager->flush();

        $trick2 = (new Trick())
            ->setName('Cross Rocket')
            ->setUser($this->getReference('user' . rand(1, 5)))
            ->setContent('Variante avancée d\'un Rocket Air, où les bras sont croisés pour saisir les côtés opposés du nez de la planche, tandis que la jambe arrière est désossée et la jambe avant repliée.')
            ->setUpdatedAt(new \DateTimeImmutable())
            ->setCreatedAt(new \DateTimeImmutable());
        $trick2->setSlug($this->slugger->slug($trick2->getName())->lower());
        $trick2->setGroupe($this->getReference('Groupe1'));
        $trick2->addVideo($this->getReference('video2'));
        $manager->persist($trick2);
        $manager->flush();

        $trick3 = (new Trick())
            ->setName('Bloody Dracula')
            ->setUser($this->getReference('user' . rand(1, 5)))
            ->setContent('Un tour dans lequel le cavalier attrape la queue de la planche à deux mains. La main arrière attrape la planche comme elle le ferait lors d\'un tail-grab normal mais la main avant atteint aveuglément la planche derrière les riders en arrière.')
            ->setUpdatedAt(new \DateTimeImmutable())
            ->setCreatedAt(new \DateTimeImmutable());
        $trick3->setSlug($this->slugger->slug($trick3->getName())->lower());
        $trick3->setGroupe($this->getReference('Groupe2'));
        $trick3->addVideo($this->getReference('video3'));
        $manager->persist($trick3);
        $manager->flush();



        $trick4 = (new Trick())
            ->setName('Tamedog')
            ->setUser($this->getReference('user' . rand(1, 5)))
            ->setContent('Un frontflip effectué sur un saut rectiligne, avec un axe de rotation dans lequel le snowboardeur bascule en avant, comme une roue de charrette.')
            ->setUpdatedAt(new \DateTimeImmutable())
            ->setCreatedAt(new \DateTimeImmutable());
        $trick4->setSlug($this->slugger->slug($trick4->getName())->lower());
        $trick4->setGroupe($this->getReference('Groupe5'));
        $trick4->addVideo($this->getReference('video4'));
        $manager->persist($trick4);
        $manager->flush();

        $trick5 = (new Trick())
            ->setName('Japan Air')
            ->setUser($this->getReference('user' . rand(1, 5)))
            ->setContent('La main avant attrape l\'orteil la carre entre les pieds et le genou avant est tirée vers la planche.')
            ->setUpdatedAt(new \DateTimeImmutable())
            ->setCreatedAt(new \DateTimeImmutable());
        $trick5->setSlug($this->slugger->slug($trick5->getName())->lower());
        $trick5->setGroupe($this->getReference('Groupe3'));
        $trick5->addVideo($this->getReference('video10'));
        $manager->persist($trick5);
        $manager->flush();

        $trick6 = (new Trick())
            ->setName('Rippey Flip')
            ->setUser($this->getReference('user' . rand(1, 5)))
            ->setContent('Un frontside back-flipping 360 °, général réalisé avec une méthode grab. Nommé d\'après son créateur, Jim Rippey, bien que déjà joué 10 ans plus tôt par l\'ancien skateur et snowboardeur professionnel John Cardiel.')
            ->setUpdatedAt(new \DateTimeImmutable())
            ->setCreatedAt(new \DateTimeImmutable());
        $trick6->setSlug($this->slugger->slug($trick6->getName())->lower());
        $trick6->setGroupe($this->getReference('Groupe3'));
        $trick6->addVideo($this->getReference('video6'));
        $manager->persist($trick6);
        $manager->flush();

        $trick7 = (new Trick())
            ->setName('Backside Rodeo Flip')
            ->setUser($this->getReference('user' . rand(1, 5)))
            ->setContent('Un backside spin à retournement arrière. Le plus souvent exécuté avec une rotation de 1040 °, mais aussi fonctionné comme un 720 °, 900 °, etc.')
            ->setUpdatedAt(new \DateTimeImmutable())
            ->setCreatedAt(new \DateTimeImmutable());
        $trick7->setSlug($this->slugger->slug($trick7->getName())->lower());
        $trick7->setGroupe($this->getReference('Groupe1'));
        $trick7->addVideo($this->getReference('video7'));
        $manager->persist($trick7);
        $manager->flush();

        $trick8 = (new Trick())
            ->setName('FrontSide Misty')
            ->setUser($this->getReference('user' . rand(1, 5)))
            ->setContent('Le Frontside misty finit par ressembler un peu à un rodéo frontside au milieu de l\'astuce, mais au décollage, le cavalier use un plus type de mouvement frontflip pour démarrer le tour . Le frontside Misty ne peut être fait que sur les orteils et le cavalier se retournera pour tourner le frontside, puis cliquera son épaule arrière vers son pied avant et l\'épaule de tête se relâchera vers le ciel. comme ils se déroulent au décollage. Habituellement, saisissant Indy, le cavalier suit l\'épaule de tête tout au long de la rotation 1040, 720 et même 900.')
            ->setUpdatedAt(new \DateTimeImmutable())
            ->setCreatedAt(new \DateTimeImmutable());
        $trick8->setSlug($this->slugger->slug($trick8->getName())->lower());
        $trick8->setGroupe($this->getReference('Groupe2'));
        $trick8->addVideo($this->getReference('video8'));
        $manager->persist($trick8);
        $manager->flush();

        $trick9 = (new Trick())
            ->setName('Front Blunt 270')
            ->setUser($this->getReference('user' . rand(1, 5)))
            ->setContent('Une glissade effectuée où le pied avant du rider passe au dessus du rail à l\'approche, avec son snowboard se déplaçant perpendiculairement et le pied arrière directement le rail ou un autre obstacle ( comme un tailslide). Lors de l\'exécution d\'un bluntslide frontside, le snowboardeur fait face à la montée. Lors de l\'exécution d\'un bluntslide arrière, le snowboardeur est orienté vers la descente.')
            ->setUpdatedAt(new \DateTimeImmutable())
            ->setCreatedAt(new \DateTimeImmutable());
        $trick9->setSlug($this->slugger->slug($trick9->getName())->lower());
        $trick9->setGroupe($this->getReference('Groupe5'));
        $trick9->addVideo($this->getReference('video9'));
        $manager->persist($trick9);
        $manager->flush();

        $trick10 = (new Trick())
            ->setName('Board Slide ')
            ->setUser($this->getReference('user' . rand(1, 5)))
            ->setContent("Une glissade effectuée où le pied de tête du cavalier passe au-dessus du rail à l'approche, avec leur planche à neige se déplaçant perpendiculairement le long du rail ou d'un autre obstacle. Lors de l'exécution d'un boardlide frontside, le snowboardeur est face à la montée. Lors d'un boardlide arrière, un snowboardeur fait face à la descente. Ceci est souvent déroutant pour les nouveaux riders qui apprennent le truc, car avec un boardlide avant, vous vous déplacez vers l'arrière et avec un boardlide arrière, vous avancez.")
            ->setUpdatedAt(new \DateTimeImmutable())
            ->setCreatedAt(new \DateTimeImmutable());
        $trick10->setSlug($this->slugger->slug($trick10->getName())->lower());
        $trick10->setGroupe($this->getReference('Groupe4'));
        $trick10->addVideo($this->getReference('video10'));
        $manager->persist($trick10);
        $manager->flush();

        $trick11 = (new Trick())
            ->setName('Weddle Grab')
            ->setUser($this->getReference('user' . rand(1, 5)))
            ->setContent('saisie de la carre frontside de la planche entre les deux pieds avec la main avant')
            ->setUpdatedAt(new \DateTimeImmutable())
            ->setCreatedAt(new \DateTimeImmutable());
        $trick11->setSlug($this->slugger->slug($trick11->getName())->lower());
        $trick11->setGroupe($this->getReference('Groupe3'));
        $manager->persist($trick11);
        $manager->flush();

        $trick12 = (new Trick())
            ->setName('Indy Grab ')
            ->setUser($this->getReference('user' . rand(1, 5)))
            ->setContent('saisie de la carre frontside de la planche, entre les deux pieds, avec la main arrière ')
            ->setUpdatedAt(new \DateTimeImmutable())
            ->setCreatedAt(new \DateTimeImmutable());
        $trick12->setSlug($this->slugger->slug($trick12->getName())->lower());
        $trick12->setGroupe($this->getReference('Groupe3'));
        $manager->persist($trick12);
        $manager->flush();

        $trick13 = (new Trick())
            ->setName('Crail Grab and Seatbelt')
            ->setUser($this->getReference('user' . rand(1, 5)))
            ->setContent('saisie du carre frontside à l\'arrière avec la main avant')
            ->setUpdatedAt(new \DateTimeImmutable())
            ->setCreatedAt(new \DateTimeImmutable());
        $trick13->setSlug($this->slugger->slug($trick13->getName())->lower());
        $trick13->setGroupe($this->getReference('Groupe1'));
        $manager->persist($trick13);
        $manager->flush();

        $trick14 = (new Trick())
            ->setName('Truck Driver')
            ->setUser($this->getReference('user' . rand(1, 5)))
            ->setContent('saisie du carre avant et carre arrière avec chaque main (comme tenir un volant de voiture)')
            ->setUpdatedAt(new \DateTimeImmutable())
            ->setCreatedAt(new \DateTimeImmutable());
        $trick14->setSlug($this->slugger->slug($trick14->getName())->lower());
        $trick14->setGroupe($this->getReference('Groupe2'));
        $manager->persist($trick14);
        $manager->flush();

        $trick15 = (new Trick())
            ->setName('Shifty')
            ->setUser($this->getReference('user' . rand(1, 5)))
            ->setContent('Un truc aérien dans lequel un snowboardeur se tord le corps afin de déplacer ou faire pivoter sa planche d\'environ 90 ° par rapport à sa position normale sous eux, puis ramène la planche à sa position d\'origine avant d\'atterrir. Cette astuce peut être exécutée avant ou arrière, et également en variation avec d\'autres astuces et pirouettes.')
            ->setUpdatedAt(new \DateTimeImmutable())
            ->setCreatedAt(new \DateTimeImmutable());
        $trick15->setSlug($this->slugger->slug($trick15->getName())->lower());
        $trick15->setGroupe($this->getReference('Groupe5'));
        $manager->persist($trick15);
        $manager->flush();

        $trick16 = (new Trick())
            ->setName('LipSlide')
            ->setContent("Une glissade effectuée là où le pied arrière du rider passe au-dessus du rail à l'approche, son snowboard se déplaçant perpendiculairement le long du rail ou d'un autre obstacle. Lors de l'exécution d'un liplide frontside, le snowboardeur fait face à la descente. Lors de l'exécution d'un liplide arrière, un snowboardeur fait face à la montée.")
            ->setUser($this->getReference('user' . rand(1, 5)))
            ->setUpdatedAt(new \DateTimeImmutable())
            ->setCreatedAt(new \DateTimeImmutable());
        $trick16->setSlug($this->slugger->slug($trick16->getName())->lower());
        $trick16->setGroupe($this->getReference('Groupe4'));
        $manager->persist($trick16);
        $manager->flush();

        $this->setReference('trick1', $trick1);
        $this->setReference('trick2', $trick2);
        $this->setReference('trick3', $trick3);
        $this->setReference('trick4', $trick4);
        $this->setReference('trick5', $trick5);
        $this->setReference('trick6', $trick6);
        $this->setReference('trick7', $trick7);
        $this->setReference('trick8', $trick8);
        $this->setReference('trick9', $trick9);
        $this->setReference('trick10', $trick10);
        $this->setReference('trick11', $trick11);
        $this->setReference('trick12', $trick12);
        $this->setReference('trick13', $trick13);
        $this->setReference('trick14', $trick14);
        $this->setReference('trick15', $trick15);
        $this->setReference('trick16', $trick16);
    }
}
