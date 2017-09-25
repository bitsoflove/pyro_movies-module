<?php namespace Bitsoflove\MoviesModule\Http\Controller\Admin;

use Bitsoflove\MoviesModule\Movie\Form\MovieFormBuilder;
use Bitsoflove\MoviesModule\Movie\Table\MovieTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;
use Anomaly\Streams\Platform\Stream\Contract\StreamRepositoryInterface;

class MoviesController extends AdminController
{

    /**
     * Display an index of existing entries.
     *
     * @param MovieTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(MovieTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * Create a new entry.
     *
     * @param MovieFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(MovieFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Edit an existing entry.
     *
     * @param MovieFormBuilder $form
     * @param        $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(MovieFormBuilder $form, $id)
    {
        return $form->render($id);
    }

    /**
     * Go to assignments.
     *
     * @param StreamRepositoryInterface $streams
     * @return \Illuminate\Http\RedirectResponse
     */
    public function assignments(StreamRepositoryInterface $streams)
    {
        $stream = $streams->findBySlugAndNamespace('movies', 'movies');
        return $this->redirect->to('admin/movies/fields/assignments/' . $stream->getId());
    }
}
