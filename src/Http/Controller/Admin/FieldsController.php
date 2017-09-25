<?php namespace Bitsoflove\MoviesModule\Http\Controller\Admin;

use Anomaly\Streams\Platform\Addon\FieldType\FieldTypeCollection;
use Anomaly\Streams\Platform\Field\Form\FieldFormBuilder;
use Anomaly\Streams\Platform\Field\Table\FieldTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;
use Anomaly\Streams\Platform\Stream\Contract\StreamRepositoryInterface;
use Bitsoflove\MoviesModule\Movie\MovieModel;
use Illuminate\Http\Request;

class FieldsController extends AdminController
{

    /**
     * Return an index of existing post type fields.
     *
     * @param FieldTableBuilder $table
     * @param $model
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(FieldTableBuilder $table, MovieModel $model)
    {
        $table->setStream($model->getStream());

        return $table->render();
    }

    /**
     * Return the modal for choosing a field type.
     *
     * @param  FieldTypeCollection   $fieldTypes
     * @return \Illuminate\View\View
     */
    public function choose(FieldTypeCollection $fieldTypes)
    {
        return $this->view->make('module::admin/fields/choose', ['field_types' => $fieldTypes->all()]);
    }

    /**
     * Return the form for a new field.
     *
     * @param Request $request
     * @param  FieldFormBuilder $form
     * @param  StreamRepositoryInterface $streams
     * @param  FieldTypeCollection $fieldTypes
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(Request $request, FieldFormBuilder $form, StreamRepositoryInterface $streams, FieldTypeCollection $fieldTypes)
    {
        $form
            ->setStream($streams->findBySlugAndNamespace('movies', 'movies'))
            ->setFieldType($fieldTypes->get($request->get("field_type")));

        return $form->render();
    }

    /**
     * Return the form for an existing field.
     *
     * @param  FieldFormBuilder                           $form
     * @param                                             $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(FieldFormBuilder $form, $id)
    {
        return $form->render($id);
    }
}