<?php namespace Bitsoflove\MoviesModule\Http\Controller\Admin;

use Anomaly\Streams\Platform\Assignment\Form\AssignmentFormBuilder;
use Anomaly\Streams\Platform\Assignment\Table\AssignmentTableBuilder;
use Anomaly\Streams\Platform\Field\Contract\FieldRepositoryInterface;
use Anomaly\Streams\Platform\Http\Controller\AdminController;
use Anomaly\Streams\Platform\Stream\Contract\StreamRepositoryInterface;

class AssignmentsController extends AdminController
{

    public function index(AssignmentTableBuilder $table, StreamRepositoryInterface $streams)
    {
        $streamId = $this->route->getParameter('stream');
        $stream = $streams->find($streamId);
        $table->setStream($stream);
        return $table->render();
    }

    /**
     * Return the modal for choosing a field to assign.
     *
     * @param FieldRepositoryInterface  $fields
     * @param StreamRepositoryInterface $streams
     * @return \Illuminate\Contracts\View\View
     */
    public function choose(FieldRepositoryInterface $fields, StreamRepositoryInterface $streams)
    {
        $fields = $fields
            ->findAllByNamespace('movies')
            ->notAssignedTo($streams->find($this->route->getParameter('stream')))
            ->unlocked();

        return $this->view->make('bitsoflove.module.movies::admin/assignments/choose', compact('fields', 'type'));
    }

    /**
     * Create a new assignment.
     *
     * @param AssignmentFormBuilder     $builder
     * @param StreamRepositoryInterface $streams
     * @param FieldRepositoryInterface  $fields
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(
        AssignmentFormBuilder $builder,
        StreamRepositoryInterface $streams,
        FieldRepositoryInterface $fields
    ) {
        return $builder
            ->setField($fields->find($this->request->get('field')))
            ->setStream($streams->find($this->route->getParameter('stream')))
            ->render();
    }

    /**
     * Edit an existing assignment.
     *
     * @param AssignmentFormBuilder     $builder
     * @param StreamRepositoryInterface $streams
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(AssignmentFormBuilder $builder, StreamRepositoryInterface $streams)
    {
        return $builder
            ->setStream($streams->find($this->route->getParameter('stream')))
            ->render($this->route->getParameter('assignment'));
    }
}