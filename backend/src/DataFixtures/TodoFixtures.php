<?php

namespace App\DataFixtures;

use App\Entity\Todo;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class TodoFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for ($i = 1; $i <= 10; $i++) {
            $todo = new Todo();
            $todo->setTitre('Todo item ' . $i);
            $todo->setDone(false);
            $manager->persist($todo);
        }
        $manager->flush();
    }
}
