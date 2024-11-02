<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Requests\CreateContactformRequest;
use App\Http\Requests\UpdateContactformRequest;
use App\Repositories\ContactformRepository;
use App\Http\Controllers\AppBaseController as InfyOmBaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;
use App\Models\Contactform;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ContactformController extends InfyOmBaseController
{
    /** @var  ContactformRepository */
    private $contactformRepository;

    public function __construct(ContactformRepository $contactformRepo)
    {
        $this->contactformRepository = $contactformRepo;
    }

    /**
     * Display a listing of the Contactform.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {

        $this->contactformRepository->pushCriteria(new RequestCriteria($request));
        $contactforms = $this->contactformRepository->all();
        return view('admin.contactforms.index')
            ->with('contactforms', $contactforms);
    }

    /**
     * Show the form for creating a new Contactform.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.contactforms.create');
    }

    /**
     * Store a newly created Contactform in storage.
     *
     * @param CreateContactformRequest $request
     *
     * @return Response
     */
    public function store(CreateContactformRequest $request)
    {
        $input = $request->all();

        $contactform = $this->contactformRepository->create($input);

        Flash::success('Contactform saved successfully.');

        return redirect(route('admin.contactforms.index'));
    }

    /**
     * Display the specified Contactform.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $contactform = $this->contactformRepository->findWithoutFail($id);

        if (empty($contactform)) {
            Flash::error('Contactform not found');

            return redirect(route('contactforms.index'));
        }

        return view('admin.contactforms.show')->with('contactform', $contactform);
    }

    /**
     * Show the form for editing the specified Contactform.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $contactform = $this->contactformRepository->findWithoutFail($id);

        if (empty($contactform)) {
            Flash::error('Contactform not found');

            return redirect(route('contactforms.index'));
        }

        return view('admin.contactforms.edit')->with('contactform', $contactform);
    }

    /**
     * Update the specified Contactform in storage.
     *
     * @param  int              $id
     * @param UpdateContactformRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateContactformRequest $request)
    {
        $contactform = $this->contactformRepository->findWithoutFail($id);

        

        if (empty($contactform)) {
            Flash::error('Contactform not found');

            return redirect(route('contactforms.index'));
        }

        $contactform = $this->contactformRepository->update($request->all(), $id);

        Flash::success('Contactform updated successfully.');

        return redirect(route('admin.contactforms.index'));
    }

    /**
     * Remove the specified Contactform from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
      public function getModalDelete($id = null)
      {
          $error = '';
          $model = '';
          $confirm_route =  route('admin.contactforms.delete',['id'=>$id]);
          return View('admin.layouts/modal_confirmation', compact('error','model', 'confirm_route'));

      }

       public function getDelete($id = null)
       {
           $sample = Contactform::destroy($id);

           // Redirect to the group management page
           return redirect(route('admin.contactforms.index'))->with('success', Lang::get('message.success.delete'));

       }

}
