<?php

namespace Webkul\Achievement\Http\Controllers;

use Illuminate\Support\Facades\Event;
use Webkul\Achievement\Helpers\AchievementType;
use Webkul\Achievement\Http\Requests\AchievementForm;
use Webkul\Achievement\Repositories\AchievementRepository;


class AchievementController extends Controller {
    /**
     * Contains route related configuration
     *
     * @var array
     */
    protected $_config;

    /**
     * achievementRepository object
     *
     * @var \Webkul\Achievement\Repositories\AchievementRepository
     */
    protected $achievementRepository;

    public function __construct(
        AchievementRepository $achievementRepository
    )
    {
        $this->_config = request('_config');

        $this->achievementRepository = $achievementRepository;

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view($this->_config['view']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view($this->_config['view']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        if (!request()->get('family')
            && AchievementType::hasVariants(request()->input('type'))
            && request()->input('sku') != ''
        ) {
            return redirect(url()->current() . '?type=' . request()->input('type') . '&family=' . request()->input('attribute_family_id') . '&sku=' . request()->input('sku'));
        }
        if (AchievementType::hasVariants(request()->input('type'))
            && (!request()->has('super_attributes')
                || !count(request()->get('super_attributes')))
        ) {
            session()->flash('error', trans('admin::app.catalog.achievements.configurable-error'));

            return back();
        }

        $this->validate(request(), [
            'type' => 'required',
            'type_value' => 'required',
        ]);

        $achievement = $this->achievementRepository->create(request()->all());
        session()->flash('success', trans('admin::app.response.create-success', ['name' => 'achievement']));

        return redirect()->route($this->_config['redirect'], ['id' => $achievement->id]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $achievement = $this->achievementRepository->findOrFail($id);

        return view($this->_config['view'], compact('achievement'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Webkul\Achievement\Http\Requests\AchievementForm $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(AchievementForm $request, $id)
    {
        $achievement = $this->achievementRepository->update(request()->all(), $id);

        session()->flash('success', trans('admin::app.response.update-success', ['name' => 'achievement']));

        return redirect()->route($this->_config['redirect']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $achievement = $this->achievementRepository->findOrFail($id);

        try {
            $this->achievementRepository->delete($id);

            session()->flash('success', trans('admin::app.response.delete-success', ['name' => 'achievement']));

            return response()->json(['message' => true], 200);
        } catch (\Exception $e) {
            report($e);

            session()->flash('error', trans('admin::app.response.delete-failed', ['name' => 'achievement']));
        }

        return response()->json(['message' => false], 400);
    }

    /**
     * Mass Delete the achievements
     *
     * @return \Illuminate\Http\Response
     */
    public function massDestroy()
    {
        $achievementIds = explode(',', request()->input('indexes'));

        foreach ($achievementIds as $achievementId) {
            $achievement = $this->achievementRepository->find($achievementId);

            if (isset($achievement)) {
                $this->achievementRepository->delete($achievementId);
            }
        }

        session()->flash('success', trans('admin::app.catalog.achievements.mass-delete-success'));

        return redirect()->route($this->_config['redirect']);
    }

    /**
     * Mass updates the achievements
     *
     * @return \Illuminate\Http\Response
     */
    public function massUpdate()
    {
        $data = request()->all();

        if (!isset($data['massaction-type'])) {
            return redirect()->back();
        }

        if (!$data['massaction-type'] == 'update') {
            return redirect()->back();
        }

        $achievementIds = explode(',', $data['indexes']);

        foreach ($achievementIds as $achievementId) {
            $this->achievementRepository->update([
                'channel' => null,
                'locale' => null,
                'status' => $data['update-options'],
            ], $achievementId);
        }

        session()->flash('success', trans('admin::app.catalog.achievements.mass-update-success'));

        return redirect()->route($this->_config['redirect']);
    }

    /**
     * To be manually invoked when data is seeded into achievements
     *
     * @return \Illuminate\Http\Response
     */
    public function sync()
    {
        Event::dispatch('achievements.datagrid.sync', true);

        return redirect()->route('admin.catalog.achievements.index');
    }

    /**
     * Search simple achievements
     *
     * @return \Illuminate\Http\Response
     */
    public function searchPointAchievements()
    {
        return response()->json(
            $this->achievementRepository->searchPointAchievements(request()->input('query'))
        );
    }
}