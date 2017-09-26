<?php namespace Bitsoflove\MoviesModule\Movie\Form;

use Bitsoflove\MoviesModule\Movie\MovieModel;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Support\Collection;

/**
 * Class MovieFormSections
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 */
class MovieFormSections
{
    use DispatchesJobs;

    /**
     * @var Collection
     */
    private $fields;

    /**
     * Handle the form sections.
     * @param MovieFormBuilder $builder
     */
    public function handle(MovieFormBuilder $builder)
    {
        $generalFields = [
            "title",
            "slug",
            "synopsis",
            "director",
            "release_year",
            "duration",
            "spoken_language",
            "subtitle_language",
            "image",
            "url_trailer",
            "meta",
        ];

        $this->fields = $this->getFields($builder, $generalFields);

        $sections = [
            "person" => [
                "tabs" => [
                    "general" => [
                        "title" => "module::tab.general.name",
                        "fields" => $generalFields
                    ],
                    "fields" => $this->fields->isEmpty() ? [] : [
                        "title" => "module::tab.fields.name",
                        "fields" => $this->fields->toArray(),
                    ],
                ],
            ],
        ];

        $builder->setSections($sections);
    }

    /**
     * @param MovieFormBuilder $builder
     * @return Collection
     */
    private function getFields(MovieFormBuilder $builder, $generalFields): Collection
    {
        /** @var FieldCollection $fields */
        $fields = $builder->getFormFields()->base()->filter(function ($field) use($generalFields) {
            $fieldName = $field->getField();
            return !in_array($fieldName, $generalFields);
        })->map(function ($field) {
            return $field->getField();
        });

        return $fields;
    }
}
