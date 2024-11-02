<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Requests\CreateMediaRequest;
use App\Http\Requests\UpdateMediaRequest;
use App\Repositories\MediaRepository;
use App\Http\Controllers\AppBaseController as InfyOmBaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;
use App\Models\Media;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class MediaController extends InfyOmBaseController
{
    /** @var  MediaRepository */
    private $mediaRepository;

    public function __construct(MediaRepository $mediaRepo)
    {
        $this->mediaRepository = $mediaRepo;
    }

    /**
     * Display a listing of the Media.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {

        $this->mediaRepository->pushCriteria(new RequestCriteria($request));
        $media = $this->mediaRepository->all();
        return view('admin.media.index')
            ->with('media', $media);
    }

    /**
     * Show the form for creating a new Media.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.media.create');
    }

    /**
     * Store a newly created Media in storage.
     *
     * @param CreateMediaRequest $request
     *
     * @return Response
     */
    public function store(CreateMediaRequest $request)
    {
        $input = $request->all();

        $media = $this->mediaRepository->create($input);

        Flash::success('Media saved successfully.');

        return redirect(route('admin.media.index'));
    }

    /**
     * Display the specified Media.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $media = $this->mediaRepository->findWithoutFail($id);

        if (empty($media)) {
            Flash::error('Media not found');

            return redirect(route('media.index'));
        }

        return view('admin.media.show')->with('media', $media);
    }

    /**
     * Show the form for editing the specified Media.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $media = $this->mediaRepository->findWithoutFail($id);

        if (empty($media)) {
            Flash::error('Media not found');

            return redirect(route('media.index'));
        }

        return view('admin.media.edit')->with('media', $media);
    }

    /**
     * Update the specified Media in storage.
     *
     * @param  int              $id
     * @param UpdateMediaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMediaRequest $request)
    {
        $media = $this->mediaRepository->findWithoutFail($id);

        

        if (empty($media)) {
            Flash::error('Media not found');

            return redirect(route('media.index'));
        }

        $media = $this->mediaRepository->update($request->all(), $id);

        Flash::success('Media updated successfully.');

        return redirect(route('admin.media.index'));
    }

    /**
     * Remove the specified Media from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
      public function getModalDelete($id = null)
      {
          $error = '';
          $model = '';
          $confirm_route =  route('admin.media.delete',['id'=>$id]);
          return View('admin.layouts/modal_confirmation', compact('error','model', 'confirm_route'));

      }

       public function getDelete($id = null)
       {
           $sample = Media::destroy($id);

           // Redirect to the group management page
           return redirect(route('admin.media.index'))->with('success', Lang::get('message.success.delete'));

       }

}
