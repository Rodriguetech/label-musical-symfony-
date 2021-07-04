<?php

namespace App\Controller\Admin;

use App\Entity\SlidePub;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;

class SlidePubCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return SlidePub::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            ImageField::new('imageSlidePub' , 'Image de publicité')
                ->setBasePath('slidePub/')
                ->setUploadDir('public/slidePub')
                ->setUploadedFileNamePattern('[randomhash].[extension]')
                ->setRequired(false),
        ];
    }

}
