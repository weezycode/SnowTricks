<?php

namespace App\DataFixtures;

use App\Entity\Video;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class VideoFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        $urls = [
            ['url' => 'https://www.youtube.com/embed/_hxLS2ErMiY', 'setRef' => 'video1'],
            ['url' => 'https://www.youtube.com/embed/_Qq-YoXwNQY', 'setRef' => 'video2'],
            ['url' => 'https://www.youtube.com/embed/ZlNmeM1XdM4', 'setRef' => 'video3'],
            ['url' => 'https://www.youtube.com/embed/CzDjM7h_Fwo', 'setRef' => 'video4'],
            ['url' => 'https://www.youtube.com/embed/9T5AWWDxYM4', 'setRef' => 'video5'],
            ['url' => 'https://www.youtube.com/embed/SLncsNaU6es', 'setRef' => 'video6'],
            ['url' => 'https://www.youtube.com/embed/_CN_yyEn78M', 'setRef' => 'video7'],
            ['url' => 'https://www.youtube.com/embed/_CN_yyEn78M', 'setRef' => 'video8'],
            ['url' => 'https://www.youtube.com/embed/kxZbQGjSg4w', 'setRef' => 'video9'],
            ['url' => 'https://www.youtube.com/embed/O5DpwZjCsgA', 'setRef' => 'video10'],
            ['url' => 'https://www.youtube.com/embed/_hxLS2ErMiY', 'setRef' => 'video11'],
            ['url' => 'https://www.youtube.com/embed/_Qq-YoXwNQY', 'setRef' => 'video12'],
            ['url' => 'https://www.youtube.com/embed/ZlNmeM1XdM4', 'setRef' => 'video13'],
            ['url' => 'https://www.youtube.com/embed/CzDjM7h_Fwo', 'setRef' => 'video14'],
            ['url' => 'https://www.youtube.com/embed/9T5AWWDxYM4', 'setRef' => 'video15'],
            ['url' => 'https://www.youtube.com/embed/SLncsNaU6es', 'setRef' => 'video16'],

        ];

        foreach ($urls as $url) {
            $video = (new Video())
                ->setUrl($url['url']);
            $manager->persist($video);
            $this->addReference($url['setRef'], $video);
            $manager->flush();
        }

        //     $video2 = (new Video())
        //         ->setUrl('https://www.youtube.com/embed/_Qq-YoXwNQY');
        //     $manager->persist($video2);
        //     $manager->flush();

        //     $video3 = (new Video())
        //         ->setUrl('https://www.youtube.com/embed/ZlNmeM1XdM4');
        //     $manager->persist($video3);
        //     $manager->flush();

        //     $video4 = (new Video())
        //         ->setUrl('https://www.youtube.com/embed/CzDjM7h_Fwo');
        //     $manager->persist($video4);
        //     $manager->flush();

        //     $video5 = (new Video())
        //         ->setUrl('https://www.youtube.com/embed/9T5AWWDxYM4');
        //     $manager->persist($video5);
        //     $manager->flush();

        //     $video6 = (new Video())
        //         ->setUrl('https://www.youtube.com/embed/SLncsNaU6es');
        //     $manager->persist($video6);
        //     $manager->flush();

        //     $video7 = (new Video())
        //         ->setUrl('https://www.youtube.com/embed/_CN_yyEn78M');
        //     $manager->persist($video7);
        //     $manager->flush();

        //     $video8 = (new Video())
        //         ->setUrl('https://www.youtube.com/embed/12OHPNTeoRs');
        //     $manager->persist($video8);
        //     $manager->flush();

        //     $video9 = (new Video())
        //         ->setUrl('https://www.youtube.com/embed/kxZbQGjSg4w');
        //     $manager->persist($video9);
        //     $manager->flush();

        //     $video10 = (new Video())
        //         ->setUrl('https://www.youtube.com/embed/O5DpwZjCsgA');
        //     $manager->persist($video10);
        //     $manager->flush();

        //     //Reference
        //     $this->addReference('video1', $video1);
        //     $this->addReference('video2', $video2);
        //     $this->addReference('video3', $video3);
        //     $this->addReference('video4', $video4);
        //     $this->addReference('video5', $video5);
        //     $this->addReference('video6', $video6);
        //     $this->addReference('video7', $video7);
        //     $this->addReference('video8', $video8);
        //     $this->addReference('video9', $video9);
        //     $this->addReference('video10', $video10);
    }
}
