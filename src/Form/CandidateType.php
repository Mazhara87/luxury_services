<?php

namespace App\Form;

use App\Entity\Candidate;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CandidateType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            // ->add('firstName')
            // ->add('lastName')
            // ->add('adress')
            // ->add('country')
            // ->add('nationality')
            // ->add('isPassportValid')
            // ->add('currentLocation')
            // ->add('birthAt')
            // ->add('placeOfBirth')
            // ->add('isAvilable')
            // ->add('shortDescription')
            // ->add('gender')
            // ->add('passportFile')
            // ->add('curriculumVitae')
            // ->add('profilPicture')
            // ->add('jobCategory')
            // ->add('experience')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Candidate::class,
        ]);
    }
}
