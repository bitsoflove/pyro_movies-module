<?php namespace Bitsoflove\MoviesModule\Movie\Form;

use Anomaly\Streams\Platform\Ui\Form\FormBuilder;

class MovieFormBuilder extends FormBuilder
{

    /**
     * The form fields.
     *
     * @var array|string
     */
    protected $fields = MovieFormFields::class;


    /**
     * The form sections.
     *
     * @var array|string
     */
    protected $sections = MovieFormSections::class;



}
