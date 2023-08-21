<?php

namespace App\Admin\Controllers;

use App\Models\WritingModel;
use App\Models\LessonsModel;
use App\Models\CategoryModel;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class WritingController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'WritingModel';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new WritingModel());

        $grid->column('id', __('Id'));
        $grid->column('category_id', __('Category id'));
        $grid->column('lessons_id', __('Lessons id'));
        $grid->column('title', __('Title'));
        $grid->column('content', __('Content'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(WritingModel::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('category_id', __('Category id'));
        $show->field('lessons_id', __('Lessons id'));
        $show->field('title', __('Title'));
        $show->field('content', __('Content'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new WritingModel());
        $categoryId = CategoryModel::query()->get()->pluck('title', 'id');
        $form->select('category_id', __('Category id'))->required()->options($categoryId);
        $lessonId = LessonsModel::query()->get()->pluck('title', 'id');
        $form->select('lessons_id', __('Lessons id'))->required()->options($lessonId);
        $form->text('title', __('Title'));
        $form->ckeditor('content', __('Content'));

        return $form;
    }
}
