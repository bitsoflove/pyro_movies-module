<?php namespace Bitsoflove\MoviesModule\Http\Controller\Admin;

use Bitsoflove\MoviesModule\Director\Form\DirectorFormBuilder;
use Bitsoflove\MoviesModule\Director\Table\DirectorTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

class DirectorsController extends AdminController
{

    /**
     * Display an index of existing entries.
     *
     * @param DirectorTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(DirectorTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * Create a new entry.
     *
     * @param DirectorFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(DirectorFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Edit an existing entry.
     *
     * @param DirectorFormBuilder $form
     * @param        $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(DirectorFormBuilder $form, $id)
    {
        return $form->render($id);
    }
}
