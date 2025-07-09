<?php

namespace App\Controller\Admin;

use App\Entity\User;
use App\Enum\City;
use App\Enum\Entitlement;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ArrayField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\EmailField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class UserCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return User::class;
    }

    public function configureFields(string $pageName): iterable
    {
        yield EmailField::new('email');
        yield TextField::new('fullname');
        yield ArrayField::new('roles');
        yield TextField::new('country');
        yield ChoiceField::new('city')->setChoices(City::cases());
        yield ChoiceField::new('entitlement')->setChoices(Entitlement::cases());
        yield DateField::new('createdAt');
        yield DateField::new('updatedAt');
    }
}
