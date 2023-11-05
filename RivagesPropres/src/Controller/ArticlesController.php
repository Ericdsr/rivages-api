<?php

namespace App\Controller;

use App\Entity\Articles;
use App\Entity\MediaObject;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ArticlesController extends AbstractController
{
    private $doctrine;

    public function __construct(EntityManagerInterface $doctrine)
    {
        $this->doctrine = $doctrine;
    }

    private function deleteImage(MediaObject $image): void
    {
        $entityManager = $this->doctrine;
        $entityManager->remove($image);
        $entityManager->flush();
    }

    public function delete(Articles $article): Response
    {
        $entityManager = $this->doctrine;
    
        // Supprime l'image associée à l'article s'il en a une
        $image = $article->image;
        if ($image) {
            $entityManager->remove($image); // Supprime l'objet MediaObject associé
            $entityManager->flush();
        }
    
        // Supprime l'article
        $entityManager->remove($article);
        $entityManager->flush();
    
        return $this->json(null, Response::HTTP_NO_CONTENT);
    }
    public function update(Articles $article, Request $request): Response
{
    $entityManager = $this->doctrine;

    // Mettre à jour l'article
    $article->setTitle($request->get('title'));
    $article->setParagraph($request->get('paragraph'));

    // Si une image est envoyée avec la requête, la télécharger et l'associer à l'article
    $image = $request->files->get('image');
    if ($image) {
        $mediaObject = new MediaObject();
        $mediaObject->setFile($image);

        $entityManager->persist($mediaObject);

        $article->setImage($mediaObject);
    }

    // Enregistrer l'article en base de données
    $entityManager->flush();

    // Retourner une réponse HTTP 200 OK avec l'objet Articles mis à jour dans le corps de la réponse
    return $this->json($article, Response::HTTP_OK);
}


}