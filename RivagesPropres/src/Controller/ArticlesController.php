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
    
        $image = $article->image;
        if ($image) {
            $entityManager->remove($image); 
            $entityManager->flush();
        }
    
        $entityManager->remove($article);
        $entityManager->flush();
    
        return $this->json(null, Response::HTTP_NO_CONTENT);
    }
    private function uploadImage(MediaObject $file): MediaObject
    {
        $entityManager = $this->doctrine;
    
        // Create a new MediaObject
        $image = new MediaObject();
    
        // Upload the image
        $image->setFile($$file);
        $entityManager->persist($image);
        $entityManager->flush();
    
        // Return the MediaObject
        return $image;
    }
    

    public function update(Articles $article, Request $request): Response
{
    $entityManager = $this->doctrine;

    // Create a form builder
    $formBuilder = $this->createFormBuilder();

    // Add the form fields to the builder
    $formBuilder
        ->add('title', TextType::class)
        ->add('paragraph', TextType::class)
        ->add('image', FileType::class, [
            'required' => false,
        ]);

    // Build the form
    $form = $formBuilder->getForm();

    // Submit the form to the controller
    $form->handleRequest($request);

    // If the form is valid, then update the article
    if ($form->isValid()) {
        $article->setTitle($form->get('title')->getData());
        $article->setParagraph($form->get('paragraph')->getData());

        // Get the image file from the form
        $imageFile = $form->get('image')->getData();

        // If an image file is present, then upload the image and update the article's image property
        if ($imageFile) {
            $image = $this->uploadImage($imageFile);
            $article->setImage($image);
        }

        // Save the article
        $entityManager->persist($article);
        $entityManager->flush();

        // Return a success response
        return $this->json($article, Response::HTTP_OK);
    }
}

      
}