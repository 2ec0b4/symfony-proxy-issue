<?php

declare(strict_types=1);

namespace App\Controller;

use App\Entity\OpeningTime;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class DefaultController extends AbstractController
{
    private EntityManagerInterface $em;

    /**
     * DefaultController constructor.
     * @param EntityManagerInterface $em
     */
    public function __construct(
        EntityManagerInterface $em
    )
    {
        $this->em = $em;
    }

    public function index()
    {
        $repo = $this->em->getRepository(OpeningTime::class);
        $object = $repo->findOneBy(['day' => 'Monday']);

        $serializer = new Serializer(
            [
                new ObjectNormalizer(),
            ]
        );

        $serializer->denormalize(
            [
                'day' => 'Friday' // new data
            ],
            'App\\Entity\\OpeningTime',
            null,
            [
                'object_to_populate' => $object
            ]
        );

        return new Response();
    }
}
